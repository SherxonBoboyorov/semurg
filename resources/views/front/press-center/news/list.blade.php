@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.news')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.news')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="news-page">
            <div class="container">
                <div class="parent">
                    <div class="sidebar">
                        <ul>
                            <li><a class="active" href="{{ route('news') }}">@lang('front.news')</a></li>
                            <li><a href="{{ route('forum') }}">@lang('front.forum')</a></li>
                            <li><a href="{{ route('vacancies') }}">@lang('front.vacancies')</a></li>
                            <li><a href="{{ route('survey') }}">@lang('front.survey')</a></li>
                            <li><a href="{{ route('faq') }}">@lang('front.frequency_asked_questions')</a></li>
                            <li><a href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                        </ul>
                    </div>
                    <div class="content news-page__content">
                        <div class="news__row">
                            @foreach ($news as $new)
                            <a href="{{ route('new.show', $new->{'slug_' . app()->getLocale()}) }}" class="news__col">
                                <div class="img">
                                    <img src="{{ asset($new->image) }}" alt="">
                                </div>
                                <div class="news__col-txt">
                                    <h6 class="date">{{  date('d.m.Y', strtotime($new->created_at)) }}</h6>
                                    <h3 class="card-title">{{ $new->{'title_' . app()->getLocale()} }}</h3>
                                    <h6 class="desc">{!! $new->{'content_' . app()->getLocale()} !!}</h6>
                                </div>
                            </a>
                            @endforeach
                        </div>

                        {{ $news->links("vendor.pagination.pagination")}}
                    </div>
                </div>
            </div>
        </section>
    </main>

  @endsection
