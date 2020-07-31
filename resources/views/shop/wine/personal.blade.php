@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
@endpush
@section('content')
    <div id="information-informationwc" class="imennoe">
        <div class="row">
            <div id="content" class="col-sm-12">
                <!-- Swiper -->
                <div class="swiper-container swiper-container-h swiper-container-initialized swiper-container-vertical">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-active" id="slide-1">
                            <div class="swiper-slide swiper-slide-next" id="slide-2">
                                <div class="swiper-slide" id="slide-3" style="height: 754px;">
                                    <div class="col-ss-7">

                                    </div>
                                    <div class="col-ss-5">
                                        <h6 class="slide-mt">Проект Негоциант</h6>
                                        <div class="slide-tl">
                                            <p>
                                                Проект «Негоциант» предлагает Вам создать коллекцию собственного вина,
                                                не выходя
                                                из дома.
                                            </p>
                                            <p>
                                                Мы подберем для Вас вино от лучших российских микровиноделен Крыма,
                                                Кубани,
                                                Ростова, Волгограда и Владикавказа.
                                            </p>
                                            <p>
                                                Мы проведём для Вас дегустацию и вместе с Вами выберем то вино, которое
                                                вам
                                                подходит.
                                            </p>
                                        </div>
                                        <div class="slide-m">
                                            Это будут вина, которые виноделы выпускают всего по одной бочке в год.
                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide" id="slide-4" style="height: 754px;">
                                    <div class="col-ss-5">
                                        <h6 class="slide-mt">Эксклюзив</h6>
                                        <p class="slide-tl">
                                            Выбрав в результате приватной дегустации «своё» вино,<br> мы согласуем с
                                            Вами
                                            оформление, тираж и контрактные сроки поставки.
                                        </p>
                                        <div class="slide-m">
                                            <img alt="slide" src="{{asset('image/page/personal/slide4-2.jpg')}}">
                                            <p>
                                                Общий тираж<br> Вашего именного вина<br> составит 300 бутылок
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-ss-7">

                                    </div>
                                </div>
                                <div class="swiper-slide" id="slide-5" style="height: 754px;">
                                    <div id="left-side">
                                        <h6 class="slide-mt">Именное вино<br> менее, чем за год</h6>
                                        <div class="slide-tr">
                                            <p>
                                                Мы готовим вино для Вас, производим розлив<br> и оформление вина после
                                                выдержки
                                                в<br> дубовой бочке. Возможен розлив в бутылки <br>0,75 л и магнумы 1,5
                                                л.<br>
                                            </p>
                                            <p>
                                                И Вы получаете своё личное вино <br> через девять месяцев.
                                            </p>
                                        </div>
                                    </div>
                                    <div id="right-side">
                                        <h6 class="slide-m">А можно и<br>через месяц</h6>
                                        <p class="slide-tr">
                                            В качестве альтернативы предлагаем оформить контракт на готовую бочку вина.
                                            После
                                            согласования оформления этикетки и сроков розлива можно будет получить
                                            готовое вино
                                            примерно через 1 месяц.
                                        </p>
                                    </div>


                                </div>
                                <div class="swiper-slide" id="slide-6" style="height: 754px;">
                                    <div class="col-sss-4">
                                        <h6 class="slide-mt">Винодельни</h6>
                                        <div class="slide-tr">
                                            <p>
                                                Все вина мы персонально отбираем на небольших винодельнях и даём
                                                гарантию на
                                                каждую бутылку. Залогом этого являются лучшие терруары страны, зрелые
                                                лозы и
                                                высококачественный виноград.
                                            </p>
                                            <p>
                                                Авторские винодельни, владельцы которых являются и виноделами, следят за
                                                всеми
                                                процессами персонально и создают вина с высоким потенциалом.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sss-8">
                                        <div
                                            class="swiper-container swiper-container-v swiper-container-initialized swiper-container-horizontal">
                                            <div class="swiper-wrapper"
                                                 style="transition-duration: 0ms; transform: translate3d(-1344px, 0px, 0px);">
                                                <div
                                                    class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                                    data-swiper-slide-index="0" style="width: 448px;">
                                                    <a class="preview"
                                                       href="index.php?route=product/winery&amp;winery_id=73">
                                                        <img alt="" src="{{asset('image/page/personal/Yanis.jpg')}}">
                                                        <span>Каракезиди</span></a>
                                                </div>
                                                <div
                                                    class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                                    data-swiper-slide-index="1" style="width: 448px;">
                                                    <a class="preview"
                                                       href="index.php?route=product/winery&amp;winery_id=47">
                                                        <img alt=""
                                                             src="{{asset('image/page/personal/uppa-pavel.jpg')}}">
                                                        <span>Винодельня Павла Швеца UPPA</span>
                                                    </a>
                                                </div>
                                                <div
                                                    class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                                    data-swiper-slide-index="2" style="width: 448px;">
                                                    <a class="preview"
                                                       href="index.php?route=product/winery&amp;winery_id=15">
                                                        <img alt=""
                                                             src="{{asset('image/page/personal/slidetest1.jpg')}}">
                                                        <span>Винодельня Константина Дзитоева</span></a>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper-pagination swiper-pagination-v swiper-pagination-fraction"><span
                                                    class="swiper-pagination-current">2</span><span
                                                    class="swiper-pagination-total">3</span></div>
                                            <div class="swiper-button-next" tabindex="0" role="button"
                                                 aria-label="Next slide"></div>
                                            <div class="swiper-button-prev" tabindex="0" role="button"
                                                 aria-label="Previous slide"></div>

                                            <span class="swiper-notification" aria-live="assertive"
                                                  aria-atomic="true"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div
                                class="swiper-pagination swiper-pagination-h swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                              role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                                                                    tabindex="0" role="button"
                                                                                    aria-label="Go to slide 2"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                                                                            tabindex="0"
                                                                            role="button"
                                                                            aria-label="Go to slide 4"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet"
                                                                            tabindex="0"
                                                                            role="button"
                                                                            aria-label="Go to slide 6"></span>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <!-- Swiper JS -->

                        <!-- Initialize Swiper -->
                        @push('script')
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
                                    breakpoints: {
                                        991: {
                                            slidesPerView: 'auto',
                                            centeredSlides: false,
                                            pagination: {
                                                type: 'bullets',
                                            },
                                        },
                                    }
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
                                    $('#slide-1').append('<img src="/image/page/personal/mouse.png" id="mob-mouse" />');
                                    var setion = $('#slide-5');
                                    var setionTop = setion.offset().top;
                                    $(window).bind('scroll', function() {
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
                    </div>
                </div>
            </div>

@endsection
