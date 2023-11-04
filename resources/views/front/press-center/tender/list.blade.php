@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.tenders')</h1>
                    <ul>
                        <li><a href="{{ route('tenders') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.tenders')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="news-page tenders">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('news') }}">@lang('front.news')</a></li>
                            <li><a href="{{ route('forum') }}">@lang('front.forum')</a></li>
                            <li><a href="{{ route('vacancies') }}">@lang('front.vacancies')</a></li>
                            <li><a href="{{ route('survey') }}">@lang('front.survey')</a></li>
                            <li><a href="{{ route('faq') }}">@lang('front.frequency_asked_questions')</a></li>
                            <li><a class="active" href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                        </ul>
                    </div>
                    <div class="content news-page__content">
                        <div class="news__row">
                          @foreach ($tenders as $tender)
                            <a href="{{ route('tender.show', $tender->{'slug_' . app()->getLocale()}) }}" style="display: block" class="news__col" data-aos="slide-left">
                                <div class="img">
                                    <img src="{{ asset($tender->image) }}" alt="">
                                </div>
                                <div class="news__col-txt tenders-col-txt">
                                    <h3 class="card-title">{{ $tender->{'title_' . app()->getLocale()} }}</h3>
                                    <h6 class="desc">{!! $tender->{'content_' . app()->getLocale()} !!}</h6>
                                    <div class="news__col-bottom">
                                        <h6 class="date">{{  date('d.m.Y', strtotime($tender->created_at)) }}</h6>
                                        <h6 class="date">@lang('front.tender')</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </a>
                        {{ $tenders->links("vendor.pagination.pagination")}}
                    </div>
                </div>
            </div>
        </section>
    </main>
    
@endsection