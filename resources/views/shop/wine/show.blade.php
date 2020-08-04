@extends('layouts.app')
@section('title', $wine->title)
@section('description', $wine->meta_description)
@section('keywords', $wine->meta_keywords)
@section('content')
    <div id="product-product" class="product-temp1">
        <div class="background-white">
            <div id="content">
                <div class="year-dashes">
                </div>
                <h1>{{$wine->title}}</h1>
                <div class="region">{{$wine->region->title}}</div>
                <div class="showcase">
                    <div class="container container-lg">
                        <div class="year">{{$wine->year}}</div>
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
                <div id="product">
                    <div id="price" class="form-group">
                        <div class="container-lg">
                            <div class="price">
                                <span class="price-title">Средняя цена</span> 1200 <span>о</span></div>

                            <label style="display:none" class="control-label" for="input-quantity">Количество</label>
                            <input style="display:none" type="text" name="quantity" value="1" size="2"
                                   id="input-quantity" class="form-control">
                            <input style="display:none" type="hidden" name="product_id" value="928">
                            <button type="button" id="button-cart" data-loading-text="Загрузка..."
                                    class="btn btn-primary btn-lg btn-block">В корзину
                            </button>


                            <div style="display:none">98</div>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com" class="one-social"><span class="icon-icon_facebook"></span></a>
                    <a href="https://www.instagram.com" class="one-social"><span class="icon-icon_instagram"></span></a>
                </div>
                <div class="descriptions">
                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-2">
                                <h2>Особенности производства</h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                                <p></p>
                                <p>PetNat в переводе с французского означает «натуральное игристое». Создано из
                                    винограда автохтонного донского сорта сибирьковый. Применена технология
                                    «ансестраль»: сначала частичная ферментация проходила в стальной емкости, потом
                                    разливалось в бутылки, где и завершался процесс брожения. Не использовались
                                    фильтрация и оклейка.&nbsp;</p>
                                <p></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-2">
                                <h2>Дегустационные характеристики</h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                                <p></p>
                                <p>Игристое вино жемчужно-соломенного цвета. Аромат свежий, открытый, с элегантными
                                    нотами белых тропических фруктов, лайма, грейпфрута и оттенками чёрной смородины.
                                    Вкус свежий, округлый, гастрономичный, с фруктовым послевкусием.</p>
                                <p></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-2">
                                <h2>Гастрономическое сочетание </h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                                <p></p>
                                <p>Идеально сочетаются с блюдами почти любой национальной кухни. Отлично под
                                    морепродукты и лёгкие летние салаты.&nbsp;</p>
                                <p></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-2">
                                <h2>Подача</h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                                <p>Подавать при температуре 6 - 8С.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="where-to-buy">
                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text-right">
                                <a href="https://russianvine.ru/where-to-buy"><span class="icon-icon_info"></span> Где
                                    Купить?</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>


    </div>

@endsection
