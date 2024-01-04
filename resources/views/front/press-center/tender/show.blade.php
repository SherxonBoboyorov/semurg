@extends('layouts.front')

@section('content')
    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">{{ $tender->{'title_' . app()->getLocale()} }}</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                        <li><a>{{ $tender->{'title_' . app()->getLocale()} }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news-in">
                <div class="news-in__img">
                    <img src="{{ asset($tender->image) }}" alt="">
                </div>
                <h5 class="date">{{  date('d.m.Y', strtotime($tender->created_at)) }}</h5>
                <p class="text">
                    {!! $tender->{'content_' . app()->getLocale()} !!}</p>

            </div>
        </div>
    </main>

@endsection
