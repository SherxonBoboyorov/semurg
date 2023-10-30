@extends('layouts.front')

@section('content')


<main>
    <div class="hero hero-img">
        <div class="container">
            <div class="breadcrumb">
                <h1 class="title">История компании</h1>
                <ul>
                    <li><a href="{{ route('/') }}">Главная</a></li>
                    <li><a>История компании</a></li>
                </ul>
            </div>
            <div class="hero-img__item" data-aos="zoom-in">
                <img src="{{ asset('front/images/employees/partners-img.png') }}" alt="">
            </div>
        </div>
    </div>
    <section class="history-company">
        <div class="container">
            <div class="parent">
                <div class="sidebar" data-aos="slide-right">
                    <ul>
                        <li><a href="{{ route('about-us') }}">О нас</a></li>
                        <li><a class="active" href="{{ route('history-company') }}">История компании</a></li>
                        <li><a href="{{ route('leadership-management') }}">Руководство и управление</a></li>
                        <li><a href="{{ route('licenses-certificates') }}">Лицензии и сертификаты</a></li>
                        <li><a href="{{ route('structure-company') }}">Структура компании</a></li>
                    </ul>
                </div>
                <div class="about-history-company-par">
                    <div class="content history-company__content">
                        <div class="history-company__content-list">
                            <div class="history-company__content-item">
                                <span class="active-year">20</span>
                                <ul class="history-company__year" style="transform: translateY(0px);">
                                    <li class="history-company__year-item active">15</li>
                                    <li class="history-company__year-item">17</li>
                                    <li class="history-company__year-item">18</li>
                                    <li class="history-company__year-item">20</li>
                                    <li class="history-company__year-item">22</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="history-company__year-info">
                            <li class="history-company__year-info-item active">
                                <h5>2015</h5>
                                <p class="text">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo
                                    enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed
                                    quia
                                    consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque
                                    porro
                                    quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci
                                    velit,
                                    sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam
                                    aliquam
                                    quaerat voluptatem.</p>
                            </li>
                            <li class="history-company__year-info-item">
                                <h5>2017</h5>
                                <p class="text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
                                    eum
                                    iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae
                                    consequatur, vel illum, qui dolorem eum fugiat</p>
                            </li>
                            <li class="history-company__year-info-item">
                                <h5>2018</h5>
                                <p class="text">At vero eos et accusamus et iusto odio dignissimos ducimus, qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas
                                    molestias excepturi sint, obcaecati cupiditate non provident</p>
                            </li>
                            <li class="history-company__year-info-item">
                                <h5>2020</h5>
                                <p class="text">Similique sunt in culpa, qui officia deserunt mollitia animi, id est
                                    laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
                                    distinctio.
                                    Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit,
                                    quo
                                    minus id, quod maxime placeat</p>
                            </li>
                            <li class="history-company__year-info-item">
                                <h5>2022</h5>
                                <p class="text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non
                                    recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut
                                    reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection