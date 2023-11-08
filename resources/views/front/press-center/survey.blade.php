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
            <div class="container">
                <div class="survey-page__left" data-aos="slide-right">
                    <h1 class="title3">@lang('front.online_survey')</h1>
                    @foreach ($polls as $poll)
                    <p class="desc3">{{ $poll->{'question_' . app()->getLocale()} }}</p>
                    <div class="survey-page__form">
                       @foreach ($poll->answers as $answer)
                        <label class="survey-page__form-label">
                            <input type="radio" name="survey-radio">
                            <span>{{ $answer->{'answer_' . app()->getLocale()} }}</span>
                         </label>
                        @endforeach
                    </div>
                    @endforeach
                    <button class="form-btn" id="survey-btn">@lang('front.confirm')</button>
                </div>
                <div class="survey-page__right" data-aos="slide-left">
                    <h1 class="title3">@lang('front.online_survey_results')</h1>
                    <p class="desc3">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
                    <ul class="survey-page__right__list">
                        <li class="survey-page__right__item">
                            <div class="survey-page__right__item-content">
                                <p class="range-selected-pi">Ut enim ad minim veniam, quis nostrud</p>
                                <p class="prosent">6 (20%)</p>
                            </div>
                            <input class="survey-page__right__item-input" type="range" value="20" min="0" max="100">
                        </li>
                        <li class="survey-page__right__item">
                            <div class="survey-page__right__item-content">
                                <p class="range-selected-pi active">Lorem ipsum dolor sit amet, consectetur</p>
                                <p class="prosent">8 (30%)</p>
                            </div>
                            <input class="survey-page__right__item-input" type="range" value="30" min="0" max="100">
                        </li>
                        <li class="survey-page__right__item">
                            <div class="survey-page__right__item-content">
                                <p class="range-selected-pi">Duis aute irure dolor in reprehenderit</p>
                                <p class="prosent">10 (40%)</p>
                            </div>
                            <input class="survey-page__right__item-input" type="range" value="40" min="0" max="100">
                        </li>
                        <li class="survey-page__right__item">
                            <div class="survey-page__right__item-content">
                                <p class="range-selected-pi">Excepteur sint occaecat cupidatat non</p>
                                <p class="prosent">4 (10%)</p>
                            </div>
                            <input class="survey-page__right__item-input" type="range" value="10" min="0" max="100">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

@endsection
