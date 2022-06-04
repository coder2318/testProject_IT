<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" lang="eng">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IT-Visa Uzbekistan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta property="og:url" content="https://itvisa.uz" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="IT-Visa в Узбекистан" />
    <meta property="og:description" content="Рабочая виза сроком до 3-х лет для IT-компаний и IT-специалистов" />
    <meta property="og:image" content="https://itvisa.uz/itvisa_fb.png" />
    <!-- No Cache -->

    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Baker - v4.7.0
* Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{route('home')}}">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="{{ asset('img/logos/selectel.png') }}img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#WhoCanGet">@lang('main.Кто может получить IT-Visa')</a></li>
                <li><a class="nav-link scrollto" href="#privileges">@lang('main.Налоговые льготы')</a></li>
                <li><a class="nav-link scrollto" href="#ITParkHelps">@lang('main.IT Park помогает')</a></li>
                <li><a class="nav-link scrollto" href="#WhyUzbekistan">@lang('main.Почему Узбекистан?')</a></li>
                <li><a class="nav-link scrollto" href="#reviews">@lang('main.Отзывы')</a></li>
                <li><a class="nav-link scrollto" href="#faq">@lang('main.FAQ')</a></li>
                <li><a class="nav-link scrollto" href="#contact">@lang('main.Контакты')</a></li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a style="color: #7db92a; padding:10px 10px 10px 25px" class="lang-btn" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                @endforeach


            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex pt-3 pb-3">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright mt-2">
                    Copyright © 2022 IT-Visa LLC. All rights reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://t.me/itpark_uz" target="_blank">
                    <img src="{{ asset('img/icons/ns1.svg') }}" alt="">
                </a>
                <a href="https://www.instagram.com/itpark_uz/" target="_blank">
                    <img src="{{ asset('img/icons/ns2.svg') }}" alt="">
                </a>
                <a href="https://www.facebook.com/itparkuzb" target="_blank">
                    <img src="{{ asset('img/icons/ns3.svg') }}" alt="">
                </a>
                <a href="https://www.youtube.com/channel/UCZWqg4oxo2PyLGuQifUbeqg" target="_blank">
                    <img src="{{ asset('img/icons/ns4.svg') }}" alt="">
                </a>
            </div>
            <div class="ms-3">
                <img src="{{ asset('img/f-logo.svg') }}" alt="">
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <div class="tgBtnWrap">
        <div class="tgBtnAnm"></div>
        <a href="https://t.me/itvisa" target="_blank" class="tgBtn">
            <span>@lang('main.Задать вопрос')</span>
        </a>
    </div>






    <div class="modal fade" id="forInvestorsModal" tabindex="-1" aria-labelledby="forInvestorsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="forInvestorsModalLabel">@lang('main.Заявка на IT-Visa для инвестора')</h5>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.ФИО')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Опишите вашу деятельность')</label>
                                        <textarea class="form-control" rows="8" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="col-form-label">@lang('main.Документ подтверждающий')<br>@lang('main.ваш годовой доход')</label>
                                        <div class="fileSelect">
                                            <label>
                                                <input type="file">
                                                <span class="btn btn-success" type="button">
                                                @lang('main.Прикрепить документ')
                                                    <img src="{{ asset('img/icons/direct-send.svg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Какие проекты планируете реализовать в Узбекистане?')</label>
                                        <textarea class="form-control" rows="8" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="col-form-label">@lang('main.Ходатайство от компании резидента Узбекистана о реализации инвестиционного проекта с описанием и сути')</label>
                                        <div class="mb-3">
                                            <a href="#" class="btn btn-success">
                                               @lang('main.Скачать шаблон')
                                                <img src="{{ asset('img/icons/direct-inbox.svg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="fileSelect">
                                            <label>
                                                <input type="file">
                                                <span class="btn btn-success" type="button">
                                                @lang('main.Прикрепить документ')
                                                    <img src="{{ asset('img/icons/direct-send.svg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.phone')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.email')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end pt-3 pb-3">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">@lang('main.cancel')</button>
                                <button type="submit" class="btn btn-success">@lang('main.Отправить')</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-box heightFull">
                                            <img src="{{ asset('img/icons/zoom.svg') }}" alt="">
                                            <h3>@lang('main.Забронировать')<br>@lang('main.Zoom-звонок')</h3>
                                        </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="forTheFounderModal" tabindex="-1" aria-labelledby="forTheFounderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="forTheFounderModalLabel">@lang('main.Заявка на IT-Visa для учредителя')</h5>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.fio')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Опишите вашу деятельность')</label>
                                        <textarea class="form-control" rows="8" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="col-form-label">@lang('main.Свидетельство о резидентстве в IT Park')</label>
                                        <div class="fileSelect">
                                            <label>
                                                <input type="file">
                                                <span class="btn btn-success" type="button">
                                                    @lang('main.Прикрепить документ')
                                                    <img src="{{ asset('img/icons/direct-send.svg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.phone')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.email')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end pt-3 pb-3">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">@lang('main.cancel')</button>
                                <button type="submit" class="btn btn-success">@lang('main.send')</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-box heightFull">
                                            <img src="{{ asset('img/icons/zoom.svg') }}" alt="">
                                            <h3>@lang('main.Забронировать')<br>@lang('main.Zoom-звонок')</h3>
                                        </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="forSpecialistsModal" tabindex="-1" aria-labelledby="forSpecialistsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="forSpecialistsModalLabel">@lang('main.Заявка на IT-Visa для IT специалистов')</h5>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.fio')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Опишите вашу деятельность')</label>
                                        <textarea class="form-control" rows="8" id="message-text"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="country" class="col-form-label">@lang('main.Свидетельство о резидентстве в IT Park')</label>
                                        <div class="fileSelect">
                                            <label>
                                                <input type="file">
                                                <span class="btn btn-success" type="button">
                                                    @lang('main.Прикрепить документ')
                                                    <img src="{{ asset('img/icons/direct-send.svg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="country" class="col-form-label">@lang('main.Ходатайство от компании резидента Узбекистана о реализации инвестиционного проекта с описанием и сути')</label>
                                        <div class="mb-3">
                                            <a href="#" class="btn btn-success">
                                            @lang('main.Скачать шаблон')
                                                <img src="{{ asset('img/icons/direct-inbox.svg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="fileSelect">
                                            <label>
                                                <input type="file">
                                                <span class="btn btn-success" type="button">
                                                    @lang('main.Прикрепить документ')
                                                    <img src="{{ asset('img/icons/direct-send.svg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.phone')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.email')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end pt-3 pb-3">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">@lang('main.cancel')</button>
                                <button type="submit" class="btn btn-success">@lang('main.cancel')</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-box heightFull">
                                            <img src="{{ asset('img/icons/zoom.svg') }}" alt="">
                                            <h3>@lang('main.Забронировать')<br>@lang('main.Zoom-звонок')</h3>
                                        </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="forSpecialistsModal" tabindex="-1" aria-labelledby="forSpecialistsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="forSpecialistsModalLabel">@lang('main.Заявка на IT-Visa для IT-компаний – релокантов')</h5>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.fio')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Опишите вашу деятельность')</label>
                                        <textarea class="form-control" rows="8" id="message-text"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Имеется ли зарегистрированное юр.лицо в Узбекистане или вы намерены открыть новое юр.лицо?')</label>
                                        <textarea class="form-control" rows="8" id="message-text"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Количество сотрудников, которые будут релоцированы в Узбекистан')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.Другая информация, которую вы считаете полезной')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.phone')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fio" class="col-form-label">@lang('main.email')</label>
                                        <input type="text" class="form-control" id="fio">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end pt-3 pb-3">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">@lang('main.cancel')</button>
                                <button type="submit" class="btn btn-success">@lang('main.send')</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-box heightFull">
                                            <img src="{{ asset('img/icons/zoom.svg') }}" alt="">
                                            <h3>@lang('main.Забронировать')<br>@lang('main.Zoom-звонок')</h3>
                                        </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode
                .insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88091094, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });

    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/88091094" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

</body>

</html>
