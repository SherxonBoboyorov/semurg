@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    @foreach($menu as $item)
                    <h1 class="title">{{ $item->{'title_' . app()->getLocale()} }}</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>{{ $item->{'title_' . app()->getLocale()} }}</a></li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <section class="documents-pages">
            <div class="container">
                <div class="parent">
                    <div class="sidebar" data-aos="slide-right">
                        <ul>
                            @foreach ($categories as $category)
                                <li><a class="@if($category->id == $id) active @endif" href="{{ route('document.show', ['id' => $category->id]) }}">{{ $category->{'title_' . app()->getLocale()} }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="content documents-pages__content">
                        <ul class="documents-pages__list">
                          @foreach ($documents as $document)
                            <li class="documents-pages__list-item" data-aos="slide-up">
                                <div class="pdf-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="38" viewBox="0 0 30 38"
                                        fill="none">
                                        <path
                                            d="M7.82263 23.9121C7.48529 23.9121 7.25796 23.9451 7.14062 23.9781V26.1378C7.27996 26.1708 7.45412 26.1799 7.69429 26.1799C8.57246 26.1799 9.11329 25.7363 9.11329 24.9864C9.11329 24.3154 8.64763 23.9121 7.82263 23.9121ZM14.2155 23.9341C13.8488 23.9341 13.6105 23.9671 13.4693 24.0001V28.7851C13.6105 28.8181 13.8378 28.8181 14.0431 28.8181C15.541 28.8291 16.5163 28.0041 16.5163 26.2588C16.5273 24.7371 15.6381 23.9341 14.2155 23.9341Z"
                                            fill="#0B4848" />
                                        <path
                                            d="M18.3333 0.666016H3.66667C2.69421 0.666016 1.76157 1.05232 1.07394 1.73996C0.386308 2.42759 0 3.36022 0 4.33268V33.666C0 34.6385 0.386308 35.5711 1.07394 36.2587C1.76157 36.9464 2.69421 37.3327 3.66667 37.3327H25.6667C26.6391 37.3327 27.5718 36.9464 28.2594 36.2587C28.947 35.5711 29.3333 34.6385 29.3333 33.666V11.666L18.3333 0.666016ZM10.0797 26.681C9.51317 27.2127 8.67717 27.451 7.70367 27.451C7.51491 27.4531 7.32623 27.442 7.139 27.418V30.0323H5.5V22.8163C6.23967 22.706 6.98705 22.6557 7.73483 22.666C8.756 22.666 9.482 22.8603 9.9715 23.2509C10.4372 23.6212 10.7525 24.228 10.7525 24.943C10.7507 25.6617 10.5123 26.2685 10.0797 26.681ZM17.0592 29.1652C16.2892 29.805 15.1177 30.1093 13.6858 30.1093C12.8278 30.1093 12.221 30.0543 11.8085 29.9993V22.8182C12.5484 22.7102 13.2956 22.6593 14.0433 22.666C15.4312 22.666 16.3332 22.9153 17.0372 23.447C17.798 24.0117 18.2747 24.9118 18.2747 26.2043C18.2747 27.6032 17.7632 28.5693 17.0592 29.1652ZM23.8333 24.0777H21.0247V25.7478H23.65V27.0935H21.0247V30.0342H19.3637V22.721H23.8333V24.0777ZM18.3333 13.4993H16.5V4.33268L25.6667 13.4993H18.3333Z"
                                            fill="#0B4848" />
                                    </svg>
                                </div>
                                <div class="info">
                                    <p>{{ $document->{'title_' . app()->getLocale()} }}</p>
                                    <a href="{{ $document->file }} " download="">{{ $document->size }}</a>
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