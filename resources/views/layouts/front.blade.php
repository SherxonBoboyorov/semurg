<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/icons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/icons/favicon-16x16.png') }}" />
    <title>SEMURG</title>
    <!-- AOS ANIMATION -->
    <link href="{{ asset('front/css/plugins/aos.css') }}" rel="stylesheet">
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/about.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/faq.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/forum-page.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/news-page.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/survey-page.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/contact.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/persons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/kacko.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/allSettings.css') }}">

    <style>
        .about-company .container.custom-about-company,  .about-company .container {
            height: 100% !important;
        }
    </style>
</head>

<body>

    {{-- <h1 style="text-align: center; margin-bottom: 20px; align-items: center; margin-top: revert; color: red">@lang('front.the_site_is_working_in_test_mode')</h1> --}}
    <header>
        <nav class="nav" style="z-index: 1000">
            <div class="nav__top">
                <div class="container">
                    <div class="bg-nav__list hidden"></div>
                    <ul class="nav__list">
                        <li class="res-nav-operation-li">
                            <a href="tel:{{ $options->where('key', 'fax')->first()->value }}" class="res-nav-operation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff">
                                    <path fill="#0B4848"
                                        d="M15.75 12.315v2.652a.75.75 0 0 1-.6975.7485c-.3278.0225-.5955.0345-.8025.0345-6.6277 0-12-5.3722-12-12 0-.207.0112-.4747.0345-.8025A.75.75 0 0 1 3.033 2.25h2.652a.375.375 0 0 1 .3735.3375c.0172.1725.033.3098.048.414a10.4257 10.4257 0 0 0 .906 3.0008.3417.3417 0 0 1-.1102.4252L5.2838 7.584a9.7854 9.7854 0 0 0 5.1329 5.133l1.155-1.6155a.3468.3468 0 0 1 .4298-.1118 10.4244 10.4244 0 0 0 3 .9038c.1043.015.2415.0307.4125.048a.3754.3754 0 0 1 .2403.1219.3745.3745 0 0 1 .0957.2516Z" />
                                </svg>
                                <p>
                                    {{ $options->where('key', 'fax')->first()->value }}
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('/') }}" class="nav__list-link {{ (\Request::route()->getName() == '/') ? 'active' : '' }}">@lang('front.home')</a>
                        </li>
                        <li class="relative right">
                            <button class="nav__list-link {{ (\Request::route()->getName() == 'about-us') ? 'active' : '' }}">@lang('front.about_company')</button>
                            <ul class="submenu">
                                <li><a href="{{ route('about-us') }}">@lang('front.about_us')</a></li>
                                <li><a href="{{ route('history-company') }}">@lang('front.company_history')</a></li>
                                <li><a href="{{ route('leadership-management') }}">@lang('front.leadership_and_management')</a></li>
                                <li><a href="{{ route('licenses-certificates') }}">@lang('front.licences_and_certificates')</a></li>
                                <li><a href="{{ route('structure-company') }}">@lang('front.company_structure')</a></li>
                            </ul>
                        </li>
                        <li class="relative">
                            <button class="nav__list-link {{ (\Request::route()->getName() == 'products') ? 'active' : '' }}">@lang('front.insurance_products')</button>
                            <ul class="submenu">
                                @foreach (\App\Models\InsuranceCategory::orderBy('id')->get() as $insurancecategory)
                                <li>
                                    <a href="{{ route('products', $insurancecategory->id) }}">{{ $insurancecategory->{'title_' . app()->getLocale()} }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="relative">
                            <button class="nav__list-link">@lang('front.documents')</button>
                            <ul class="submenu">
                                <li>
                                    <a href="../documents/charter.html">@lang('front.company_charter')</a>
                                </li>
                                <li>
                                    <a href="../documents/provisions.html">@lang('front.provisions')</a>
                                </li>
                                <li>
                                    <a href="../documents/codex.html">@lang('front.codex')</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative">
                            <button class="nav__list-link {{ (\Request::route()->getName() == 'document.show') ? 'active' : '' }}">@lang('front.shareholders_and_investors')</button>
                            <ul class="submenu">
                                @foreach(\App\Models\Category::orderBy('id')->get() as $category)
                                <li>
                                    <a href="{{ route('document.show', $category->id) }}">{{ $category->{'title_' . app()->getLocale()} }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a class="nav__list-link {{ (\Request::route()->getName() == 'reinsurance') ? 'active' : '' }}" href="{{ route('reinsurance') }}">@lang('front.reinsurance')</a>
                        </li>
                        {{-- <li class="relative">
                            <button class="nav__list-link {{ (\Request::route()->getName() == 'incoming-reinsurance') ? 'active' : '' }}">@lang('front.reinsurance')</button>
                            <ul class="submenu">
                                 <li>
                                    <a href="{{ route('incoming-reinsurance') }}">@lang('front.incoming_reinsurance')</a>
                                </li>
                                 <li>
                                    <a href="{{ route('outgoing-reinsurance') }}">@lang('front.outgoing_reinsurance')</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="relative">
                            <button class="nav__list-link {{ (\Request::route()->getName() == 'news') ? 'active' : '' }}">@lang('front.press_center')</button>
                            <ul class="submenu">
                                <li><a href="{{ route('news') }}">@lang('front.news')</a></li>
                                <li><a href="{{ route('forum') }}">@lang('front.forum')</a></li>
                                <li><a href="{{ route('vacancies') }}">@lang('front.vacancies')</a></li>
                                <li><a href="{{ route('survey') }}">@lang('front.survey')</a></li>
                                <li><a href="{{ route('faq') }}">@lang('front.frequency_asked_questions')</a></li>
                                <li><a href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav__list-link {{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">@lang('front.contacts')</a>
                        </li>
                        <li class="custom-document-li">
                            <a href="{{ asset('front/document/Европротокол.pdf') }}" download class="custom-document-link-responsive">
                                @lang('front.europrotocol')
                            </a>
                        </li>
                    </ul>
                    <div class="bars">
                        <div class="bar1"></div><div class="bar2"></div><div class="bar3"></div>
                    </div>
                </div>
            </div>
            <div class="nav__menu">
                <div class="container">
                    <a href="{{ route('/') }}" class="logo">
                        <img src="{{ asset('front/images/logo.svg') }}" alt="logo">
                    </a>

                    <div class="menu-right">
                        <a href="{{ asset('front/document/Европротокол.pdf') }}" download class="custom-document-link">
                            @lang('front.europrotocol')
                        </a>

                        <a href="tel:{{ $options->where('key', 'fax')->first()->value }}" class="menu-right__operator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                                <path fill="#0B4848"
                                    d="M15.75 12.315v2.652a.75.75 0 0 1-.6975.7485c-.3278.0225-.5955.0345-.8025.0345-6.6277 0-12-5.3722-12-12 0-.207.0112-.4747.0345-.8025A.75.75 0 0 1 3.033 2.25h2.652a.375.375 0 0 1 .3735.3375c.0172.1725.033.3098.048.414a10.4257 10.4257 0 0 0 .906 3.0008.3417.3417 0 0 1-.1102.4252L5.2838 7.584a9.7854 9.7854 0 0 0 5.1329 5.133l1.155-1.6155a.3468.3468 0 0 1 .4298-.1118 10.4244 10.4244 0 0 0 3 .9038c.1043.015.2415.0307.4125.048a.3754.3754 0 0 1 .2403.1219.3745.3745 0 0 1 .0957.2516Z" />
                            </svg>
                            <p>
                                {{ $options->where('key', 'fax')->first()->value }}
                            </p>
                        </a>
                        <div class="menu-right__search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none">
                                <path fill="#0B4848"
                                    d="m19.9011 18.5992-3.4008-3.3733A8.25 8.25 0 1 0 15.2261 16.5l3.3733 3.3734a.9171.9171 0 0 0 1.3017 0 .917.917 0 0 0 0-1.2742ZM10.0836 16.5a6.4165 6.4165 0 0 1-6.2934-7.6685A6.4167 6.4167 0 1 1 10.0836 16.5Z" />
                            </svg>
                            <span class="p">@lang('front.search')</span>
                        </div>
                        <div class="menu-right__search-modal hidden">
                            <form action="{{ route('search_front') }}" class="search-modal-form" method="POST">
                                @csrf
                                <div class="content">
                                    <input type="search" name="price" placeholder="@lang('front.search')" class="base-input" autocomplete="off" required>
                                    <button class="search-modal-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none">
                                            <path fill="#0B4848"
                                                d="m19.9011 18.5992-3.4008-3.3733A8.25 8.25 0 1 0 15.2261 16.5l3.3733 3.3734a.9171.9171 0 0 0 1.3017 0 .917.917 0 0 0 0-1.2742ZM10.0836 16.5a6.4165 6.4165 0 0 1-6.2934-7.6685A6.4167 6.4167 0 1 1 10.0836 16.5Z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="menu-right__view">
                            <span class="a">@lang('front.special_functions')</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                                <path fill="#0B4848"
                                    d="M9 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm0 6A3.7502 3.7502 0 0 1 5.25 9 3.75 3.75 0 1 1 9 12.75Zm0-9.375C5.25 3.375 2.0475 5.7075.75 9c1.2975 3.2925 4.5 5.625 8.25 5.625S15.9525 12.2925 17.25 9C15.9525 5.7075 12.75 3.375 9 3.375Z" />
                            </svg>
                            <div class="overlay hidden"></div>
                            <div class="special-abilities hidden">
                                <div class="special-abilities__colors">
                                    <h3>@lang('front.view'):</h3>
                                    <label class="normal-color">
                                        <input type="radio" name="sp-ab-colors">
                                        <span class="label-txt">@lang('front.normal_design')</span>
                                    </label>
                                    <label class="grayscale-color">
                                        <input type="radio" name="sp-ab-colors">
                                        <span class="label-txt">@lang('front.black_and_white_design')</span>
                                    </label>
                                </div>
                                <div class="line"></div>
                                <div class="special-abilities__text-size">
                                    <h3>@lang('front.font_size'):</h3>
                                    <div class="btns">
                                        <button class="ha-btn" id="fontSizeMin">A-</button>
                                        <button class="ha-btn" id="fontSizeDefault">A</button>
                                        <button class="ha-btn" id="fontSizeMax">A+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="menu-right__lang">
                            <div onclick="openLangMenu()">
                                <span class="content lang-text-info active">{{ strtoupper(app()->getLocale()) }}</span>
                                <span class="content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M1 0.999999L7 7.0251L13 1" stroke="silver" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                </span>
                            </div>
                            <ul class="menu-right__lang-options hidden">
                             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                               @if($localeCode != app()->getLocale())
                                @if ($localeCode !== 'en')
                                    <a rel="alternate" hreflang="{{ $localeCode }}" class="lang-option-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ strtoupper($localeCode) }}
                                     </a>
                                 @else
                                    <a class="lang-option-item" href="https://global.semurginsurance.uz/en/">
                                        EN
                                     </a>
                                @endif
                               @endif
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')

    <footer class="footer">
        <div class="footer__info">
            <div class="container">
                <div class="footer__info__map">
                    <div class="logo">
                        <img src="{{ asset('front/images/logo.svg') }}" alt="footer-logo">
                    </div>
                    <h4 class="heading4">@lang('front.site_map')</h4>
                    <ul class="footer__info__list">
                        <li>
                            <a href="{{ route('/') }}">@lang('front.home')</a>
                        </li>
                        <li class="footer-relative">
                            <button class="footer-list-link {{ (\Request::route()->getName() == 'about-us') ? 'active' : '' }}">@lang('front.about_company')</button>
                            <ul class="submenu">
                                <li><a href="{{ route('about-us') }}">@lang('front.about_us')</a></li>
                                <li><a href="{{ route('history-company') }}">@lang('front.company_history')</a></li>
                                <li><a href="{{ route('leadership-management') }}">@lang('front.leadership_and_management')</a></li>
                                <li><a href="{{ route('licenses-certificates') }}">@lang('front.licences_and_certificates')</a></li>
                                <li><a href="{{ route('structure-company') }}">@lang('front.company_structure')</a></li>
                            </ul>
                        </li>
                        <li class="footer-relative">
                            <button class="footer-list-link {{ (\Request::route()->getName() == 'products') ? 'active' : '' }}">@lang('front.insurance_products')</button>
                            <ul class="submenu">
                                @foreach (\App\Models\InsuranceCategory::orderBy('id')->get() as $item)
                                <li>
                                    <a href="{{ route('products', $item->id) }}">{{ $item->{'title_' . app()->getLocale()} }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="footer-relative">
                            <button class="footer-list-link">@lang('front.documents')</button>
                            <ul class="submenu">
                                <li>
                                    <a href="../documents/charter.html">@lang('front.company_charter')</a>
                                </li>
                                <li>
                                    <a href="../documents/provisions.html">@lang('front.provisions')</a>
                                </li>
                                <li>
                                    <a href="../documents/codex.html">@lang('front.codex')</a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-relative">
                            <button class="footer-list-link {{ (\Request::route()->getName() == 'document.show') ? 'active' : '' }}">@lang('front.shareholders_and_investors')</button>
                            <ul class="submenu">
                                @foreach(\App\Models\Category::orderBy('id')->get() as $category)
                                <li>
                                    <a href="{{ route('document.show', $category->id) }}">{{ $category->{'title_' . app()->getLocale()} }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a class="nav__list-link {{ (\Request::route()->getName() == 'reinsurance') ? 'active' : '' }}" href="{{ route('reinsurance') }}">@lang('front.reinsurance')</a>
                        </li>

                        {{-- <li class="footer-relative">
                            <button class="footer-list-link {{ (\Request::route()->getName() == 'incoming-reinsurance') ? 'active' : '' }}">@lang('front.reinsurance')</button>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('incoming-reinsurance') }}">@lang('front.incoming_reinsurance')</a>
                                </li>
                                <li>
                                    <a href="{{ route('outgoing-reinsurance') }}">@lang('front.outgoing_reinsurance')</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="footer-relative">
                            <button  class="footer-list-link {{ (\Request::route()->getName() == 'news') ? 'active' : '' }}">@lang('front.press_center')</button>
                            <ul class="submenu">
                                <li><a href="{{ route('news') }}">@lang('front.news')</a></li>
                                <li><a href="{{ route('forum') }}">@lang('front.forum')</a></li>
                                <li><a href="{{ route('vacancies') }}">@lang('front.vacancies')</a></li>
                                <li><a href="{{ route('survey') }}">@lang('fron.survey')</a></li>
                                <li><a href="{{ route('faq') }}">@lang('front.frequency_asked_questions')</a></li>
                                <li><a href="{{ route('tenders') }}">@lang('front.tenders')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">@lang('front.contacts')</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__info__contact">
                    <h4 class="heading4">@lang('front.contacts')</h4>
                    <ul class="footer__info__contact-list">
                        <li>
                            <a href="tel:{{ $options->where('key', 'phone')->first()->value }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                                    <path fill="#0B4848"
                                        d="M15.75 12.315v2.652a.75.75 0 0 1-.6975.7485c-.3278.0225-.5955.0345-.8025.0345-6.6277 0-12-5.3722-12-12 0-.207.0112-.4747.0345-.8025A.75.75 0 0 1 3.033 2.25h2.652a.375.375 0 0 1 .3735.3375c.0172.1725.033.3098.048.414a10.4257 10.4257 0 0 0 .906 3.0008.3417.3417 0 0 1-.1102.4252L5.2838 7.584a9.7854 9.7854 0 0 0 5.1329 5.133l1.155-1.6155a.3468.3468 0 0 1 .4298-.1118 10.4244 10.4244 0 0 0 3 .9038c.1043.015.2415.0307.4125.048a.3754.3754 0 0 1 .2403.1219.3745.3745 0 0 1 .0957.2516Z" />
                                </svg>
                                <span>{{ $options->where('key', 'phone')->first()->value }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{ $options->where('key', 'fax')->first()->value }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                                    <path fill="#0B4848"
                                        d="M15.75 12.315v2.652a.75.75 0 0 1-.6975.7485c-.3278.0225-.5955.0345-.8025.0345-6.6277 0-12-5.3722-12-12 0-.207.0112-.4747.0345-.8025A.75.75 0 0 1 3.033 2.25h2.652a.375.375 0 0 1 .3735.3375c.0172.1725.033.3098.048.414a10.4257 10.4257 0 0 0 .906 3.0008.3417.3417 0 0 1-.1102.4252L5.2838 7.584a9.7854 9.7854 0 0 0 5.1329 5.133l1.155-1.6155a.3468.3468 0 0 1 .4298-.1118 10.4244 10.4244 0 0 0 3 .9038c.1043.015.2415.0307.4125.048a.3754.3754 0 0 1 .2403.1219.3745.3745 0 0 1 .0957.2516Z" />
                                </svg>
                                <span>{{ $options->where('key', 'fax')->first()->value }}</span>
                            </a>
                        </li>
                        <li>
                            <a class="loc">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                                    <path fill="#0B4848"
                                        d="M9 8.625a1.875 1.875 0 1 1 0-3.75 1.875 1.875 0 0 1 0 3.75ZM9 1.5a5.25 5.25 0 0 0-5.25 5.25C3.75 10.6875 9 16.5 9 16.5s5.25-5.8125 5.25-9.75A5.2499 5.2499 0 0 0 9 1.5Z" />
                                </svg>
                                <span>{{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $options->where('key', 'email')->first()->value }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                                    <path fill="#0B4848"
                                        d="M1.125 6.5024v6.435a2.2498 2.2498 0 0 0 2.25 2.25h11.25a2.25 2.25 0 0 0 2.25-2.25v-6.435l-6.696 4.1198a2.2503 2.2503 0 0 1-2.358 0L1.125 6.5024Z" />
                                    <path fill="#0B4848"
                                        d="M16.875 5.181v-.1185a2.2502 2.2502 0 0 0-2.25-2.25H3.375a2.25 2.25 0 0 0-2.25 2.25v.1185l7.2855 4.4835a1.125 1.125 0 0 0 1.179 0L16.875 5.181Z" />
                                </svg>
                                <span>{{ $options->where('key', 'email')->first()->value }}</span>
                            </a>
                        </li>
                    </ul>
                    <h4 class="heading4">@lang('front.we_are_in_social_networks'):</h4>
                    <div class="footer__info__icons">
                        <div class="icon">
                            <a href="{{ $options->where('key', 'instagram')->first()->value }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none">
                                <path fill="#fff"
                                    d="M6.968.25c.898.032 1.8282.032 2.7263.0641.8019.0321 1.5396.1604 2.2452.5774.8981.5453 1.4434 1.3471 1.6359 2.3735.0962.6095.1283 1.251.1603 1.8604.0321 1.3472 0 2.6943 0 4.0414 0 .7057-.032 1.4113-.2566 2.0849-.449 1.3151-1.3792 2.117-2.7263 2.3736-.6095.1283-1.251.1283-1.8604.1603-1.3471.0321-2.6622 0-4.0094 0-.7056 0-1.4112-.032-2.0848-.2566C1.483 13.08.6812 12.1498.4246 10.8027c-.1283-.6095-.1283-1.251-.1603-1.8604-.0321-1.3471 0-2.6943 0-4.0414 0-.7057.032-1.4113.2566-2.0849C.9699 1.501 1.9.699 3.2472.4425 3.8567.314 4.4982.314 5.1076.282 5.6849.25 6.3264.25 6.9679.25Zm5.5489 6.6395c-.0321 0 0 0 0 0-.0321-.5453-.0321-1.0584-.0321-1.6037 0-.5132-.0321-1.0264-.0962-1.5396-.1283-1.1547-.8019-1.9245-1.9245-2.149-.5774-.1283-1.2188-.1283-1.7962-.1283a61.2068 61.2068 0 0 0-3.432 0c-.5774 0-1.1547.032-1.7.1282-.9622.1604-1.6358.7057-1.9245 1.668-.0962.3207-.1283.6415-.1604.9622-.032 1.2189-.032 2.4377-.032 3.6566 0 .7698.032 1.5716.0962 2.3414.0962 1.1547.8018 1.9566 1.9566 2.149.5773.0963 1.1867.1283 1.7961.1283 1.1227.0321 2.2453 0 3.4 0 .5132 0 1.0264-.032 1.5396-.0962.4811-.0321.9302-.1924 1.3151-.5132.6415-.5132.866-1.1868.8981-1.9566.0641-.9622.0641-2.0207.0962-3.047Z" />
                                <path fill="#fff"
                                    d="M10.4321 7.0178c0 1.9245-1.5396 3.4641-3.4641 3.4641S3.504 8.9423 3.504 6.9857c0-1.8924 1.5716-3.432 3.496-3.432 1.8925 0 3.4321 1.5396 3.4321 3.4641ZM6.9359 9.2631c1.2189 0 2.2453-1.0264 2.2453-2.2453 0-1.2188-1.0264-2.2452-2.2453-2.2452-1.2509 0-2.2452 1.0264-2.2452 2.2452 0 1.2189 1.0264 2.2453 2.2452 2.2453ZM11.3625 3.3937c0 .449-.3529.834-.8019.834-.4491 0-.834-.385-.8019-.834 0-.449.3528-.8019.8019-.8019.449 0 .8019.3528.8019.8019Z" />
                            </svg>
                          </a>
                        </div>
                        <div class="icon">
                            <a href="{{ $options->where('key', 'facebook')->first()->value }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" fill="none">
                                <path fill="#0B4848"
                                    d="M6.2451 7H4.2892v7H1.3725V7H0V4.5294h1.3725V2.9167C1.3725 1.7843 1.9215 0 4.2893 0H6.451v2.402H4.9069c-.2402 0-.6177.1372-.6177.6862v1.4412h2.1961L6.2451 7Z" />
                            </svg>
                            </a>
                        </div>
                        <div class="icon">
                            <a href="{{ $options->where('key', 'telegram')->first()->value }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" fill="none">
                                <path fill="#fff"
                                    d="M13.75.7172c-.0366.3294-.1098.6955-.183 1.025L11.7 10.528c-.0366.183-.0732.3294-.1465.4759-.1464.2562-.366.3294-.6589.2562-.183-.0366-.3295-.1098-.4759-.2196-.9518-.6956-1.867-1.3911-2.8188-2.0866-.1098-.0733-.183-.0733-.2928.0366-.476.4393-.9152.9151-1.3911 1.3544-.183.1831-.366.2929-.6223.2563-.183 0-.2929-.0732-.3295-.2563-.2929-.9151-.5857-1.7937-.8786-2.709-.1098-.2928-.2196-.6222-.2928-.9151-.0367-.1098-.0733-.183-.2197-.2196-.9152-.2929-1.8304-.5858-2.7456-.842-.1098-.0366-.2562-.0732-.366-.1465-.2563-.1464-.2929-.366-.0366-.5857.1464-.1464.3294-.2196.549-.2928l3.734-1.4277c2.709-1.025 5.3813-2.0867 8.0903-3.1117.0366 0 .0366 0 .0732-.0366.5125-.183.8786.0732.8786.659Zm-8.4197 9.042c.0366-.0366.0366-.0732.0366-.0732.0732-.659.1098-1.3179.183-1.9768 0-.1464.0732-.2929.183-.4027l5.2715-4.7223c.1099-.1099.2197-.183.3295-.293.0366-.0365.1098-.0731.0732-.1463-.0366-.0732-.1098-.0732-.183-.0732-.1464 0-.2563.0732-.3661.1464-2.1598 1.3544-4.3197 2.709-6.4795 4.1-.1098.0732-.1464.1464-.1098.2929.2562.8053.5125 1.6107.8053 2.416.0732.1831.1464.4394.2563.7322Z" />
                            </svg>
                          </a>
                        </div>
                    </div>
                </div>
                <div class="footer__info__information">
                    <h4 class="heading4">@lang('front.information')</h4>
                    <ul>
                        <li>@lang('front.question1')</li>
                        <li>@lang('front.question2')</li>
                        <li>@lang('front.question3')</li>
                        <li>@lang('front.question4')</li>
                        <li>@lang('front.question5')</li>
                        <li>@lang('front.question6')</li>
                        <li>@lang('front.question7')</li>
                    </ul>
                    <p class="card-desc">@lang('front.text')</p>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <p class="desc2">@lang('front.longtext')</p>
            </div>
        </div>
    </footer>
    <!-- to-Top-Btn -->
    <button onclick="scrollToTop()" class="to-Top-Btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14 9" fill="none">
            <path d="M1 0.999999L7 7.0251L13 1" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>

    <!-- AOS ANIMATION -->
    <script src="{{ asset('front/js/plugins/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
    <!-- SWIPER JS  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('front/js/plugins/swiper.js') }}"></script>
    <!-- JS -->
    <script src="{{ asset('front/js/index-page/insurance-products-tabs.js') }}"></script>
    <script src="{{ asset('front/js/accordion.js') }}"></script>
    <script src="{{ asset('front/js/contact-page/contact-map.js') }}"></script>
    <script src="{{ asset('front/js/haa.js') }}"></script>



    <!-- JS FOR NAV FOOTER -->

<script src="{{ asset('front/js/special-abilities.js') }}"></script>
<script src="{{ asset('front/js/scrollTopBtn.js') }}"></script>
<script src="{{ asset('front/js/lang/lang.js') }}"></script>
<script src="{{ asset('front/js/search-modal.js') }}"></script>
<script src="{{ asset('front/js/hamburger.js') }}"></script>
<script src="{{ asset('front/js/resNavAccordion.js') }}"></script>
<script src="{{ asset('front/js/footerNavAccordion.js') }}"></script>
<script src="{{ asset('front/js/leadership-management-modal.js') }}"></script>
<script src="{{ asset('front/js/kacko/kacko-modal.js') }}"></script>
<script src="{{ asset('front/js/kacko/addFamilyMember.js') }}"></script>
@yield('custom_js')
</body>

</html>
