@extends('layouts.app')
@section('content')
    <div id="blur_cont">
        <div id="blur-cont" class="sety-category">
            <div id="sety-banner">
                <h1 class="forwc">Винные сеты</h1>
                <p>Мы объехали все винодельни нашей страны и нашли самые интересные вина, тираж которых может быть ограничен всего одной бочкой в год!</p>
            </div>
            <div id="sety-section">
                @foreach($sets as $set)
                <div class="product_cont">
                    <div class="product_info">
                        <a href="">{{$set->title}}</a>
                        <span>{{$set->price}} <b>п</b></span>
                    </div>
                    <a href="">
                        <img alt="{{$set->title}}" src="{{Voyager::image($set->image)}}">
                    </a>
                </div>
                    @endforeach
            </div>
        </div>
        <footer id="sety-footer">
            <div class="left-side">
                <a href="https://russianvine.ru"><img src="image/catalog/wineclub/logo.png"></a>
                <button onclick="document.getElementById('modal_sviaz').style.display = 'block';$('#blur_cont').addClass('show');$('body').attr('class','nooverflow');">задать вопрос</button>
            </div>
            <div class="right-side">
                <a href="tel:+7 (915) 457-60-81">+7 (915) 457-60-81</a>
                <a href="mailto:info@russianvine.ru">info@russianvine.ru</a>
            </div>
        </footer>
        <div id="for-cart-close"></div>
        <div id="for-cart">

        </div>
    </div>
@endsection
