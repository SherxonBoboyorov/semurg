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

         <section class="about-insurance">
            <div class="about-insurance__main">
                <div class="container">
                    <div class="about-insurance__main-left">
                        {{-- <h1>Почувствуйте уверенность в завтрашнем дне</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                    </div>
                    <div class="about-insurance__main-right">
                        <div class="img">
                            <img src="{{ asset('front/images/kacko/about-inc-img.png') }}" alt="about-inc-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-insurance__info">
                <div class="container">
                    <h1 class="title3">Страхование в Узбекистане</h1>
                    <p class="text">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
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
