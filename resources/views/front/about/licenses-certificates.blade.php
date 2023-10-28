@extends('layouts.front')

@section('content')

    <main>
        <section class="licenses-certificates">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('about-us') }}">О нас</a></li>
                            <li><a href="./history-company.html">История компании</a></li>
                            <li><a href="./leadership-management.html">Руководство и управление</a></li>
                            <li><a class="active" href="{{ route('licenses-ertificates') }}">Лицензии и сертификаты</a></li>
                            <li><a href="./structure-company.html">Структура компании</a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <ul class="licenses-certificates__list">
                            @foreach($licensescategories as $licensescategory)
                            <li class="licenses-certificates__list-item" data-aos="slide-up">
                                <h2>{{ $licensescategory->{'title_' . app()->getLocale()} }}</h2>
                                <div>
                                    @foreach($licensescategory->licensesdocuments as $licensesdocument)
                                    <div class="pdf-icon">
                                        <img src="{{ asset($licensesdocument->image) }}" alt="">
                                    </div>
                                    <div class="info">
                                        <p>{{ $licensesdocument->{'title_' . app()->getLocale()} }}</p>
                                        <a>{{ $licensesdocument->size }}</a>
                                    </div>
                                    @endforeach
                                </div>


                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

 @endsection