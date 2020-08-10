@extends('layouts.app')
@section('title', $wine->title)
@section('description', $wine->meta_description)
@section('keywords', $wine->meta_keywords)
@section('content')
    <div id="product-product" class="product-temp1">
        <div class="background-white">
            <div id="content" class="single_product_Container">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="toShop">
                            <a onclick="window.history.back();" class="pageControl">
                                <i class="leftArrowSvg">
                                    <svg width="25" height="12" viewBox="0 0 31 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 8H1M1 8L8 15M1 8L8 1" stroke="#AFAFAF" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </i>
                                Вернуться в каталог
                            </a>
                        </div>
                        <div class="showcase">
                            <h2 class="desktopHidden">{{$wine->title}}</h2>
                            <div>
                                <div class="image">
                                    <img src="{{Voyager::image($wine->image)}}" title="{{$wine->title}}"
                                         alt="{{$wine->title}}">
                                </div>
                                <div class="back">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 col-xs-offset-6 col-md-offset-6">
                                            <div class="manufacturer">
                                                @if(isset($wine->winery))
                                                    <a href="{{route('winery', $wine->winery->slug )}}">
                                                              <span
                                                                  class="iblock">Производитель<br><span>{{$wine->manufacture->title}}</span></span>
                                                    </a>
                                                @else
                                                    <a href="#">
                                                              <span
                                                                  class="iblock">Производитель<br><span>{{$wine->manufacture->title}}</span></span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 col-lg-6">
                                            <div class="type">
                                                @if(isset($wine->color))
                                                    <img src="{{Voyager::image($wine->color->image)}}"
                                                         alt=""> {{$wine->color->title}}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-xs-6 col-xs-offset-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
                                            <div class="aging">
                                                @if(isset($wine->excerpt))
                                                    <span
                                                        class="iblock">Выдержка<br><span>{{$wine->excerpt->title}}</span>
                                                  @if($wine->excerpt->type == 1)
                                                            <span class="icon-icon_champagne"></span>
                                                        @elseif($wine->excerpt->type == 2)
                                                            <span class="icon-icon_barrel"></span>
                                                        @else
                                                            <span class=""></span>
                                                        @endif
                                              </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 ">
                                            <div class="alcohol">
                                                <img src="{{asset('image/gradus.png')}}" alt="">{{$wine->fortress}}%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-xs-offset-6">
                                            <div class="amount"><span
                                                    class="iblock">Тираж<br><span>{{$wine->edition}} <span
                                                            class="bottles">бутылок</span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="species">
                                                          <span class="iblock">Сорт винограда<br>
                                                                <span>{{$wine->sort->title}}</span>
                                                          </span>
                                                <img src="{{asset('image/vinograd.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-xs-offset-6">
                                            <div class="volume">{{$wine->volume}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button_cont desktopHidden">
                            <div class="prod_quantity">
                                <span class="qua_mins"></span>
                                <input type="number" class="quantity" data-id="{{$wine->id}}"
                                       value="1">
                                <span class="qua_plus"></span>
                            </div>
                            <button id="button-carts" class="cart-btn-{{$wine->id}}"
                                    onclick="cart_add('{{$wine->id}}', 1, 'wine');">
                                <span>В корзину</span></button>
                        </div>
                    </div>
                    <div class="col-md-6 decsRightSide">
                        <div class="product_page_Controls">
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}">Главная</a></li>
                                <li><a href="{{route('wine-shop')}}">Вино</a></li>
                            </ul>
                        </div>
                        <div class="social">
                            <a href="https://www.facebook.com" class="one-social">
                              <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M28.6867 3.387C27.9537 2.63025 27.0833 2.02994 26.1254 1.62037C25.1675 1.21081 24.1407 1 23.1038 1C22.0669 1 21.0402 1.21081 20.0822 1.62037C19.1243 2.02994 18.254 2.63025 17.5209 3.387L15.9996 4.95678L14.4783 3.387C12.9976 1.85914 10.9894 1.00079 8.89541 1.00079C6.80142 1.00079 4.79319 1.85914 3.31251 3.387C1.83184 4.91486 1 6.98708 1 9.1478C1 11.3085 1.83184 13.3807 3.31251 14.9086L4.83382 16.4784L15.9996 28L27.1654 16.4784L28.6867 14.9086C29.4201 14.1522 30.0019 13.2541 30.3988 12.2657C30.7957 11.2772 31 10.2178 31 9.1478C31 8.07785 30.7957 7.01838 30.3988 6.02992C30.0019 5.04147 29.4201 4.14339 28.6867 3.387Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                            <a href="https://www.instagram.com" class="one-social">
                              <svg width="30" height="36" viewBox="0 0 30 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1 18V31.6C1 32.5017 1.36875 33.3665 2.02513 34.0042C2.6815 34.6418 3.57174 35 4.5 35H25.5C26.4283 35 27.3185 34.6418 27.9749 34.0042C28.6313 33.3665 29 32.5017 29 31.6V18M22 7.8L15 1M15 1L8 7.8M15 1L15 23.1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                        </div>
                        <h1>{{$wine->title}}</h1>
                        @if(isset($wine->region))
                            <h2 class="region">{{$wine->region->title}}</h2>
                        @endif
                        <div class="col-12">
                            <h4 class="wineSubtype">Винтаж</h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="options" id="option1" checked="">
                                    <p>2017 г. </p><i class="priceDefice"></i>
                                    <p>2 500 р.</p>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option1">
                                    <p>2016 г. </p><i class="priceDefice"></i>
                                    <p>3 500 р.</p>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option1">
                                    <p>2015 г. </p><i class="priceDefice"></i>
                                    <p>4 500 р.</p>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option1">
                                    <p>2014 г. </p><i class="priceDefice"></i>
                                    <p>5 500 р.</p>
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="options" id="option1">
                                    <p>2013 г. </p><i class="priceDefice"></i>
                                    <p>6 500 р.</p>
                                </label>
                            </div>
                        </div>
                        <div id="product">
                            <div id="priceBlock" class="form-group">
                                <div class="priceContainer">
                                    <div class="button_cont">
                                      <div class="col-md-6">
                                        <div class="price-vinoteka col-md-12">
                                            <a href="#" class="preview">{{$wine->price}} <span class="currency">п</span></a>

                                        </div>
                                        <div class="col-md-12">
                                          <button id="button-carts" class="cart-btn-{{$wine->id}}"
                                                  onclick="cart_add('{{$wine->id}}', 1, 'wine');">
                                              <span>Добавить в корзину</span>
                                          </button>
                                        </div>
                                      </div>


                                        <div class="prod_quantity col-md-cstm">
                                            <span class="qua_plus"></span>
                                            <input type="number" class="quantity" data-id="{{$wine->id}}"
                                                   value="1">
                                            <span class="qua_mins"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bigDesc">
                            <div class="col-md-6">
                                <a href="#">
                                    <h3>Характеристики
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 5V19" stroke="black" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                            <path d="M19 12L12 19L5 12" stroke="black" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </h3>
                                </a>
                            </div>
                            <div class="col-md-6">
                                @if(isset($wine->winery))
                                    <a href="{{route('wine-shop')}}?winery={{$wine->winery->id}}"><h3>Другие вина
                                            винодельни</h3></a>
                                @else
                                    <a href="#"><h3>Другие вина винодельни</h3></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row secondDesc">
                    <div class="col-md-6 description">
                        <h4>Особенности производства</h4>
                        {!! $wine->production_feature !!}
                        <h4>Дегустационные характеристики</h4>
                        {!! $wine->combination !!}
                        <h4>Гастрономическое сочетание</h4>
                        {!! $wine->feature !!}
                        <h4>Подача</h4>
                        {!! $wine->innings !!}
                    </div>
                    @if(isset($wine->winery))
                        <div class="col-md-6 pl-12 row">
                            <div class="col-md-4">
                                <img src="{{Voyager::image($wine->winery->logo_image)}}" alt="" class="companyLogo">
                            </div>
                            <div class="col-md-8 companyDesc">
                                <h3 class="companyTitle">{{$wine->winery->title}}</h3>
                                <p>
                                    Крымский негоциантский проект YAIYLA это новое явление в современном российском
                                    виноделии.
                                    Негоцианство это не просто<br>
                                    бизнес, это определённая философия,
                                    через которую Виталий Маринчук старается выразить самобытную природу Крыма и
                                    доказать,
                                    что в этом регионе можно выпускать вина не только высокого качества, но и вина из
                                    редких,
                                    автохтонных сортов винограда.
                                </p>
                                <a href="{{route('winery', $wine->winery->slug)}}" class="btn btn-secondary toCompany">
                                    Подробнее о винодельне
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <section id="content_bottom">
                    <!-- 2nd slider here -->
                    <div class="featured_cont">
                        <!-- slider here -->
                        <!-- Swiper -->
                        <h4>Рекомендуем также</h4>
                        <div class="prevslide1" id="prevslide" tabindex="0" role="button" aria-label="Previous slide">
                            <img
                                src="{{ asset ('image/slidearrow.png') }}" style="transform: rotate(180deg);"></div>
                        <div class="nextslide1" id="nextslide" tabindex="0" role="button" aria-label="Next slide"><img
                                src="{{ asset ('image/slidearrow.png') }}"></div>
                        <div class="swiper-container" id="featured_slide1">
                            <div class="swiper-wrapper">
                                @foreach($wines as $wine)
                                    <div class="swiper-slide">
                                        <div class="wine">
                                            <div class="slider_image">
                                                <a href="{{route('wine', $wine->slug)}}" class="preview">
                                                    <img alt="{{$wine->title}}"
                                                         src="{{ Voyager::image($wine->image) }}">
                                                    <span class="attributes"></span>
                                                </a>
                                            </div>
                                            <h2><a href="{{route('wine', $wine->slug)}}"
                                                   class="preview">{{$wine->title}}</a>
                                            </h2>
                                            <p>{{isset($wine->winery) ? $wine->winery->title : ''}}</p>
                                            <div class="meta">
                                        <span
                                            class="color">{{isset($wine->color) ? $wine->color->title : '' }} </span><span
                                                    class="sep"> | </span>
                                                <span
                                                    class="hardness">{{isset($wine->sugar) ? $wine->sugar->title : ''}} </span><span
                                                    class="sep"> | </span>
                                                <span class=""> {{$wine->year}}</span>
                                                <div class="price-vinoteka">
                                                    <a href="{{route('wine', $wine->slug)}}"
                                                       class="preview">{{$wine->price}}
                                                        <span>п</span></a>
                                                </div>
                                                <div class="button_cont">
                                                    <div class="prod_quantity">
                                                        <span class="qua_mins"></span>
                                                        <input type="number" class="quantity" data-id="{{$wine->id}}"
                                                               value="1">
                                                        <span class="qua_plus"></span>
                                                    </div>
                                                    <button id="button-carts" class="cart-btn-{{$wine->id}}"
                                                            onclick="cart_add('{{$wine->id}}', 1, 'wine');">
                                                        <span>В корзину</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <!-- Add Arrows -->
                        </div>
                        <div class="swiper-pagination feat-pagination1"></div>
                        <!-- Swiper JS -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('js/cart.js') }}"></script>
    @endpush
@endsection
