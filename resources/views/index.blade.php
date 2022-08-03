@extends('layouts.layout')

@section('content')

    <!-- ======= Hero Section ======= -->
    <div id="hero">
        <section class="d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="banner-content">
                    <div class="mb-5">
                        <h1>@lang('main.IT-Visa в Узбекистане')</h1>
                        <!-- <h2>Рабочая виза сроком до 3-х лет<br>
                                                                                                                                                                                                                                                                                                                  для IT-компаний и IT-специалистов</h2> -->
                        <h2>@lang('main.Программа релокации')</h2>
                    </div>
                    <a href="#privileges" class="btn btn-outline-white scrollto me-4">@lang('main.IT Компаниям')</a>
                    <a href="#ITParkHelps" class="btn btn-outline-white scrollto">@lang('main.IT специалистам')</a>
                </div>
            </div>
        </section>
    </div><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" >

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/epam.svg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/exadel.svg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/iTechArt.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/LGCNS.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/selectel.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/UZINFOCOM_logo.png') }}" class="img-fluid" alt=""
                            style="max-width: 60%;">
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/logos/img.png') }}" class="img-fluid" alt=""
                             style="max-width: 60%;">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <section>
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.IT-Visa - это')</h2>
                </div>

                <div class="row img-boxes">
{{--                    <div class="col-md-4">--}}
{{--                        <div class="shadow-box rounded">--}}
{{--                            <div class="shadow-box-ico">--}}
{{--                                <img src="{{ asset('img/icons/airplane.svg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="shadow-box-text">@lang('main.Беспрепятственный') <br> @lang('main.въезд и') <br>--}}
{{--                                @lang('main.в Узбекистане')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-6">
                        <div class="shadow-box rounded">
                            <div class="shadow-box-ico">
                                <img src="{{ asset('img/icons/document-text.svg') }}" alt="">
                            </div>
                            <div class="shadow-box-text">@lang('main.Равные социальные')<br>@lang('main.условия с')</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shadow-box rounded">
                            <div class="shadow-box-ico">
                                <img src="{{ asset('img/icons/check.svg') }}" alt="" width="20%">
                            </div>
                            <br>
                            <div class="shadow-box-text">@lang('main.Покупка недвижимости любой стоимости на территории РУз')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="WhoCanGet">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Кто может получить IT-Visa')</h2>
                </div>

                <div class="shadow-box p-0">
                    <div class="row">
                        <div class="col-md-4 withSmBorder">
                            <div class="p-5">
                                <div class="shadow-box-ico">
                                    <img src="{{ asset('img/icons/card-pos.svg') }}" alt="">
                                </div>
                                <div class="shadow-box-text mb-4">@lang('main.Инвесторы')</div>
                                <a href="{{ route('investor.create') }}" class="btn btn-success">@lang('main.Подать')</a>
                            </div>
                        </div>
                        <div class="col-md-4 withSmBorder">
                            <div class="p-5">
                                <div class="shadow-box-ico">
                                    <img src="{{ asset('img/icons/tag-user.svg') }}" alt="">
                                </div>
                                <div class="shadow-box-text mb-4">@lang('main.Учредители')<br> @lang('main.резидентов IT')
                                </div>
                                <a href="{{ route('founder.create') }}" class="btn btn-success">@lang('main.Подать')</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-5">
                                <div class="shadow-box-ico">
                                    <img src="{{ asset('img/icons/code.svg') }}" alt="">
                                </div>
                                <div class="shadow-box-text mb-4">@lang('main.IT-специалисты')</div>
                                <a href="{{ route('specialist-visa.create') }}"
                                    class="btn btn-success">@lang('main.Подать')</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section id="WhoCanGet">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Информация об IT Visa и IT Card')</h2>
                </div>

                <div class="shadow-box p-0">
                    <div class="row">
                        <div class="col-md-6 withSmBorder">
                            <div class="p-5">
                                <a href="{{ asset('files/'.__('main.brouchure.pdf')) }}" class="btn btn-success"
                                   target="_blank">@lang('main.Скачать буклет')
                                    <img class="ms-3" src="{{ asset('img/icons/document-download.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="p-5">
                                    <a href="{{ asset('files/'.__('main.pres.pdf')) }}" class="btn btn-success"
                                       target="_blank">@lang('main.Скачать презентация')
                                        <img class="ms-3" src="{{ asset('img/icons/document-download.svg') }}" alt="">
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section id="privileges">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Налоговые льготы и преференции для резидентов IT Park')</h2>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-1">
                                <li>
                                    <div class="list-1-item-ico">0%</div>
                                    <div class="list-1-item-text">@lang('main.Полное освобождение от всех видов налогов')
                                    </div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">0%</div>
                                    <div class="list-1-item-text">@lang('main.Освобождение от таможенных платежей')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">7,5%</div>
                                    <div class="list-1-item-text">@lang('main.Ставка подоходного налога')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">5%</div>
                                    <div class="list-1-item-text">@lang('main.Налог на дивиденды')</div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-1">
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Виртуальный офис')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Выплаты дивидендов в иностранной валюте')
                                    </div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Выплаты заработной платы в')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/add-square.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Разрешение на работу')
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="https://it-market.uz/my/residents/admission/choose/" class="btn btn-success"
                            target="_blank">@lang('main.Стать резидентом IT Park')</a>
                    </div>

                </div>

            </div>
        </section>


        <section id="ITParkHelps">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.В рамках программы релокации')<br>@lang('main.IT Park помогает:')</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="shadow-box bg rounded">
                            <div class="card-title mb-5">
                                <img src="{{ asset('img/icons/buliding.svg') }}" alt="">
                                @lang('main.IT-Компаниям')
                            </div>
                            <ul class="list-1 text-start mb-5">
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Регистрация юридического лица')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Открытие банковского счета')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Постановка на учет в налоговых органах')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Поиск специалистов')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Поиск и аренда офиса')</div>
                                </li>
                            </ul>
                            <br><br>

                            <a href="{{ route('company.create') }}" class="btn btn-success">@lang('main.Подать')</a>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shadow-box bg rounded">
                            <div class="card-title mb-5">
                                <img src="{{ asset('img/icons/code-circle.svg') }}" alt="">
                                @lang('main.IT-Специалистам')
                            </div>
                            <ul class="list-1 text-start mb-5">
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Трудоустройство в компании')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Оформление медицинской страховки')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Поиск жилья')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Открытие банковского счёта')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Оформление документов')</div>
                                </li>
                                <li>
                                    <div class="list-1-item-ico">
                                        <img src="{{ asset('img/icons/check.svg') }}" alt="">
                                    </div>
                                    <div class="list-1-item-text">@lang('main.Поиск работодателя')</div>
                                </li>
                            </ul>

                            <a href="{{ route('specialist-relocation.create') }}"
                                class="btn btn-success">@lang('main.Подать')</a>

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="section-bg mt-5 mb-5">
            <div class="container">

                <div class="section-title mb-0">
                    <h2 class="mb-0">@lang('main.МЫ НЕ ОСТАВИМ ВАС ОДНОГО В НАШЕЙ СТРАНЕ!')</h2>
                </div>

            </div>
        </section>


        <section id="WhyUzbekistan">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card heightFull">
                            <div class="row align-items-center heightFull">
                                    <iframe width="50%" height="500px" style="margin: 0 auto" src="https://www.youtube.com/embed/bVVtmaf_maE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="{{ asset('files/guide_Uzbekistan.pdf') }}" class="btn btn-success"
                        target="_blank">@lang('main.Скачать буклет об Узбекистане')
                        <img class="ms-3" src="{{ asset('img/icons/document-download.svg') }}" alt="">
                    </a>
                </div>

            </div>
        </section>

        <section>
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Узбекистан - это')</h2>
                </div>

                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image" style="background-image: url('{{ asset('img/uploaded 1.png') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">@lang('main.Доступные цены')</div>
                                <div class="text-muted fs20">@lang('main.Ташкент входит')</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image" style="background-image: url('{{ asset('img/nazy.jpg') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">@lang('main.Многокультурность')</div>
                                <div class="text-muted fs20">@lang('main.Более') <b class="txt-success">100</b>
                                    @lang('main.народностей и национальностей')</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image"
                                style="background-image: url('{{ asset('img/60259f2846e4fe53e3a31573 1.png') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">@lang('main.Толерантность')</div>
                                <div class="text-muted fs20">@lang('main.Представители различных религий и вероисповеданий')
                                </div>
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
                                <div class="card-title">@lang('main.Потрясающий климат')</div>
                                <div class="text-muted fs20">@lang('main.Тёплая и солнечная погода') <b
                                        class="txt-success">320</b> @lang('main.дней в году')</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-sm card-hover">
                            <div class="card-image" style="background-image: url('{{ asset('img/scale_1200.webp') }}')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title">@lang('main.Богатая национальная кухня')</div>
                                <div class="text-muted fs20">@lang('main.Один плов имеет более') <b class="txt-success">200
                                    </b>@lang('main.разновидностей')</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.НО САМОЕ ГЛАВНОЕ ,')<br>@lang('main.УЗБЕКИСТАН - КУЗНИЦА') <span
                            class="txt-success">@lang('main.IT-ТАЛАНТОВ')</span></h2>
                </div>

            </div>
        </section>

        <section id="reviews">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Отзывы')</h2>
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
                                        <div class="card-title justify-content-start mb-0">@lang('main.Наталья')</div>
                                        <div class="text-muted">@lang('main.Software Engineer')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment')
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
                                        <div class="card-title justify-content-start mb-0">@lang('main.Дмитрий')</div>
                                        <div class="text-muted">@lang('main.Front-End разработчик')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment2')</div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-1.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">@lang('main.Екатерина')</div>
                                        <div class="text-muted">@lang('main.Administrator')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment3')</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">@lang('main.Алекс')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment4')</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">@lang('main.Туркан')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment5')</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">@lang('main.Петр')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment6')</div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-box bg rounded text-start">
                                <div class="rev-user align-items-center mb-5">
                                    <div class="rev-user-avatar">
                                        <img src="{{ asset('img/icons/user-2.svg') }}" alt="">
                                    </div>
                                    <div class="rev-user-text">
                                        <div class="card-title justify-content-start mb-0">@lang('main.Александр')</div>
                                    </div>
                                </div>
                                <div class="rev-text fs20 quote">@lang('main.comment7')</div>
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


        <section>
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Новости')</h2>
                </div>

                <div class="row mb-5" >
                    <div class="col-md-6" style="margin: 0 auto" >
                        <div class="card card-sm card-hover">
                            <div class="card-image" style="background-image: url('https://api.time.com/wp-content/uploads/2022/07/Worlds-Greatest-Places-2022-SilkRoadUzbekistan.jpeg')">
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title"><a href="https://time.com/collection/worlds-greatest-places-2022/6194617/historic-silk-road-sites-uzbekistan/">@lang("main.Historic Silk Road Sites, Uzbekistan Walking an ancient path")</a></div>
                                <div class="text-muted fs20">TIME: @lang("main.WORLD'S GREATEST PLACES 2022. Tilya-Kori Madrasa in the Silk Road city of Samarkand, Uzbekistan")</div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </section>

        <section id="faq" class="pb-0">
            <div class="container">
                <div class="section-title">
                    <h2>@lang('main.Часто задаваемые вопросы')</h2>
                </div>
            </div>
            <section class="section-bg faq">
                <div class="container">

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-1">
                                    @lang('main.Что такое IT-Visa?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-1" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>
                                        <b>@lang('main.IT-Visa')</b>@lang('main.–это многократная виза')
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-2">
                                    @lang('main.Какие преимущества дает IT-Visa?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-2" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>@lang('main.получать образование и')</li>
                                        <li>@lang('main.без обязанности')</li>
                                        <li>@lang('main.получить в упрощенном порядке вид на жительство.')</li>
                                    </ul>
                                    <p><b>@lang('main.Важно.')</b> @lang('main.Данные условия')</p>
                                </div>
                            </li>


                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-3">
                                    @lang('main.Как получить статус резидента IT Park?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-3" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Для получения статуса резидента IT Park необходимо:')</p>
                                    <ul>
                                        <li>@lang('main.зарегистрироваться в качестве')</li>
                                        <li>@lang('main.осуществлять вид (виды)')<a
                                                href="https://lex.uz/docs/4422256#4424647"
                                                target="_blank">(https://lex.uz/docs/4422256)</a></li>
                                        <li>@lang('main.подать экономически обоснованный бизнес-план на портале') <a
                                                href="https://it-market.uz/" target="_blank">(https://it-market.uz/)</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                   data-bs-target="#faq-list-20">
                                    @lang('main.Кому выдается IT-Visa?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-20" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>@lang('main.иностранному инвестору')</li>
                                        <li>@lang('main.иностранному специалисту')</li>
                                        <li>@lang('main.учредителю (участнику)') </li>
                                    </ul>
                                </div>
                            </li>


                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-4">@lang('main.Какие права у резидента IT Park?')

                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-4" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p><b>@lang('main.Резидент имеет право:')</b></p>
                                    <ul>
                                        <li>@lang('main.осуществлять свою деятельность')</li>
                                        <li>@lang('main.пользоваться налоговыми льготами')</li>
                                        <li>@lang('main.пользоваться таможенными льготами;')</li>
                                        <li>@lang('main.самостоятельно определять')
                                            <a href="https://lex.uz/docs/4422256#4424647"
                                                target="_blank">@lang('main.Перечню')</a>
                                            (<a href="https://lex.uz/docs/4422256#4424647"
                                                target="_blank">https://lex.uz/docs/4422256#4424647</a>);
                                        </li>
                                        <li>@lang('main.использовать товарный')</li>
                                        <li>@lang('main.изменять и дополнять')</li>
                                        <li>@lang('main.применять удобные')</li>
                                        <li>@lang('main.осуществлять в пределах')</li>
                                        <li>@lang('main.осуществлять в пределах2')</li>
                                        <li>@lang('main.осуществлять экспорт')</li>
                                        <li>@lang('main.привлекать иностранных')</li>
                                        <li>@lang('main.пользоваться «Виртуальным офисом».')</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-5">
                                    @lang('main.Какие обязанности у резидента IT Park?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-5" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>@lang('main.осуществлять исключительно')</li>
                                        <li>@lang('main.осуществлять новые')</li>
                                        <li>@lang('main.соблюдать договор')</li>
                                        <li>@lang('main.ежеквартально не')</li>
                                        <li>@lang('main.ежегодно до')</li>
                                        <li>@lang('main.ежемесячно не')</li>
                                        <li>@lang('main.ежегодно до 15')</li>
                                    </ul>
                                    <p><b>@lang('main.Примечание:')</b></p>
                                    <p><b>@lang('main. * документы направляются через веб-портал ')<a
                                                href="https://it-market.uz/" target="_blank">www.it-market.uz</a></b></p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-6">
                                    @lang('main.Что такое Виртуальный офис?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-6" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <ul>
                                        <li>@lang('main.Услуга «Виртуальный офис»')</li>
                                        <li>@lang('main.не может являться')</li>
                                        <li>@lang('main.не может являться2')</li>
                                        <li>@lang('main.освобождает от обязательной')</li>
                                        <li>@lang('main.освобождает от перевода')</li>
                                        <li>@lang('main.Предоставление')</li>
                                        <li>@lang('main.IT Park самостоятельно')</li>
                                        <li>@lang('main.Для заключения договора')<a href="https://it-market.uz/"
                                                target="_blank">www.it-market.uz</a>.</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-7">
                                    @lang('main.Когда нужно делать регистрацию?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-7" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Иностранные граждане')</p>
                                    <ul>
                                        <li>@lang('main.гостиницами - на период пребывания в гостинице через сайт ')<a
                                                href="https://emehmon.uz" target="_blank">emehmon.uz</a>;</li>
                                        <li>@lang('main.арендодателями при')</li>
                                    </ul>
                                    <p>@lang('main.*При регистрации')</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-8">@lang('main.Как найти жилье')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-8" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Вы можете самостоятельно')<br><br>
                                        @lang('main.При заселении в частный') <br><br>
                                        @lang('main.ЭЦП необходим для')<a
                                            href="https://ijara.soliq.uz/">https://ijara.soliq.uz/</a>
                                        @lang('main.или в явочном порядке')
                                    </p>
                                    <ul>
                                        <!-- <li>Составить договор аренды</li>
                                                                                                                                                                                                                                                                                                                        <li>Подать заявление в отдел управления миграции и оформления гражданства Министерства внутренних дел Республики Узбекистан (<a href="http://gumiog.uz/" target="_blank">gumiog.uz</a>) об оформлении регистрации арендатора (иностранного гражданина) по месту временного пребывания в Республике Узбекистан.</li> -->

                                    </ul>
                                    <p><b>@lang('main.для этого необходимы следующие документы:')</b></p>
                                    <ul>
                                        <li>@lang('main.Кадастровый документ')</li>
                                        <li>@lang('main.Паспорт арендодателя')</li>
                                        <li>@lang('main.Паспорт арендатора (иностранного гражданина)')</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">

                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-9">@lang('main.Как получить местную')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-9" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Перечень необходимых документов:')</p>
                                    <ul>
                                        <li>@lang('main.Оригинал паспорта;')</li>
                                        <li>@lang('main.Регистрация по месту жительства')</li>
                                        <li>@lang('main.Телефон номер местного мобильного оператора.')</li>
                                    </ul>
                                    <p>@lang('main.При оформлении банковской')</p>
                                    <ul>
                                        <li>@lang('main.первый — чтобы написать заявление и предоставить документы, ')</li>
                                        <li>@lang('main.второй — забрать готовую карту.')</li>
                                    </ul>
                                    <p>@lang('main.Карта изготавливается')</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-10">
                                    @lang('main.Как получить местную сим-карту?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-10" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Для начала вам')</p>
                                    <p>@lang('main.Операторы Республики Узбекистан:')</p>
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
                                    @lang('main.Как оформить юридическое лицо?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-11" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Для создания юридического лица в Узбекистане необходимо:')</p>
                                    <ul>
                                        <li>@lang('main.зарегистрировать юридическое лицо;')</li>
                                        <li>@lang('main.поставить его на учет в налоговых органах;')</li>
                                        <li>@lang('main.открыть банковский счет.')</li>
                                    </ul>
                                    <p>@lang('main.Учредителями юридического')</p>
                                    <p>@lang('main.IT Park рекомендует') </p>
                                    <p><b>@lang('main.Регистрация юридического')</b>
                                    </p>
                                    <p>@lang('main.Для открытия')
                                        (<a href="https://fo.birdarcha.uz/"
                                            target="_blank">@lang('main.явочно')</a>)@lang('main.следующие документы:')</p>
                                    <ul>
                                        <li>@lang('main.учредительный договор*;')</li>
                                        <li>@lang('main.Устав*;')</li>
                                        <li>@lang('main.протокол общего собрания учредителей*;')</li>
                                        <li>@lang('main.забронированное наименование юридического лица**;')</li>
                                        <li>@lang('main.квитанцию об уплате государственной пошлины***.')</li>
                                    </ul>
                                    <p>@lang('main.Регистрация осуществляется в течении одного дня.')</p>
                                    <p>@lang('main.Примечания:')</p>
                                    <p>@lang('main.* документы должны быть подписаны учредителем(ями);')</p>
                                    <p>@lang('main.** бронирование')<a href="https://fo.birdarcha.uz/pub/booking"
                                            target="_blank">https://fo.birdarcha.uz/pub/booking</a>;</p>
                                    <p>@lang('main.*** размер пошлины')</p>
                                    <p><b>@lang('main.Для IT-компаний')</b></p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-12">
                                    @lang('main.Постановка на учет в налоговых органах')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-12" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Для постановки на')</p>
                                    <ul>
                                        <li>@lang('main.копии учредительных документов (устав и учредительный договор);')
                                        </li>
                                        <li>@lang('main.справка о регистрации')</li>
                                        <li>@lang('main.персональный идентификационный')
                                        </li>
                                        <li>@lang('main.карта подписей с образцами подписей и оттиска печати.')</li>
                                        <li>@lang('main.Обращение в налоговый')</li>
                                    </ul>
                                    <p>@lang('main.Постановка на учет осуществляется в течении 30 минут.')</p>
                                    <p>@lang('main.После постановки на учет')</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-13">
                                    @lang('main.Открытие банковского счета для юридических лиц')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-13" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Для открытия банковского')</p>
                                    <ul>
                                        <li>@lang('main.персональный')
                                        </li>
                                        <li>@lang('main.карта подписей с образцами подписей и оттиска печати.')</li>
                                    </ul>
                                    <p>@lang('main.С банком заключается')</p>
                                    <p>@lang('main.Обращение в банк')</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-14">
                                    @lang('main.Как получить (ПИНФЛ)')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-14" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Для получения ПИНФЛ')</p>
                                    <p>@lang('main.ПИНФЛ становится')</p>
                                    <p>@lang('main.Необходимые документы:')</p>
                                    <ul>
                                        <li>@lang('main.паспорт иностранного гражданина;')</li>
                                        <li>@lang('main.справка о регистрации по месту временного проживания.')</li>
                                    </ul>
                                    <p>@lang('main.По итогам заявителю выдается справка о присвоении ПИНФЛ.')<br>
                                        @lang('main.ПИНФЛ выдается в течение одного дня.')</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-15">
                                    @lang('main.Как получить вид на жительство Узбекистана?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-15" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Вид на жительство')</p>
                                    <p>@lang('main.Для получения вида')</p>
                                    <ul>
                                        <li>@lang('main.заявление-анкеты в 2-х экземплярах;')</li>
                                        <li>@lang('main.паспорт иностранного')
                                        </li>
                                        <li>@lang('main.заявление собственника')</li>
                                        <li>@lang('main.копии документов о заключении брака или рождении ребенка;')</li>
                                        <li>@lang('main.квитанции об уплате сбора за рассмотрение и оформление документов;')
                                        </li>
                                        <li>@lang('main.две фотографии размером 35 х 45 мм.')</li>
                                    </ul>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-16">
                                    @lang('main.Как связаться с ассистентом?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-16" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.За вопросами и советами вы можете связаться с ')<b><a
                                                href="https://t.me/itvisa"
                                                target="_blank">@lang('main.ассистентами')</a></b></p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-17">
                                    @lang('main.Как трудоустроиться в Узбекистане?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-17" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Иностранным гражданам,')</p>
                                    <p>@lang('main.Если вы не')<a href="https://my.gov.uz/"
                                            target="_blank">https://my.gov.uz/</a></p>
                                    <p>@lang('main.Для разрешения Вам')</p>
                                    <ol>
                                        <li>@lang('main.Анкета иностранного гражданина.')</li>
                                        <li>@lang('main.Копия паспорта иностранного гражданина.')</li>
                                        <li>@lang('main.Копия въездной визы.')</li>
                                        <li>@lang('main.Фотография размером 3 x 4 см.')</li>
                                        <li>@lang('main.Проект трудового договора')</li>
                                        <li>@lang('main.Обязательство руководителя.')</li>
                                        <li>@lang('main.Сертификат об')</li>
                                        <li>@lang('main.Документы, подтверждающие квалификацию иностранного гражданина.')
                                        </li>
                                        <li>@lang('main.Краткие сведения о работодателе.')</li>
                                        <li>@lang('main.Копия паспорта работодателя')</li>
                                    </ol>
                                    <p>@lang('main.Разрешение выдается')</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" class="hide">
                                <a data-bs-toggle="collapse" class="collapse collapse-toggle collapsed"
                                    data-bs-target="#faq-list-18">
                                    @lang('main.Какой интернет?')
                                    <span class="collapse-toggle-icon">
                                        <img src="{{ asset('img/icons/plus.svg') }}" class="icon-show" alt="">
                                        <img src="{{ asset('img/icons/minus.svg') }}" class="icon-close" alt="">
                                    </span>
                                </a>
                                <div id="faq-list-18" class="collapse collapse-body" data-bs-parent=".faq-list">
                                    <p>@lang('main.Скорость широкополосного')</p>
                                    <div class="telecoms mt-4 text-center row">
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://uztelecom.uz/ru">Uzonline</a>
                                            </div><br>
                                            @lang('main.Телефон для связи:')<a href="tel:1084"> 1084</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://sarkor.uz/rus/">Sarkor</a>
                                            </div><br>
                                            @lang('main.Телефон для связи:')<a href="tel:+998 78 120 00 00"> +998 78 120 00
                                                00</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://etc.uz/tps">TPS</a>
                                            </div><br>
                                            @lang('main.Телефон для связи:')<a href="tel: 78 150 00 00"> +998 78 150 00
                                                00</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="telecoms text-center row">
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://www.turontelecom.uz/ru">Turon Telecom</a>
                                            </div><br>
                                            @lang('main.Телефон для связи:')<a href="tel:1132"> 1132</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://st.uz/">Sharq Telecom</a>
                                            </div><br>
                                            @lang('main.Телефон для связи:')<a href="tel:+998 78 113 08 08"> +998 78 113 08
                                                08</a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="card-internet card-hover">
                                                <a href="https://comnet.uz/">Comnet</a>
                                            </div><br>
                                            @lang('main.Телефон для связи:')<a href="tel:+998 71 205 88 88"> +998 71 205 88
                                                88</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-light load-faq">@lang('main.Еще...')</button>
                    </div>

                </div>
            </section>
        </section>




        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.Контакты')</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="info-box heightFull">
                                    <img src="{{ asset('img/icons/sms.svg') }}" alt="">
                                    <h3>Email</h3>
                                    <a href="mailto:itvisauz@gmail.com"><span class="text-muted">itvisauz@gmail.com</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box heightFull">
                                    <img src="{{ asset('img/icons/location.svg') }}" alt="">
                                    <h3>@lang('main.Наш адрес')</h3>
                                    <div class="text-muted">4, Tepamasjid str., Tashkent, Uzbekistan, 100164</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://calendly.com/itvisa" target="_blank">
                                    <div class="info-box heightFull">
                                        <img src="{{ asset('img/icons/zoom.svg') }}" alt="">
                                        <h3>@lang('main.Забронировать')<br>@lang('main.Zoom-звонок')</h3>
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
