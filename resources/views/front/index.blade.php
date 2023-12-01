@extends('layouts.front')


@section('content')

    <div class="hero hero-index">
      <div class="container">
         <div class="hero__left">
            <div class="hero__grid">
                @foreach (\App\Models\HeaderKacko::orderBy('id')->paginate(6) as $headerkacko)
                <a href="{{ $headerkacko->link }}" {!! $headerkacko->attribute !!}>
                @if (str_contains($headerkacko->attribute, "half"))
                    <img src="{!! asset($headerkacko->image) !!}" alt="img">
                @else
                    <img src="{!! asset($headerkacko->icon) !!}" alt="img">
                    <div class="full__info">
                @endif
                     <h2 class="heading2">{{ $headerkacko->{'title_' . app()->getLocale()} }}</h2>
                       <button class="more-btn">
                           <span>@lang('front.more_details')</span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                               fill="none">
                               <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round" />
                           </svg>
                       </button>
                       @if (str_contains($headerkacko->attribute, "full"))
                    </div>
                    @endif
                   </a>
                   @endforeach
               </div>
         </div>

         <div class="hero__swiper" data-aos="zoom-in">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($sliders as $slider)
                        <div class="swiper-slide">
                            <img src="{{ asset($slider->image) }}" alt="img">
                            <div class="swiper-slide__info">
                                <a href="{{ $slider->link }}"><h1>{{ $slider->{'title_' . app()->getLocale()} }}</h1></a>
                                <p>{{ $slider->{'description_' . app()->getLocale()} }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
         </div>
    </div>

    <main>
        <section class="about-company" data-aos="zoom-in-up">
            <div class="container">
                <h1 class="title">@lang('front.about_us')</h1>
                @foreach ($pages as $page)

                <p class="text">
                    {!! $page->{'content_' . app()->getLocale()} !!}
                </p>
                <div class="about-company__map">
                    <img src="{{ asset($page->image) }}" alt="img">
                </div>
                @endforeach

            </div>
        </section>

        <section class="insurance-products" data-aos="fade-up">
            <div class="container">
                <h1 class="title">@lang('front.insurance_products')</h1>
                <div class="tab" id="categoryTab">
                    @foreach ($insurancecategories as $insurancecategory)
                    <button class="tablinks" onclick="openCity(event, 'category_{{ $insurancecategory->id }}')">{{ $insurancecategory->{'title_' . app()->getLocale()} }}</button>
                    @endforeach
                </div>

                @foreach ($insurancecategories as $insurancecategory)
                    <div id="category_{{ $insurancecategory->id }}" class="tab-content">
                        @foreach($insurancecategory->insuranceproducts->take(6) as $insuranceproduct)
                        <a href="{{ route('product', $insuranceproduct->id) }}" class="tab-content__item" data-aos="slide-right">
                            <div class="img-item">
                                <img src="{{ asset($insuranceproduct->image) }}" alt="">
                            </div>
                            <p>{{ $insuranceproduct->{'title_' . app()->getLocale()} }} </p>
                        </a>
                        @endforeach
                    </div>
                @endforeach

                <div class="insurance-products__btn">
                    <a href="{{ route('product.show', 1) }}">
                    <button class="btn primary-btn">
                        @lang('front.all_products')
                    </button>
                </a>
                </div>
            </div>
        </section>

        <section class="our-clients" data-aos="fade-up">
            <div class="container">
                <h1 class="title">@lang('front.our_clients')</h1>
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
                            @lang('front.why_clients_choose')
                            <span>@lang('front.us')</span>
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
                                    <h3>{{ $carousel->{'title_' . app()->getLocale()} }}</h3>
                                </div>
                                <p class="desc">{!! $carousel->{'content_' . app()->getLocale()} !!}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news news2">
            <div class="container">
                <h1 class="title">@lang('front.news')</h1>
                <div class="news__row news2__row">
                  @foreach ($news as $new)
                    <a href="{{ route('new.show', $new->{'slug_' . app()->getLocale()}) }}" class="news__col" data-aos="slide-left">
                        <div class="img">
                            <img src="{{ asset($new->image) }}" alt="alt">
                        </div>
                        <div class="news__col-txt">
                            <h6 class="date">{{  date('d.m.Y', strtotime($new->created_at)) }}</h6>
                            <h3 class="card-title">{{ $new->{'title_' . app()->getLocale()} }}</h3>
                            <h6 class="desc">{!! (mb_substr($new->{'content_' . app()->getLocale()}, 0, 120)) !!}</h6>
                        </div>
                    </a>
                    @endforeach
                </div>
                <a href="{{ route('news') }}" class="news__all-btn more-btn">
                    <span>@lang('front.all_news')</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                        <path d="M1 11L6.02092 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </section>

        <section class="subscribe" data-aos="flip-up" data-aos-duration="1500">
            <div class="container">
                <h1 class="title2">@lang('front.subscribe_to_our_newsletter')</h1>
                <form action="" class="subscribe__form">
                    <input class="base-input" type="email" placeholder="Email" name="email" id="email">
                    <button type="submit" class="form-btn">
                        @lang('front.send')
                    </button>
                </form>
            </div>
        </section>

        <section class="useful-links">
            <div class="container">
                <h1 class="title">@lang('front.useful_links')</h1>
                <div class="useful-links__row">
                    @foreach ($usefuls as $useful)

                    <div class="useful-links__col" data-aos="slide-right">
                        <div class="img">
                            <img src="{{ asset($useful->image) }}" alt="">
                        </div>
                        <p class="card-desc">{{ $useful->{'title_' . app()->getLocale()} }}</p>
                        <a href="{{ $useful->link }}">{{ $useful->link }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

@endsection
