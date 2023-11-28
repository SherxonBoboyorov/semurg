@extends('layouts.front')
@php
    $brandId = $_COOKIE['brand_id'] ?? 0;
    $modelId = $_COOKIE['model_id'] ?? 0;
    $equipmentId = $_COOKIE['equipment_id'] ?? 0;
    $year = $_COOKIE['kasko_year'] ?? 0;
@endphp
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
        <section class="kacko">
            <div class="container">
                <div class="kacko__top">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path
                                d="M12.5 18.75H27.5C27.8315 18.75 28.1495 18.6183 28.3839 18.3839C28.6183 18.1495 28.75 17.8315 28.75 17.5V10C28.75 9.66848 28.6183 9.35054 28.3839 9.11612C28.1495 8.8817 27.8315 8.75 27.5 8.75H12.5C12.1685 8.75 11.8505 8.8817 11.6161 9.11612C11.3817 9.35054 11.25 9.66848 11.25 10V17.5C11.25 17.8315 11.3817 18.1495 11.6161 18.3839C11.8505 18.6183 12.1685 18.75 12.5 18.75ZM13.75 11.25H26.25V16.25H13.75V11.25ZM31.25 3.75H8.75C8.08696 3.75 7.45107 4.01339 6.98223 4.48223C6.51339 4.95107 6.25 5.58696 6.25 6.25V33.75C6.25 34.413 6.51339 35.0489 6.98223 35.5178C7.45107 35.9866 8.08696 36.25 8.75 36.25H31.25C31.913 36.25 32.5489 35.9866 33.0178 35.5178C33.4866 35.0489 33.75 34.413 33.75 33.75V6.25C33.75 5.58696 33.4866 4.95107 33.0178 4.48223C32.5489 4.01339 31.913 3.75 31.25 3.75ZM31.25 33.75H8.75V6.25H31.25V33.75ZM15.625 23.125C15.625 23.4958 15.515 23.8584 15.309 24.1667C15.103 24.475 14.8101 24.7154 14.4675 24.8573C14.1249 24.9992 13.7479 25.0363 13.3842 24.964C13.0205 24.8916 12.6864 24.713 12.4242 24.4508C12.162 24.1886 11.9834 23.8545 11.911 23.4908C11.8387 23.1271 11.8758 22.7501 12.0177 22.4075C12.1596 22.0649 12.4 21.772 12.7083 21.566C13.0166 21.36 13.3792 21.25 13.75 21.25C14.2473 21.25 14.7242 21.4475 15.0758 21.7992C15.4275 22.1508 15.625 22.6277 15.625 23.125ZM21.875 23.125C21.875 23.4958 21.765 23.8584 21.559 24.1667C21.353 24.475 21.0601 24.7154 20.7175 24.8573C20.3749 24.9992 19.9979 25.0363 19.6342 24.964C19.2705 24.8916 18.9364 24.713 18.6742 24.4508C18.412 24.1886 18.2334 23.8545 18.161 23.4908C18.0887 23.1271 18.1258 22.7501 18.2677 22.4075C18.4096 22.0649 18.65 21.772 18.9583 21.566C19.2666 21.36 19.6292 21.25 20 21.25C20.4973 21.25 20.9742 21.4475 21.3258 21.7992C21.6775 22.1508 21.875 22.6277 21.875 23.125ZM28.125 23.125C28.125 23.4958 28.015 23.8584 27.809 24.1667C27.603 24.475 27.3101 24.7154 26.9675 24.8573C26.6249 24.9992 26.2479 25.0363 25.8842 24.964C25.5205 24.8916 25.1864 24.713 24.9242 24.4508C24.662 24.1886 24.4834 23.8545 24.411 23.4908C24.3387 23.1271 24.3758 22.7501 24.5177 22.4075C24.6596 22.0649 24.9 21.772 25.2083 21.566C25.5166 21.36 25.8792 21.25 26.25 21.25C26.7473 21.25 27.2242 21.4475 27.5758 21.7992C27.9275 22.1508 28.125 22.6277 28.125 23.125ZM15.625 29.375C15.625 29.7458 15.515 30.1084 15.309 30.4167C15.103 30.725 14.8101 30.9654 14.4675 31.1073C14.1249 31.2492 13.7479 31.2863 13.3842 31.214C13.0205 31.1416 12.6864 30.963 12.4242 30.7008C12.162 30.4386 11.9834 30.1045 11.911 29.7408C11.8387 29.3771 11.8758 29.0001 12.0177 28.6575C12.1596 28.3149 12.4 28.022 12.7083 27.816C13.0166 27.61 13.3792 27.5 13.75 27.5C14.2473 27.5 14.7242 27.6975 15.0758 28.0492C15.4275 28.4008 15.625 28.8777 15.625 29.375ZM21.875 29.375C21.875 29.7458 21.765 30.1084 21.559 30.4167C21.353 30.725 21.0601 30.9654 20.7175 31.1073C20.3749 31.2492 19.9979 31.2863 19.6342 31.214C19.2705 31.1416 18.9364 30.963 18.6742 30.7008C18.412 30.4386 18.2334 30.1045 18.161 29.7408C18.0887 29.3771 18.1258 29.0001 18.2677 28.6575C18.4096 28.3149 18.65 28.022 18.9583 27.816C19.2666 27.61 19.6292 27.5 20 27.5C20.4973 27.5 20.9742 27.6975 21.3258 28.0492C21.6775 28.4008 21.875 28.8777 21.875 29.375ZM28.125 29.375C28.125 29.7458 28.015 30.1084 27.809 30.4167C27.603 30.725 27.3101 30.9654 26.9675 31.1073C26.6249 31.2492 26.2479 31.2863 25.8842 31.214C25.5205 31.1416 25.1864 30.963 24.9242 30.7008C24.662 30.4386 24.4834 30.1045 24.411 29.7408C24.3387 29.3771 24.3758 29.0001 24.5177 28.6575C24.6596 28.3149 24.9 28.022 25.2083 27.816C25.5166 27.61 25.8792 27.5 26.25 27.5C26.7473 27.5 27.2242 27.6975 27.5758 28.0492C27.9275 28.4008 28.125 28.8777 28.125 29.375Z"
                                fill="#0B4848" />
                        </svg>
                    </span>
                    <h1>Расчитайте стоимость страхового полиса</h1>
                </div>

                <div class="kacko__content" id="kaskoAutoBrands">
                    @if (!isset($_COOKIE['brand_id']))
                        <x-front.kasko-auto-brands />
                    @elseif (isset($_COOKIE['brand_id']) && !isset($_COOKIE['model_id']))
                        <x-front.kasko-auto-models :brand-id="$brandId" />
                    @elseif (isset($_COOKIE['model_id']) && !isset($_COOKIE['equipment_id']))
                        <x-front.kasko-auto-equipments :model-id="$modelId" />
                    @elseif (isset($_COOKIE['equipment_id']))
                        <x-front.kasko-auto-years />
                    @endif
                    <div class="kacko__result" data-aos="fade-up" id="autoBrandSection" @if($brandId <= 0) style="display: none;" @endif>
                        <h1>Результаты расчета</h1>
                        <ul class="res-list">
                            <li class="res-list__item" id="amountLiabilitySection" @if(!isset($_COOKIE['amountLiability'])) style="display: none;" @endif>
                                <p>Сумма ответственности</p>
                                <h4 id="amountLiability">{{ $_COOKIE['amountLiability'] ?? "" }}</h4>
                            </li>
                            <li class="res-list__item" id="insurancePremiumSection" @if(!isset($_COOKIE['insurancePremium'])) style="display: none;" @endif>
                                <p>Страховая премия</p>
                                <h4 id="insurancePremium">{{ $_COOKIE['insurancePremium'] ?? "" }}</h4>
                            </li>
                            <li class="res-list__item">
                                <p>Марка автомобиля</p>
                                <h4 id="autoBrand">{{ $_COOKIE['brand_name'] ?? "" }}</h4>
                            </li>
                            <li class="res-list__item" id="autoModelsSection" @if(!isset($_COOKIE['model_name'])) style="display: none;" @endif>
                                <p>Модель автомобиля</p>
                                <h4 id="autoModel">{{ $_COOKIE['model_name'] ?? "" }}</h4>
                            </li>
                            <li class="res-list__item" id="autoEquipmentsSection" @if(!isset($_COOKIE['equipment_name'])) style="display: none;" @endif>
                                <p>Комплектация</p>
                                <h4 id="autoEquipment">{{ $_COOKIE['equipment_name'] ?? "" }}</h4>
                            </li>
                            <li class="res-list__item" id="autoYearSection" @if(!isset($_COOKIE['kasko_year'])) style="display: none;" @endif>
                                <p>Год выпуска авто</p>
                                <h4 id="autoYear">{{ $_COOKIE['kasko_year'] ?? "" }}</h4>
                            </li>
                        </ul>
                        <a href="{{ route('registerPolicy') }}" id="registrationPolicy" @if(!isset($_COOKIE['amountLiability']) && !isset($_COOKIE['insurancePremium'])) style="display: none" @endif class="btn form-btn btn-right">Отправить заявку на оформление полиса</a>
                    </div>
                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function getBrandsValue() {
        var value = document.querySelector('input[name="brand"]:checked');
        document.getElementById('autoBrand').innerHTML = value.nextElementSibling.firstChild.textContent;
        document.getElementById('autoBrandSection').style.setProperty('display', 'block')
        document.cookie = "brand_id=" + value.value;
        document.cookie = "brand_name=" + value.nextElementSibling.firstChild.textContent;
    }

    function getModelsValue() {
        var value = document.querySelector('input[name="model"]:checked');
        document.getElementById('autoModel').innerHTML = value.nextElementSibling.firstChild.textContent;
        document.getElementById('autoModelsSection').style.setProperty('display', 'block')
        document.cookie = "model_id=" + value.value;
        document.cookie = "model_name=" + value.nextElementSibling.firstChild.textContent;
    }

    function getEquipmentsValue() {
        var value = document.querySelector('input[name="equipment"]:checked');
        document.getElementById('autoEquipment').innerHTML = value.nextElementSibling.firstChild.textContent;
        document.getElementById('autoEquipmentsSection').style.setProperty('display', 'block')
        document.cookie = "equipment_id=" + value.value;
        document.cookie = "equipment_name=" + value.nextElementSibling.firstChild.textContent;
    }

    function getYearsValue() {
        var value = document.querySelector('input[name="year"]:checked');
        document.getElementById('autoYear').innerHTML = value.nextElementSibling.firstChild.textContent;
        document.getElementById('autoYearSection').style.setProperty('display', 'block')
        document.cookie = "kasko_year=" + value.value;

        jQuery.ajax({
            url: "{{ route('kaskoCalculationAmount') }}",
            method: "GET",
            data: {
                'equipment_id': "{{ $_COOKIE['equipment_id'] ?? '' }}",
                'year': value.value
            },
            success: function (data) {
                document.cookie = "amountLiability=" + data.amountLiability;
                document.cookie = "insurancePremium=" + data.insurancePremium;
                document.getElementById("amountLiabilitySection").style.setProperty('display', 'block');
                document.getElementById("amountLiability").innerHTML = data.amountLiability;
                document.getElementById("insurancePremiumSection").style.setProperty('display', 'block');
                document.getElementById("insurancePremium").innerHTML = data.insurancePremium;
                document.getElementById("registrationPolicy").style.setProperty('display', 'block');
            },
            error: function (e) {
                console.error(e);
            }
        });
    }

    function removeCookies(...data) {
        for (var item in data) {
            document.cookie = data[item] + "= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
        }
        window.location.reload();
    }
</script>
@endsection
