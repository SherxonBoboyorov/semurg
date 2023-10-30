@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Форум</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Форум</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="forum-page">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('news') }}">Новости</a></li>
                            <li><a class="active" href="{{ route('forum') }}">Форум</a></li>
                            <li><a href="{{ route('vacancies') }}">Вакансии</a></li>
                            <li><a href="{{ route('survey') }}">Опрос</a></li>
                            <li><a href="{{ route('faq') }}">Часто задаваемые вопросы</a></li>
                            <li><a href="{{ route('tenders') }}">Тендеры</a></li>
                        </ul>
                    </div>
                    <div class="content forum-page__content">
                        <ul class="forum-page__list">
                            @foreach ($forums as $forum)
                            <li data-aos="slide-up" class="forum-page__list-item"><a href="{{ $forum->link }}" target="{{ $forum->link }}">{{ $forum->{'title_' . app()->getLocale()} }}</a></li>
                            @endforeach
                        
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection