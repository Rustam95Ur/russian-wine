@extends('layouts.app')
@section('title', $page->meta_title)
@section('description', $page->meta_description)
@section('keywords', $page->meta_keywords)
@section('content')
    <div id="franchise">
        <div id="content">
            <div class="heading-wrap">
                <div class="container container-lg">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Хотите открыть винный магазин в своём городе?</h1>
                            <p><a href="#searching">Необходимые требования к партнеру
                                    <span class="fa fa-arrow-down"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-russian-wine">
            </div>
            <h1 class="new-russian-wine-title">Русское Вино</h1>
            <div class="container container-lg">
                <div class="row mb-sm">
                    <div class="col-xs-12 col-md-4 mb-sm">
                        <div class="white-box-red-dash">
                            <h2>Винотека редких вин</h2>
                            <div class="text">
                                <p>Вина отобраны из топовых виноделен и небольших фермерских хозяйств России </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 mb-sm">
                        <div class="white-box-red-dash">
                            <h2>Более 400 видов Русских Вин</h2>
                            <div class="text">
                                <p>Это эксклюзивная и самая полная коллекция лучших Русских Вин</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 mb-sm">
                        <div class="white-box-red-dash">
                            <h2>Лучшая цена</h2>
                            <div class="text">
                                <p>Лучшая цена гарантирована прямыми поставками от производителя</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="swiper-viewport" id="how_we">
                        <div class="title_prox_bold">
                            Как мы это делаем
                        </div>
                        <div class="text_light">
                            Обладая опытом проведения дегустаций различного уровня, берёмся за форматы любой сложности,
                            <br>
                            как для профессионалов, так и для новичков в мире вина.
                        </div>
                        <div id="carousel0" class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center">
                                    <div class="inner_ban in">
                                        <img src="{{asset('image/page/franchise/franch1.jpg')}}"
                                             alt="Франшиза, зал" class="img-responsive">
                                        <div class="desc">
                                            Франшиза, зал
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide text-center">
                                    <div class="inner_ban in">
                                        <img src="{{asset('image/page/franchise/franch2.jpg')}}"
                                             alt="Франшиза, зал" class="img-responsive">
                                        <div class="desc">
                                            Франшиза, зал
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide text-center">
                                    <div class="inner_ban in">
                                        <img src="{{asset('image/page/franchise/franch3.jpg')}}"
                                             alt="Франшиза, зал" class="img-responsive">
                                        <div class="desc">
                                            Франшиза, зал
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide text-center">
                                    <div class="inner_ban in">
                                        <img src="{{asset('image/page/franchise/franch4.jpg')}}"
                                             alt="Франшиза, зал" class="img-responsive">
                                        <div class="desc">
                                            Франшиза, зал
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-white degustations">
                <div class="container container-lg">
                    <div class="row no-gutters">
                        <div class="col-md-offset-7 col-md-5">
                            <h2>Дегустации</h2>
                        </div>
                    </div>
                </div>
                <div class="container container-lg">
                    <div class="row no-gutters background-grey">
                        <div class="col-md-5 col-md-push-7">
                            <div class="row no-gutters background-grey p-b-50">
                                <div class="col-xs-12 col-md-offset-2 col-md-9">
                                    <div class="descr_franch_1 degustation-description">
                                        <p>Обладая опытом проведения дегустаций различного уровня, берёмся за форматы
                                            любой сложности, как для профессионалов, так и для новичков в мире
                                            вина. </p>
                                        <p>Мы организуем дегустации и для крупных корпорации и небольшие частные
                                            дегустации дома. Проводим мастер-классы на английском языке.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-pull-5">
                            <img src="{{ asset('image/page/franchise/shop_degustation_1.jpg') }}" alt="{{$page->title}}"
                                 class="img-responsive">
                        </div>
                    </div>
                    <div class="row no-gutters m-b-150">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="background-grey">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                                        <div class="row no-gutters">
                                            <div class="col-xs-12 p-t-60 p-b-50">
                                                <p>Мы проводим дегустации на постоянной основе у нас в магазине для
                                                    наших клиентов.</p>
                                                <p>Обладаем собственным дегустационным залом площадью 65 кв.м, который
                                                    оснащен всем необходимым для проведения дегустаций.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden-xs col-sm-6 col-md-6 m-t-m-50">
                                        <div class="row">
                                            <div class="col-md-10 degustation-photo-2">
                                                <img src="{{asset('image/page/franchise/shop_degustation_2.jpg')}}"
                                                     alt="{{$page->title}}" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end degustation -->
            <div class="background-dark-purple russian-wine">
                <div class="russian-wine-title"><h2>Русское вино</h2></div>
                <div class="container container-lg">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <div class="russian-wine-description">
                                <p>Лучшие Русские Вина, произведенные из собственного винограда, собраны в одном
                                    магазине</p>
                            </div>
                            <div class="russian-wine-list">
                                <ul>
                                    <li>Персональная подборка вин</li>
                                    <li>Организация винных туров на винодельни</li>
                                    <li>Постоянные дегустации Русских виноделен от первого лица</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-7 russian-wine-image">
                            <img src="{{asset('image/page/franchise/shop_land.jpg')}}" alt="{{$page->title}}"
                                 class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-lg">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        <div class="searching">
                            <p id="searching">Мы ищем партнера, который готов открыть мир Русского Вина для своих
                                клиентов, при этом организовать собственный успешный бизнес проект</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-lg">
                <div class="row mb-sm">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="white-box-red-dash with-shadows">
                            <h2>Необходимые требования к партнеру:</h2>
                            <div class="text">
                                <ul>
                                    <li>Минимальная площадь под магазин 60 кв.м.</li>
                                    <li>Расположения магазина в оживленном месте, наличие трафика</li>
                                    <li>Соответствие помещения требованиям федерального закона для получения алкогольной
                                        лицензии
                                    </li>
                                    <li>Первоначальные инвестиции в ремонт, оборудование, лицензию и т.п. 2 500 000
                                        рублей
                                    </li>
                                    <li>Оборотные средства 2,5 -3 млн. рублей</li>
                                    <li>Необходимое количество сотрудников 6 человек</li>
                                    <li>Срок окупаемости 14 месяцев</li>
                                    <li>Планируемый товарооборот к концу первого года работы 3-4 млн рублей в месяц</li>
                                    <li>Рентабельность (наценка) 60%</li>
                                    <li>Условия по франшизе 5% от общего товарооборота</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="white-box-red-dash with-shadows">
                            <h2>Что Вы получаете как партнер:</h2>
                            <div class="text">
                                <ul>
                                    <li>Успешный и уникальный бизнес</li>
                                    <li>Фирменный стиль</li>
                                    <li>Консультации и сопровождение проекта</li>
                                    <li>Обучение персонала и кавистов, дегустации</li>
                                    <li>Персональное сопровождение партнера при открытии магазина (отдельная услуга)
                                    </li>
                                    <li>Ассортимент 2000 наименований</li>
                                    <li>Уникальная коллекция Русских Вин лучших виноделен страны</li>
                                    <li>Прямая логистика алкогольной продукции со склада в г. Москве</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-lg">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10">
                        <div class="contact">
                            <h2>Если Вас заинтересовал наш проект, свяжитесь с нами</h2>
                            <form method="post" class="form-common" action="#">
                                <div class="p-t-30">
                                    <input name="namef" class="form-control" type="text"
                                           placeholder="Имя">
                                </div>
                                <div class="p-t-30">
                                    <input name="phonef" class="form-control" type="text"
                                           placeholder="Телефон">
                                </div>
                                <div class="text-center p-t-30">
                                    <input type="submit" class=" btn-green"
                                           value="Оставить заявку">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript"><!--
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 0,

            loop: true,
            initialSlide: 4,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        $(window).resize(function () {
            var ww = $(window).width()
            if (ww > 1000) mySwiper.params.loopFillGroupWithBlank = true;
            if (ww > 1000) mySwiper.params.centeredSlides = true;
            if (ww > 1000) mySwiper.params.center = true;
            if (ww > 1000) mySwiper.params.spaceBetween = 30;
        })
        $(window).trigger('resize')
        --></script>
@endpush
