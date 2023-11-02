@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.forum')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.forum')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="forum-page">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('news') }}">@lang('front.news')</a></li>
                            <li><a class="active" href="{{ route('forum') }}">@lang('front.forum')</a></li>
                            <li><a href="{{ route('vacancies') }}">@lang('front.vacancies')</a></li>
                            <li><a href="{{ route('survey') }}">@lang('front.survey')</a></li>
                            <li><a href="{{ route('faq') }}">@lang('front.frequency_asked_questions')</a></li>
                            <li><a href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                        </ul>
                    </div>
                    <div class="content forum-page__content">
                        <ul class="forum-page__list">
                            @foreach ($forums as $forum)
                            <li data-aos="slide-up" class="forum-page__list-item"><a href="{{ $forum->link }}" target="{{ $forum->link }}">{{ $forum->{'title_' . app()->getLocale()} }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection