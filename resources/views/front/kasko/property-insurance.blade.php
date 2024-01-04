@extends('layouts.front')

@section('content')
    <main>
        <div class="hero hero-crumb">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Страхование имущества</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Страхование имущества</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="kacko accident-insurance">
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
                <div class="kacko__content">
                    <div class="kacko__info accident-insurance__info">
                        <h3>Что будет застраховано</h3>
                        <div class="types">
                            <div class="types__item">
                                <label>
                                    <input type="radio" onclick="apartmentType()" name="kacko-el" data-value="Квартира">
                                    <span>Квартира</span>
                                </label>
                            </div>
                            <div class="types__item">
                                <label>
                                    <input type="radio" onclick="apartmentType()" name="kacko-el" data-value="Дом">
                                    <span>Дом</span>
                                </label>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="information">
                            <label class="max-money">
                                <span>Где находится недвижимость?</span>
                                <div class="information__select base-input">
                                    <select name="regions" id="" id="regions" onchange="getRegion(event)">
                                        <option value="" disabled selected>Выберите местоположение</option>
                                        <option value="Ташкент">Ташкент</option>
                                        <option value="Республика Каракалпакстан">Республика Каракалпакстан</option>
                                        <option value="Андижанская область">Андижанская область</option>
                                        <option value="Бухарская область">Бухарская область</option>
                                        <option value="Джизакская область">Джизакская область</option>
                                        <option value="Кашкадарьинская область">Кашкадарьинская область</option>
                                        <option value="Навоийская область">Навоийская область</option>
                                        <option value="Наманганская область">Наманганская область</option>
                                        <option value="Самаркандская область">Самаркандская область</option>
                                        <option value="Сурхандарьинская область">Сурхандарьинская область</option>
                                        <option value="Сырдарьинская область">Сырдарьинская область</option>
                                        <option value="Ташкентская область">Ташкентская область</option>
                                        <option value="Ферганская область">Ферганская область</option>
                                        <option value="Хорезмская область">Хорезмская область</option>
                                    </select>
                                    <div class="abso">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                            viewBox="0 0 18 11" fill="none">
                                            <path d="M0.999999 0.999999L9 9.03347L17 1" stroke="#0B4848"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="line"></div>
                        <h3 class="property-insurance-title">Что будет застраховано</h3>
                        <ul class="property-insurance-list">
                            <li>Чрезвычайная ситуация</li>
                            <li>Механическое воздействие</li>
                            <li>Падение летательных аппаратов и
                                их частей</li>
                            <li>Противоправные действия третьих
                                лиц</li>
                            <li> Взрывы</li>
                            <li>Стихийные бедствия</li>
                            <li>Залив</li>
                                <li>Удар молнии</li>
                            <li>Падение посторонних предметов</li>
                            <li>Пожар</li>
                        </ul>
                        <div class="line"></div>
                        <div class="information">
                            <label class="max-money">
                                <span>Внутренняя отделка и инженерное оборудование</span>
                                <input class="base-input" type="text" value="200000000"  id="inputNumber" name="">
                            </label>
                        </div>
                        <div class="maximum-coverage-amount">
                            <div class="maximum-coverage-amount__top">
                                <span>200 000 000</span>
                                <span>5 000 000 000</span>
                            </div>
                            <div class="range-slider">
                                <input class="maximum-coverage-amount__input slider" type="range" id="rangeNumber"
                                    min="200000000" max="5000000000" step="500000" value="200000000">
                                <div class="slider-thumb" id="rangeThumbTooltip">
                                    <div class="tooltip"></div>
                                </div>
                                <div class="progress" id="rangeProgress"></div>
                            </div>
                        </div>
                        <div class="property-insurance-term">
                            <h3 class="types-name">Срок действия полиса</h3>
                            <div class="types">
                                <div class="types__item">
                                    <label>
                                        <input type="radio" name="period" onclick="period()" data-value="6 месяцев" value="6">
                                        <span>6 месяцев</span>
                                    </label>
                                </div>
                                <div class="types__item">
                                    <label>
                                        <input type="radio" name="period" onclick="period()" data-value="12 месяцев" value="12">
                                        <span>12 месяцев</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kacko__result">
                        <h1>Результаты расчета</h1>
                        <ul class="res-list">
                            <li class="res-list__item" id="apartment_section" style="display: none;">
                                <p>Жилое помещение</p>
                                <h4 id="apartment">Квартира</h4>
                            </li>
                            <li class="res-list__item" id="region_section" style="display: none;">
                                <p>Регион</p>
                                <h4 id="region">Ташкент</h4>
                            </li>
                            <li class="res-list__item" id="interior_section">
                                <p>Внутренняя отделка и инженерное оборудование</p>
                                <h4 id="interior">200 000 000 UZS</h4>
                            </li>
                            <li class="res-list__item" id="period_section" style="display: none;">
                                <p>Срок действия полиса</p>
                                <h4 id="period">6 месяцев</h4>
                            </li>
                            <li class="res-list__item" id="amount_section" style="display: none;">
                                <p>Стоимость полиса:</p>
                                <h4 class="res" id="amount">100 000 сум</h4>
                            </li>
                        </ul>
                        <button onclick="openKackoModal()" class="btn form-btn btn-right" id="buttonApartmentModal" style="display: none;">
                            Отправить заявку на оформление полиса
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="kacko-modal hidden">
            <div class="kacko-modal__form">
                <h1>Заявка на оформление полиса</h1>
                <form action="{{ route('apartmentInsurance') }}" class="kacko-modal__form-el" method="POST">
                    @csrf
                    <input type="hidden" name="form_apartment" value="">
                    <input type="hidden" name="form_region" value="">
                    <input type="hidden" name="form_interior" value="">
                    <input type="hidden" name="form_amount" value="">
                    <input type="hidden" name="form_period" value="">
                    <input class="base-input" name="name" type="text" placeholder="ФИО">
                    <input class="base-input" name="phone" type="text" placeholder="Номер телефона">
                    <button onclick="closeKackoModal()" class="form-btn">Оформить Заявку</button>
                </form>
            </div>
        </div>

        @include('layouts/ocagobanner')

    </main>
@endsection

@section('custom_js')
<script src="https://unpkg.com/imask"></script>
<script>
var UZS = new Intl.NumberFormat('ae', {
    style: 'currency',
    currency: "UZS",
});

IMask(
    document.getElementById('inputNumber'),
    {
        mask: 'num',
        blocks: {
        num: {
            // nested masks are available!
            mask: Number,
            thousandsSeparator: ' '
        }
        }
    }
)
</script>
<script>
    let inputNumber = document.getElementById("inputNumber");
    let rangeNumber = document.getElementById("rangeNumber");
    var MySlider = document.querySelector(".slider");
    document.querySelector('input[name="form_interior"]').value = MySlider.value;

    inputNumber.addEventListener('input', function (e) {
        document.getElementById("interior_section").style.setProperty('display', 'block')
        document.getElementById("interior").innerHTML = UZS.format(e.target.value.replace(/ /g, ""))
        rangeNumber.value = e.target.value.replace(/ /g, "");
        document.getElementById('rangeThumbTooltip').style.setProperty('left', (MySlider.value / MySlider.getAttribute("max")) * 100 + "%");
        document.getElementById('rangeProgress').style.setProperty('width', (MySlider.value / MySlider.getAttribute("max")) * 100 + "%");
        document.querySelector('.tooltip').innerHTML = UZS.format(MySlider.value);
        document.querySelector('input[name="form_interior"]').value = UZS.format(MySlider.value);
    })

    rangeNumber.addEventListener('input', function (e) {
        document.getElementById("interior_section").style.setProperty('display', 'block')
        document.getElementById("interior").innerHTML = UZS.format(e.target.value)
        inputNumber.value = e.target.value;
        rangeNumber.value = e.target.value;
        IMask(
            document.getElementById('inputNumber'),
            {
                mask: 'num',
                blocks: {
                num: {
                    // nested masks are available!
                    mask: Number,
                    thousandsSeparator: ' '
                }
                }
            }
        );
        document.querySelector('input[name="form_interior"]').value = UZS.format(e.target.value);
    })

    function apartmentType()
    {
        var value = document.querySelector('input[name="kacko-el"]:checked');
        document.getElementById("apartment_section").style.setProperty('display', 'block');
        document.getElementById("apartment").innerHTML = value.getAttribute('data-value');
        document.querySelector('input[name="form_apartment"]').value = value.getAttribute('data-value');
    }

    function getRegion(event)
    {
        var region = event.target.value;
        document.getElementById("region_section").style.setProperty('display', 'block');
        document.getElementById("region").innerHTML = region;
        document.querySelector('input[name="form_region"]').value = region;
    }

    function period()
    {
        var value = document.querySelector('input[name="period"]:checked');
        document.getElementById("period_section").style.setProperty('display', 'block');
        document.getElementById("period").innerHTML = value.getAttribute('data-value');
        document.getElementById("amount_section").style.setProperty('display', 'block');
        document.getElementById("buttonApartmentModal").style.setProperty('display', 'block');
        document.querySelector('input[name="form_period"]').value = value.getAttribute('data-value');

        if (value.value == 6) {
            document.getElementById("amount").innerHTML = rangeNumber.value * 0.0015;
            document.querySelector('input[name="form_amount"]').value = rangeNumber.value * 0.0015;
        } else if (value.value == 12) {
            document.getElementById("amount").innerHTML = rangeNumber.value * 0.003;
            document.querySelector('input[name="form_amount"]').value = rangeNumber.value * 0.003;
        }
    }
</script>
@endsection
