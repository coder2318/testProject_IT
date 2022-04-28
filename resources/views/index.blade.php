@extends('layouts.layout')

@section('content')

    <!-- ======= Hero Section ======= -->
    <div id="hero">
        <section class="d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="banner-content">
                    <div class="mb-5">
                        <h1>IT-Visa в Узбекистане</h1>
                        <!-- <h2>Рабочая виза сроком до 3-х лет<br>
              для IT-компаний и IT-специалистов</h2> -->
                        <h2>Программа релокации</h2>
                    </div>
                    <a href="#privileges" class="btn btn-outline-white scrollto me-4">IT Компаниям</a>
                    <a href="#ITParkHelps" class="btn btn-outline-white scrollto">IT специалистам</a>
                </div>
            </div>
        </section>
    </div><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/epam.svg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/exadel.svg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/iTechArt.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/LGCNS.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/selectel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/UZINFOCOM_logo.png') }}" class="img-fluid" alt=""
                            style="max-width: 60%;">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <section>
            <div class="container">

                <div class="section-title">
                    <h2>IT-Visa - это</h2>
                </div>

                <div class="row img-boxes">
                    <div class="col-md-4">
                        <div class="shadow-box rounded">
                            <div class="shadow-box-ico">
                                <img src="{{ asset('img/icons/airplane.svg') }}" alt="">
                            </div>
                            <div class="shadow-box-text">Беспрепятственный <br>въезд и пребывание <br>в Узбекистане
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shadow-box rounded">
                            <div class="shadow-box-ico">
                                <img src="{{ asset('img/icons/document-text.svg') }}" alt="">
                            </div>
                            <div class="shadow-box-text">Равные социальные<br>условия с гражданами Узбекистана</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shadow-box rounded">
                            <div class="shadow-box-ico">
                                <img src="{{ asset('img/icons/home.svg') }}" alt="">
                            </div>
                            <div class="shadow-box-text">Упрощенный порядок<br> получения <b>ВНЖ</b></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="WhoCanGet">
            <div class="container">

                <div class="section-title">
                    <h2>Кто может получить IT-Visa</h2>
                </div>

                <div class="shadow-box p-0">
                    <div class="row">
                        <div class="col-md-4 withSmBorder">
                            <div class="p-5">
                                <div class="shadow-box-ico">
                                    <img src="{{ asset('img/icons/card-pos.svg') }}" alt="">
                                </div>
                                <div class="shadow-box-text mb-4">Инвесторы</div>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc-4zCHjgKTo19oLgo4A1n-TGlfj8bGPR3-nYQxM38T4B76uA/viewform"
                                    target="_blank" class="btn btn-success">Подать заявку</a>
                            </div>
                        </div>
                        <div class="col-md-4 withSmBorder">
                            <div class="p-5">
                                <div class="shadow-box-ico">
                                    <img src="{{ asset('img/icons/tag-user.svg') }}" alt="">
                                </div>
                                <div class="shadow-box-text mb-4">Учредители<br> резидентов IT Park</div>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdzucv-31NR_SYI6gfpUKRN29PYodlwfXPkXnUTiW8lTcZfEw/viewform"
                                    target="_blank" class="btn btn-success">Подать заявку</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-5">
                                <div class="shadow-box-ico">
                                    <img src="{{ asset('img/icons/code.svg') }}" alt="">
                                </div>
                                <div class="shadow-box-text mb-4">IT-специалисты</div>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTidsMnrzWhoVOA9t5EihcboOd4qyKKoUWUiRyOuZkhiJ6yQ/viewform"
                                    target="_blank" class="btn btn-success">Подать заявку</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-muted text-center mt-4 fs18"><em>*Для членов семьи вышеуказанных категорий
                        предоставляется гостевая виза</em></div>

            </div>
        </section>


        <section id="privileges">
            <div class="container">

                <div class="section-title">
                    <h2>Налоговые льготы и преференции для резидентов IT Park</h2>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-1">
                                <li>
                                    <div class="list-1-item-ico">0%</div>
                                    <div class="list-1-item-text">Полное освобождение от всех видов налогов</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">0%</div>
                                    <div class="list-1-item-text">Освобождение от таможенных платежей</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">7,5%</div>
                                    <div class="list-1-item-text">Ставка подоходного налога</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">5%</div>
                                    <div class="list-1-item-text">Налог на дивиденды</div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-1">
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Виртуальный офис</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Выплаты дивидендов в иностранной валюте</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Выплаты заработной платы в иностранной валюте</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Разрешение на работу для иностранцев не требуется
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="https://it-market.uz/my/residents/admission/choose/" class="btn btn-success"
                            target="_blank">Стать резидентом IT Park</a>
                    </div>

                </div>

            </div>
        </section>


        <section id="ITParkHelps">
            <div class="container">

                <div class="section-title">
                    <h2>В рамках программы релокации<br> IT Park помогает:</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="shadow-box bg rounded">
                            <div class="card-title mb-5">
                                <img src="{{ asset('img/icons/buliding.svg') }}" alt="">
                                IT-Компаниям
                            </div>
                            <ul class="list-1 text-start mb-5">
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Регистрация юридического лица</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Открытие банковского счета</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Постановка на учет в налоговых органах</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Поиск специалистов</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Поиск и аренда офиса</div>
                                </li>
                            </ul>

                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdkikc9X_OLqMGGsqK6PTmEWo23A3gP5Ute3QsxvtgfUFZUdQ/viewform"
                                target="_blank" class="btn btn-success">Подать заявку</a>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shadow-box bg rounded">
                            <div class="card-title mb-5">
                                <img src="{{ asset('img/icons/code-circle.svg') }}" alt="">
                                IT-Специалистам
                            </div>
                            <ul class="list-1 text-start mb-5">
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Трудоустройство в компании</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Оформление медицинской страховки</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Поиск жилья</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}x" alt="">
                                    </div>
                                    <div class="list-1-item-text">Открытие банковского счёта</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">Оформление документов</div>
                                </li>
                            </ul>

                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdtrkniUrvAZmcyyg2AL0O3fP-pYb5iOcX75Sau9bf57wRx2A/viewform"
                                target="_blank" class="btn btn-success">Подать заявку</a>

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="section-bg mt-5 mb-5">
            <div class="container">

                <div class="section-title mb-0">
                    <h2 class="mb-0">МЫ НЕ ОСТАВИМ ВАС ОДНОГО В НАШЕЙ СТРАНЕ!</h2>
                </div>

            </div>
        </section>


        <section id="WhyUzbekistan">
            <div class="container">

                <div class="section-title">
                    <h2>Почему Узбекистан?</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/Uzbekistan-3_0 1.png') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card heightFull">
                            <div class="row align-items-center heightFull">
                                <div class="col-md-11 fs20 withFullBorder">
                                    Узбекистан, будучи одним из центров легендарного Шелкового пути, обладает уникальной
                                    коллекцией многочисленных археологических и архитектурных памятников самых разных
                                    эпох, которые соприкасаются с современностью.
                                </div>
                                <div class="col-md-1 text-center">
                                    <img src="{{ asset('img/icons/like-shapes.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    {{-- Must fix this --}}
                    <a href="{{ asset('files/guide_Uzbekistan.pdf') }}" class="btn btn-success" target="_blank">
                        Скачать буклет об Узбекистане
                        <img class="ms-3" src="{{ asset('img/icons/document-download.svg') }}" alt="">
                    </a>
                </div>

            </div>
        </section>

        <section>
            <div class="container">

                <div class="section-title">
                    <h2>Узбекистан - это</h2>
                </div>

                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image"
                                style="background-image: url('{{ asset('img/uploaded 1.png') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">Доступные цены</div>
                                <div class="text-muted fs20">Ташкент входит в тройку самых дешевых городов мира</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image" style="background-image: url('{{ asset('img/nazy.jpg') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">Многокультурность</div>
                                <div class="text-muted fs20">Более <b class="txt-success">100</b> народностей и
                                    национальностей</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image"
                                style="background-image: url('{{ asset('img/60259f2846e4fe53e3a31573 1.png') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">Толерантность</div>
                                <div class="text-muted fs20">Представители различных религий и вероисповеданий</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image"
                                style="background-image: url('{{ asset('img/eeb89cc2507342f492ffd8005fc08b2a.max-2500x1500.jpg') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">Потрясающий климат</div>
                                <div class="text-muted fs20">Тёплая и солнечная погода <b class="txt-success">320</b>
                                    дней в году</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image"
                                style="background-image: url('{{ asset('img/scale_1200.webp') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">Богатая национальная кухня</div>
                                <div class="text-muted fs20">Один плов имеет более <b class="txt-success">200</b>
                                    разновидностей</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section id="reviews">
            <div class="container">

                <div class="section-title">
                    <h2>Отзывы</h2>
                </div>

                <div class="reviews swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-1.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Наталья</div>
                                        <div class="text-muted">Software Engineer</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">
                                    У нас самые положительные впечатления, все очень гостеприимные, предлагают помощь в
                                    любых ситуациях. Сформировалось мнение, что город очень чистый, активно развивается.
                                    Архитектура для нас новая, чудесные узоры и мозаики. Конечно, уже успели оценить
                                    еду, очень вкусно! Ну а ребенку очень понравились детские развлекательные центры.
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Дмитрий</div>
                                        <div class="text-muted">Front-End разработчик</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">В Ташкент я ехал со своей дочкой, ей сейчас 4,5 года, и
                                    это значительно повлияло на выбор локации. Перед поездкой я думал, что в Ташкенте
                                    будет довольно пустынно. Оказалось, что это довольно большой город, где много разных
                                    зданий, как советских, так и современных, много новых зданий еще строится, думаю,
                                    если приду сюда лет через 10, то не узнаю этот город. Хочу отметить, что все люди,
                                    которые мне попадались, были очень дружелюбны, приветливы и гостеприимны.</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-1.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Екатерина</div>
                                        <div class="text-muted">Administrator</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">В Ургенче была пересадка в Ташкент, и мы не успевали на
                                    самолёт, т.к. рейс задержали, но работники аэропорта буквально попросили самолёт
                                    подождать нас (3человека). Очень понравилось такое отношение. От Ташкента только
                                    приятные эмоции, нравится, что организована поддержка. IT Park очень помогает, все
                                    быстро и оперативно. Пока только воспользовались услугами агентств по съему
                                    квартиры. Утром написала агенту, за нами заехали, посмотрели, все устроило и сразу
                                    взяли. Вкусная еда, первый раз пробовали настоящий узбекский плов и самсу.</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Алекс</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">Хорошие авиалинии Uzbekistan Airways, отзывчивые -
                                    прямо сейчас 200+ коллег пользуются в режиме реального времени, так сказать.</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Туркан </div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">В Ташкенте в каждом районе есть все. Детсады, парки,
                                    магазины. Возможно, не прям рядом, но в шаговой доступности.</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Петр </div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">Не перестаю удивляться насколько здесь открытые и
                                    общительные люди. Сегодня в ТЦ жена покупала носки - молодой человек (продавец)
                                    спрашивал у нее - как узнать, любит его девушка или нет (на полном серьезе!) Короче,
                                    два раза вышел на улицу, в телефонной книжке +2 номера телефона :)</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">Александр</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">Выражаю огромную благодарность ребятам, которые
                                    помогают с трансфером и освоиться в Ташкенте! Вы действительно теплые и душевные
                                    люди!</div>
                            </div>
                        </div>

                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-prev">
                            <img src="{{ asset('img/icons/arrow-circle-right.svg') }}" alt="">
                        </div>
                        <div class="swiper-button-next">
                            <img src="{{ asset('img/icons/arrow-circle-left.svg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="faq" class="pb-0">
            <div class="container">
                <div class="section-title">
                    <h2>Часто задаваемые вопросы</h2>
                </div>
            </div>
            <section class="section-bg faq">
                <div class="container">

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-1">
                                    Что такое IT-Visa?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-1" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>
                                        <b>IT-Visa</b> – это многократная виза, которая выдается со сроком до трех лет.
                                        Срок ее действия продлевается на неопределенный срок без необходимости выезда с
                                        территории Республики Узбекистан.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-2">
                                    Какие преимущества дает IT-Visa?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-2" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>получать образование и медицинские услуги на условиях, предусмотренных для
                                            граждан Республики Узбекистан;</li>
                                        <li>без обязанности перерегистрации по месту жительства находится в любом
                                            регионе Узбекистана;</li>
                                        <li>получить в упрощенном порядке вид на жительство.</li>
                                    </ul>
                                    <p><b>Важно.</b> Данные условия также распространяются на членов семьи, обладателей
                                        IT-Visa.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-17">
                                    Порядок получения IT-Visa
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-17" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Соискатели предоставляют:</p>
                                    <ul>
                                        <li>резюме о своей деятельности;</li>
                                        <li>информацию о планируемых проектах в Узбекистане (для инвесторов);</li>
                                        <li>информацию о доходах за последние 12 месяцев (для инвесторов и
                                            IT-специалистов);</li>
                                        <li>документы, подтверждающие учреждение (участие) в компании – резиденте IT
                                            Park за последние 6 месяцев.</li>
                                    </ul>
                                    <p>На основе вышеуказанных данных IT Park выдается соискателю заключение о
                                        соответствии требованиям IT-Visa.</p>
                                    <p>В консульские учреждения Узбекистана зарубежом или органы внутренних дел по месту
                                        регистрации иностранного гражданина в Узбекистане подается заявление о получении
                                        IT-Visa.</p>
                                    <p>IT-Visa – выдается в трехдневный срок.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-3">
                                    Как получить статус резидента IT Park?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-3" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Для получения статуса резидента IT Park необходимо:</p>
                                    <ul>
                                        <li>зарегистрироваться в качестве юридического лица на территории Республики
                                            Узбекистан;</li>
                                        <li>осуществлять вид (виды) деятельности в соответствии с Перечнем видов
                                            деятельности, разрешенных к осуществлению резидентами IT Park (<a
                                                href="https://lex.uz/docs/4422256#4424647"
                                                target="_blank">https://lex.uz/docs/4422256</a>)</li>
                                        <li>подать экономически обоснованный бизнес-план на портале <a
                                                href="https://it-market.uz/" target="_blank">https://it-market.uz/</a>
                                        </li>
                                    </ul>
                                    <p>
                                        <b>IT-Visa</b> – это многократная виза, которая выдается со сроком до трех лет.
                                        Срок ее действия продлевается на неопределенный срок без необходимости выезда с
                                        территории Республики Узбекистан.
                                    </p>
                                </div>
                            </li>


                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-4">
                                    Какие права у резидента IT Park?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-4" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p><b>Резидент имеет право:</b></p>
                                    <ul>
                                        <li>осуществлять свою деятельность по всей территории Республики Узбекистан;
                                        </li>
                                        <li>пользоваться налоговыми льготами при реализации товаров и услуг, а также
                                            получении доходов от роялти, совместной деятельности и курсовой разницы, при
                                            осуществлении видов деятельности в соответствии с Перечнем;</li>
                                        <li>пользоваться таможенными льготами;</li>
                                        <li>самостоятельно определять основные направления своей деятельности, согласно
                                            <a href="https://lex.uz/docs/4422256#4424647" target="_blank">Перечню</a>
                                            (<a href="https://lex.uz/docs/4422256#4424647"
                                                target="_blank">https://lex.uz/docs/4422256#4424647</a>);
                                        </li>
                                        <li>использовать товарный знак или знак обслуживания IT Park, в том числе его
                                            проставление на фирменных бланках, фирменных вывесках, визитных карточках,
                                            рекламных материалах, с обязательным использованием обозначения «Резидент IT
                                            Park»;</li>
                                        <li>изменять и дополнять бизнес-план и вносить на утверждение в IT Park;</li>
                                        <li>применять удобные для них условия и формы оплаты и расчетов за
                                            экспортируемые услуги;</li>
                                        <li>осуществлять в пределах поступлений от экспорта товаров (работ, услуг)
                                            выплату дивидендов в иностранной валюте на международные платежные карты;
                                        </li>
                                        <li>осуществлять в пределах поступлений от экспорта товаров (работ, услуг)
                                            выплату заработной платы иностранным специалистам в иностранной валюте на
                                            международные платежные карты;</li>
                                        <li>осуществлять экспорт посредством онлайновых магазинов без наличия
                                            экспортного контракта;</li>
                                        <li>привлекать иностранных специалистов без получения разрешения уполномоченных
                                            органов;</li>
                                        <li>пользоваться «Виртуальным офисом».</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-5">
                                    Какие обязанности у резидента IT Park?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-5" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>осуществлять исключительно указанные в бизнес-плане виды деятельности
                                            согласно Перечню;</li>
                                        <li>осуществлять новые виды деятельности, не указанные в бизнес-плане, только
                                            после утверждения IT Park нового (дополнительного) бизнес-плана;</li>
                                        <li>соблюдать договор об условиях деятельности резидента, заключенного им с IT
                                            Park;</li>
                                        <li>ежеквартально не позднее 15-го числа, следующего за отчетным кварталом,
                                            предоставлять информацию о своей деятельности, включая копии статистической
                                            и налоговой отчетности;</li>
                                        <li>ежегодно до 1 июля года, следующего за отчетным годом, проводить
                                            обязательный аудит финансово-хозяйственной деятельности и аудит специального
                                            вопроса и направлять одну копию аудиторского отчета и аудиторского
                                            заключения в IT Park;</li>
                                        <li>ежемесячно не позднее 20-го числа месяца, следующего за отчетным периодом,
                                            перечислять на депозитный счет Дирекции IT Park отчисления в размере одного
                                            процента от совокупного дохода;</li>
                                        <li>ежегодно до 15 января, следующим отчетного года, предоставлять IT Park
                                            информацию о проводимых курсах обучения по информационным технологиям, в
                                            случае организации таковых, а также согласовывать программу обучения в
                                            рамках данных курсов.</li>
                                    </ul>
                                    <p><b>Примечание:</b></p>
                                    <p><b>* документы направляются через веб-портал <a href="https://it-market.uz/"
                                                target="_blank">www.it-market.uz</a></b></p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-6">
                                    Что такое Виртуальный офис?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-6" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>Услуга «Виртуальный офис» позволяет резидентам IT Park, не покупая или
                                            приобретая в аренду недвижимость иметь юридический (почтовый) адрес.</li>
                                        <li>Наличие «Виртуального офиса»:</li>
                                        <li>не может являться основанием для отнесения данного резидента к критерию
                                            высокого налогового риска, и применению мер налогового воздействия, в том
                                            числе приостановления свидетельства плательщика НДС в связи с отсутствием
                                            собственной недвижимости, договоров аренды или безвозмездного пользования
                                            недвижимостью;</li>
                                        <li>не может являться основанием для приостановления операций по счетам
                                            юридических лиц по основанию отсутствия резидента по месту юридического
                                            адреса (адреса Виртуального офиса);</li>
                                        <li>освобождает от обязательной регистрации договоров аренды недвижимости на
                                            юридический адрес;</li>
                                        <li>освобождает от перевода жилых помещений, работников резидента IT Park, в
                                            нежилые помещения для их использования в деятельности.</li>
                                        <li>Предоставление «Виртуального офиса» осуществляется филиалами IT Park по
                                            территориальному признаку, таким образом смена сдачи налоговой отчетности не
                                            происходит.</li>
                                        <li>IT Park самостоятельно уведомляет налоговые органы о заключении с
                                            резидентами договора «Виртуального офиса».</li>
                                        <li>Для заключения договора на «Виртуальный офис» вам необходимо подать заявку
                                            посредством персонального кабинета резидента на <a
                                                href="https://it-market.uz/" target="_blank">www.it-market.uz</a>.</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-7">
                                    Когда нужно делать регистрацию?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-7" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Иностранные граждане при прибытии в Узбекистан обязаны в течении трех рабочих
                                        дней (суббота рабочий день) зарегистрироваться по месту проживания.</p>
                                    <p>Регистрация иностранных граждан осуществляется:</p>
                                    <ul>
                                        <li>гостиницами - на период пребывания в гостинице через сайт <a
                                                href="https://emehmon.uz" target="_blank">emehmon.uz</a>;</li>
                                        <li>арендодателями при постановке на учет договора аренды с иностранным
                                            гражданином – на период договора аренды в отделе миграции и оформлении
                                            гражданства органов внутренних дел по месту проживания (ОМИОГ).</li>
                                    </ul>
                                    <p>*При регистрации иностранному гражданину выдается справка о регистрации по месту
                                        временного проживания.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-8">
                                    Как найти жилье и оформить договор аренды в Узбекистане?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-8" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Вы можете самостоятельно либо с помощью нашего ответственного сотрудника найти и
                                        заселится в отель, квартиру или в частный дом.<br> <br>
                                        При заселении в частный дом или квартиру, после временной регистрации в ОМиОГ и
                                        присвоения ПИНФЛ, иностранный гражданин обращается в Центр государственных услуг
                                        (Единое окно) в явочной форме. При себе необходимо иметь паспорт, справку ПИНФЛ
                                        выданную в ОМиОГ и USB накопителем для оформления Электронно-цифровой печати
                                        (ЭЦП) для физического лица. <br><br>
                                        ЭЦП необходим для того, что бы зарегистрировать договор аренды в налоговой
                                        системе РУз онлайн <a href="https://ijara.soliq.uz/">https://ijara.soliq.uz/</a>
                                        или в явочном порядке. Данный процесс осуществляется совместно с арендодателем.
                                    </p>
                                    <ul>
                                        <!-- <li>Составить договор аренды</li>
                    <li>Подать заявление в отдел управления миграции и оформления гражданства Министерства внутренних дел Республики Узбекистан (<a href="http://gumiog.uz/" target="_blank">gumiog.uz</a>) об оформлении регистрации арендатора (иностранного гражданина) по месту временного пребывания в Республике Узбекистан.</li> -->

                                    </ul>
                                    <p><b>для этого необходимы следующие документы:</b></p>
                                    <ul>
                                        <li>Кадастровый документ</li>
                                        <li>Паспорт арендодателя</li>
                                        <li>Паспорт арендатора (иностранного гражданина)</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-9">
                                    Как получить местную или валютную банковскую карту для физических лиц?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/logos/img/icons/plus.svg') }}" class="icon-show"
                                            alt="">
                                        <img src="{{ asset('img/logos/img/icons/minus.svg') }}" class="icon-close"
                                            alt="">
                                    </span>
                                </a>
                                <div id="faq-list-9" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Перечень необходимых документов:</p>
                                    <ul>
                                        <li>Оригинал паспорта;</li>
                                        <li>Регистрация по месту жительства</li>
                                        <li>Телефон номер местного мобильного оператора.</li>
                                    </ul>
                                    <p>При оформлении банковской карты оплачивается комиссия за выпуск карты (сумма
                                        зависит от типа банковской карты) и вносится страховой депозит.</p>
                                    <p>Офис банка необходимо посетить два раза:</p>
                                    <ul>
                                        <li>первый — чтобы написать заявление и предоставить документы, </li>
                                        <li>второй — забрать готовую карту.</li>
                                    </ul>
                                    <p>Карта изготавливается от двух до пяти рабочих дней. Сотрудник банка сообщит Вам о
                                        ее готовности.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-10">
                                    Как получить местную сим-карту?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-10" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Для начала вам необходимо выбрать один из мобильных операторов Республики
                                        Узбекистан, ознакомиться с тарифами и выбрать наиболее выгодный и удобный для
                                        вас. Далее пройти в выбранный вами офис оператора или в ближайшую точку продаж,
                                        имея при себе оригинал паспорта и регистрацию по месту жительства.</p>
                                    <p>Операторы Республики Узбекистан:</p>
                                    <ul>
                                        <li><a href="https://mobi.uz/" target="_blank">MOBI.UZ</a></li>
                                        <li><a href="https://beeline.uz/" target="_blank">beeline.uz</a></li>
                                        <li><a href="https://perfectum.uz/" target="_blank">perfectum.uz</a></li>
                                        <li><a href="https://uzmobile.uz/" target="_blank">uzmobile.uz</a></li>
                                        <li><a href="https://humans.uz/" target="_blank">humans.uz</a></li>
                                        <li><a href="https://ucell.uz/" target="_blank">ucell.uz</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-11">
                                    Как оформить юридическое лицо?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-11" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Для создания юридического лица в Узбекистане необходимо:</p>
                                    <ul>
                                        <li>зарегистрировать юридическое лицо;</li>
                                        <li>поставить его на учет в налоговых органах;</li>
                                        <li>открыть банковский счет.</li>
                                    </ul>
                                    <p>Учредителями юридического лица могут быть как национальные, так и иностранные
                                        граждане и компании. Аналогично отсутствуют требования по найму гражданина
                                        Республики Узбекистан в качестве руководителя юридического лица.</p>
                                    <p>IT Park рекомендует открывать юридические лица в форме Общества с ограниченной
                                        ответственностью. Тем не менее, государством не установлены ограничения по
                                        формам юридического лица.</p>
                                    <p><b>Регистрация юридического лица (общество с ограниченной ответственностью)</b>
                                    </p>
                                    <p>Для открытия юридического лица необходимо сдать в Центры государственных услуг
                                        (<a href="https://fo.birdarcha.uz/" target="_blank">явочно</a>) следующие
                                        документы:</p>
                                    <ul>
                                        <li>учредительный договор*;</li>
                                        <li>Устав*;</li>
                                        <li>протокол общего собрания учредителей*;</li>
                                        <li>забронированное наименование юридического лица**;</li>
                                        <li>квитанцию об уплате государственной пошлины***.</li>
                                    </ul>
                                    <p>Регистрация осуществляется в течении одного дня.</p>
                                    <p>Примечания:</p>
                                    <p>* документы должны быть подписаны учредителем(ями);</p>
                                    <p>** бронирование предполагаемого наименования юридического лица осуществляется
                                        посредством <a href="https://fo.birdarcha.uz/pub/booking"
                                            target="_blank">https://fo.birdarcha.uz/pub/booking</a>;</p>
                                    <p>*** размер пошлины составляет при подаче через Центр госуслуг - 54,000 сум (менее
                                        50 центов США), посредством ЕПИГУ - 50,000 сум.</p>
                                    <p><b>Для IT-компаний IT Park оказываются комплексные услуги по подготовке пакета
                                            документов и регистрации юридического лица.</b></p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-12">
                                    Постановка на учет в налоговых органах
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-12" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Для постановки на учет юридического лица необходимо предоставить в районный
                                        налоговый орган:</p>
                                    <ul>
                                        <li>копии учредительных документов (устав и учредительный договор);</li>
                                        <li>справка о регистрации компании в Едином госреестре юрлиц (выдается после
                                            регистрации юрлица);</li>
                                        <li>персональный идентификационный номер физлица (ПИНФЛ) директора компании;
                                        </li>
                                        <li>карта подписей с образцами подписей и оттиска печати.</li>
                                        <li>Обращение в налоговый орган осуществляется директором компании с
                                            представлением его паспорта и ПИНФЛ.</li>
                                    </ul>
                                    <p>Постановка на учет осуществляется в течении 30 минут.</p>
                                    <p>После постановки на учет, юридическому лицу присваивается идентификационный номер
                                        налогоплательщика.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-13">
                                    Открытие банковского счета для юридических лиц
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-13" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Для открытия банковского счета для юридических лиц необходимо предоставить в
                                        отделении банка:</p>
                                    <ul>
                                        <li>персональный идентификационный номер физлица (ПИНФЛ) директора компании;
                                        </li>
                                        <li>карта подписей с образцами подписей и оттиска печати.</li>
                                    </ul>
                                    <p>С банком заключается договор на открытие расчетного счета в национальной и/или
                                        иностранной валюте.</p>
                                    <p>Обращение в банк осуществляется директором компании с представлением его паспорта
                                        и ПИНФЛ.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-14">
                                    Как получить персональный идентификационный номер физического лица (ПИНФЛ)?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-14" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Для получения ПИНФЛ физическое лицо (иностранный гражданин или лицо без
                                        гражданства) должно обратиться в отдел миграции и оформления гражданства органов
                                        внутренних дел (ОМиОГ - gumiog.uz) по месту временной регистрации (присваивается
                                        по заявлению) или постоянного проживания (присваивается при получении вид на
                                        жительство).</p>
                                    <p>ПИНФЛ становится единым идентификатором, удостоверяющим личность гражданина при
                                        оказании всех государственных, банковских, социальных и иных услуг.
                                        Государственные органы путем взаимодействия через специальную платформу
                                        «Электронное правительство» будут обмениваться необходимой информацией на основе
                                        ПИНФЛ, не запрашивая дополнительные сведения у физических лиц.</p>
                                    <p>Необходимые документы:</p>
                                    <ul>
                                        <li>паспорт иностранного гражданина;</li>
                                        <li>справка о регистрации по месту временного проживания.</li>
                                    </ul>
                                    <p>По итогам заявителю выдается справка о присвоении ПИНФЛ.<br>
                                        ПИНФЛ выдается в течение одного дня.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-15">
                                    Как получить вид на жительство Узбекистана?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-15" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Вид на жительство, документ, позволяющий иностранному гражданину беспрепятственно
                                        въезжать и выезжать из Республики Узбекистан, пользоваться всеми правами и
                                        льготами предоставленным граждан Республики Узбекистан, за исключением участия в
                                        выборах.</p>
                                    <p>Для получения вида на жительство иностранные граждане и лица без гражданства,
                                        прибывшие из других государств, обращаются в отдел миграции и оформления
                                        гражданства МВД Узбекистана по месту временного проживания и представляют
                                        следующие документы:</p>
                                    <ul>
                                        <li>заявление-анкеты в 2-х экземплярах;</li>
                                        <li>паспорт иностранного гражданина или проездной документ лица без гражданства;
                                        </li>
                                        <li>заявление собственника (собственников) жилья о предоставлении жилой площади,
                                            а также копии документов на жилье либо документ о приобретении недвижимости
                                            в Узбекистане;</li>
                                        <li>копии документов о заключении брака или рождении ребенка;</li>
                                        <li>квитанции об уплате сбора за рассмотрение и оформление документов;</li>
                                        <li>две фотографии размером 35 х 45 мм.</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-16">
                                    Как связаться с ассистентом?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-16" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>За вопросами и советами вы можете связаться с <b><a href="https://t.me/itvisa"
                                                target="_blank">ассистентами IT Park</a></b></p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-17">
                                    Как трудоустроится в Узбекистане?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-17" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Иностранным гражданам, осуществляющим свою трудовую деятельность в компаниях,
                                        получивших статус резидента IT Park, с 01.04.2022г. не требуется получение
                                        разрешения на трудовую деятельность в Республике Узбекистан.</p>
                                    <p>Если вы не являетесь сотрудником резидента IT Park для получения разрешения на
                                        трудовую деятельность, необходимо обратиться в Центр государственных услуг
                                        (Единое окно) или подать заявку по единому порталу интерактивных услуг <a
                                            href="https://my.gov.uz/" target="_blank">https://my.gov.uz/</a></p>
                                    <p>Для разрешения Вам потребуется предоставить следующий перечень документов:</p>
                                    <ol>
                                        <li>Анкета иностранного гражданина.</li>
                                        <li>Копия паспорта иностранного гражданина.</li>
                                        <li>Копия въездной визы.</li>
                                        <li>Фотография размером 3 x 4 см.</li>
                                        <li>Проект трудового договора, подтверждающий предварительную договоренность с
                                            работодателем о намерении и условиях привлечения иностранного работника на
                                            территорию Республики Узбекистан, с указанием размера заработной платы
                                            (вознаграждения).</li>
                                        <li>Обязательство руководителя.</li>
                                        <li>Сертификат об отсутствии ВИЧ-инфекции, выданный медицинским учреждением
                                            Республики Узбекистан.</li>
                                        <li>Документы, подтверждающие квалификацию иностранного гражданина.</li>
                                        <li>Краткие сведения о работодателе.</li>
                                        <li>Копия паспорта работодателя.</li>
                                    </ol>
                                    <p>Разрешение выдается сроком на 1 год строго на указанные в нем количество и
                                        специальности (должности) иностранных граждан. При этом запрашиваемые количество
                                        и специальности должны соответствовать фактической потребности работодателя в
                                        рабочей силе. Для продления разрешения необходимо обратиться за 20 рабочих дней
                                        до истечения срока его действия.</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-18">
                                    Какой интернет?
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-18" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>Скорость широкополосного фиксированного интернета в Ташкенте составляет 300
                                        Мбит/с.</p>
                                    <div class="telecoms mt-4 text-center row">
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://uztelecom.uz/ru">Uzonline</a>
                                            </div><br>
                                            Телефон для связи:<a href="tel:1084"> 1084</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://sarkor.uz/rus/">Sarkor</a>
                                            </div><br>
                                            Телефон для связи:<a href="tel:+998 78 120 00 00"> +998 78 120 00 00</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://etc.uz/tps">TPS</a>
                                            </div><br>
                                            Телефон для связи:<a href="tel: 78 150 00 00"> +998 78 150 00 00</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="telecoms text-center row">
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://www.turontelecom.uz/ru">Turon Telecom</a>
                                            </div><br>
                                            Телефон для связи:<a href="tel:1132"> 1132</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://st.uz/">Sharq Telecom</a>
                                            </div><br>
                                            Телефон для связи:<a href="tel:+998 78 113 08 08"> +998 78 113 08 08</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://comnet.uz/">Comnet</a>
                                            </div><br>
                                            Телефон для связи:<a href="tel:+998 71 205 88 88"> +998 71 205 88 88</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-light load-faq">Еще...</button>
                    </div>

                </div>
            </section>
        </section>

        <section>
            <div class="container">

                <div class="section-title">
                    <h2>НО САМОЕ ГЛАВНОЕ ,<br>УЗБЕКИСТАН - КУЗНИЦА <span class="txt-success">IT-ТАЛАНТОВ</span></h2>
                </div>

            </div>
        </section>


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Контакты</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="info-box heightFull">
                                    <img src="{{ asset('img/icons/sms.svg') }}" alt="">
                                    <h3>Email</h3>
                                    <a href="mailto:itvisa@it-park.uz"><span
                                            class="text-muted">itvisa@it-park.uz</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box heightFull">
                                    <img src="{{ asset('img/icons/location.svg') }}" alt="">
                                    <h3>Наш адрес</h3>
                                    <div class="text-muted">4, Tepamasjid str., Tashkent, Uzbekistan, 100164</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://calendly.com/itvisa" target="_blank">
                                    <div class="info-box heightFull">
                                        <img src="{{ asset('img/icons/zoom.svg') }}" alt="">
                                        <h3>Забронировать<br> Zoom-звонок</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box heightFull">
                                    <img src="{{ asset('img/icons/telegram.svg') }}" alt="">
                                    <h3>Telegram</h3>
                                    <a href="https://t.me/itvisa" target="_blank"><span
                                            class="text-muted">@itvisa</span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23964.15711357476!2d69.3571373!3d41.341057750000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef5672b0eb1ed%3A0x676a59b4e6bf3c7e!2sIT%20Park!5e0!3m2!1sru!2s!4v1646997642350!5m2!1sru!2s"
                            width="100%" height="386" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success">Send Message</button>
              </div>
            </form> -->
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
