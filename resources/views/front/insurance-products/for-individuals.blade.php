@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Физическим лицам</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Физическим лицам</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="insurance-products for-individuals">
            <div class="container">
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'Physical')">Физическим лицам</button>
                    <button class="tablinks" onclick="openCity(event, 'Legal')">Юридическим лицам</button>
                </div>
                <div id="Legal" class="tab-content">
                    <a href="./legal-entities_in.html" class="tab-content__item" data-aos="slide-left">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products1.svg" alt="">
                        </div>
                        <p>ОСГОВТС</p>
                    </a>
                    <a href="./legal-entities_in.html" class="tab-content__item" data-aos="slide-up">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products2.svg" alt="">
                        </div>
                        <p>КАСКО</p>
                    </a>
                </div>
                <div id="Physical" class="tab-content">
                    <a href="./for-individuals_in.html" class="tab-content__item" data-aos="slide-left">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products1.svg" alt="">
                        </div>
                        <p>ОСГОВТС</p>
                    </a>
                    <a href="./for-individuals_in.html" class="tab-content__item" data-aos="slide-up">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products2.svg" alt="">
                        </div>
                        <p>КАСКО</p>
                    </a>
                    <a href="./for-individuals_in.html" class="tab-content__item" data-aos="slide-right">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products3.svg" alt="">
                        </div>
                        <p>Страхование от несчастных случаев</p>
                    </a>
                    <a href="./for-individuals_in.html" class="tab-content__item" data-aos="slide-left">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products6.svg" alt="">
                        </div>
                        <p>Страхование спортсменов</p>
                    </a>
                    <a href="./for-individuals_in.html" class="tab-content__item" data-aos="slide-up">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products4.svg" alt="">
                        </div>
                        <p>Страхование имущества</p>
                    </a>
                    <a href="./for-individuals_in.html" class="tab-content__item" data-aos="slide-right">
                        <div class="img-item">
                            <img src="../../images/insurance-products/insurance-products5.svg" alt="">
                        </div>
                        <p>Страхование автокредита</p>
                    </a>
                </div>
                <div class="insurance-products__btn">
                    <button class="btn primary-btn">Все продукты</button>
                </div>
            </div>
        </section>
    </main>

@endsection