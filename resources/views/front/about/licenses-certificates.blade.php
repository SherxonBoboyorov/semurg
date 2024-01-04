@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">@lang('front.licences_and_certificates')</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>@lang('front.licences_and_certificates')</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="licenses-certificates">
            <div class="container">
                <div class="parent">
                    <div class="sidebar">
                        <ul>
                            <li><a href="{{ route('about-us') }}">@lang('front.about_us')</a></li>
                            <li><a href="{{ route('history-company') }}">@lang('front.company_history')</a></li>
                            <li><a href="{{ route('leadership-management') }}">@lang('front.leadership_and_management')</a></li>
                            <li><a class="active" href="{{ route('licenses-certificates') }}">@lang('front.licences_and_certificates')</a></li>
                            <li><a href="{{ route('structure-company') }}">@lang('front.company_structure')</a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <ul class="licenses-certificates__list">
                            @foreach($licensescategories as $licensescategory)
                            <li class="licenses-certificates__list-item">
                                <h2>{{ $licensescategory->{'title_' . app()->getLocale()} }}</h2>
                                <div>
                                    @foreach($licensescategory->licensesdocuments as $licensesdocument)
                                    <div class="pdf-icon" >
                                        <img src="{{ asset($licensesdocument->image) }}" download alt="">
                                    </div>
                                    <div class="info">
                                        <p>{{ $licensesdocument->{'title_' . app()->getLocale()} }}</p>
                                        <a href="{{ $licensesdocument->image }}" download>{{ $licensesdocument->size }}</a>
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
