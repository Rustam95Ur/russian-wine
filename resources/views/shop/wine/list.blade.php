@extends('layouts.app')
@section('content')
    <div class="shopContent">
        <div class="row subHeader">
            <ul class="breadcrumb">
                <li><a href="">Главная</a></li>
                <li><a href="">Вино</a></li>
            </ul>
            <h1 class="pageHeading">Вино</h1>
            <p class="pageDesc">Мы собрали для Вас самую полную коллекцию Русских Вин, как крупных заводов, <br>
                так авторских микровиноделен.</p>
        </div>
        <div class="row sortSearch">
            <div class="shopSearch col-md-3">
                <form id="searchin-form">
                    <input id="search-main" type="text" placeholder="Поиск по каталогу">
                    <ul class="output" style="display:none;">
                    </ul>
                    <a type="submit" id="sfb" class="preview" value="">
                        <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="searchIconBlack">
                    </a>
                </form>
            </div>
            <div class="sorting col-md-3">
                <form id="sort-form">
                    <select id="inputState" class="form-control">
                        <option selected>по умолчанию</option>
                        <option>сначала дешевле</option>
                        <option>сначала дороже</option>
                    </select>
                    <img src="{{ asset ('image/chevron.svg') }}" alt="" class="iconSort">
                </form>
            </div>
        </div>
        <div class="row sortSearch">
            <div class="shopSearch col-md-3">
                <!--     fav filters (four bold filters)      -->
                <form id="favFilters" class="filtersMain">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="favSort1">
                        <label class="form-check-label" for="favSort1">
                            Без диоксида серы
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="favSort2">
                        <label class="form-check-label" for="favSort2">
                            Оранжевые вина
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="favSort3">
                        <label class="form-check-label" for="favSort3">
                            Автохтоны
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="favSort4">
                        <label class="form-check-label" for="favSort4">
                            Пет Нат
                        </label>
                    </div>
                </form>
                <!--     fav filters end                      -->

                <!--     wine color filters                   -->
                <form id="colFilters" class="filtersMain">
                    <h4 class="filterHeading">Цвет</h4>
                    @foreach($colors as $color)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$color->id}}" name="color"
                                   id="wineColor{{$color->id}}">
                            <label class="form-check-label" for="wineColor{{$color->id}}">
                                {{$color->title}}
                            </label>
                        </div>
                    @endforeach
                </form>
                <form id="priceFilters" class="filtersMain">
                    <h4 class="filterHeading">Цена</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="winePrice1">
                        <label class="form-check-label" for="winePrice1">
                            До 1000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="winePrice2">
                        <label class="form-check-label" for="winePrice2">
                            1000 - 1500
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="winePrice3">
                        <label class="form-check-label" for="winePrice3">
                            1500 - 3000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="winePrice4">
                        <label class="form-check-label" for="winePrice4">
                            3000 - 5000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="winePrice5">
                        <label class="form-check-label" for="winePrice5">
                            5000 - 10000
                        </label>
                    </div>
                    <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapse1" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="winePrice6">
                                    <label class="form-check-label" for="winePrice6">
                                        10000 - 15000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="custom-control-input" type="checkbox" value="" id="winePrice7">
                                    <label class="form-check-label" for="winePrice7">
                                        15000 - 30000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="custom-control-input" type="checkbox" value="" id="winePrice8">
                                    <label class="form-check-label" for="winePrice8">
                                        30000 - 50000
                                    </label>
                                </div>
                                <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
                <!--     wine price filters end               -->

                <!--     wine type filters                   -->
                <form id="wineTypeFilters" class="filtersMain">
                    <h4 class="filterHeading">Тип Вина</h4>
                    @foreach($sugars as $sugar)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$sugar->id}}"
                                   id="wineType{{$sugar->id}}">
                            <label class="form-check-label" for="wineType{{$sugar->id}}">
                                {{$sugar->title}}
                            </label>
                        </div>
                    @if($loop->index == 5)
                        @break
                    @endif
                @endforeach
                <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapseWineType" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($sugars as $sugar)
                                    @if($loop->index > 5)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{$sugar->id}}"
                                                   id="wineType{{$sugar->id}}">
                                            <label class="form-check-label" for="wineType{{$sugar->id}}">
                                                {{$sugar->title}}
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse"
                                    data-target="#collapseWineType" aria-expanded="false"
                                    aria-controls="collapseWineType">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
                <!--     wine type filters end               -->


                <!--     wine regions filters                   -->
                <form id="wineRegion" class="filtersMain">
                    <h4 class="filterHeading">Регион</h4>
                    @foreach($regions as $region)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$region->id}}"
                                   id="wineRegion{{$region->id}}">
                            <label class="form-check-label" for="wineRegion{{$region->id}}">
                                {{$region->title}}
                            </label>
                        </div>
                    @endforeach
                </form>
                <!--     wine regions filters end               -->

                <!--     wine winemaker filters                   -->
                <form id="shopWinemaker" class="filtersMain">
                    <h4 class="filterHeading">Винодельня</h4>
                    <!--  filter live search  -->
                    <div id="liveSearch-form">
                        <input id="search-main" type="text" placeholder="Поиск...">
                        <ul class="output" style="display:none;">
                        </ul>
                        <a type="submit" id="sfb" class="preview">
                            <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="liveSearchIcon">
                        </a>
                    </div>
                    <!--  filter live search end -->
                    @foreach($wineries as $winery)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$winery->id}}"
                                   id="shopWinemaker{{$winery->id}}">
                            <label class="form-check-label" for="shopWinemaker{{$winery->id}}">
                                {{$winery->title}}
                            </label>
                        </div>
                    @if($loop->index == 5)
                        @break
                    @endif
                @endforeach
                <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapseWinemakers" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($wineries as $winery)
                                    @if($loop->index > 5)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{$winery->id}}"
                                                   id="shopWinemaker{{$winery->id}}">
                                            <label class="form-check-label" for="shopWinemaker{{$winery->id}}">
                                                {{$winery->title}}
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse"
                                    data-target="#collapseWinemakers" aria-expanded="false"
                                    aria-controls="collapseWinemakers">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
                <!--     wine winemaker filters end               -->

                <!--     grape family filter                     -->
                <form id="shopWinefamily" class="filtersMain">
                    <h4 class="filterHeading">Сорт винограда</h4>
                    <!--  filter live search  -->
                    <div id="liveSearch-form">
                        <input id="search-main" type="text" placeholder="Поиск...">
                        <ul class="output" style="display:none;">
                        </ul>
                        <a type="submit" id="sfb" class="preview" value="">
                            <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="liveSearchIcon">
                        </a>
                    </div>
                    <!--  filter live search end -->
                    @foreach($sorts as $sort)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$sort->id}}"
                                   id="shopWineSort{{$sort->id}}">
                            <label class="form-check-label" for="shopWineSort{{$sort->id}}">
                                {{$sort->title}}
                            </label>
                        </div>
                    @if($loop->index == 5)
                        @break
                    @endif
                @endforeach
                <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapseWinefamily" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($sorts as $sort)
                                    @if($loop->index > 5)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{$sort->id}}"
                                                   id="shopWineSort{{$sort->id}}">
                                            <label class="form-check-label" for="shopWineSort{{$sort->id}}">
                                                {{$sort->title}}
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse"
                                    data-target="#collapseWinefamily" aria-expanded="false"
                                    aria-controls="collapseWinefamily">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>

                <!--     grape family filter end                 -->

                <!--     wine year filters                        -->
                <form id="shopWineAge" class="filtersMain">
                    <h4 class="filterHeading">Год</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopWineAge1">
                        <label class="form-check-label" for="shopWineAge1">
                            2019
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopWineAge2">
                        <label class="form-check-label" for="shopWineAge2">
                            2018
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopWineAge3">
                        <label class="form-check-label" for="shopWineAge3">
                            2017
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopWineAge4">
                        <label class="form-check-label" for="shopWineAge4">
                            2016
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopWineAge5">
                        <label class="form-check-label" for="shopWineAge5">
                            2015
                        </label>
                    </div>
                    <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapseWineAge" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopWineAge6">
                                    <label class="form-check-label" for="shopWineAge6">
                                        2014
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopWineAge7">
                                    <label class="form-check-label" for="shopWineAge7">
                                        2013
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopWineAge8">
                                    <label class="form-check-label" for="shopWineAge8">
                                        2012
                                    </label>
                                </div>
                                <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse"
                                    data-target="#collapseWineAge" aria-expanded="false"
                                    aria-controls="collapseWineAge">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
                <!--     wine grad filters end                    -->

                <!--     wine grad filters                        -->
                <form id="shopWineGrad" class="filtersMain">
                    <h4 class="filterHeading">Крепость</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopGrad1">
                        <label class="form-check-label" for="shopGrad1">
                            10%
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopGrad2">
                        <label class="form-check-label" for="shopGrad2">
                            10.5%
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopGrad3">
                        <label class="form-check-label" for="shopGrad3">
                            10.6%
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopGrad4">
                        <label class="form-check-label" for="shopGrad4">
                            11%
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="shopGrad5">
                        <label class="form-check-label" for="shopGrad5">
                            11.5%
                        </label>
                    </div>
                    <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapseWineGrad" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad6">
                                    <label class="form-check-label" for="shopGrad6">
                                        11.6%
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad7">
                                    <label class="form-check-label" for="shopGrad7">
                                        12%
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad8">
                                    <label class="form-check-label" for="shopGrad8">
                                        12.2%
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad9">
                                    <label class="form-check-label" for="shopGrad9">
                                        12.3%
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad10">
                                    <label class="form-check-label" for="shopGrad10">
                                        12.4%
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad11">
                                    <label class="form-check-label" for="shopGrad11">
                                        12.5%
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="shopGrad12">
                                    <label class="form-check-label" for="shopGrad12">
                                        12.6 %
                                    </label>
                                </div>
                                <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse"
                                    data-target="#collapseWineGrad" aria-expanded="false"
                                    aria-controls="collapseWineGrad">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--     wine grad filters end                    -->
            <!--   shop content -->
            <div class="shopSearch col-md-9">
                <div class="row featured_cont">
                    @foreach($wines as $wine)
                        <div class="col-md-4">
                            <div class="swiper-slide">
                                <div class="wine">
                                    <div class="image">
                                        <a href="#" class="likeSlider">
                                            <img src="{{ asset ('image/like.svg') }}" alt="like for this wine">
                                        </a>
                                        <a href="{{route('wine', $wine->slug)}}" class="preview">
                                            <img src="{{Voyager::image($wine->image)}}">
                                            <span class="attributes"></span>
                                        </a>
                                    </div>
                                    <h2><a href="{{route('wine', $wine->slug)}}" class="preview">{{$wine->title}}</a>
                                    </h2>
                                    <p>{{$wine->winery->title}}</p>
                                    <div class="meta">
                                        <span class="color">{{$wine->color->title}}</span><span
                                            class="sep"> | </span>
                                        <span class="hardness">{{$wine->sugar->title}}</span><span
                                            class="sep"> | </span>
                                        <span class="year"> {{$wine->year}}</span>
                                        <div class="price-vinoteka">
                                            <a href="#" class="preview">{{$wine->price}} <span>п</span></a>
                                        </div>
                                        <div class="button_cont">
                                            <div class="prod_quantity">
                                                <span class="qua_mins"></span>
                                                <input type="number" class="quantity" data-id="0"
                                                       value="1">
                                                <span class="qua_plus"></span>
                                            </div>
                                            <button id="button-carts"
                                                    onclick="cart.add('0'); $(this).addClass('active');">
                                                <span>В корзину</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12 mt-lg">
                        {{$wines->appends(request()->input())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
