@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Входящее перестрахование</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a>Входящее перестрахование</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="incoming-reinsurance">
            <div class="container" data-aos="slide-up">
                <p class="text">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            </div>
            <div class="our-clients" data-aos="slide-up">
                <div class="container">
                    <h1 class="title" id="incoming-reinsurance__title">Наши международные партнеры по перестрахованию включают</h1>
                    <div class="swiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../../images/partners/partners-img1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="../../images/partners/partners-img2.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="../../images/partners/partners-img3.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="../../images/partners/partners-img4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="feedback" data-aos="zoom-in">
            <div class="container">
                <h1 class="title3">Обратная связь</h1>
                <form class="feedback__form" action="">
                    <input class="base-input" type="text" placeholder="ФИО">
                    <input class="base-input" type="text" placeholder="Телефон">
                    <textarea class="base-input" placeholder="Комментарий"></textarea>
                    <button class="form-btn">Отправить</button>
                </form>
            </div>
        </section>
    </main>

@endsection