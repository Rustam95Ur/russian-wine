@extends('layouts.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/tasting.css')}}">
@endpush
@section('content')
    <div id="tasting-page">
        <div id="banner">
            <div id="lozung">
                <h5>Персональные дегустации</h5>
                <ul id="list_under">
                    <li>Корпоратив или ужин</li>
                    <li>Дома или в офисе</li>
                    <li>Редкие вина</li>
                </ul>
            </div>
            <div id="button_link">
                <a id="set_vybor" href="#set_block">Выбрать сет</a>
                <a id="how_we" href="#how_we_cont">Как мы это делаем</a>
            </div>
            <div id="mouse_img"><a href="#first_block"><img alt="" src="{{asset('image/mouse.png')}}">
                    <div id="chevrons">
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                    </div>
                </a></div>
            <a href="#first_block">
            </a>
        </div>
        <section id="first_block">
            <div class="container">
                <div class="col-md-offset-1 col-md-4">
                    <img id="portret" src="{{asset('image/page/testing/portret_img.png')}}">

                </div>
                <div class="col-md-4">
                    <div class="text_prox_l">
                        Я продаю и продвигаю Русские Вина в течение 10 лет. Успешно работал на крупных винных заводах и
                        небольших винодельнях, объехал все винные хозяйства РФ и могу рассказать о каждом подробно и
                        интересно: какие вина лучше пить, как правильно выбрать вино, и кто выпускает гаражные вина. Я
                        привожу редкие вина, тираж которых может быть ограничен всего одной бочкой.
                        <br><br>
                        Цель дегустации – чтобы Вы нашли свое Любимое вино.
                    </div>
                    <div class="text_prox_i">
                        Мартынов Владимир<br>
                        негоциант, основатель проекта Русское Вино.
                    </div>
                </div>
            </div>
        </section>
        <section id="second_block">
            <div id="strange_im" class="fixed">
                <img src="{{asset('image/page/testing/crazy_bg.png')}}" id="strange_bg">
                <img src="{{asset('image/page/testing/crazy_img.png')}}" id="strange_img">
            </div>
            <img src="{{asset('image/page/testing/wine_hidden.png')}}" id="strange_img_hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="title_prox_bold">
                            Дегустационные сеты
                        </h5>
                        <p class="text_prox_l">
                            Каждый сет мы персонально отобрали для Вас. <br>
                            Только у нас полная коллекция Русских вин, которую мы собирали из небольших винных хозяйств.
                        </p>
                    </div>
                </div>
            </div>
            <div id="set_block" class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product_layout">
                            <div class="image">
                                <a class="preview" href="https://russianvine.ru/eksklyuziv"><img
                                        src="{{asset('image/page/testing/person_deg_p.jpg')}}" class="imp_prod"></a>
                            </div>
                            <div class="description">
                                <a class="preview" href="https://russianvine.ru/eksklyuziv"><h6>Эксклюзив<br>
                                        Персональная дегустация для двоих</h6></a>
                                <div class="parametrs">
                                    <div class="parametr">
                                        <ul class="list-inline">
                                            <li><img src="{{asset('image/page/testing/users.png')}}"> 2 человек</li>
                                            <li><img src="{{asset('image/page/testing/time.png')}}"> 90 минут</li>
                                            <li><img src="{{asset('image/page/testing/bottle.png')}}"> 8 вин</li>
                                        </ul>
                                        <a class="preview play_prod" href="https://russianvine.ru/eksklyuziv">
                                            <img src="{{asset('image/page/testing/play_link.png')}}">
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="prod_footer">
                                <div class="price ">
                                    15000 <span class="rub_p">ш</span>/чел.<p></p>
                                </div>
                                <div class="button_order" onclick="fastorder_open(882);" title="">
                                    Заказать
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="swiper-wrapper"
                             style="transition-duration: 0ms; transform: translate3d(-15492.1px, 0px, 0px);">
                            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in139">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner1-406x406.png"
                                         alt="Проведём интересно персональную дегустацию для вашей компании, м"
                                         class="img-responsive">
                                    <div class="desc">
                                        Проведём интересно персональную дегустацию для вашей компании, м
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in140">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner0-406x406.png"
                                         alt="Мы тщательно готовимся к каждой дегустации и обладаем запасом ре"
                                         class="img-responsive">
                                    <div class="desc">
                                        Мы тщательно готовимся к каждой дегустации и обладаем запасом ре
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="2"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in138">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner2-406x406.png"
                                         alt="У нас есть все необходимое: бокалы, декантеры, система охлаждени"
                                         class="img-responsive">
                                    <div class="desc">
                                        У нас есть все необходимое: бокалы, декантеры, система охлаждени
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                                 data-swiper-slide-index="3" style="margin-right: 30px;">
                                <div class="inner_ban in135">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner3-406x406.png"
                                         alt="На дегустации вы попробуете вина, которые совершили качественный"
                                         class="img-responsive">
                                    <div class="desc">
                                        На дегустации вы попробуете вина, которые совершили качественный
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="4" style="margin-right: 30px;">
                                <div class="inner_ban in136">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner4-406x406.png"
                                         alt="За два часа вы узнаете всё о лучших винах из Крыма, Кубани, Рост"
                                         class="img-responsive">
                                    <div class="desc">
                                        За два часа вы узнаете всё о лучших винах из Крыма, Кубани, Рост
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                                 data-swiper-slide-index="5" style="margin-right: 30px;">
                                <div class="inner_ban in137">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner5-406x406.png"
                                         alt="Вы узнаете всё о современном русском виноделии и терруарах нашей"
                                         class="img-responsive">
                                    <div class="desc">
                                        Вы узнаете всё о современном русском виноделии и терруарах нашей
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center" data-swiper-slide-index="0"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in139">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner1-406x406.png"
                                         alt="Проведём интересно персональную дегустацию для вашей компании, м"
                                         class="img-responsive">
                                    <div class="desc">
                                        Проведём интересно персональную дегустацию для вашей компании, м
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center" data-swiper-slide-index="1"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in140">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner0-406x406.png"
                                         alt="Мы тщательно готовимся к каждой дегустации и обладаем запасом ре"
                                         class="img-responsive">
                                    <div class="desc">
                                        Мы тщательно готовимся к каждой дегустации и обладаем запасом ре
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center" data-swiper-slide-index="2"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in138">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner2-406x406.png"
                                         alt="У нас есть все необходимое: бокалы, декантеры, система охлаждени"
                                         class="img-responsive">
                                    <div class="desc">
                                        У нас есть все необходимое: бокалы, декантеры, система охлаждени
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-prev" data-swiper-slide-index="3"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in135">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner3-406x406.png"
                                         alt="На дегустации вы попробуете вина, которые совершили качественный"
                                         class="img-responsive">
                                    <div class="desc">
                                        На дегустации вы попробуете вина, которые совершили качественный
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-active" data-swiper-slide-index="4"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in136">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner4-406x406.png"
                                         alt="За два часа вы узнаете всё о лучших винах из Крыма, Кубани, Рост"
                                         class="img-responsive">
                                    <div class="desc">
                                        За два часа вы узнаете всё о лучших винах из Крыма, Кубани, Рост
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-next" data-swiper-slide-index="5"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in137">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner5-406x406.png"
                                         alt="Вы узнаете всё о современном русском виноделии и терруарах нашей"
                                         class="img-responsive">
                                    <div class="desc">
                                        Вы узнаете всё о современном русском виноделии и терруарах нашей
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in139">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner1-406x406.png"
                                         alt="Проведём интересно персональную дегустацию для вашей компании, м"
                                         class="img-responsive">
                                    <div class="desc">
                                        Проведём интересно персональную дегустацию для вашей компании, м
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in140">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner0-406x406.png"
                                         alt="Мы тщательно готовимся к каждой дегустации и обладаем запасом ре"
                                         class="img-responsive">
                                    <div class="desc">
                                        Мы тщательно готовимся к каждой дегустации и обладаем запасом ре
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="2"
                                 style="margin-right: 30px;">
                                <div class="inner_ban in138">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner2-406x406.png"
                                         alt="У нас есть все необходимое: бокалы, декантеры, система охлаждени"
                                         class="img-responsive">
                                    <div class="desc">
                                        У нас есть все необходимое: бокалы, декантеры, система охлаждени
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                                 data-swiper-slide-index="3" style="margin-right: 30px;">
                                <div class="inner_ban in135">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner3-406x406.png"
                                         alt="На дегустации вы попробуете вина, которые совершили качественный"
                                         class="img-responsive">
                                    <div class="desc">
                                        На дегустации вы попробуете вина, которые совершили качественный
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="4" style="margin-right: 30px;">
                                <div class="inner_ban in136">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner4-406x406.png"
                                         alt="За два часа вы узнаете всё о лучших винах из Крыма, Кубани, Рост"
                                         class="img-responsive">
                                    <div class="desc">
                                        За два часа вы узнаете всё о лучших винах из Крыма, Кубани, Рост
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                                 data-swiper-slide-index="5" style="margin-right: 30px;">
                                <div class="inner_ban in137">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/banner5-406x406.png"
                                         alt="Вы узнаете всё о современном русском виноделии и терруарах нашей"
                                         class="img-responsive">
                                    <div class="desc">
                                        Вы узнаете всё о современном русском виноделии и терруарах нашей
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                </div>
                <section id="fourth_block">
                    <img id="talks_before" src="{{asset('image/page/testing/talks_before.png')}}">
                    <h5 id="block_title">О НАС ГОВОРЯТ</h5>
                    <div class="swiper-container swiper-container-horizontal" id="testimonials">
                        <div class="swiper-wrapper"
                             style="transition-duration: 0ms; transform: translate3d(-1549px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="0" style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/filatov-156x156.png">
                                    <a href="Филатов" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Евгений Филатов</h5>
                                    <div class="testimonial">
                                        Я шел абсолютно скептически настроенный, что у меня ничего не получится! Но у
                                        меня так замечательно получилось!!! Мне очень понравилось! Я получил эмоции,
                                        которые давно не испытывал в своей жизни. И самое главное, я впервые в жизни
                                        попробовал русское вино приличного качества. Это просто потрясающе! Спасибо вам
                                        огромное!&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                 data-swiper-slide-index="1" style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания Нордтекс</h5>
                                    <div class="testimonial">
                                        Дегустация по Русским Винам была яркой, интересной, вкусной! За два часа мы
                                        узнали, что у нас в стране есть шикарные вина. Высокий уровень дегустации, все
                                        было профессионально и увлекательно. Спасибо за такую организацию мероприятия!
                                        &nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                 data-swiper-slide-index="2" style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм 3" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания друзей</h5>
                                    <div class="testimonial">
                                        Для нас провели слепую дегустацию - мы сравнивали русское вино и европейское. К
                                        нашему удивлению, три первых места заняло наше вино из Волгограда, Владикавказа
                                        и Кубани! Все вина очень высокого уровня. Нам понравилось)&nbsp;
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                 style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/filatov-156x156.png">
                                    <a href="Филатов" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Евгений Филатов</h5>
                                    <div class="testimonial">
                                        Я шел абсолютно скептически настроенный, что у меня ничего не получится! Но у
                                        меня так замечательно получилось!!! Мне очень понравилось! Я получил эмоции,
                                        которые давно не испытывал в своей жизни. И самое главное, я впервые в жизни
                                        попробовал русское вино приличного качества. Это просто потрясающе! Спасибо вам
                                        огромное!&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                 style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания Нордтекс</h5>
                                    <div class="testimonial">
                                        Дегустация по Русским Винам была яркой, интересной, вкусной! За два часа мы
                                        узнали, что у нас в стране есть шикарные вина. Высокий уровень дегустации, все
                                        было профессионально и увлекательно. Спасибо за такую организацию мероприятия!
                                        &nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                                 style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм 3" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания друзей</h5>
                                    <div class="testimonial">
                                        Для нас провели слепую дегустацию - мы сравнивали русское вино и европейское. К
                                        нашему удивлению, три первых места заняло наше вино из Волгограда, Владикавказа
                                        и Кубани! Все вина очень высокого уровня. Нам понравилось)&nbsp;
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="0" style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/filatov-156x156.png">
                                    <a href="Филатов" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Евгений Филатов</h5>
                                    <div class="testimonial">
                                        Я шел абсолютно скептически настроенный, что у меня ничего не получится! Но у
                                        меня так замечательно получилось!!! Мне очень понравилось! Я получил эмоции,
                                        которые давно не испытывал в своей жизни. И самое главное, я впервые в жизни
                                        попробовал русское вино приличного качества. Это просто потрясающе! Спасибо вам
                                        огромное!&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                 data-swiper-slide-index="1" style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания Нордтекс</h5>
                                    <div class="testimonial">
                                        Дегустация по Русским Винам была яркой, интересной, вкусной! За два часа мы
                                        узнали, что у нас в стране есть шикарные вина. Высокий уровень дегустации, все
                                        было профессионально и увлекательно. Спасибо за такую организацию мероприятия!
                                        &nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                 style="width: 486.333px; margin-right: 30px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм 3" target="_blank" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания друзей</h5>
                                    <div class="testimonial">
                                        Для нас провели слепую дегустацию - мы сравнивали русское вино и европейское. К
                                        нашему удивлению, три первых места заняло наше вино из Волгограда, Владикавказа
                                        и Кубани! Все вина очень высокого уровня. Нам понравилось)&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper@4.0.7/dist/js/swiper.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
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


                    <div class="swiper-container slider-1 swiper-container-horizontal">
                        <div class="swiper-wrapper"
                             style="transition-duration: 0ms; transform: translate3d(-1519px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                 data-swiper-slide-index="2" style="width: 1519px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм 3" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания друзей</h5>
                                    <div class="testimonial">
                                        Для нас провели слепую дегустацию - мы сравнивали русское вино и европейское. К
                                        нашему удивлению, три первых места заняло наше вино из Волгограда, Владикавказа
                                        и Кубани! Все вина очень высокого уровня. Нам понравилось)&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                 style="width: 1519px;">
                                <div class="swiper-inner">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/filatov-156x156.png">
                                    <a href="Филатов" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Евгений Филатов</h5>
                                    <div class="testimonial">
                                        Я шел абсолютно скептически настроенный, что у меня ничего не получится! Но у
                                        меня так замечательно получилось!!! Мне очень понравилось! Я получил эмоции,
                                        которые давно не испытывал в своей жизни. И самое главное, я впервые в жизни
                                        попробовал русское вино приличного качества. Это просто потрясающе! Спасибо вам
                                        огромное!&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                 style="width: 1519px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания Нордтекс</h5>
                                    <div class="testimonial">
                                        Дегустация по Русским Винам была яркой, интересной, вкусной! За два часа мы
                                        узнали, что у нас в стране есть шикарные вина. Высокий уровень дегустации, все
                                        было профессионально и увлекательно. Спасибо за такую организацию мероприятия!
                                        &nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                                 style="width: 1519px;">
                                <div class="swiper-inner">
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/s_avatar/no_avatar-156x156.png">
                                    <a href="фрейм 3" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Компания друзей</h5>
                                    <div class="testimonial">
                                        Для нас провели слепую дегустацию - мы сравнивали русское вино и европейское. К
                                        нашему удивлению, три первых места заняло наше вино из Волгограда, Владикавказа
                                        и Кубани! Все вина очень высокого уровня. Нам понравилось)&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                 data-swiper-slide-index="0" style="width: 1519px;">
                                <div class="swiper-inner">
                                    <img src="https://russianvine.ru/image/cache/catalog/taste/filatov-156x156.png">
                                    <a href="Филатов" style="display:none !important;"><img
                                            src="{{asset('image/page/testing/youtube_link.png')}}"></a>
                                    <h5>Евгений Филатов</h5>
                                    <div class="testimonial">
                                        Я шел абсолютно скептически настроенный, что у меня ничего не получится! Но у
                                        меня так замечательно получилось!!! Мне очень понравилось! Я получил эмоции,
                                        которые давно не испытывал в своей жизни. И самое главное, я впервые в жизни
                                        попробовал русское вино приличного качества. Это просто потрясающе! Спасибо вам
                                        огромное!&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </section>
            </div>
        </section>
        @push('scripts')
            <script>
                $(document).ready(function () {

                    $("#button_link").on("click", "a", function (event) {
                        //отменяем стандартную обработку нажатия по ссылке
                        event.preventDefault();

                        //забираем идентификатор бока с атрибута href
                        var id = $(this).attr('href'),

                            //узнаем высоту от начала страницы до блока на который ссылается якорь
                            top = $(id).offset().top;

                        //анимируем переход на расстояние - top за 1500 мс
                        $('body,html').animate({scrollTop: top}, 1500);
                    });
                    $("#mouse_img").on("click", "a", function (event) {
                        //отменяем стандартную обработку нажатия по ссылке
                        event.preventDefault();

                        //забираем идентификатор бока с атрибута href
                        var id = $(this).attr('href'),

                            //узнаем высоту от начала страницы до блока на который ссылается якорь
                            top = $(id).offset().top;

                        //анимируем переход на расстояние - top за 1500 мс
                        $('body,html').animate({scrollTop: top}, 1000);
                    });
                    $("#top_arrow").on("click", function (event) {
                        //отменяем стандартную обработку нажатия по ссылке
                        event.preventDefault();

                        //забираем идентификатор бока с атрибута href
                        var id = $(this).attr('href'),

                            //узнаем высоту от начала страницы до блока на который ссылается якорь
                            top = $(id).offset().top;

                        //анимируем переход на расстояние - top за 1500 мс
                        $('body,html').animate({scrollTop: top}, 1500);
                    });
                });
            </script>
            <script>

                var num = 90; //number of pixels before modifying styles

                $(window).bind('scroll', function () {
                    if ($(window).scrollTop() > num) {
                        $('#top_arrow').addClass('show');
                    } else {
                        $('#top_arrow').removeClass('show');
                    }
                });

                var alert = 50; //number of pixels before modifying styles

                $(window).bind('scroll', function () {
                    if ($(window).scrollTop() > alert) {
                        $('.alert').addClass('jump_alert');
                    } else {
                        $('.alert').removeClass('jump_alert');
                    }
                });
            </script>
            <script>


                var position = $(window).scrollTop();

                var num = 90; //number of pixels before modifying styles

                // should start at 0

                $(window).scroll(function () {
                    var scroll = $(window).scrollTop();
                    if (scroll > position) {
                        $('#head_f').removeClass('fixed_h');
                    } else {
                        if ($(window).scrollTop() > num) {
                            $('#head_f').addClass('fixed_h');
                        }
                    }
                    if ($(window).scrollTop() < num) {
                        $('#head_f').removeClass('fixed_h');
                    }
                    position = scroll;
                });
            </script>

            <script>

                $('#menubutton').click(function () {
                    if ($(this).hasClass('open')) {
                        $(this).removeClass('open');
                    } else {
                        $('button.open').removeClass('open');
                        $(this).addClass('open');
                    }
                });
            </script>
            <script>

                var avatarElem = document.getElementById('strange_im');
                var vatarElem = document.getElementById('button_link');

                var avatarSourceBottom = vatarElem.getBoundingClientRect().top + window.pageYOffset;

                window.onscroll = function () {
                    if (window.pageYOffset > avatarSourceBottom) {
                        avatarElem.classList.add('fixed');
                    }
                };
            </script>
            <script>
                (function ($) {
                    "use strict"; // Start of use strict

                    // Smooth scrolling using jQuery easing
                    $('.nav a[href*="#"]:not([href="#"])').click(function () {
                        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            if (target.length) {
                                $('html, body').animate({
                                    scrollTop: (target.offset().top - 91)
                                }, 1000);
                                return false;
                            }
                        }
                    });

                    // Closes responsive menu when a scroll trigger link is clicked
                    $('.js-scroll-trigger').click(function () {
                        $('.navbar-collapse').collapse('hide');
                    });

                    // Activate scrollspy to add active class to navbar items on scroll
                    $('body').scrollspy({
                        target: '#menu',
                        offset: 91
                    });

                })(jQuery); // End of use strict
            </script>
            <script src="{{asset('js/tasting.js')}}"></script>
        @endpush
    </div>
@endsection
