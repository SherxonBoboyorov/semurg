@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.about_us')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.about_us')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="about-us">
            <div class="container">
                <div class="about-us__top">
                    @foreach ($directors as $director)
                    <div class="about-us__top-img">
                        <div class="image">
                            <img src="{{ asset($director->image) }}" alt="">
                        </div>
                    </div>
                    <div class="about-us__top-info">
                        <p class="text">{!! $director->{'content_' . app()->getLocale()} !!}</p>
                        <h1>{{ $director->{'title_' . app()->getLocale()} }}</h1>
                        <h6>{{ $director->{'job_' . app()->getLocale()} }}</h6>
                    </div>
                    @endforeach
                </div>
                <div class="about-us__line"></div>
                <div class="about-us__bottom">
                    @foreach ($pages as $page)
                    <p class="text">
                        {!! $page->{'content_' . app()->getLocale()} !!}
                    </p>
                    @endforeach
                </div>
            </div>
        </section>
    </main>


    @endsection
