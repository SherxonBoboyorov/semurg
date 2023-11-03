@extends('layouts.front')

@section('content')


<main>
    <div class="hero hero-img">
        <div class="container">
            <div class="breadcrumb">
                <h1 class="title">@lang('front.company_history')</h1>
                <ul>
                    <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                    <li><a>@lang('front.company_history')</a></li>
                </ul>
            </div>
            <div class="hero-img__item" data-aos="zoom-in">
                <img src="{{ asset('front/images/employees/partners-img.png') }}" alt="">
            </div>
        </div>
    </div>

    <section class="history-company">
        <div class="container">
            <div class="parent">
                <div class="sidebar" data-aos="slide-right">
                    <ul>
                        <li><a href="{{ route('about-us') }}">@lang('front.about_us')</a></li>
                        <li><a class="active" href="{{ route('history-company') }}">@lang('front.company_history')</a></li>
                        <li><a href="{{ route('leadership-management') }}">@lang('front.leadership_and_management')</a></li>
                        <li><a href="{{ route('licenses-certificates') }}">@lang('front.licences_and_certificates')</a></li>
                        <li><a href="{{ route('structure-company') }}">@lang('front.company_structure')</a></li>
                    </ul>
                </div>
                <div class="about-history-company-par">
                    <div class="content history-company__content">
                        <div class="history-company__content-list">
                            <div class="history-company__content-item">
                                <span class="active-year">20</span>
                                <ul class="history-company__year" style="transform: translateY(0px);">
                                    @foreach ($list as $item)
                                     <li class="history-company__year-item @if ($item->id =! $years->id) active @endif">{{ $item['active_year'] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <ul class="history-company__year-info">
                            @foreach ($list as $item)
                            <li class="history-company__year-info-item active">
                                <h5>{{ $item->year }}</h5>
                                <p class="text">{!! $item->{'content_' . app()->getLocale()} !!} </p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection