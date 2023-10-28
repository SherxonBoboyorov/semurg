@extends('layouts.front')

@section('content')

    <main>
        <section class="leadership-management">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('about-us') }}">О нас</a></li>
                            <li><a href="./history-company.html">История компании</a></li>
                            <li><a class="active" href="./leadership-management.html">Руководство и управление</a></li>
                            <li><a href="./licenses-certificates.html">Лицензии и сертификаты</a></li>
                            <li><a href="./structure-company.html">Структура компании</a></li>
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
                           <button class="btn primary-btn">Подробнее</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection