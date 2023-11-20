@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Каско</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>Каско</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="kacko kacko-form" data-aos="zoom-in">
            <div class="container">
                <div class="kacko__top">
                    <h1>Отправить заявку на оформление полиса</h1>
                </div>
                <form action="#!" class="kacko-form__el">
                    <input class="base-input" type="text" placeholder="ФИО">
                    <input class="base-input" type="text" placeholder="Телефон">
                    <button class="form-btn">Отправить заявку</button>
                </form>
            </div>
        </section>
    </main>

    @endsection
