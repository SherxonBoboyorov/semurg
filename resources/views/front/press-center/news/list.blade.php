@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
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
                    <div class="sidebar" data-aos="slide-right">
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
                                
                            <a href="{{ route('new.show', $new->{'slug_' . app()->getLocale()}) }}" class="news__col" data-aos="fade-up">
                                <div class="img">
                                    <img src="{{ asset($new->image) }}" alt="">
                                </div>
                                <div class="news__col-txt">
                                    <h6 class="date">10.08.2023</h6>
                                    <h3 class="card-title">{{ $new->{'title_' . app()->getLocale()} }}</h3>
                                    <h6 class="desc">{!! $new->{'content_' . app()->getLocale()} !!}</h6>
                                </div>
                            </a>
                            @endforeach
                        </div>

                        {{-- <div class="pagination">
                            <div class="prev disabled">Пред.</div>
                            <ul class="pagination__el">
                                <li class="pagination__el-item">1</li>
                                <li class="pagination__el-item active">2</li>
                                <li class="pagination__el-item">3</li>
                            </ul>
                            <div class="next">След.</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>

  @endsection