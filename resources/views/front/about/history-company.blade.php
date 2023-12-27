@extends('layouts.front')

@section('content')


<main>
    <div class="hero hero-crumb" data-aos="flip-up">
        <div class="container">
            <div class="breadcrumb">
                <h1 class="title">@lang('front.company_history')</h1>
                <ul>
                    <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                    <li><a>@lang('front.company_history')</a></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="about-us">
        <div class="container">
            <div class="content news-page__content">
                <div id="news__row">
                    @foreach ($list as $item)
                    <div id="news__col">
                        {{-- <div id="img"> --}}
                            <img src="{{ asset($item->image) }}" alt="">
                        {{-- </div> --}}
                        {{-- <div id="desc" class="news__col-txt"> --}}
                            <p class="desc">{!! $item->{'content_' . app()->getLocale()} !!}</p>
                        {{-- </div> --}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
