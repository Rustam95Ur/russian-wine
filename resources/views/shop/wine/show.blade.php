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
                                  <div class="">
                                      <a href="#" class="pageControl">
                                          <i class="leftArrowSvg">
                                              <svg width="25" height="12" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30 8H1M1 8L8 15M1 8L8 1" stroke="#AFAFAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                          </i>
                                            Вернуться в каталог
                                      </a>
                                  </div>
                                  <div class="showcase">
                                      <div>
                                          <div class="image">
                                              <img src="{{Voyager::image($wine->image)}}" title="{{$wine->title}}" alt="{{$wine->title}}">
                                          </div>
                                          <div class="back">
                                              <div class="row">
                                                  <div class="col-xs-6 col-md-6">
                                                      <div class="manufacturer">
                                                          <a href="{{route('winery', $wine->winery->slug )}}">
                                                              <span
                                                                  class="iblock">Производитель<br><span>{{$wine->manufacture->title}}</span></span>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-xs-6 col-xs-offset-6 col-md-6 col-md-offset-6 col-lg-6">
                                                      <div class="type"><img src="{{Voyager::image($wine->color->image)}}"
                                                                             alt=""> {{$wine->color->title}}
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-xs-6 col-md-6">
                                                      <div class="alcohol">
                                                          <img src="{{asset('image/gradus.png')}}" alt="">{{$wine->fortress}}%
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-xs-6 col-xs-offset-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
                                                      <div class="aging">
                                                          <span class="iblock">Выдержка<br><span>{{$wine->excerpt->title}}</span>
                                                              <span class="icon-icon_champagne"></span>
                                                          </span>
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
                                              <div class="row">
                                                  <div class="col-xs-6">
                                                      <div class="amount"><span class="iblock">Тираж<br><span>6000 <span class="bottles">бутылок</span></span></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                        <div class="col-md-6 decsRightSide">
                              <div class="product_page_Controls">
                                  <ul class="breadcrumb">
                                      <li><a href="http://dev.wine">Главная</a></li>
                                      <li><a href="http://dev.wine/wine-shop">Вино</a></li>
                                      <li><a href="http://dev.wine/wine-shop">Вино</a></li>
                                  </ul>
                              </div>
                              <div class="social">
                                  <a href="https://www.facebook.com" class="one-social"><span class="icon-icon_facebook"></span></a>
                                  <a href="https://www.instagram.com" class="one-social"><span class="icon-icon_instagram"></span></a>
                              </div>
                                  <h1>{{$wine->title}}</h1>
                                  <h2 class="region">{{$wine->region->title}}</h2>
                              <div class="col-12">
                                    <h4 class="wineSubtype">Винтаж</h4>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                          <label class="btn btn-secondary active">
                                            <input type="radio" name="options" id="option1" checked=""> <p>2017 г. </p><i class="priceDefice"></i> <p>1 500 р.</p>
                                          </label>
                                          <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option1"> <p>2017 г. </p><i class="priceDefice"></i> <p>1 500 р.</p>
                                          </label>
                                          <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option1"> <p>2017 г. </p><i class="priceDefice"></i> <p>1 500 р.</p>
                                          </label>
                                    </div>
                              </div>
                              <div id="product">
                                  <div id="price" class="form-group">
                                      <div class="priceContainer">
                                        <div class="button_cont">
                                          <div class="price-vinoteka">
                                              <a href="#" class="preview">{{$wine->price}} <span>п</span></a>
                                          </div>
                                          <button id="button-carts" class="cart-btn-{{$wine->id}}"
                                                  onclick="cart_add('{{$wine->id}}', 1, 'wine');">
                                              <span>В корзину</span>
                                          </button>
                                            <div class="prod_quantity">
                                                <span class="qua_mins"></span>
                                                <input type="number" class="quantity" data-id="{{$wine->id}}"
                                                       value="1">
                                                <span class="qua_plus"></span>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row bigDesc">
                                    <div class="col-md-6">
                                        <a href="#">
                                            <h3>Характеристики
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 5V19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M19 12L12 19L5 12" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </h3>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#"><h3>Другие вина винодельни</h3></a>
                                    </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 description">
                          <h4>Особенности производства</h4>
                          <p>
                            Ферментация на диких дрожжах в небольших ёмкостях из нержавеющей стали.
                            Вино выдерживалось на дрожжевом осадке 6 месяцев.
                            Кокур - автохтонный крымский сорт винограда.
                          </p>
                          <h4>Дегустационные характеристики</h4>
                          <p>
                            Вино светло-соломенного цвета.
                            Аромат комплексный фруктовый с тонами мёда, цитруса, полевых цветов и мякоти подсолнечника.
                            Вкус полный, глубокий, с приятной мягкой кислотностью и длительным послевкусием.
                          </p>
                          <h4>Гастрономическое сочетание</h4>
                          <p>
                            Сочетается с морепродуктами, а также с блюдами из черноморской рыбы.
                          </p>
                          <h4>Подача</h4>
                          <p>
                            Подавать при температуре 10 - 12 С.
                          </p>
                        </div>
                        <div class="col-md-6 pl-12 row">
                          <div class="col-md-4">
                                <img src="{{ asset ('image/lil.png') }}" alt="" class="companyLogo">
                          </div>
                          <div class="col-md-8 companyDesc">
                                <h3 class="companyTitle">Негоциантский проект YAIYLA</h3>
                                    <p>
                                        Крымский негоциантский проект YAIYLA это новое явление в современном российском виноделии.
                                        Негоцианство это не просто<br>
                                        бизнес, это определённая философия,
                                        через которую Виталий Маринчук старается выразить самобытную природу Крыма и доказать,
                                        что в этом регионе можно выпускать вина не только высокого качества, но и вина из редких,
                                        автохтонных сортов винограда.
                                    </p>
                                    <a href="#" class="btn btn-secondary toCompany">
                                        Подробнее о винодельне
                                      </a>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="row">
                  Слайдер сюда
                </div>
          </div>
    </div>

@endsection
