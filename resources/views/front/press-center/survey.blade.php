@extends('layouts.front')

@section('content')
    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.survey')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.survey')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="survey-page">
            @foreach ($polls as $poll)
            <div class="container">
                <div class="survey-page__left" data-aos="slide-right">
                    <h1 class="title3">@lang('front.online_survey')</h1>
                    <p class="desc3">{{ $poll['question_' . app()->getLocale()] }}</p>
                    <div class="survey-page__form">
                        @foreach ($poll['answer'] as $answer)
                        <label class="survey-page__form-label">
                            <input type="radio" name="order[]" value="{{ $answer['id'] }}">
                            <span>{{ $answer['answer_' . app()->getLocale()] }}</span>
                        </label>
                        @endforeach
                    </div>
                    <button class="form-btn" id="demo" onclick="myFunction()">@lang('front.confirm')</button>
                </div>

              <div class="survey-page__right" data-aos="slide-left">
                <h1 class="title3">@lang('front.online_survey_results')</h1>
                    <p class="desc3">{{ $poll['question_' . app()->getLocale()] }}</p>
                    <ul class="survey-page__right__list">
                       @foreach ($poll['answer'] as $answer)
                        <li class="survey-page__right__item">
                            <div class="survey-page__right__item-content">
                                <p class="range-selected-pi">{{ $answer['answer_' . app()->getLocale()] }}</p>
                                <p class="prosent">{{ $answer['votes_count'] }} ({{ $answer['votes_in_percentage'] }})</p>
                            </div>
                            <input class="survey-page__right__item-input" type="range" value="{{ $answer['votes_in_percentage'] }}" min="0" max="100">
                         </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </section>
    </main>

    @endsection
    @section('custom_js')
        <script>
                function myFunction() {
                document.getElementById("demo").style.color = "red";
                }
        </script>
    @endsection
