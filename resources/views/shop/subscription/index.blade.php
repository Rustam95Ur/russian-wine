@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/subscription.css')}}">
    @endpush
@section('content')
    <div id="product-category" class="container">
        <ul class="breadcrumb">
            <li><a href="https://russianvine.ru/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
            <li><a href="https://russianvine.ru/podpiska/">Подписка</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12">
                <h2>Подписка</h2>
                <div class="row">
                    <div class="col-sm-10">
                        <div id="blur_cont">
                            <div id="top_podpiska">
                                <div id="bannertitle">
                                    <div id="title">
                                        Подписка<br> на вино
                                    </div>
                                    <div class="inner f26pl">
                                        <p>Как же порой трудно ориентироваться в мире вина, особенно Русского! Чтобы
                                            облегчить Вам решение этой непростой задачи, мы сами отобрали лучшие вина и
                                            скомпоновали их в сеты. Оформите подписку на вино, и Вы станете обладателем
                                            редких вин, тираж которых может быть ограничен всего одной бочкой в год!</p>
                                    </div>
                                </div>
                            </div>
                            <div id="firstblock">
                                <div class="col-sp-11">
                                    <div class="text_s_s">
                                        <p>
                                            При оформлении подписки, Вы станете ежемесячно получать сет из 6 бутылок
                                            вина с описанием что это за вино, винодельни где эти вина произведены, и кто
                                            винодел. Сет будет обновляться каждый месяц.

                                        </p>
                                        <p>
                                            Более того, при оформлении подписки Вы будете гарантированно получать вина,
                                            которые нельзя будет купить в винотеках.
                                        </p>
                                        <a href="/avtohtonnyj-set-1">
                                            <button id="podpiska" data-toggle="modal" data-target="#modal_podpiska">
                                                оформить подписку
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sp-13">
                                    <img class="image_s_s" src="{{asset('image/page/subscription/first_img.png')}}">
                                </div>
                                <h2 id="sety-title">СЕТЫ</h2>
                            </div>
                            <div id="secondblock">
                                <div class="col-sp-8">
                                    <div class="podpiska-thumb">
                                        <a href="gastronomicheskij-set-1"></a>
                                        <img src="{{asset('image/page/subscription/set-gastro.jpg')}}">
                                        <div class="desc-mask">
                                            <h4>Гастрономические</h4>
                                            <div class="description">

                                                Хотите насладиться сочетанием лучших русских вин с гастрономией? Тогда
                                                предлагаем попробовать шесть редких образцов от микровиноделен Долины
                                                Дона и Долины Терека.
                                                <img class="fordesc" src="{{asset('image/page/subscription/plus.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sp-8">
                                    <div class="podpiska-thumb">
                                        <img src="{{asset('image/page/subscription/set-avto.jpg')}}">
                                        <a href="/avtohtonnyj-set-1"></a>
                                        <div class="desc-mask">
                                            <h4>Автохтонные</h4>
                                            <div class="description">Уникальная серия вин. Это наши, русские,
                                                аборигенные сорта винограда: Красностоп Золотовский, Сибирьковый,
                                                Цимлянский Чёрный, которые произрастают только в России.
                                                <img class="fordesc" src="{{asset('image/page/subscription/plus.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sp-8">
                                    <div class="podpiska-thumb">
                                        <a href="rezerv-set-1"></a>
                                        <img src="{{asset('image/page/subscription/set-rezervy.jpg')}}">

                                        <div class="desc-mask">
                                            <h4>Резервы</h4>
                                            <div class="description">Подборка красных выдержанных вин от Константина
                                                Дзитоева, Олега Репина, а также редкий образец - Ренессанс 2012 года.
                                                Насыщенные и танинные, для уютного вечера или для ужина.
                                                <img class="fordesc" src="{{asset('image/page/subscription/plus.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="thirdblock">
                                <div class="col-sp-13">
                                    <div class="newsletter">
                                        <h4>Годовая подписка</h4>
                                        <p>
                                            Особое предложение для тех кто любит вино, постоянно экспериментирует и
                                            находится в активном поиске редких вин.
                                        </p>
                                        <p>
                                            Оформив годовую подписку на вино, Вам гарантирован приоритет в получении
                                            особо редких вин, специальные предложения и эксклюзивная скидка 20% на все
                                            вина, которые вы будете получать в течении года.
                                        </p>
                                        <a href="/avtohtonnyj-set-12">
                                            <button id="podpiska-god">Оформить годовую подписку</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sp-11">
                                    <img src="{{asset('image/page/subscription/lastimg.jpg')}}">
                                    <img src="{{asset('image/page/subscription/lastimg.jpg')}}" class="abs_img">
                                </div>
                            </div>
                            <div id="pod_lastblock">
                                <div class="col-sp-24">

                                    <img class="bokal" src="{{asset('image/page/subscription/bokal.png')}}">

                                    <h2>-20%</h2>
                                </div>&gt;
                                <div class="col-sp-12">
                                    <a href="https://russianvine.ru">
                                        <img src="{{asset('image/logo/logo-club.png')}}">
                                    </a>
                                    <button id="question"
                                            onclick="document.getElementById('modal_sviaz').style.display = 'block';$('#blur_cont').attr('class','show');$('body').attr('class','nooverflow');">
                                        задать вопрос
                                    </button>
                                </div>
                                <div class="col-sp-12">
                                    <div><a class="telephone">+7 (915) 457 60 81</a><br>
                                        <a id="mailto" href="mailto:info@russianvine.ru">info@russianvine.ru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
