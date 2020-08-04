@extends('layouts.app')
@section('content')
    <style>
        #nmenu {
            position: fixed;
        }

        .swiper-container {
            width: 100%;
            height: 100vh;
        }

        .swiper-slide {
            min-height: 100vh;
            width: 100%;
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>

    <div id="information-informationwc" class="imennoe">
        <div class="row">
            <div id="content" class="col-sm-12}">
                <!-- Swiper -->
                <div class="swiper-container swiper-container-h">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" id="slide-1">
                            <div id="first-slide-d">
                                <h6 class="slide-ht" class="slide-ht">Именное <br/>вино</h6>
                                <div class="slide-tl">
                                    <p>
                                        Наверное, каждый из нас мечтал<br/>
                                        о личном шато в окружении собственных<br/> виноградников<br/>
                                        на берегу лазурного моря.<br/>
                                    </p>
                                    <p>
                                        Но мы живём в современных городах и<br/> максимум, что можем позволить - это
                                        винный<br/> погреб в своём доме.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="slide-2">
                            <div class="slide-mt">
                                Однако идея<br/>
                                выпустить своё<br/>
                                именное вино <br/>
                                нас не покидает...
                            </div>
                        </div>
                        <div class="swiper-slide" id="slide-3">
                            <div class="col-ss-7">

                            </div>
                            <div class="col-ss-5">
                                <h6 class="slide-mt">Проект Негоциант</h6>
                                <div class="slide-tl">
                                    <p>
                                        Проект «Негоциант» предлагает Вам создать коллекцию собственного вина, не выходя
                                        из дома.
                                    </p>
                                    <p>
                                        Мы подберем для Вас вино от лучших российских микровиноделен Крыма, Кубани,
                                        Ростова, Волгограда и Владикавказа.
                                    </p>
                                    <p>
                                        Мы проведём для Вас дегустацию и вместе с Вами выберем то вино, которое вам
                                        подходит.
                                    </p>
                                </div>
                                <div class="slide-m">
                                    Это будут вина, которые виноделы выпускают всего по одной бочке в год.
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide" id="slide-4">
                            <div class="col-ss-5">
                                <h6 class="slide-mt">Эксклюзив</h6>
                                <p class="slide-tl">
                                    Выбрав в результате приватной дегустации «своё» вино,<br/> мы согласуем с Вами
                                    оформление, тираж и контрактные сроки поставки.
                                </p>
                                <div class="slide-m">
                                    <img alt="slide" src="{{asset('image/page/personal/slide4-2.jpg')}}">
                                    <p>
                                        Общий тираж<br/> Вашего именного вина<br/> составит 300 бутылок
                                    </p>
                                </div>

                            </div>
                            <div class="col-ss-7">

                            </div>
                        </div>
                        <div class="swiper-slide" id="slide-5">
                            <div id="left-side">
                                <h6 class="slide-mt">Именное вино<br/> менее, чем за год</h6>
                                <div class="slide-tr">
                                    <p>
                                        Мы готовим вино для Вас, производим розлив<br/> и оформление вина после выдержки
                                        в<br/> дубовой бочке. Возможен розлив в бутылки <br/>0,75 л и магнумы 1,5
                                        л.<br/>
                                    </p>
                                    <p>
                                        И Вы получаете своё личное вино <br/> через девять месяцев.
                                    </p>
                                </div>
                            </div>
                            <div id="right-side">
                                <h6 class="slide-m">А можно и<br/>через месяц</h6>
                                <p class="slide-tr">
                                    В качестве альтернативы предлагаем оформить контракт на готовую бочку вина. После
                                    согласования оформления этикетки и сроков розлива можно будет получить готовое вино
                                    примерно через 1 месяц.
                                </p>
                            </div>


                        </div>
                        <div class="swiper-slide" id="slide-6">
                            <div class="col-sss-4">
                                <h6 class="slide-mt">Винодельни</h6>
                                <div class="slide-tr">
                                    <p>
                                        Все вина мы персонально отбираем на небольших винодельнях и даём гарантию на
                                        каждую бутылку. Залогом этого являются лучшие терруары страны, зрелые лозы и
                                        высококачественный виноград.
                                    </p>
                                    <p>
                                        Авторские винодельни, владельцы которых являются и виноделами, следят за всеми
                                        процессами персонально и создают вина с высоким потенциалом.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sss-8">
                                <div class="swiper-container swiper-container-v">
                                    <div class="swiper-wrapper">
                                        @foreach($wineries as $winery)
                                            <div class="swiper-slide">
                                                <a class="preview" href="{{route('winery', $winery->slug)}}">
                                                    <img src="{{Voyager::image($winery->nominal_image)}}" alt="image">
                                                    <span>{{$winery->title}}</span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-v"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-h"></div>
                </div>
                <!-- Swiper JS -->

                <!-- Initialize Swiper -->
                <script
                    src="https://code.jquery.com/jquery-2.2.4.js"
                    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
                    crossorigin="anonymous"></script>
                <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                <script>
                    if ($(window).width() > 992) {
                        var swiperH = new Swiper('.swiper-container-h', {
                            direction: 'vertical',
                            mousewheel: true,
                            speed: 550,
                            slidesPerView: 1,
                            pagination: {
                                el: '.swiper-pagination-h',
                                clickable: true,
                            },
                            keyboard: {
                                enabled: true,
                            },
                        });
                    }
                    var swiperV = new Swiper('.swiper-container-v', {
                        slidesPerView: 3,
                        centeredSlides: true,
                        mousewheel: true,
                        loopFillGroupWithBlank: true,
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination-v',
                            clickable: true,
                            type: 'fraction',
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        keyboard: {
                            enabled: true,
                        },
                        // breakpoints: {
                        //     991: {
                        //         slidesPerView: 'auto',
                        //         centeredSlides: false,
                        //         pagination: {
                        //             type: 'bullets',
                        //         },
                        //     },
                        // }
                    });
                </script>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            // product preview
            $(document).ready(function () {
                $('.preview').click(function () {
                    $(this).toggleClass('gotitclass');
                    var myEm = $(this).attr('data-region');
                    //alert(myEm);
                    $('.wineries_cont a.' + myEm).click();

                });
                var openPreview = function (data) {
                    $('body').append('<div id="product-preview"></div>');
                    $('body').addClass('nooverflow');
                    $('.imennoe').addClass('noevent');


                    $('#product-preview').html(data);
                    var width = $('#product-preview > *:eq(0)').width();
                    var close = $('<div class="icon-icon_x"></div>');
                    close.on('click', closePreview);
                    var closefield = $('#close-mask');
                    closefield.on('click', closePreview);
                    $('#product-preview').append(close);
                    $('#product-preview').css({left: width}).animate({left: 0});
                    // $('html, body').animate({
                    // 	scrollTop: $("#product-preview").offset().top
                    // }, 500);
                    var product_preview_wrap = $('#product-preview');
                    product_preview_wrap.on('click', function (e) {
                        if (e.target == product_preview_wrap[0]) {
                            closePreview.call(this);
                        }
                    });
                    $('#product-preview').on('scroll.preview', function () {
                        if ($(this).scrollTop() > 800) {
                            $('#product-preview .showcase').addClass('scrolled');
                        } else {
                            $('#product-preview .showcase').removeClass('scrolled');
                        }
                    });
                };

                var closePreview = function () {
                    $(this).off('click');
                    $('body').removeClass('nooverflow');
                    $('.imennoe').removeClass('noevent');
                    var product_preview_wrap = $('#product-preview');

                    product_preview_wrap.fadeOut(400, function () {
                        product_preview_wrap.remove();
                    });
                    $('#product-preview').off('scroll.preview');
                    $('html, body').animate({scrollTop: $(document).height()}, 0);
                };

                $('a.preview').click(function (e) {
                    e.preventDefault();
                    var href = $(this).attr('href');
                    href += (href.indexOf('?') == -1 ? '?' : '&') + 'nowrap=1';
                    $.get(href, function (data) {
                        openPreview(data);
                    }).error(function (err) {
                        // error in ajax
                    });
                });
            });

        </script>
        <script>
            if ($(window).width() < 991) {
                $('.imennoe .swiper-container-h > .swiper-wrapper').attr('class', '');

                var section = $('#slide-6');
                var sectin = $('#slide-6 .col-sss-4').height();
                var speche = $(section).height() - sectin;

                var sectionTop = section.offset().top + $(window).height() - $('header').height();
                var sectionTop1 = section.offset().top + $(window).height() + $('header').height();
                var section1 = $('.swiper-pagination.swiper-pagination-v');
                var sectionTop2 = section1.offset().top;
                $('.imennoe #slide-1 .slide-tl p:first-child').html('Наверное, каждый из нас мечтал<br> о личном шато в окружении<br> собственных виноградников<br> на берегу лазурного моря.<br>');
                $('#slide-1').append('<img src="/image/catalog/wineclub/mouse.png" id="mob-mouse" />');
                var setion = $('#slide-5');
                var setionTop = setion.offset().top;
                $(window).bind('scroll', function () {
                    var windowTop = $(window).scrollTop() + $(window).height();

                    if (windowTop > sectionTop) {
                        $('#slide-6 .col-sss-4').addClass('fixxed');
                        $(section).attr('style', 'height:' + $(section).height() + 'px;padding-top:' + sectin + 'px;');
                    }
                    if (windowTop < sectionTop1) {
                        $('#slide-6 .col-sss-4').removeClass('fixxed')
                        $(section).attr('style', 'height: auto;');
                    }
                    if (windowTop > sectionTop2) {
                        $('#slide-6 .col-sss-4').addClass('tothetop');
                    }
                    if (windowTop < sectionTop2) {
                        $('#slide-6 .col-sss-4').removeClass('tothetop');

                    }
                    if (windowTop > setionTop) {
                        $('#slide-5').addClass('showbg');

                    }
                    if (windowTop < setionTop) {
                        $('#slide-5').removeClass('showbg');

                    }
                });
            }
        </script>
    @endpush
@endsection
