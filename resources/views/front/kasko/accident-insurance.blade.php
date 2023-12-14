@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Страхование от несчастныx случаев</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Страхование от несчастныx случаев</a></li>
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
                    <div class="kacko__info accident-insurance__info" data-aos="zoom-in">
                        <ul class="add-family-member">
                            <li class="information">
                                <label>
                                    <span>Укажите возраст</span>
                                    <input class="base-input" oninput="personType(event)" name="age" type="date">
                                </label>
                                <label>
                                    <span>Добавить члена семьи</span>
                                    <div>
                                        <button onclick="addFamilyMemberItem()" class="add-member-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M0 10C0 9.07952 0.746192 8.33333 1.66667 8.33333H18.3333C19.2538 8.33333 20 9.07952 20 10C20 10.9205 19.2538 11.6667 18.3333 11.6667H1.66667C0.746192 11.6667 0 10.9205 0 10Z"
                                                    fill="white" />
                                                <path
                                                    d="M10 0C10.9205 4.02352e-08 11.6667 0.746192 11.6667 1.66667V18.3333C11.6667 19.2538 10.9205 20 10 20C9.07952 20 8.33333 19.2538 8.33333 18.3333L8.33333 1.66667C8.33333 0.746192 9.07952 -4.02352e-08 10 0Z"
                                                    fill="white" />
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                            </li>
                            <li class="information hidden" id="add-family-member-item2">
                                <label>
                                    <input class="base-input" oninput="secondType(event)" id="ageinput2" name="secondage" type="date">
                                </label>
                                <label>
                                    <div class="add-member-btns">
                                        <button onclick="addFamilyMemberItem()" class="add-member-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M0 10C0 9.07952 0.746192 8.33333 1.66667 8.33333H18.3333C19.2538 8.33333 20 9.07952 20 10C20 10.9205 19.2538 11.6667 18.3333 11.6667H1.66667C0.746192 11.6667 0 10.9205 0 10Z"
                                                    fill="white" />
                                                <path
                                                    d="M10 0C10.9205 4.02352e-08 11.6667 0.746192 11.6667 1.66667V18.3333C11.6667 19.2538 10.9205 20 10 20C9.07952 20 8.33333 19.2538 8.33333 18.3333L8.33333 1.66667C8.33333 0.746192 9.07952 -4.02352e-08 10 0Z"
                                                    fill="white" />
                                            </svg>
                                        </button>
                                        <button onclick="removeFamilyMemberItem()" class="add-member-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M0 10C0 9.07952 0.746192 8.33333 1.66667 8.33333H18.3333C19.2538 8.33333 20 9.07952 20 10C20 10.9205 19.2538 11.6667 18.3333 11.6667H1.66667C0.746192 11.6667 0 10.9205 0 10Z"
                                                    fill="white" />
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                            </li>
                        </ul>
                        <div class="line"></div>

                        <div class="information wrapped">
                            <label>
                                <span>Дата начала страховки</span>
                                <input class="base-input" id="firstInput" oninput="firstInputValue(event)" type="date">
                            </label>
                            <label>
                                <span>Конечная дата страховки</span>
                                <input class="base-input" id="lastInput" type="date" disabled>
                            </label>
                        </div>

                        <div class="line"></div>
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
                        <div class="line"></div>
                        <div class="information">
                            <label class="max-money">
                                <span>Максимальная сумма покрытия</span>
                                <input class="base-input" type="text" value="100000" id="inputNumber" name="">
                            </label>
                        </div>
                        <div class="maximum-coverage-amount">
                            <div class="maximum-coverage-amount__top">
                                <span>5 000 000</span>
                                <span>20 000 000</span>
                            </div>
                            <div class="range-slider">
                                <input class="maximum-coverage-amount__input slider" type="range" id="rangeNumber"
                                   min="100000" max="20000000" step="20000" value="100000">
                                   <div class="slider-thumb" id="rangeThumbTooltip">
                                    <div class="tooltip"></div>
                                </div>
                                <div class="progress" id="rangeProgress"></div>
                            </div>
                        </div>
                        <div class="line"></div>
                        {{-- <div class="btns odd-btn">
                            <a href="#" class="btn-right btn form-btn">Далее</a>
                        </div> --}}
                    </div>
                    <div class="kacko__result" data-aos="fade-up">
                        <h1>Результаты расчета</h1>
                        <ul class="res-list">
                            <li class="res-list__item" id="person_section" style="display: none;">
                                <p>Число персон</p>
                                <h4 id="person">1</h4>
                            </li>
                            <li class="res-list__item" id="age_section" style="display: none;">
                                <p>Возраст</p>
                                <h4 id="age"></h4>
                                <h4 id="secondage"></h4>
                            </li>
                            <li class="res-list__item" id="start_section" style="display: none;">
                                <p>Дата начала</p>
                                <h4 id="start">26.10.2023</h4>
                            </li>
                            <li class="res-list__item" id="expiration_section" style="display: none;">
                                <p>Дата окончания</p>
                                <h4 id="expiration">26.10.2024</h4>
                            </li>
                            <li class="res-list__item" id="interior_section">
                                <p>Сумма покрытия</p>
                                <h4 id="interior">5 000 000 сум</h4>
                            </li>
                            <li class="res-list__item" id="period_section" style="display: none;">
                                <p>Срок действия полиса</p>
                                <h4 id="period">12 месяцев</h4>
                            </li>
                            <li class="res-list__item" id="amount_section" style="display: none;">
                                <p>Стоимость полиса:</p>
                                <h4 class="res" id="amound">16 000 сум</h4>
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
                <form action="" class="kacko-modal__form-el" method="POST">
                    @csrf
                    <input type="hidden" name="form_person" value="">
                    <input type="hidden" name="form_age" value="">
                    <input type="hidden" name="form_start" value="">
                    <input type="hidden" name="form_expiration" value="">
                    <input type="hidden" name="form_interior" value="">
                    <input type="hidden" name="form_period" value="">
                    <input type="hidden" name="form_amound" value="">
                    <input class="base-input" type="text" placeholder="ФИО">
                    <input class="base-input" type="text" placeholder="Номер телефона">
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



    let firstInput = document.getElementById("firstInput");
    let lastInput = document.getElementById("lastInput");


    function firstInputValue(event) {
        let inputValue = event.target.value;
        let arr = inputValue.split("-");
        let year = Number(arr[0]) + 1;
        let day = null;
        if (Number(arr[2]) != 1) {
            day = Number(arr[2]) - 1;
        }else {
            day = Number(arr[2])
        }
        let result = [];
        result.push(String(year), arr[1], String(day));

        lastInput.value = result.join("-")
    }









        let personNumber = 1;

        function personType(event)
        {
            var age = event.target.value;
            document.getElementById("age_section").style.setProperty('display', 'block');
            document.getElementById("age").innerHTML = age;
            document.querySelector('input[name="form_age"]').value = age;
            document.querySelector('#person_section').style.setProperty('display', 'block');
            document.querySelector('#person').textContent = personNumber;
            document.querySelector('input[name="form_person"]').value = personNumber;
        }

        function secondType(event)
        {
            var age = event.target.value;
            var secondage = event.target.value;
            if (event.target.value) {
            document.getElementById("age_section").style.setProperty('display', 'block');
            document.getElementById("secondage").innerHTML = age;
            document.querySelector('input[name="form_age"]').value = age;
            addFamilyMemberItem(age);
            }else {
            document.getElementById("age_section").style.setProperty('display', 'none');
            }
        }

        function removeFamilyMemberItem() {
            document.querySelector('#add-family-member-item2').classList.add('hidden');
            document.getElementById("secondage").style.setProperty('display', 'none');
            document.getElementById('ageinput2').value = '';
            personNumber = 1;
            document.querySelector('#person').textContent = personNumber;
        }

        function addFamilyMemberItem(age)
        {
            document.querySelector('#add-family-member-item2').classList.remove('hidden');
            personNumber = 2;
            document.querySelector('#person').textContent = personNumber;
            document.querySelector('input[name="form_person"]').value = personNumber;
            if (age) {
                document.getElementById('ageinput2').value = age;
                document.getElementById("secondage").style.setProperty('display', 'block');
            }
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
            document.getElementById("amount").innerHTML = UZS.format(rangeNumber.value * 0.015);
            document.querySelector('input[name="form_amount"]').value = rangeNumber.value * 0.015;
        } else if (value.value == 12) {
            document.getElementById("amount").innerHTML = UZS.format(rangeNumber.value * 0.03);
            document.querySelector('input[name="form_amount"]').value = rangeNumber.value * 0.03;
        }
    }
</script>
@endsection
