@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Каско</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">@lang('front.home')</a></li>
                        <li><a>Каско</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="kacko kacko-form" data-aos="zoom-in">
            <div class="container">
                <div class="kacko__top">
                    <h1>Отправить заявку на оформление полиса</h1>
                </div>
                <form action="{{ route('kaskoRegister') }}" id="kaskoForm" class="kacko-form__el" method="POST">
                    @csrf
                    <input type="hidden" name="kasko_year" value="{{ $_COOKIE['kasko_year'] }}">
                    <input type="hidden" name="equipment" value="{{ $_COOKIE['equipment_name'] }}">
                    <input type="hidden" name="insurancePremium" value="{{ $_COOKIE['insurancePremium'] }}">
                    <input type="hidden" name="amountLiability" value="{{ $_COOKIE['amountLiability'] }}">
                    <input type="hidden" name="model_name" value="{{ $_COOKIE['model_name'] }}">
                    <input type="hidden" name="brand_name" value="{{ $_COOKIE['brand_name'] }}">
                    <input class="base-input" name="customer" type="text" placeholder="ФИО" required>
                    <input class="base-input" name="phone" type="tel" placeholder="Телефон" required>
                    <button type="submit" class="form-btn">Отправить заявку</button>
                </form>
            </div>
        </section>

    </main>

@endsection

@section('custom_js')
<script>
    var cookies = [
        'kasko_year',
        'equipment_name',
        'insurancePremium',
        'amountLiability',
        'model_name',
        'brand_id',
        'model_id',
        'equipment_id',
        'brand_name'
    ];

    submitForm = document.getElementById("kaskoForm");

    submitForm.addEventListener("submit", (e) => {
        e.preventDefault();

        for (var item in cookies) {
            document.cookie = cookies[item] + "= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
        }

        submitForm.submit();
    });

</script>
@endsection
