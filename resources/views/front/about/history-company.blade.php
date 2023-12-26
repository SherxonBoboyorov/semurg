@extends('layouts.front')

@section('content')


<main>
    <div class="hero hero-img">
        <div class="container">
            <div class="breadcrumb">
                <h1 class="title">@lang('front.company_history')</h1>
                <ul>
                    <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                    <li><a>@lang('front.company_history')</a></li>
                </ul>
            </div>
            <div class="hero-img__item" data-aos="zoom-in">
                <img src="{{ asset('front/images/employees/partners-img.png') }}" alt="">
            </div>
        </div>
    </div>

    <section class="about-us">
        <div class="container">
            <div class="content news-page__content">
                <div class="news__row">
                    @foreach ($list as $item)
                    <div class="news__col" style="display: block">
                        <div class="img">
                            <img src="{{ asset($item->image) }}" width="100%" height="100%" alt="">
                        </div>
                        <div class="news__col-txt">
                            <h6 class="desc">{!! $item->{'content_' . app()->getLocale()} !!}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
