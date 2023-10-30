@extends('layouts.front')

@section('content')
    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">{{ $new->{'title_' . app()->getLocale()} }}</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a href="{{ route('news') }}">Новости</a></li>
                        <li><a>{{ $new->{'title_' . app()->getLocale()} }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news-in" data-aos="fade-up">
                <div class="news-in__img" data-aos="zoom-in">
                    <img src="{{ asset($new->image) }}" alt="">
                </div>
                <h5 data-aos="fade-up" class="date">10.08.2023</h5>
                <p data-aos="fade-up" class="text">
                    {!! $new->{'content_' . app()->getLocale()} !!}</p>
                
            </div>
        </div>
    </main>

@endsection