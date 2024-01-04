@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.vacancies')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.vacancies')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="vacancies-page">
            <div class="container">
                <div class="parent">
                    <div class="sidebar">
                        <ul>
                            <li><a href="{{ route('news') }}">@lang('front.news')</a></li>
                            <li><a href="{{ route('forum') }}">@lang('front.forum')</a></li>
                            <li><a class="active" href="{{ route('vacancies') }}">@lang('front.vacancies')</a></li>
                            <li><a href="{{ route('survey') }}">@lang('front.survey')</a></li>
                            <li><a href="{{ route('faq') }}">@lang('front.frequency_asked_questions')</a></li>
                            <li><a href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                        </ul>
                    </div>
                    <div class="content vacancies-page__content">
                        <ul class="vacancies-page__accordion accordion">
                           @foreach ($vacancies as $vacancy)
                            <li class="vacancies-page__accordion-item accordion-item active">
                                <div class="accordion-header">
                                    <h3>{{ $vacancy->{'title_' . app()->getLocale()} }}</h3>
                                    <button class="accordion-header__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15"
                                            viewBox="0 0 24 15" fill="none">
                                            <g opacity="0.1">
                                                <path
                                                    d="M12 14.1009C11.4623 14.1009 10.9247 13.8956 10.5148 13.4859L0.615426 3.58639C-0.205142 2.76582 -0.205142 1.43541 0.615426 0.615177C1.43566 -0.205059 2.76581 -0.205059 3.58644 0.615177L12 9.02935L20.4135 0.615576C21.2341 -0.20466 22.5641 -0.20466 23.3843 0.615576C24.2052 1.43581 24.2052 2.76622 23.3843 3.58679L13.4851 13.4863C13.075 13.8961 12.5374 14.1009 12 14.1009Z"
                                                    fill="black" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div class="accordion-body">
                                    <p>{!! $vacancy->{'content_' . app()->getLocale()} !!}</p>
                                    <button class="accordion-btn">@lang('front.reply')</button>
                                </div>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
