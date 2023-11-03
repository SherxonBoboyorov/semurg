@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-img">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.leadership_and_management')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.leadership_and_management')</a></li>
                    </ul>
                </div>
                <div class="hero-img__item" data-aos="zoom-in">
                    <img src="{{ asset('front/images/employees/director-img.png') }}" alt="">
                </div>
            </div>
        </div>

        <section class="leadership-management">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('about-us') }}">@lang('front.about_us')</a></li>
                            <li><a href="{{ route('history-company') }}">@lang('front.company_history')</a></li>
                            <li><a class="active" href="{{ route('leadership-management') }}">@lang('front.leadership_and_management')</a></li>
                            <li><a href="{{ route('licenses-certificates') }}">@lang('front.licences_and_certificates')</a></li>
                            <li><a href="{{ route('structure-company') }}">@lang('front.company_structure')</a></li>
                        </ul>
                    </div>
                    <div class="content leadership-management__content">
                        @foreach ($leaderships as $leadership)        
                        <div class="leadership-management__item" data-aos="slide-right">
                            <div class="leadership-management__item-img">
                                <img src="{{ asset($leadership->image) }}" alt="">
                            </div>
                            <h1>{{ $leadership->{'name_' . app()->getLocale()} }}</h1>
                            <p>{{ $leadership->{'job_' . app()->getLocale()} }}</p>
                            <button class="btn primary-btn" onclick="openleadershipModal({{ $leadership->id }})">@lang('front.more_details')</button>
                        </div>

                        <div class="leadership-management__modal hidden">
                            <div class="leadership-management__modal-content">
                                <h1 class="leadership-management__modal-title">{{ $leadership->{'name_' . app()->getLocale()} }}</h1>
                                <h6 class="leadership-management__modal-position">{{ $leadership->{'job_' . app()->getLocale()} }}</h6>
                                <p class="description">
                                    {!! $leadership->{'content_' . app()->getLocale()} !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="leadership-management">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('about-us') }}">@lang('front.about_us')</a></li>
                            <li><a href="{{ route('history-company') }}">@lang('front.company_history')</a></li>
                            <li><a class="active" href="{{ route('leadership-management') }}">@lang('front.leadership_and_management')</a></li>
                            <li><a href="{{ route('licenses-certificates') }}">@lang('front.licences_and_certificates')</a></li>
                            <li><a href="{{ route('structure-company') }}">@lang('front.company_structure')</a></li>
                        </ul>
                    </div>
                    <div class="content leadership-management__content">
                        @foreach ($leaderships as $leadership)
                        <div class="leadership-management__item" data-aos="slide-left">
                            <div class="leadership-management__item-img">
                                <img src="{{ asset($leadership->image) }}" alt="">
                            </div>
                            <h1>{{ $leadership->{'name_' . app()->getLocale()} }}</h1>
                            <p>{{ $leadership->{'job_' . app()->getLocale()} }}</p>
                           <button class="btn primary-btn">@lang('front.more_details')</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> --}}
    </main>

@endsection