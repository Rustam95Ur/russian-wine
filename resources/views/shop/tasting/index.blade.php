@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/tasting.css')}}">
@endpush
@section('content')
    <div id="tasting-page">
        <section id="banner">
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
                    <a id="set_vybor" href="#sets_anchor">Выбрать сет</a>
                    <a id="how_we" href="#how_we_cont">Как мы это делаем</a>
                </div>
                <div class="row">
                    <div class="col-md-12" id="sets_anchor">
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
                                    <a class="preview"
                                       onclick="$('#tasting_modal-{{$tasting->id}}').css('display', 'block');$('body').addClass('nooverflow');">
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
                                                @if(count($tasting->wines) > 0)
                                                    <li>
                                                        <img alt="bottle_icon"
                                                             src="{{asset('image/page/testing/bottle.png')}}">
                                                        {{count($tasting->wines)}} вин
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="prod_footer">
                                    <div class="price ">
                                        {{$tasting->price}} <span class="rub_p">ш</span>/чел.<p></p>
                                    </div>
                                    <form method="post" action="{{route('tasting_checkout')}}">
                                        @csrf
                                        <input type="hidden" name="tasting" value="{{$tasting->id}}">
                                        <div class="button_order" onclick=" $(this).closest('form').submit();" title="">
                                            Заказать
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
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
                                             alt="{{$method->title}}"
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
            </div>
        </section>
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
            </div>
            <!-- Swiper JS -->
        </section>
        <section id="question">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <h2 class="text-center">Остались вопросы?</h2>
                        <p class="text-center">Свяжитесь с нами по указанным данным или отправьте сообщение
                    </div>
                    <div class="col-md-12 col-md-offset-1">
                        <div class="col-md-5">
                            <form class="question_form">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Телефон или email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Сообщение"></textarea>
                                </div>
                                <button type="submit" class="btn">Отправить</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-md-offset-1 contact_info">
                            <div class="phone_block">
                                <p>Телефон</p>
                                <a href="tel:+7 (915) 457-60-81">+7 (915) 457-60-81</a>
                            </div>
                            <div class="email_block">
                                <p>E-mail</p>
                                <a href="mailto:info@russianvine.ru">info@russianvine.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
                // breakpoints: {
                //     991: {
                //         spaceBetween: 0,
                //         centeredSlides: false,
                //         center: false,
                //         loopFillGroupWithBlank: false,
                //         slidesPerView: 2
                //     },
                //
                // },

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
    @foreach($tastings as $tasting)
        <div id="tasting_modal-{{$tasting->id}}" class="tasting_modal">
            <div class="shadow_close"
                 onclick="$('#tasting_modal-{{$tasting->id}}').css('display', 'none');$('body').removeClass('nooverflow');"></div>
            <div class="tasting_body">
                <div class="icon_close"
                     onclick="$('#tasting_modal-{{$tasting->id}}').css('display', 'none');$('body').removeClass('nooverflow');"></div>
                <h2>{{$tasting->title}}</h2>
                <ul class="list-inline">
                    <li>
                        {{$tasting->user_count}} человек
                    </li>
                    <li>
                        {{$tasting->time}} минут
                    </li>
                    @if(count($tasting->wines) > 0)
                        <li>
                            {{count($tasting->wines) }} вин
                        </li>
                    @endif

                </ul>
                <p class="tasting_desc">{!! $tasting->description  !!}</p>
                @foreach($tasting->wines as  $wine)
                    <a href="{{route('wine', $wine->slug)}}">
                        <img class="tasting_wine_image" src="{{Voyager::image($wine->image)}}" alt="{{$wine->title}}">
                    </a>
                @endforeach
                <ul class="tasting_wine_title_list">
                    @foreach($tasting->wines as $wine)
                        <li>
                            {{isset($wine->winery) ? $wine->winery->title : '' }} |
                            {{$wine->title}} | {{$wine->year}} |
                            {{isset($wine->region) ? $wine->region->title : '' }}
                        </li>
                    @endforeach
                </ul>
                <hr>
                <div class="col-md-6"><a class="tasting_price">{{$tasting->price}} ₽ / чел</a></div>
                <div class="col-md-6">
                    <form method="post" action="{{route('tasting_checkout')}}">
                        @csrf
                        <input type="hidden" name="tasting" value="{{$tasting->id}}">
                        <a id="deg_order" class="btn-danger" onclick="$(this).closest('form').submit();">Заказать
                            дегустацию</a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
