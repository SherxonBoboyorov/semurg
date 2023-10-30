@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Тендеры</h1>
                    <ul>
                        <li><a href="{{ route('tenders') }}">Главная</a></li>
                        <li><a>Тендеры</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="news-page tenders">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            <li><a href="{{ route('news') }}">Новости</a></li>
                            <li><a href="{{ route('forum') }}">Форум</a></li>
                            <li><a href="./vacancies.html">Вакансии</a></li>
                            <li><a href="{{ route('survey') }}">Опрос</a></li>
                            <li><a href="{{ route('faq') }}">Часто задаваемые вопросы</a></li>
                            <li><a class="active" href="{{ route('tenders') }}">Тендеры</a></li>
                        </ul>
                    </div>
                    <div class="content news-page__content">
                        <div class="news__row">
                          @foreach ($tenders as $tender)
                            <a href="{{ route('tender.show', $tender->{'slug_' . app()->getLocale()}) }}" style="display: block" class="news__col" data-aos="slide-left">
                                <div class="img">
                                    <img src="{{ asset($tender->image) }}" alt="">
                                </div>
                                <div class="news__col-txt tenders-col-txt">
                                    <h3 class="card-title">{{ $tender->{'title_' . app()->getLocale()} }}</h3>
                                    <h6 class="desc">{!! $tender->{'content_' . app()->getLocale()} !!}</h6>
                                    <div class="news__col-bottom">
                                        <h6 class="date">10.08.2023</h6>
                                        <h6 class="date">Тендер</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </a>
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