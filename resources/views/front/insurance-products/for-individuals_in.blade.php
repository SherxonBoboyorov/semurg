@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">{{ $insuranceproduct->{'title_' . app()->getLocale()} }}</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a href="{{ route('product.show', 1) }}">@lang('front.insurance_products')</a></li>
                        <li><a>{{ $insuranceproduct->{'title_' . app()->getLocale()} }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="for-individuals_in">
            <div class="container">
                <div data-aos="slide-up">
                    <h3 class="title3">{{ $insuranceproduct->{'title_' . app()->getLocale()} }}</h3>
                </div>

                <div class="img" data-aos="slide-up">
                    <img src="{{ asset($insuranceproduct->icon) }}" alt="">
                </div>
                <p data-aos="slide-up" class="text">
                    {!! $insuranceproduct->{'content_' . app()->getLocale()} !!}
                </p>
            </div>
        </section>
        @include('layouts.feedback')
    </main>

@endsection
