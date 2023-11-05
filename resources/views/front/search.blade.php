@extends('layouts.front')

@section('content')

<main>
    <div class="hero hero-crumb" data-aos="flip-up">
        <div class="container">
            <div class="breadcrumb">
                <h1 class="title">@lang('front.searching_results')</h1>
                <ul>
                    <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                    <li><a>@lang('front.searching_results')</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="news-page">
        <div class="container">
            <div class="parent">
                <div class="content news-page__content">
                    <div class="news__row">
                        @foreach ($news as $new)
                        <a href="{{ route('new.show', $new->{'slug_' . app()->getLocale()}) }}" class="news__col" data-aos="fade-up">
                            <div class="img">
                                <img src="{{ asset($new->image) }}" alt="">
                            </div>
                            <div class="news__col-txt">
                                <h6 class="date">{{  date('d.m.Y', strtotime($new->created_at)) }}</h6>
                                <h3 class="card-title">{{ $new->{'title_' . app()->getLocale()} }}</h3>
                                <h6 class="desc">{!! $new->{'content_' . app()->getLocale()} !!}</h6>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- <section class="news-page tenders">
        <div class="container">
            <div class="parent">
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
                                    <h6 class="date">{{  date('d.m.Y', strtotime($tender->created_at)) }}</h6>
                                    <h6 class="date">@lang('front.tender')</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section class="leadership-management">
        <div class="container">
            <div class="parent">
                <div class="content leadership-management__content">
                    @foreach ($leaderships as $leadership)
                    <div class="leadership-management__item" data-aos="slide-right">
                        <div class="leadership-management__item-img">
                            <img src="{{ asset($leadership->image) }}" alt="">
                        </div>
                        <h1>{{ $leadership->{'name_' . app()->getLocale()} }}</h1>
                        <p>{{ $leadership->{'job_' . app()->getLocale()} }}</p>
                        <button class="btn primary-btn" onclick="openleadershipModal({{ $leadership->id}}, event)">@lang('front.more_details')</button>
                    </div>

                    <div onclick="openleadershipModal({{ $leadership->id}}, event)" id="leadership-management__modal-{{ $leadership->id}}" class="lead-modal-overlay leadership-management__modal hidden">
                        <div class="leadership-management__modal-content ">
                            <h1 class="leadership-management__modal-title ">{{ $leadership->{'name_' . app()->getLocale()} }}</h1>
                            <h6 class="leadership-management__modal-position ">{{ $leadership->{'job_' . app()->getLocale()} }}</h6>
                            <p class="description ">
                                {!! $leadership->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> -->



</main>

@endsection
