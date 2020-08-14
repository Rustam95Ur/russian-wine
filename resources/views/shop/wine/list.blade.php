@extends('layouts.app')
@section('content')
    <div class="shopContent">
        <div class="row subHeader">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Главная</a></li>
                <li><a href="{{route('wine-shop')}}">Вино</a></li>
            </ul>
            <h1 class="pageHeading">Вино</h1>
            <p class="pageDesc">Мы собрали для Вас самую полную коллекцию Русских Вин, как крупных заводов, <br>
                так авторских микровиноделен.</p>
        </div>
        <div class="row sortSearch">
            <div class="col-xs-6">
                <a class="mobileFilters visible-xs"
                   onclick="$('#filtMobi').addClass('open');$('.shopContent').addClass('hideMe');">
                    <img src="{{ asset ('image/filters.svg') }}" alt="" class="search-icon filtersIconsMobile">
                    <span class="mobileFiltersText">Фильтр</span>
                </a>
            </div>
            <div class="col-xs-6">
                <a class="mobileSorting visible-xs"
                   onclick="$('#sortMobi').addClass('open'); $('.shopContent').addClass('hideMe'); ">
                    <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="search-icon sortingIconsMobile">
                    <span class="mobileFiltersText">Сортировать</span>
                </a>
                <!-- sorting windows in bottom -->
            </div>
            <div class="shopSearch col-md-3">
                <form id="searching-form" method="get">
                    <input id="search-main" type="text" name="title" placeholder="Поиск по каталогу"
                           value="{{array_key_exists('title', $filters) ? $filters['title'] : ''}}">
                    <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="search-icon searchIconBlack">
                </form>
            </div>
            <div class="sorting col-md-3 mobileHidden">
                <select id="inputState" name="price_sort" class="form-control custom-select sources"
                        form="searching-form"
                        @if(array_key_exists('price_sort', $filters))
                        placeholder="{{$filters['price_sort'] == 'asc' ? 'сначала дешевле' : ' сначала дороже'}}">
                    @else
                        placeholder="по умолчанию">
                    @endif
                    @if(array_key_exists('price_sort', $filters))
                        <option value="asc" {{$filters['price_sort'] == 'asc' ? 'selected' : ''}}>
                            сначала дешевле
                        </option>
                        <option value="desc" {{$filters['price_sort'] == 'desc' ? 'selected' : ''}}>
                            сначала дороже
                        </option>
                    @else
                        <option value="asc">сначала дешевле</option>
                        <option value="desc">сначала дороже</option>
                    @endif
                </select>
                <span class="sortingTitle mobileHidden">Сортировать</span>
                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="iconSort">
            </div>
        </div>
        <div class="row sortSearch">
            <div class="shopSearch filtersMain  col-md-3">
                <!--     fav filters (four bold filters)      -->
                @foreach($classes as $class)
                    <div class="form-check">
                        <input class="form-check-input" form="searching-form" name="wine_class[]" type="checkbox"
                               value="{{$class->id}}" id="classSort{{$class->id}}"
                               @if(array_key_exists('wine_class', $filters) and in_array($class->id, $filters['wine_class']))
                               checked
                            @endif
                        >
                        <label class="form-check-label" for="classSort{{$class->id}}">
                            <b>{{$class->title}}</b>
                        </label>
                        <!-- tooltip -->
                        <img class="tippyTooltip" data-template="tooltip-{{$class->id}}"
                             src="{{ asset ('image/tooltip.svg') }}" alt="">
                        <!--end tooltip -->
                        <!-- template for tooltip  -->
                        <div style="display: none;">
                            <div id="tooltip-{{$class->id}}">
                                <h4>{{$class->title}}</h4>
                                <p>{{$class->description}}</p>
                            </div>
                        </div>
                        <!-- end template for tooltip  -->
                    </div>
                @endforeach
            <!--     fav filters end                      -->

                <!--     wine color filters                   -->
                <h4 class="filterHeading">Цвет</h4>

                @foreach($colors as $color)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" form="searching-form" value="{{$color->id}}"
                               name="color[]" id="wineColor{{$color->id}}"
                               @if(array_key_exists('color', $filters) and in_array($color->id, $filters['color']))
                               checked
                            @endif>
                        <label class="form-check-label" for="wineColor{{$color->id}}">
                            {{$color->title}}
                        </label>
                    </div>
                @endforeach
                <h4 class="filterHeading">Цена</h4>
                <div class="form-check">
                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox" value="0-1000"
                           id="winePrice1"
                           @if(array_key_exists('price', $filters) and in_array('0-1000', $filters['price']))
                           checked
                        @endif>
                    <label class="form-check-label" for="winePrice1">
                        До 1000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                           value="1000-1500" id="winePrice2"
                           @if(array_key_exists('price', $filters) and in_array('1000-1500', $filters['price']))
                           checked
                        @endif>
                    <label class="form-check-label" for="winePrice2">
                        1000 - 1500
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                           value="1500-3000" id="winePrice3"
                           @if(array_key_exists('price', $filters) and in_array('1500-3000', $filters['price']))
                           checked
                        @endif>
                    <label class="form-check-label" for="winePrice3">
                        1500 - 3000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                           value="3000-5000" id="winePrice4"
                           @if(array_key_exists('price', $filters) and in_array('3000-5000', $filters['price']))
                           checked
                        @endif>
                    <label class="form-check-label" for="winePrice4">
                        3000 - 5000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                           value="5000-10000" id="winePrice5"
                           @if(array_key_exists('price', $filters) and in_array('5000-10000', $filters['price']))
                           checked
                        @endif>
                    <label class="form-check-label" for="winePrice5">
                        5000 - 10000
                    </label>
                </div>
                <!--   collapse other prices   -->
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div id="collapse-price" class="panel-collapse collapse">
                            <!--  Collapse inner space   -->
                            <div class="form-check">
                                <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                       value="10000-15000" id="winePrice6"
                                       @if(array_key_exists('price', $filters) and in_array('10000-15000', $filters['price']))
                                       checked
                                    @endif>
                                <label class="form-check-label" for="winePrice6">
                                    10000 - 15000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="custom-control-input" form="searching-form" name="price[]" type="checkbox"
                                       value="15000-30000" id="winePrice7"
                                       @if(array_key_exists('price', $filters) and in_array('15000-30000', $filters['price']))
                                       checked
                                    @endif>
                                <label class="form-check-label" for="winePrice7">
                                    15000 - 30000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="custom-control-input" form="searching-form" name="price[]" type="checkbox"
                                       value="30000-50000" id="winePrice8"
                                       @if(array_key_exists('price', $filters) and in_array('30000-50000', $filters['price']))
                                       checked
                                    @endif>
                                <label class="form-check-label" for="winePrice8">
                                    30000 - 50000
                                </label>
                            </div>
                            <!--  Collapse inner space end -->
                        </div>
                        <button class="collapseBtn" id="btnCollapse-price" name="button" data-toggle="collapse"
                                data-target="#collapse-price"
                                aria-expanded="false" onclick="collapse_click('price')" aria-controls="collapse-price"
                                type="button">
                            <span>Посмотреть все</span>
                            <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                        </button>
                    </div>
                </div>
                <!--     wine price filters end               -->

                <!--     wine type filters                   -->
                <h4 class="filterHeading">Тип Вина</h4>
                @foreach($sugars as $sugar)
                    <div class="form-check">
                        <input class="form-check-input" form="searching-form" name="sugar[]" type="checkbox"
                               value="{{$sugar->id}}" id="wineType{{$sugar->id}}"
                               @if(array_key_exists('sugar', $filters) and in_array($sugar->id, $filters['sugar']))
                               checked
                            @endif>
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
                        <div id="collapse-sugar" class="panel-collapse collapse">
                            <!--  Collapse inner space   -->
                            @foreach($sugars as $sugar)
                                @if($loop->index > 5)
                                    <div class="form-check">
                                        <input class="form-check-input" name="sugar[]" form="searching-form"
                                               type="checkbox" value="{{$sugar->id}}" id="wineType{{$sugar->id}}"
                                               @if(array_key_exists('sugar', $filters) and in_array($sugar->id, $filters['sugar']))
                                               checked
                                            @endif>
                                        <label class="form-check-label" for="wineType{{$sugar->id}}">
                                            {{$sugar->title}}
                                        </label>
                                    </div>
                            @endif
                        @endforeach
                        <!--  Collapse inner space end -->
                        </div>
                        <button class="collapseBtn" id="btnCollapse-sugar" onclick="collapse_click('sugar')"
                                name="button" data-toggle="collapse"
                                data-target="#collapse-sugar" aria-expanded="false"
                                aria-controls="collapse-sugar" type="button">
                            <span>Посмотреть все</span>
                            <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                        </button>
                    </div>
                </div>
                <!--     wine type filters end               -->


                <!--     wine regions filters                   -->
                <h4 class="filterHeading">Регион</h4>
                @foreach($regions as $region)
                    <div class="form-check">
                        <input class="form-check-input" form="searching-form" type="checkbox" value="{{$region->id}}"
                               name="region[]" id="wineRegion{{$region->id}}"
                               @if(array_key_exists('region', $filters) and in_array($region->id, $filters['region']))
                               checked
                            @endif>
                        <label class="form-check-label" for="wineRegion{{$region->id}}">
                            {{$region->title}}
                        </label>
                    </div>
                @endforeach
            <!--     wine regions filters end               -->

                <!--     wine winemaker filters                   -->
                <h4 class="filterHeading">Винодельня</h4>
                <!--  filter live search  -->
                <div id="liveSearch-form">
                    <input id="search-main-winery" onkeyup="search('winery')" type="text" placeholder="Поиск...">
                    <a type="submit" id="sfb" class="preview">
                        <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="liveSearchIcon">
                    </a>
                </div>
                <!--  filter live search end -->

                @foreach($wineries as $winery)
                    <div class="form-check" id="form-winery-{{$winery->id}}">
                        <input class="form-check-input" form="searching-form" type="checkbox" value="{{$winery->id}}"
                               name="winery[]" id="shop-winery{{$winery->id}}"
                               @if(array_key_exists('winery', $filters) and in_array($winery->id, $filters['winery']))
                               checked
                            @endif>
                        <label class="form-check-label" for="shop-winery{{$winery->id}}">
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
                        <div id="collapse-winery-suboverlay" class="panel-collapse collapse">
                            <!--  Collapse inner space   -->
                            @foreach($wineries as $winery)
                                @if($loop->index > 5)
                                    <div class="form-check" id="form-winery-{{$winery->id}}">
                                        <input class="form-check-input" form="searching-form" type="checkbox"
                                               value="{{$winery->id}}" id="shop-winery{{$winery->id}}"
                                               name="winery[]"
                                               @if(array_key_exists('winery', $filters) and in_array($winery->id, $filters['winery']))
                                               checked
                                            @endif>
                                        <label class="form-check-label" for="shop-winery{{$winery->id}}">
                                            {{$winery->title}}
                                        </label>
                                    </div>
                            @endif
                        @endforeach
                        <!--  Collapse inner space end -->
                        </div>
                        <button class="collapseBtn" id="btnCollapse-winery" name="button" data-toggle="collapse"
                                data-target="#collapse-winery-suboverlay" onclick="collapse_click('winery')"
                                aria-expanded="false"
                                aria-controls="collapse-winery-suboverlay" type="button">
                            <span>Посмотреть все</span>
                            <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                        </button>
                    </div>
                </div>
                <!--     wine winemaker filters end               -->

                <!--     grape family filter                     -->
                <form name="filter_form" method="get" class="filtersMain">
                    <h4 class="filterHeading">Сорт винограда</h4>
                    <!--  filter live search  -->
                    <div id="liveSearch-form">
                        <input id="search-main-sort" onkeyup="search('sort')" type="text" placeholder="Поиск...">
                        <a type="submit" id="sfb" class="preview">
                            <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="liveSearchIcon">
                        </a>
                    </div>
                    <!--  filter live search end -->
                    @foreach($sorts as $sort)
                        <div class="form-check" id="form-sort-{{$sort->id}}">
                            <input class="form-check-input" type="checkbox" form="searching-form" value="{{$sort->id}}"
                                   name="sort[]" id="shop-sort{{$sort->id}}"
                                   @if(array_key_exists('sort', $filters) and in_array($sort->id, $filters['sort']))
                                   checked
                                @endif>
                            <label class="form-check-label" for="shop-sort{{$sort->id}}">
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
                            <div id="collapse-sort" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($sorts as $sort)
                                    @if($loop->index > 5)
                                        <div class="form-check" id="form-sort-{{$sort->id}}">
                                            <input class="form-check-input" form="searching-form" type="checkbox"
                                                   name="sort[]" value="{{$sort->id}}" id="shop-sort{{$sort->id}}"
                                                   @if(array_key_exists('sort', $filters) and in_array($sort->id, $filters['sort']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shop-sort{{$sort->id}}">
                                                {{$sort->title}}
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" id="btnCollapse-sort" name="button" data-toggle="collapse"
                                    data-target="#collapse-sort" onclick="collapse_click('sort')" aria-expanded="false"
                                    aria-controls="collapse-sort" type="button">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>

                <!--     grape family filter end                 -->

                <!--     wine year filters                        -->
                <form name="filter_form" method="get" class="filtersMain">
                    <h4 class="filterHeading">Год</h4>
                    @foreach($years as $year)
                        <div class="form-check">
                            <input class="form-check-input" form="searching-form" name="year[]" type="checkbox"
                                   value="{{$year->year}}" id="shopWineAge{{$loop->iteration}}"
                                   @if(array_key_exists('year', $filters) and in_array($year->year, $filters['year']))
                                   checked
                                @endif>
                            <label class="form-check-label" for="shopWineAge{{$loop->iteration}}">
                                {{$year->year}}
                            </label>
                        </div>
                    @if($loop->index == 5)
                        @break
                    @endif
                @endforeach
                <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapse-year" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($years as $year)
                                    @if($loop->index > 5)
                                        <div class="form-check">
                                            <input class="form-check-input" form="searching-form" name="year[]"
                                                   type="checkbox" value="{{$year->year}}"
                                                   id="shopWineAge{{$loop->iteration}}"
                                                   @if(array_key_exists('year', $filters) and in_array($year->year, $filters['year']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shopWineAge{{$loop->iteration}}">
                                                {{$year->year}}
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" id="btnCollapse-year" onclick="collapse_click('year')"
                                    name="button" data-toggle="collapse"
                                    data-target="#collapse-year" aria-expanded="false"
                                    aria-controls="collapse-year" type="button">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
                <!--     wine grad filters end                    -->

                <!--     wine grad filters                        -->
                <form name="filter_form" method="get" class="filtersMain">
                    <h4 class="filterHeading">Крепость</h4>
                    @foreach($fortresses as $fortress)
                        <div class="form-check">
                            <input class="form-check-input" form="searching-form" name="fortress[]" type="checkbox"
                                   value="{{$fortress->fortress}}" id="shopGrad{{$loop->iteration}}"
                                   @if(array_key_exists('fortress', $filters) and in_array($fortress->fortress, $filters['fortress']))
                                   checked
                                @endif>
                            <label class="form-check-label" for="shopGrad{{$loop->iteration}}">
                                {{$fortress->fortress}}%
                            </label>
                        </div>
                    @if($loop->index == 5)
                        @break
                    @endif
                @endforeach
                <!--   collapse other prices   -->
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div id="collapse-fortress" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($fortresses as $fortress)
                                    @if($loop->index > 5)
                                        <div class="form-check">
                                            <input class="form-check-input" form="searching-form" name="fortress[]"
                                                   type="checkbox" value="{{$fortress->fortress}}"
                                                   id="shopGrad{{$loop->iteration}}"
                                                   @if(array_key_exists('fortress', $filters) and in_array($fortress->fortress, $filters['fortress']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shopGrad{{$loop->iteration}}">
                                                {{$fortress->fortress}}%
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" id="btnCollapse-fortress" onclick="collapse_click('fortress')"
                                    name="button" data-toggle="collapse"
                                    data-target="#collapse-fortress" aria-expanded="false"
                                    aria-controls="collapse-fortress" type="button">
                                <span>Посмотреть все</span>
                                <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--     wine grad filters end                    -->
            <!--   shop content -->
            <div id="wine_list_block">
                @include('shop.wine.wine-list')
            </div>
        </div>
    </div>

    <div id="filtMobi" class="col-xs-12 sortingMobile visible-xs">
        <div class="sortingOverlay">
            <div class="sortOverlayHeader">
                <div class="sortHeader">
                    <a class="sortOverlayClear"  onclick="clear_filter()">
                        Очистить фильтр
                    </a>
                    <img onclick="$('#filtMobi').removeClass('open');$('.shopContent').removeClass('hideMe');"
                            src="{{ asset ('image/closecart.png') }}" alt="Close Overlay" class="sortOverlayClose">
                </div>
            </div>
            <div class="sortOverlayBody">
                <!--     fav filters (four bold filters)      -->
                <div class="favFiltersOverlay">
                    @foreach($classes as $class)
                        <div class="form-check">
                            <input class="form-check-input" form="searching-form" name="wine_class[]" type="checkbox"
                                   value="{{$class->id}}" id="classSortMob{{$class->id}}"
                                   @if(array_key_exists('wine_class', $filters) and in_array($class->id, $filters['wine_class']))
                                   checked
                                @endif
                            >
                            <label class="form-check-label" for="classSortMob{{$class->id}}">
                                <b>{{$class->title}}</b>
                            </label>
                            <!-- tooltip -->
                            <img class="tippyTooltip" data-template="tooltip-{{$class->id}}"
                                 src="{{ asset ('image/tooltip.svg') }}" alt="">
                            <!--end tooltip -->
                            <!-- template for tooltip  -->
                            <div style="display: none;">
                                <div id="tooltip-{{$class->id}}">
                                    <h4>{{$class->title}}</h4>
                                    <p>{{$class->description}}</p>
                                </div>
                            </div>
                            <!-- end template for tooltip  -->
                        </div>
                    @endforeach
                </div>
                <!--     fav filters end                      -->
                <div class="OtherFilters">
                    <ul class="filtersSubOverlay">
                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiColor').addClass('open');">Цвет
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiColor" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack"
                                   onclick="$('#filtMobiColor').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Цвет</a>
                            </div>
                            <div class="sortOverlayBody">
                                @foreach($colors as $color)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" form="searching-form"
                                               value="{{$color->id}}"
                                               name="color[]" id="wineColorMob{{$color->id}}"
                                               @if(array_key_exists('color', $filters) and in_array($color->id, $filters['color']))
                                               checked
                                            @endif>
                                        <label class="form-check-label" for="wineColorMob{{$color->id}}">
                                            {{$color->title}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiPrice').addClass('open');">Цена
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiPrice" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack"
                                   onclick="$('#filtMobiPrice').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Цена</a>
                            </div>
                            <div class="sortOverlayBody">
                                <div class="form-check">
                                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                           value="0-1000"
                                           id="winePriceMob1"
                                           @if(array_key_exists('price', $filters) and in_array('0-1000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob1">
                                        До 1000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                           value="1000-1500" id="winePriceMob2"
                                           @if(array_key_exists('price', $filters) and in_array('1000-1500', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob2">
                                        1000 - 1500
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                           value="1500-3000" id="winePriceMob3"
                                           @if(array_key_exists('price', $filters) and in_array('1500-3000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob3">
                                        1500 - 3000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                           value="3000-5000" id="winePriceMob4"
                                           @if(array_key_exists('price', $filters) and in_array('3000-5000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob4">
                                        3000 - 5000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                           value="5000-10000" id="winePriceMob5"
                                           @if(array_key_exists('price', $filters) and in_array('5000-10000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob5">
                                        5000 - 10000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" form="searching-form" name="price[]" type="checkbox"
                                           value="10000-15000" id="winePriceMob6"
                                           @if(array_key_exists('price', $filters) and in_array('10000-15000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob6">
                                        10000 - 15000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="custom-control-input" form="searching-form" name="price[]"
                                           type="checkbox"
                                           value="15000-30000" id="winePriceMob7"
                                           @if(array_key_exists('price', $filters) and in_array('15000-30000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob7">
                                        15000 - 30000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="custom-control-input" form="searching-form" name="price[]"
                                           type="checkbox"
                                           value="30000-50000" id="winePriceMob8"
                                           @if(array_key_exists('price', $filters) and in_array('30000-50000', $filters['price']))
                                           checked
                                        @endif>
                                    <label class="form-check-label" for="winePriceMob8">
                                        30000 - 50000
                                    </label>
                                </div>
                            </div>
                        </div>

                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiType').addClass('open');">Тип Вина
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiType" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack"
                                   onclick="$('#filtMobiType').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Тип Вина</a>
                            </div>
                            <div class="sortOverlayBody">
                                @foreach($sugars as $sugar)
                                    <div class="form-check">
                                        <input class="form-check-input" form="searching-form" name="sugar[]"
                                               type="checkbox"
                                               value="{{$sugar->id}}" id="wineTypeMob{{$sugar->id}}"
                                               @if(array_key_exists('sugar', $filters) and in_array($sugar->id, $filters['sugar']))
                                               checked
                                            @endif>
                                        <label class="form-check-label" for="wineTypeMob{{$sugar->id}}">
                                            {{$sugar->title}}
                                        </label>
                                    </div>
                            @endforeach
                            <!--   collapse other prices   -->
                            </div>
                        </div>

                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiRegion').addClass('open');">Регион
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiRegion" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack" onclick="$('#filtMobiRegion').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Регион</a>
                            </div>
                            <div class="sortOverlayBody">
                                @foreach($regions as $region)
                                    <div class="form-check">
                                        <input class="form-check-input" form="searching-form" type="checkbox"
                                               value="{{$region->id}}"
                                               name="region[]" id="wineRegionMob{{$region->id}}"
                                               @if(array_key_exists('region', $filters) and in_array($region->id, $filters['region']))
                                               checked
                                            @endif>
                                        <label class="form-check-label" for="wineRegionMob{{$region->id}}">
                                            {{$region->title}}
                                        </label>
                                    </div>
                            @endforeach
                            <!--     wine regions filters end               -->
                            </div>
                        </div>

                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiWinery').addClass('open');">Винодельня
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiWinery" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack" onclick="$('#filtMobiWinery').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Регион</a>
                            </div>
                            <div class="sortOverlayBody">
                                <!--     wine winemaker filters                   -->
                                <h4 class="filterHeading"></h4>
                                <!--  filter live search  -->
                                <div id="liveSearch-form">
                                    <input id="search-main-winery-mob" onkeyup="search('winery-mob')" type="text"
                                           placeholder="Поиск...">
                                    <a type="submit" id="sfb" class="preview">
                                        <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="liveSearchIcon">
                                    </a>
                                </div>
                                <!--  filter live search end -->

                                @foreach($wineries as $winery)
                                    <div class="form-check" id="form-winery-mob-{{$winery->id}}">
                                        <input class="form-check-input" form="searching-form" type="checkbox"
                                               value="{{$winery->id}}"
                                               name="winery[]" id="shop-winery-mob{{$winery->id}}"
                                               @if(array_key_exists('winery', $filters) and in_array($winery->id, $filters['winery']))
                                               checked
                                            @endif>
                                        <label class="form-check-label" for="shop-winery-mob{{$winery->id}}">
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
                                        <div id="collapse-winery-overlay" class="panel-collapse collapse">
                                            <!--  Collapse inner space   -->
                                            @foreach($wineries as $winery)
                                                @if($loop->index > 5)
                                                    <div class="form-check" id="form-winery-mob-{{$winery->id}}">
                                                        <input class="form-check-input" form="searching-form"
                                                               type="checkbox"
                                                               value="{{$winery->id}}"
                                                               id="shop-winery-mob{{$winery->id}}"
                                                               name="winery[]"
                                                               @if(array_key_exists('winery', $filters) and in_array($winery->id, $filters['winery']))
                                                               checked
                                                            @endif>
                                                        <label class="form-check-label"
                                                               for="shop-winery-mob{{$winery->id}}">
                                                            {{$winery->title}}
                                                        </label>
                                                    </div>
                                            @endif
                                        @endforeach
                                        <!--  Collapse inner space end -->
                                        </div>
                                        <button class="collapseBtn" id="btnCollapse-winery-overlay" name="button"
                                                data-toggle="collapse"
                                                data-target="#collapse-winery-overlay"
                                                onclick="collapse_click('winery-overlay')" aria-expanded="false"
                                                aria-controls="collapse-winery-overlay" type="button">
                                            <span>Посмотреть все</span>
                                            <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
                                        </button>
                                    </div>
                                </div>
                                <!--     wine winemaker filters end               -->
                                <!--     wine regions filters end               -->
                            </div>
                        </div>

                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiSort').addClass('open');">Сорт винограда
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiSort" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack"
                                   onclick="$('#filtMobiSort').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Сорт винограда</a>
                            </div>
                            <div class="sortOverlayBody">
                                <form name="filter_form" method="get" class="filtersMain showME">
                                    <!--  filter live search  -->
                                    <div id="liveSearch-form">
                                        <input id="search-main-sort-mob" onkeyup="search('sort-mob')" type="text"
                                               placeholder="Поиск...">
                                        <a type="submit" id="sfb" class="preview">
                                            <img src="{{ asset ('image/searchSort.svg') }}" alt=""
                                                 class="liveSearchIcon">
                                        </a>
                                    </div>
                                    <!--  filter live search end -->
                                    @foreach($sorts as $sort)
                                        <div class="form-check" id="form-sort-mob-{{$sort->id}}">
                                            <input class="form-check-input" type="checkbox" form="searching-form"
                                                   value="{{$sort->id}}"
                                                   name="sort[]" id="shop-sort-mob{{$sort->id}}"
                                                   @if(array_key_exists('sort', $filters) and in_array($sort->id, $filters['sort']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shop-sort-mob{{$sort->id}}">
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
                                            <div id="collapse-sort-overlay" class="panel-collapse collapse">
                                                <!--  Collapse inner space   -->
                                                @foreach($sorts as $sort)
                                                    @if($loop->index > 5)
                                                        <div class="form-check" id="form-sort-mob-{{$sort->id}}">
                                                            <input class="form-check-input" form="searching-form"
                                                                   type="checkbox"
                                                                   name="sort[]" value="{{$sort->id}}"
                                                                   id="shop-sort-mob{{$sort->id}}"
                                                                   @if(array_key_exists('sort', $filters) and in_array($sort->id, $filters['sort']))
                                                                   checked
                                                                @endif>
                                                            <label class="form-check-label"
                                                                   for="shop-sort-mob{{$sort->id}}">
                                                                {{$sort->title}}
                                                            </label>
                                                        </div>
                                                @endif
                                            @endforeach
                                            <!--  Collapse inner space end -->
                                            </div>
                                            <button class="collapseBtn" id="btnCollapse-sort-overlay" name="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapse-sort-overlay"
                                                    onclick="collapse_click('sort-overlay')" aria-expanded="false"
                                                    aria-controls="collapse-sort" type="button">
                                                <span>Посмотреть все</span>
                                                <img src="{{ asset ('image/arrow-down.svg') }}" alt=""
                                                     class="collapseIcon">
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiYear').addClass('open');">Год
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiYear" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack"
                                   onclick="$('#filtMobiYear').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Год</a>
                            </div>
                            <div class="sortOverlayBody">
                                <!--     wine year filters                        -->
                                <form name="filter_form" method="get" class="filtersMain showME">
                                    @foreach($years as $year)
                                        <div class="form-check">
                                            <input class="form-check-input" form="searching-form" name="year[]"
                                                   type="checkbox"
                                                   value="{{$year->year}}" id="shopWineAgeMob{{$loop->iteration}}"
                                                   @if(array_key_exists('year', $filters) and in_array($year->year, $filters['year']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shopWineAgeMob{{$loop->iteration}}">
                                                {{$year->year}}
                                            </label>
                                        </div>
                                    @if($loop->index == 5)
                                        @break
                                    @endif
                                @endforeach
                                <!--   collapse other prices   -->
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                            <div id="collapse-year-overlay" class="panel-collapse collapse">
                                                <!--  Collapse inner space   -->
                                                @foreach($years as $year)
                                                    @if($loop->index > 5)
                                                        <div class="form-check">
                                                            <input class="form-check-input" form="searching-form"
                                                                   name="year[]"
                                                                   type="checkbox" value="{{$year->year}}"
                                                                   id="shopWineAgeMob{{$loop->iteration}}"
                                                                   @if(array_key_exists('year', $filters) and in_array($year->year, $filters['year']))
                                                                   checked
                                                                @endif>
                                                            <label class="form-check-label"
                                                                   for="shopWineAgeMob{{$loop->iteration}}">
                                                                {{$year->year}}
                                                            </label>
                                                        </div>
                                                @endif
                                            @endforeach
                                            <!--  Collapse inner space end -->
                                            </div>
                                            <button class="collapseBtn" id="btnCollapse-year-overlay"
                                                    onclick="collapse_click('year-overlay')"
                                                    name="button" data-toggle="collapse"
                                                    data-target="#collapse-year-overlay" aria-expanded="false"
                                                    aria-controls="collapse-year-overlay" type="button">
                                                <span>Посмотреть все</span>
                                                <img src="{{ asset ('image/arrow-down.svg') }}" alt=""
                                                     class="collapseIcon">
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!--     wine grad filters end                    -->
                            </div>
                        </div>

                        <li class="SubOverlayItem">
                            <a href="#" onclick="$('#filtMobiFort').addClass('open');">Крепость
                                <img src="{{ asset ('image/chevron.svg') }}" alt="" class="search-icon overlayListIcon">
                            </a>
                            <!-- каждому линку дать айди для оверлея что бы открыть подоверлей с самими филтрами (смотри пример мобильных фильтров в фигме)-->
                        </li>
                        <div id="filtMobiFort" class="SubOverlay">
                            <div class="sortOverlayHeader">
                                <a href="#" class="sortOverlayBack"
                                   onclick="$('#filtMobiFort').removeClass('open');"><img
                                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Крепость</a>
                            </div>
                            <div class="sortOverlayBody">
                                <!--     wine grad filters                        -->
                                <form name="filter_form" method="get" class="filtersMain">
                                    <h4 class="filterHeading">Крепость</h4>
                                    @foreach($fortresses as $fortress)
                                        <div class="form-check">
                                            <input class="form-check-input" form="searching-form" name="fortress[]"
                                                   type="checkbox"
                                                   value="{{$fortress->fortress}}" id="shopGradMob{{$loop->iteration}}"
                                                   @if(array_key_exists('fortress', $filters) and in_array($fortress->fortress, $filters['fortress']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shopGradMob{{$loop->iteration}}">
                                                {{$fortress->fortress}}%
                                            </label>
                                        </div>
                                    @if($loop->index == 5)
                                        @break
                                    @endif
                                @endforeach
                                <!--   collapse other prices   -->
                                    <div class="panel-group">
                                        <div class="panel panel-default">
                                            <div id="collapse-fortress-overlay" class="panel-collapse collapse">
                                                <!--  Collapse inner space   -->
                                                @foreach($fortresses as $fortress)
                                                    @if($loop->index > 5)
                                                        <div class="form-check">
                                                            <input class="form-check-input" form="searching-form"
                                                                   name="fortress[]"
                                                                   type="checkbox" value="{{$fortress->fortress}}"
                                                                   id="shopGradMob{{$loop->iteration}}"
                                                                   @if(array_key_exists('fortress', $filters) and in_array($fortress->fortress, $filters['fortress']))
                                                                   checked
                                                                @endif>
                                                            <label class="form-check-label"
                                                                   for="shopGradMob{{$loop->iteration}}">
                                                                {{$fortress->fortress}}%
                                                            </label>
                                                        </div>
                                                @endif
                                            @endforeach
                                            <!--  Collapse inner space end -->
                                            </div>
                                            <button class="collapseBtn" id="btnCollapse-fortress-overlay"
                                                    onclick="collapse_click('fortress-overlay')"
                                                    name="button" data-toggle="collapse"
                                                    data-target="#collapse-fortress" aria-expanded="false"
                                                    aria-controls="collapse-fortress" type="button">
                                                <span>Посмотреть все</span>
                                                <img src="{{ asset ('image/arrow-down.svg') }}" alt=""
                                                     class="collapseIcon">
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--     wine grad filters end                    -->
                        </div>
                    </ul>
                </div>
            </div>
            <div class="sortOverlayFooter">
                <button class="sortOverlayBtn"
                onclick="$('#filtMobi').removeClass('open');$('.shopContent').removeClass('hideMe');$('.SubOverlay').removeClass('open');">Показать</button>
            </div>
        </div>
    </div>
    <div id="sortMobi" class="col-xs-12 sortingMobile visible-xs">
        <div class="sortingOverlay">
            <div class="sortOverlayHeader">
                <a href="#" class="sortOverlayBack"
                   onclick="$('#sortMobi').removeClass('open');$('.shopContent').removeClass('hideMe');"><img
                        src="{{ asset ('image/ArrowLeft.svg') }}" alt="Go back">Сортировка</a>
            </div>
            <div class="sortOverlayBody">
                <ul>
                    <li>
                        <input type="radio" class="form-check-input" form="searching-form" name="price_sort" id="price-asc" value="asc">
                        <label class="form-check-label" for="price-asc" style="color: black; font-size: 15px">
                            сначала дешевле
                        </label>
                    </li>
                    <li>
                        <input type="radio" class="form-check-input" form="searching-form" name="price_sort" id="price-desc" value="desc">
                        <label class="form-check-label" for="price-des" style="color: black; font-size: 15px">
                            сначала дороже
                        </label>
                    </li>
                </ul>
            </div>
            <div class="sortOverlayFooter">
                <button class="sortOverlayBtn"
                        onclick="$('#sortMobi').removeClass('open');$('.shopContent').removeClass('hideMe');">
                    Применить
                </button>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        <script src="{{ asset('js/cart.js') }}"></script>
        <script src="{{asset('js/wine-shop-filter.js')}}"></script>
        <script src="{{ asset('js/favorite.js') }}"></script>
    @endpush
@endsection
