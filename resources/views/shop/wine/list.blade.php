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
            <div class="shopSearch col-md-3">
                <form id="searching-form" method="get">
                    <input id="search-main" type="text" name="title" placeholder="Поиск по каталогу"
                           value="{{array_key_exists('title', $filters) ? $filters['title'] : ''}}">
                    <img src="{{ asset ('image/searchSort.svg') }}" alt="" class="search-icon searchIconBlack">
                </form>
                <button type="submit" class="btn btn-danger search-btn" form="searching-form" style="display: none">
                    Применить
                </button>
            </div>
            <div class="sorting col-md-3">
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
                            {{$class->title}}
                        </label>

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
                        <div id="collapse1" class="panel-collapse collapse">
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
                        <button class="collapseBtn" name="button" data-toggle="collapse" data-target="#collapse1"
                                aria-expanded="false" aria-controls="collapse1">
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
                        <div id="collapseWineType" class="panel-collapse collapse">
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
                        <button class="collapseBtn" name="button" data-toggle="collapse"
                                data-target="#collapseWineType" aria-expanded="false"
                                aria-controls="collapseWineType">
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
                        <input class="form-check-input" form="searching-form" type="checkbox" value="{{$winery->id}}"
                               name="winery[]" id="shopWinemaker{{$winery->id}}"
                               @if(array_key_exists('winery', $filters) and in_array($winery->id, $filters['winery']))
                               checked
                            @endif>
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
                                        <input class="form-check-input" form="searching-form" type="checkbox"
                                               value="{{$winery->id}}" id="shopWinemaker{{$winery->id}}"
                                               name="winery[]"
                                               @if(array_key_exists('winery', $filters) and in_array($winery->id, $filters['winery']))
                                               checked
                                            @endif>
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
                <!--     wine winemaker filters end               -->

                <!--     grape family filter                     -->
                <form name="filter_form" method="get" class="filtersMain">
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
                            <input class="form-check-input" type="checkbox" form="searching-form" value="{{$sort->id}}"
                                   name="sort[]" id="shopWineSort{{$sort->id}}"
                                   @if(array_key_exists('sort', $filters) and in_array($sort->id, $filters['sort']))
                                   checked
                                @endif>
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
                            <div id="collapseWineFamily" class="panel-collapse collapse">
                                <!--  Collapse inner space   -->
                                @foreach($sorts as $sort)
                                    @if($loop->index > 5)
                                        <div class="form-check">
                                            <input class="form-check-input" form="searching-form" type="checkbox"
                                                   name="sort[]" value="{{$sort->id}}" id="shopWineSort{{$sort->id}}"
                                                   @if(array_key_exists('sort', $filters) and in_array($sort->id, $filters['sort']))
                                                   checked
                                                @endif>
                                            <label class="form-check-label" for="shopWineSort{{$sort->id}}">
                                                {{$sort->title}}
                                            </label>
                                        </div>
                                @endif
                            @endforeach
                            <!--  Collapse inner space end -->
                            </div>
                            <button class="collapseBtn" name="button" data-toggle="collapse"
                                    data-target="#collapseWineFamil" aria-expanded="false"
                                    aria-controls="collapseWineFamily">
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
                            <div id="collapseWineAge" class="panel-collapse collapse">
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
                            <div id="collapseWineGrad" class="panel-collapse collapse">
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
                                    <p>{{isset($wine->winery) ? $wine->winery->title : ''}}</p>
                                    <div class="meta">
                                        <span
                                            class="color">{{isset($wine->color) ? $wine->color->title : ''}}</span><span
                                            class="sep"> | </span>
                                        <span class="hardness">{{isset($wine->sugar) ? $wine->sugar->title : ''}}</span><span
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
                    @if(count($wines) == 0 and $filters)
                        <div class="col-md-8 col-md-offset-1">
                            <h2>По вашему фильтру ничего не найдено</h2>
                        </div>
                    @endif
                    <div class="col-md-12 mt-lg">
                        {{$wines->appends(request()->input())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#search-main').on('keyup', function () {
                $('.search-btn').show()
            })
            $(".form-check-input").change(function () {
                $('.search-btn').show()
            });
            $("select[name='price_sort']").change(function () {
                $('#searching-form').closest('form').submit();
            });


            $(".custom-select").each(function () {
                var classes = $(this).attr("class"),
                    id = $(this).attr("id"),
                    name = $(this).attr("name");
                var template = '<div class="' + classes + '">';
                template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
                template += '<div class="custom-options">';
                $(this).find("option").each(function () {
                    if ($(this).attr("value")) {
                        template += '<span class="custom-option" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
                    }
                });
                template += '</div></div>';

                $(this).wrap('<div class="custom-select-wrapper"></div>');
                $(this).hide();
                $(this).after(template);
            });
            $(".custom-option:first-of-type").hover(function () {
                $(this).parents(".custom-options").addClass("option-hover");
            }, function () {
                $(this).parents(".custom-options").removeClass("option-hover");
            });
            $(".custom-select-trigger").on("click", function () {
                $('html').one('click', function () {
                    $(".custom-select").removeClass("opened");
                });
                $(this).parents(".custom-select").toggleClass("opened");
                event.stopPropagation();
            });
            $(".custom-option").on("click", function () {
                $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
                $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
                $(this).addClass("selection");
                $(this).parents(".custom-select").removeClass("opened");
                $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
                $('#searching-form').closest('form').submit();
            });

        </script>

    @endpush
@endsection
