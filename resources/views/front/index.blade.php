@extends('layouts.front')

@section('content')

    <div class="hero hero-index">
        <div class="hero__left">
            <div class="hero__grid">
                <div class="half half1" data-aos="slide-left">
                    <img src="{{ asset('front/images/header-hero/hero-icon3.png') }}" alt="">
                    <h2 class="heading2">Имущество и ответственность</h2>
                    <button class="more-btn">
                        <span>Подробнее</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="full full1" data-aos="slide-right">
                    <img src="{{ asset('front/images/header-hero/hero-left-bg1.png') }}" alt="">
                    <div class="full__info">
                        <h2 class="heading2">Страхование грузов</h2>
                        <button class="more-btn">
                            <span>Подробнее</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                                fill="none">
                                <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="full full2" data-aos="slide-left">
                    <img src="{{ asset('front/images/header-hero/hero-left-bg2.png') }}" alt="">
                    <div class="full__info">
                        <h2 class="heading2">Автострахование</h2>
                        <button class="more-btn">
                            <span>Подробнее</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                                fill="none">
                                <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="half half2" data-aos="slide-right">
                    <img src="{{ asset('front/images/header-hero/hero-icon2.png') }}" alt="">
                    <h2 class="heading2">Сфера энергетики</h2>
                    <button class="more-btn">
                        <span>Подробнее</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="half half3" data-aos="zoom-in-left">
                    <img src="{{ asset('front/images/header-hero/hero-icon1.png') }}" alt="">
                    <h2 class="heading2">Агрострахование</h2>
                    <button class="more-btn">
                        <span>Подробнее</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                            fill="none">
                            <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="full full3" data-aos="zoom-in-right">
                    <img src="{{ asset('front/images/header-hero/hero-left-bg3.png') }}" alt="">
                    <div class="full__info">
                        <h2 class="heading2">Страхование строительно-монтажных рисков</h2>
                        <button class="more-btn">
                            <span>Подробнее</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                                fill="none">
                                <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__swiper" data-aos="zoom-in">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <img src="{{ asset($slider->image) }}" alt="">
                        <div class="swiper-slide__info">
                            <h1>{{ $slider->{'title_' . App::getLocale()} }}</h1>
                            <p>{{ $slider->{'description_' . App::getLocale()} }}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <main>
        <section class="about-company" data-aos="zoom-in-up">
            <div class="container">
                <h1 class="title">О компании</h1>
                @foreach ($pages as $page)
                    
                <p class="text">
                    {!! $page->{'content_' . App::getLocale()} !!}
                </p>
                <div class="about-company__map">
                    <img src="{{ asset($page->image) }}" alt="">
                </div>
                @endforeach

            </div>
        </section>

        <section class="insurance-products" data-aos="fade-up">
            <div class="container">
                <h1 class="title">Страховые продукты</h1>
                <div class="tab">
                    @foreach ($insurancecategories as $insurancecategory)
                     <button class="tablinks" onclick="openCity(event, '{{ $insurancecategory->id }}')">{{ $insurancecategory->{'title_' . App::getLocale()} }}</button> 
                    @endforeach
                    </div>

                @foreach($insuranceproducts as $insuranceproduct)
                 <div id="{{ $insurancecategory->id }}" class="tab-content">
                    <a href="./pages/insurance-products/legal-entities_in.html" class="tab-content__item" data-aos="slide-right">
                        <div class="img-item">
                            <img src="{{ asset($insuranceproduct->image) }}" alt="">
                        </div>
                        <p>{{ $insuranceproduct->{'title_' . App::getLocale()} }} </p>
                    </a>
                  </div>

                @endforeach




                <div class="insurance-products__btn">
                    <a href="#!">
                    <button class="btn primary-btn">
                        Все продукты
                    </button>
                  </a>
                </div>
            </div>

        </section>

        <section class="our-clients" data-aos="fade-up">
            <div class="container">
                <h1 class="title">Наши клиенты</h1>
                <div class="swiper2">
                    <div class="swiper-wrapper">
                        @foreach ($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{ asset($client->image) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
       
        <section class="clients-choose" data-aos="flip-down" data-aos-duration="1500">
            <div class="container">
                <div class="clients-choose__content">
                    <div class="clients-choose__left">
                        <h2 class="title2">
                            Почему клиенты выбирают
                            <span>нас</span>
                        </h2>
                        <div class="img">
                            <img src="{{ asset('front/images/clients-choose/clients-choose.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper3 clients-choose__right">
                        <div class="swiper-wrapper">
                            @foreach ($carousels as $carousel)
                                
                            <div class="swiper-slide">
                                <div class="slide-top">
                                    <div class="img">
                                        <img src="{{ asset($carousel->image) }}" alt="">
                                    </div>
                                    <h3>{{ $carousel->{'title_' . App::getLocale()} }}</h3>
                                </div>
                                <p class="desc">{!! $carousel->{'content_' . App::getLocale()} !!}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="news">
            <div class="container">
                <h1 class="title">Новости</h1>
                <div class="news__row">
                  @foreach ($articles as $article)
                    <a href="./pages/press-center/news_in.html" class="news__col" data-aos="slide-left">
                        <div class="img">
                            <img src="{{ asset($article->image) }}" alt="">
                        </div>
                        <div class="news__col-txt">
                            <h6 class="date">10.08.2023</h6>
                            <h3 class="card-title">{{ $article->{'title_' . App::getLocale()} }}</h3>
                            <h6 class="desc">{!! $article->{'content_' . App::getLocale()} !!}</h6>
                        </div>
                    </a>
                    @endforeach
                </div>
                <a href="#!" class="news__all-btn more-btn">
                    <span>Все новости</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                        <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </section> 

        <section class="subscribe" data-aos="flip-up" data-aos-duration="1500">
            <div class="container">
                <h1 class="title2">Подписаться на нашу рассылку</h1>
                <form action="" class="subscribe__form">
                    <input class="base-input" type="email" placeholder="Email" name="email" id="email">
                    <button type="submit" class="form-btn">
                        Отправить
                    </button>
                </form>
            </div>
        </section>

        <section class="useful-links">
            <div class="container">
                <h1 class="title">Полезные ссылки</h1>
                <div class="useful-links__row">
                    @foreach ($usefuls as $useful)
                        
                    <div class="useful-links__col" data-aos="slide-right">
                        <div class="img">
                            <img src="{{ asset($useful->image) }}" alt="">
                        </div>
                        <p class="card-desc">{{ $useful->{'title_' . App::getLocale()} }}</p>
                        <a href="{{ $useful->link }}">{{ $useful->link }}</a>
                    </div>
                    @endforeach                   
                </div>
            </div>
        </section>
    </main>

@endsection