@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tasting.css')}}">
@endpush
@section('content')
    <div id="tasting-page">
        <div id="banner">
            <div class="container">
                <div class="row">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li><a href="{{route('tastings')}}">Дегустации</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h1>Персональные дегустации</h1>
                        <ul id="list_under">
                            <li>Корпоратив или ужин</li>
                            <li>Дома или в офисе</li>
                            <li>Редкие вина</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('image/quotes.png')}}" alt="quotes_icon">
                        <p class="quotes_text">Я продаю и продвигаю Русские Вина в течение 10 лет. Успешно работал на
                            крупных
                            винных заводах и небольших винодельнях, объехал все винные хозяйства РФ и могу рассказать о
                            каждом подробно и интересно: какие вина лучше пить, как правильно выбрать вино, и кто
                            выпускает гаражные вина. Я привожу редкие вина, тираж которых может быть ограничен всего
                            одной бочкой</p>
                        <div class="col-md-5">
                            <img alt="portrait" class="portrait"
                                 src="{{asset('image/page/testing/portrait_img_new.png')}}">
                        </div>
                        <div class="col-md-7 portrait_info">
                            <h3>Мартынов Владимир</h3>
                            <p>негоциант, основатель проекта Русское Вино</p>
                        </div>
                    </div>
                </div>
                <div id="button_link">
                    <a id="set_vybor" href="#set_block">Выбрать сет</a>
                    <a id="how_we" href="#how_we_cont">Как мы это делаем</a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title_prox_bold">
                            Дегустационные сеты
                        </h5>
                        <p class="text_prox_l">
                            Каждый сет мы персонально отобрали для Вас. <br>
                            Только у нас полная коллекция Русских вин, которую мы собирали из небольших винных хозяйств.
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach($tastings as $tasting)
                        <div class="col-md-4">
                            <div class="product_layout">
                                <div class="image">
                                    <a class="preview" href="#">
                                        <img alt="{{$tasting->title}}" src="{{Voyager::image($tasting->image)}}"
                                             class="imp_prod">
                                    </a>
                                </div>
                                <div class="description">
                                    <a class="preview" href="#">
                                        <h6>{!! $tasting->title  !!}</h6>
                                    </a>
                                    <div class="parametrs">
                                        <div class="parametr">
                                            <ul class="list-inline">
                                                <li>
                                                    <img alt="user_icon"
                                                         src="{{asset('image/page/testing/users.png')}}">
                                                    {{$tasting->user_count}} человек
                                                </li>
                                                <li>
                                                    <img alt="time_icon" src="{{asset('image/page/testing/time.png')}}">
                                                    {{$tasting->time}} минут
                                                </li>
                                                <li>
                                                    <img alt="bottle_icon"
                                                         src="{{asset('image/page/testing/bottle.png')}}">
                                                    {{count($tasting->wines)}} вин
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="prod_footer">
                                    <div class="price ">
                                        {{$tasting->price}} <span class="rub_p">ш</span>/чел.<p></p>
                                    </div>
                                    <div class="button_order" onclick="fastorder_open(882);" title="">
                                        Заказать
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <section id="second_block">
            <div id="how_we_cont">
                <div class="swiper-viewport" id="how_we">
                    <div class="title_prox_bold">
                        Как мы это делаем
                    </div>
                    <div class="text_light">
                        Обладая опытом проведения дегустаций различного уровня, берёмся за форматы любой сложности, <br>
                        как для профессионалов, так и для новичков в мире вина.
                    </div>
                    <div id="carousel0"
                         class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            @foreach($methods as $method)
                                <div class="swiper-slide text-center">
                                    <div class="inner_ban in139">
                                        <img src="{{Voyager::image($method->image)}}"
                                             alt="Проведём интересно персональную дегустацию для вашей компании, м"
                                             class="img-responsive">
                                        <div class="desc">
                                            {{$method->title}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                </div>
                <section id="fourth_block">
{{--                    <img alt="image" id="talks_before" src="{{asset('image/page/testing/talks_before.png')}}">--}}
                    <h5 id="block_title">О НАС ГОВОРЯТ</h5>
                    <div class="swiper-container swiper-container-horizontal" id="testimonials">
                        <div class="swiper-wrapper">
                            @foreach($comments as $comment)
                                <div class="swiper-slide">
                                    <div class="swiper-inner">
                                        <h5>{{$comment->full_name}}</h5>
                                        <img alt="quotes_red_icon"
                                             src="{{asset('image/quotes-red.png')}}">
                                        <div class="testimonial">
                                            {{$comment->body}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
{{--                        <div class="swiper-button-next"></div>--}}
{{--                        <div class="swiper-button-prev"></div>--}}
                    </div>
                    <!-- Swiper JS -->
                </section>
            </div>
        </section>
        @push('scripts')
            <script type="text/javascript">
                var mySwipert = new Swiper('#carousel0', {
                    slidesPerView: 'auto',
                    loop: true,
                    initialSlide: 4,
                    centeredSlides: true,
                    center: true,
                    spaceBetween: 30,
                    loopFillGroupWithBlank: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        991: {
                            spaceBetween: 0,
                            centeredSlides: false,
                            center: false,
                            loopFillGroupWithBlank: false,
                            slidesPerView: 2
                        },

                    },

                });
                var swiper = new Swiper('#testimonials', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
        @endpush
    </div>
@endsection
