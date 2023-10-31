@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Исходящее перестрахование</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Исходящее перестрахование</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="incoming-reinsurance">
            <div class="container" data-aos="slide-up">
                @foreach ($outgoings as $outgoing)  
                  <h6 class="text">{!! $outgoing->{'content_' . app()->getLocale()} !!}</h6>
                @endforeach
            </div>
            <div class="our-clients" data-aos="slide-up">
                <div class="container">
                    <h1 class="title" id="incoming-reinsurance__title">Наши международные партнеры по перестрахованию включают</h1>
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
        
        <section class="feedback" data-aos="zoom-in">
            <div class="container">
                <h1 class="title3">Обратная связь</h1>
                <form class="feedback__form" action="">
                    <input class="base-input" type="text" placeholder="ФИО">
                    <input class="base-input" type="text" placeholder="Телефон">
                    <textarea class="base-input" placeholder="Комментарий"></textarea>
                    <button class="form-btn">Отправить</button>
                </form>
            </div>
        </section>
    </main>

    @endsection