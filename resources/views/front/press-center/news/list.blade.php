@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Новости</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Новости</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="news-page">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a class="active" href="{{ route('news') }}">Новости</a></li>
                            <li><a href="{{ route('forum') }}">Форум</a></li>
                            <li><a href="./vacancies.html">Вакансии</a></li>
                            <li><a href="{{ route('survey') }}">Опрос</a></li>
                            <li><a href="{{ route('faq') }}">Часто задаваемые вопросы</a></li>
                            <li><a href="{{ route('tenders') }}">Тендеры</a></li>
                        </ul>
                    </div>
                    <div class="content news-page__content">
                        <div class="news__row">
                            @foreach ($news as $new)
                                
                            <a href="{{ route('new.show', $new->{'slug_' . app()->getLocale()}) }}" class="news__col" data-aos="fade-up">
                                <div class="img">
                                    <img src="{{ asset($new->image) }}" alt="">
                                </div>
                                <div class="news__col-txt">
                                    <h6 class="date">10.08.2023</h6>
                                    <h3 class="card-title">{{ $new->{'title_' . app()->getLocale()} }}</h3>
                                    <h6 class="desc">{!! $new->{'content_' . app()->getLocale()} !!}</h6>
                                </div>
                            </a>
                            @endforeach
                        </div>

                        <div class="pagination">
                            <div class="prev disabled">Пред.</div>
                            <ul class="pagination__el">
                                <li class="pagination__el-item">1</li>
                                <li class="pagination__el-item active">2</li>
                                <li class="pagination__el-item">3</li>
                            </ul>
                            <div class="next">След.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

  @endsection