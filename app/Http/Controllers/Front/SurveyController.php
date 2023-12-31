<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollVotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function survey()
    {
        $polls = Poll::orderBy('id')->with('answer')->paginate(10);

        $polls->getCollection()->transform(function ($poll) {

            $votesResult = [];

            foreach ($poll->answer as $answer) {
                $votesResult[] = [
                    'id' => $answer->id,
                    'answer_ru' => $answer->answer_ru,
                    'answer_uz' => $answer->answer_uz,
                    'answer_en' => $answer->answer_en,
                    'order' => $answer->order,
                    'votes_count' => $answer->votes->count(),
                    'votes_in_percentage' => $answer->votes->count() ? ceil($answer->votes->count() * 100 / PollVotes::whereIn('answer_id', $poll->answer->pluck('id'))->get()->count()) : 0
                ];
            }

            return [
                'id' => $poll->id,
                'question_ru' => $poll->question_ru,
                'question_uz' => $poll->question_uz,
                'question_en' => $poll->question_en,
                'created_at' => $poll->created_at,
                'all_votes' => PollVotes::whereIn('answer_id', $poll->answer->pluck('id'))->get()->count(),
                'answer' => $votesResult,
            ];

        });

        return view('front.press-center.survey', [
            'polls' => $polls
        ]);
    }


    public function registerVote(Request $request)
    {
        $polls = Poll::orderBy('id')->with('answer')->paginate(10);

        $validator = Validator::make($request->all(), [
            'answer_id' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with([
                'status' => 'error',
                'data' => $validator->errors()
            ]);
        }

        PollVotes::create([
            'answer_id' => $request->input('answer_id'),
        ]);

        return back()->with('success');

    }

    public function voteResults()
    {
        $polls = Poll::orderBy('created_at', 'DESC')->with('answer')->paginate(5);

        $polls->getCollection()->transform(function ($poll) {

            $votesResult = [];

            foreach ($poll->answer as $answer) {
                $votesResult[] = [
                    'id' => $answer->id,
                    'answer_ru' => $answer->answer_ru,
                    'answer_uz' => $answer->answer_uz,
                    'answer_en' => $answer->answer_uz,
                    'order' => $answer->order,
                    'votes_count' => $answer->votes->count(),
                    'votes_in_percentage' => $answer->votes->count() > 0 ? ceil($answer->votes->count() * 100 / PollVotes::whereIn('answer_id', $poll->answer->pluck('id'))->get()->count()) : 0
                ];
            }

            return [
                'id' => $poll->id,
                'question_ru' => $poll->question_ru,
                'question_uz' => $poll->question_uz,
                'question_en' => $poll->question_en,
                'created_at' => $poll->created_at,
                'all_votes' => PollVotes::whereIn('answer_id', $poll->answer->pluck('id'))->get()->count(),
                'answer' => $votesResult,
            ];

        });

        return view('front.press-center.survey', [
            'polls' => $polls
        ]);

    }
}
