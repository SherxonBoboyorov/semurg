@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">{{ $insuranceproduct->{'title_' . app()->getLocale()} }}</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a href="{{ route('products', 1) }}">@lang('front.insurance_products')</a></li>
                        <li><a>{{ $insuranceproduct->{'title_' . app()->getLocale()} }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="for-individuals_in">
            <div class="container">
                <div id="for-ind-info">
                    <div id="for-ind-info__left">
                        <h1 class="for-ind-info__left-title">{{ $insuranceproduct->{'title_left_' . app()->getLocale()} }}</h1>
                        <p class="text">
                            {!! $insuranceproduct->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>

                    <div id="for-ind-info__right">
                        <h1 class="for-ind-info__right-title">{{ $insuranceproduct->{'title_right_' . app()->getLocale()} }}</h1>
                        <ul class="for-ind-info__right-list">
                          <p>{!! $insuranceproduct->{'content_right_' . app()->getLocale()} !!}</p>
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="about-insurance">
            <div class="about-insurance__main">
                <div class="container">
                    <div class="about-insurance__main-left">
                        <h1>{{ $insuranceproduct->{'banner_text_' . app()->getLocale()} }}</h1>
                        <p>{!! $insuranceproduct->{'banner_content_' . app()->getLocale()} !!}</p>
                    </div>
                    <div class="about-insurance__main-right">
                        <div class="img">
                            <img src="{{ asset($insuranceproduct->icon) }}" alt="about-inc-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @include('layouts.feedback')
    </main>

@endsection
