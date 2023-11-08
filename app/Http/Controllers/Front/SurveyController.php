<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollVotes;
use Illuminate\Http\Request;

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

        return view('front.press-center.survey', compact(
            'polls'
        ));
    }
}
