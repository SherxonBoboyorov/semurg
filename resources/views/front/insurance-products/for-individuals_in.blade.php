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
                        <h1 class="for-ind-info__left-title">Программа КАСКО</h1>
                        <p class="text">
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.

                            Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                        </p>
                    </div>

                    <div id="for-ind-info__right">
                        <h1 class="for-ind-info__right-title">Что входит в страховой случай1</h1>
                        <ul class="for-ind-info__right-list">
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
                          <li>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem</li>
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
