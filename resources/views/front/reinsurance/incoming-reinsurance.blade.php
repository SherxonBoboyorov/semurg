@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.reinsurance')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.reinsurance')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="incoming-reinsurance">
            <div class="container">
                @foreach ($incomings as $incoming)
                <h6 class="text">{!! $incoming->{'content_' . app()->getLocale()} !!}</h6>
                @endforeach
            </div>
            <div class="our-clients">
                <div class="container">
                    <h1 class="title" id="incoming-reinsurance__title">@lang('front.our_international')</h1>
                    <div class="swiper2">
                        <div class="swiper-wrapper">
                            @foreach ($partners as $partner)
                            <div class="swiper-slide">
                                <img src="{{ asset($partner->image) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>


        @include('alert')

        @include('layouts.feedback')

    </main>

@endsection
