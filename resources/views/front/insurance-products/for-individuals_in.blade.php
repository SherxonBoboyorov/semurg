@extends('layouts.front')

@section('content')

    <main>
        <div class="hero hero-crumb" data-aos="flip-up">
            <div class="container">
                <div class="breadcrumb">
                    <h1 class="title">Каско</h1>
                    <ul>
                        <li><a href="{{ route('/') }}">Главная</a></li>
                        <li><a href="./for-individuals.html">Физическим лицам</a></li>
                        <li><a>Каско</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="for-individuals_in">
            <div class="container">
                <div data-aos="slide-up">
                    <h3 class="title3">Программа КАСКО</h3>
                    <h5 class="for-individuals_in__txt">Программа страхования для защиты автомобиля</h5>
                </div>

                <div class="img" data-aos="slide-up">
                    <img src="../../images/persons_in/persons_in-img1.png" alt="">
                </div>
                <p data-aos="slide-up" class="text">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto
                    beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut
                    odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt,
                    neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed
                    quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                    aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit
                    esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla
                    pariatur At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium
                    voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati
                    cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est
                    laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                    tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime
                    placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                    quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates
                    repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut
                    aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </p>
                <div class="img" data-aos="slide-up">
                    <img src="../../images/persons_in/persons_in-img2.png" alt="">
                </div>
                <div data-aos="slide-up">
                    <h3 class="title3">Что входит в страховой случай?</h3>
                    <p class="text">• Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                        doloremque
                        laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt, explicabo.
                        <br>
                        <br>
                        • Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est,
                        qui
                        dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi
                        tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
                <div data-aos="slide-up">
                    <h3 class="title3">Что делать при страховом случае?</h3>
                    <p class="text">• At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis
                        praesentium
                        voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati
                        cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est
                        laborum et dolorum fuga.
                        <br>
                        <br>
                        • Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                        est
                        eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis
                        voluptas assumenda est, omnis dolor repellendus.
                        <br>
                        <br>
                        • Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut
                        et
                        voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                        sapiente
                        delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                        asperiores repellat.
                    </p>
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