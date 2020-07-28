@extends('layouts.app')
@section('content')
<div class="shopContent">
  <div class="row subHeader">
      <ul class="breadcrumb">
        <li><a href="">Главная</a></li>
        <li><a href="">Вино</a></li>
      </ul>
      <h1 class="pageHeading">Вино</h2>
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
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineColor1">
            <label class="form-check-label" for="wineColor1">
              Белые вина
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineColor2">
            <label class="form-check-label" for="wineColor2">
              Красные вина
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineColor3">
            <label class="form-check-label" for="wineColor3">
              Розовые вина
            </label>
          </div>
<!--     wine color filters end               -->
        </form>

<!--     wine price filters                   -->
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
               <button class="collapseBtn" name="button" data-toggle="collapse" href="#collapse1">
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
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineType1">
            <label class="form-check-label" for="wineType1">
              Сухое
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineType2">
            <label class="form-check-label" for="wineType2">
              Полусухое
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineType3">
            <label class="form-check-label" for="wineType3">
              Полусладкое
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineType4">
            <label class="form-check-label" for="wineType4">
              Сладкое
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineType5">
            <label class="form-check-label" for="wineType5">
              Десертное
            </label>
          </div>
          <!--   collapse other prices   -->
          <div class="panel-group">
             <div class="panel panel-default">
               <div id="collapseWineType" class="panel-collapse collapse">
        <!--  Collapse inner space   -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="wineType6">
                    <label class="form-check-label" for="wineType6">
                      Игристое
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="custom-control-input" type="checkbox" value="" id="wineType7">
                    <label class="form-check-label" for="wineType7">
                      Не игристое
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="custom-control-input" type="checkbox" value="" id="wineType8">
                    <label class="form-check-label" for="wineType8">
                      Фруктовое
                    </label>
                  </div>
        <!--  Collapse inner space end -->
               </div>
               <button class="collapseBtn" name="button" data-toggle="collapse" href="#collapseWineType">
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
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegion1">
            <label class="form-check-label" for="wineRegion1">
              Кубань
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegion2">
            <label class="form-check-label" for="wineRegion2">
              Крым
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegione3">
            <label class="form-check-label" for="wineRegion3">
              Долина дона
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegion4">
            <label class="form-check-label" for="wineRegion4">
              Долина терека
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegion5">
            <label class="form-check-label" for="wineRegion5">
              Дагестан
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegion6">
            <label class="form-check-label" for="wineRegion6">
              Нижная волга
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wineRegion7">
            <label class="form-check-label" for="wineRegion7">
              Ставрополь
            </label>
          </div>
        </form>
<!--     wine regions filters end               -->

<!--     wine winemaker filters                   -->
        <form id="shopWinemaker" class="filtersMain">
          <h4 class="filterHeading">Регион</h4>
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
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="shopWinemaker1">
            <label class="form-check-label" for="shopWinemaker1">
              Кубань11
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="shopWinemaker2">
            <label class="form-check-label" for="shopWinemaker2">
              Крым22
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="shopWinemaker3">
            <label class="form-check-label" for="shopWinemaker3">
              Долина дона33
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="shopWinemaker4">
            <label class="form-check-label" for="shopWinemaker4">
              Долина терека44
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="shopWinemaker5">
            <label class="form-check-label" for="shopWinemaker5">
              Дагестан55
            </label>
          </div>

          <!--   collapse other prices   -->
          <div class="panel-group">
             <div class="panel panel-default">
               <div id="collapseWinemakers" class="panel-collapse collapse">
        <!--  Collapse inner space   -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="shopWinemaker6">
                    <label class="form-check-label" for="shopWinemaker6">
                      Нижная волга
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="shopWinemaker7">
                    <label class="form-check-label" for="shopWinemaker7">
                      Ставрополь
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="shopWinemaker8">
                    <label class="form-check-label" for="shopWinemaker8">
                      Игристое
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="custom-control-input" type="checkbox" value="" id="shopWinemaker9">
                    <label class="form-check-label" for="shopWinemaker9">
                      Не игристое
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="custom-control-input" type="checkbox" value="" id="shopWinemaker10">
                    <label class="form-check-label" for="shopWinemaker10">
                      Фруктовое
                    </label>
                  </div>
        <!--  Collapse inner space end -->
               </div>
               <button class="collapseBtn" name="button" data-toggle="collapse" href="#collapseWinemakers">
                  <span>Посмотреть все</span>
                  <img src="{{ asset ('image/arrow-down.svg') }}" alt="" class="collapseIcon">
               </button>
             </div>
          </div>
        </form>
<!--     wine winemaker filters end               -->

      </div>

      <div class="shopSearch col-md-9">
        <div class="row featured_cont">
            <div class="col-md-4">
              <div class="swiper-slide">
                  <div class="wine">
                      <div class="image">
                          <a href="#" class="likeSlider">
                            <img src="{{ asset ('image/like.svg') }}" alt="like for this wine">
                          </a>
                          <a href="#" class="preview">
                              <img src="{{ asset ('image/1OLwTAcYZZn9L9hwUju2.png') }}">
                              <span class="attributes"></span>
                          </a>
                      </div>
                      <h2><a href="#" class="preview">Wine Title</a></h2>

                      <p>From winery</p>
                      <div class="meta">
                          <span class="color">wine color </span><span
                              class="sep"> | </span>
                          <span class="hardness">wine type </span><span
                              class="sep"> | </span>
                          <span class="year"> wine age</span>
                          <div class="price-vinoteka">
                              <a href="#" class="preview">wine price <span>п</span></a>
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
            <div class="col-md-4">
              <div class="swiper-slide">
                  <div class="wine">
                      <div class="image">
                          <a href="#" class="likeSlider">
                            <img src="{{ asset ('image/like.svg') }}" alt="like for this wine">
                          </a>
                          <a href="#" class="preview">
                              <img src="{{ asset ('image/1OLwTAcYZZn9L9hwUju2.png') }}">
                              <span class="attributes"></span>
                          </a>
                      </div>
                      <h2><a href="#" class="preview">Wine Title</a></h2>

                      <p>From winery</p>
                      <div class="meta">
                          <span class="color">wine color </span><span
                              class="sep"> | </span>
                          <span class="hardness">wine type </span><span
                              class="sep"> | </span>
                          <span class="year"> wine age</span>
                          <div class="price-vinoteka">
                              <a href="#" class="preview">wine price <span>п</span></a>
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
            <div class="col-md-4">
              <div class="swiper-slide">
                  <div class="wine">
                      <div class="image">
                          <a href="#" class="likeSlider">
                            <img src="{{ asset ('image/like.svg') }}" alt="like for this wine">
                          </a>
                          <a href="#" class="preview">
                              <img src="{{ asset ('image/1OLwTAcYZZn9L9hwUju2.png') }}">
                              <span class="attributes"></span>
                          </a>
                      </div>
                      <h2><a href="#" class="preview">Wine Title</a></h2>

                      <p>From winery</p>
                      <div class="meta">
                          <span class="color">wine color </span><span
                              class="sep"> | </span>
                          <span class="hardness">wine type </span><span
                              class="sep"> | </span>
                          <span class="year"> wine age</span>
                          <div class="price-vinoteka">
                              <a href="#" class="preview">wine price <span>п</span></a>
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
        </div>
      </div>
  </div>
</div>
@endsection
