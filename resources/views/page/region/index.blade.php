@extends('layouts.app')
@section('title', '')
@section('description', '')
@section('keywords', '')
@section('content')
    <div id="information-information" class="information-wine-regions">
        <div id="content" class="">
            <div class="container container-lg">
                <div class="row">

                    <div class="heading-wrap">
                        <h1>Регионы Виноделия</h1>
                    </div>
                    <div class="col-xs-12">
                        <ul class="nav nav-pills">
                            @foreach($regions as $region)
                                <li role="presentation" class="active">
                                    <a href="#pane-{{$region->id}}" data-target="#pane-{{$region->id}}" data-toggle="tab"
                                       onclick="window.location.hash = ''; location.href+=this.hash;">{{$region->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="map">
                <div id="map" style="position: relative; overflow: hidden;">
                </div>
            </div>
            <div class="tab-content">
                <div id="pane-1" class="tab-pane active">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Кубань</h2>
                                <p>Краснодарский край является важнейшим сельскохозяйственным регионом страны. При этом,
                                    обладая не самой большой площадью южного округа (всего 75 500 кв. км), он является
                                    лидером по валовому сбору зерна. Но и конечно, Кубань - это самый мощный драйвер в
                                    области виноградарства (регион производит около 40% всех виноградных вин России).
                                    Кроме того, Краснодарский край является самым привлекательным туристическим регионом
                                    России, благодаря как наличию городов-курортов Черноморского побережья, так и
                                    функционированию современного горнолыжного курорта Красная Поляна. &nbsp; &nbsp;
                                    &nbsp;</p>
                                <a href="https://russianvine.ru/region-kuban" class="btn-white">Подробнее о регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Каберне Совиньон, Мерло, Саперави, Красностоп, Пино Нуар,
                                                            Совиньон Блан, Шардоне, Мускат, Траминер, Пино Гри</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/12144690_1498833110441987_4440640047923079093_n.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-sober-bash"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/soberbash_logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-lefkadia" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/lefcadia/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-karakezidi"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/karakezidi/logoyanis.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/winery-sikory" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/winery_sikory.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-burnier" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/burnier/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-gunko" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/gunko/ogo-gunko.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div
                                        class="clearfix visible-md visible-lg visible-xl visible-xxl visible-xxxl"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelny-shumrinka" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelny-sort" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/sort/sort-logotip.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-sauk-dere" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/saukdere/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-uzunov" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/Uzunov.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-podvorie-starogo-greka"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/greek/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-usadba-divnomorskoe"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/divnomorskoe/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <div
                                        class="clearfix visible-md visible-lg visible-xl visible-xxl visible-xxxl"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-usadba-myshako"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/dopolnitelno/Myshako_ID_LOGO_CORP12 (1).png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-gai-kodzor"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/kodzur/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-fanagoria" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/fanagoria/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinidelnya-kuban-vino"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/kuban/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-shato-le-gran-vostok"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/legrand/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-myshako" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/myshako/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div
                                        class="clearfix visible-md visible-lg visible-xl visible-xxl visible-xxxl"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-ubileinay" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/anniversary/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-rayevskoe" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/winery_raevskoe.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-villa-romanov"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/romanov/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnia-villa-viktoria"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/winery_villa_viktoria.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 260px;">
                                            <a href="https://russianvine.ru/vinodelnya-abray-durso"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/abrau/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


                <div id="pane-2" class="tab-pane ">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Крым</h2>
                                <p>Крым - исторически винодельческий регион. Виноделие Крыма исчисляет свое
                                    существование тысячелетиями. В новейшей истории ни антиалкогольная перестроечная
                                    кампания, ни последующие потрясения не смогли уничтожить традиции местного
                                    виноделия. Хотя площадь полуострова составляет всего 26 860 кв. км., данный терруар
                                    показывает на сегодня исключительные результаты. И возможно создает определенный
                                    тренд в русском виноделии. &nbsp;&nbsp;</p>
                                <a href="https://russianvine.ru/region-krym" class="btn-white">Подробнее о регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Кокур, Сары Пандас, Бастардо, Пино Нуар, Рислинг, Кефессия,
                                                            Мускат, Алиготе, Барбера, Мерло, Совиньон Блан, Рислинг</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/FullSizeRender-09-05-18-08-27.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/winery-yaiyla" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/yaila.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-sergeya-beskorovainogo"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/belbek/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-uppa-winery-pavel-shvets"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/shvec/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-oleg-repin"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/shvec/repin.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-alma-valley"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/allmavalley/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-satera" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/satera/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div
                                        class="clearfix visible-md visible-lg visible-xl visible-xxl visible-xxxl"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-dva-serdca"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/dvaserdca/2hearts.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-solnecnaya-dolina"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/sunnyvalley/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-usadba-perovski"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/perovskyh/Perovski.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-shato-san-danil"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/SaintDaniel/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-zaharin" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/dopolnitelno/логотип захарьин.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-massandra" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/massandra/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <div
                                        class="clearfix visible-md visible-lg visible-xl visible-xxl visible-xxxl"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-inkerman" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/inkerman/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-zolotaya-balka"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/gb_winery/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-koktebel" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/koktebel/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-novyi-svet"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/new_world/new_world.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


                <div id="pane-3" class="tab-pane ">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Долина Дона</h2>
                                <p>Ростовская область - относится к зоне рискованного виноделия, поэтому виноградарство
                                    тут укрывное. Главное богатство региона - его почвенные ресурсы. Размер области
                                    составляет 100 800 кв. км, что сопоставимо с площадью европейской страны, например
                                    Португалии. На территории области протекает одна из крупнейших рек Европы - Дон
                                    (длина 1870 км). Климат умеренно-континентальный, при этом зима обычно пасмурная,
                                    ветреная и снежная. Лето ветреное, сухое и жаркое. &nbsp; &nbsp;&nbsp;</p>
                                <a href="https://russianvine.ru/region-rostov" class="btn-white">Подробнее о регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Красностоп Золотовский, Сибирьковый, Цимлянский Чёрный,
                                                            Плечистик, Пухляковский, Кумшацкий, Саперави</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/IMG_6486-2.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-dacha-serduka"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/dacha_serduka/serduk.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-vina-arpachina"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/Arpachin.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-vinabani" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/abani/logo-vinabani.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-vedernikov"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/vedernikov/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="clearfix visible-sm"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-tsymlyanskoe"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/winery_cymlanskoe.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnya-elbuzd" class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/dopolnitelno/logo_elbuzd.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                    <div class="clearfix visible-xs"></div>
                                    <div
                                        class="clearfix visible-md visible-lg visible-xl visible-xxl visible-xxxl"></div>
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: 0px;">
                                            <a href="https://russianvine.ru/vinodelnia-villa-zvezda"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box" style="padding-top: 0px; padding-bottom: 0px;">
                        <img src="/image/catalog/вилла звезда/логоВЗГ.jpg">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


                <div id="pane-4" class="tab-pane ">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Долина Терека</h2>
                                <p>Современное виноделие в регионе только начинает формироваться. В виноградарский
                                    регион входят республики Кабардино-Балкария и Северная Осетия-Алания. Главной рекой
                                    Северной Осетии является Терек, который берёт свое начало за пределами республики,
                                    площадь которой составляет 8 000 кв. км. Терек, проходя через Владикавказ,
                                    простирается по холмистым равнинам, где раньше, более ста лет назад, располагались
                                    станицы с садами и виноградниками.</p>
                                <a href="https://russianvine.ru/region-dolina-tereka" class="btn-white">Подробнее о
                                    регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Каберне Совиньон, Саперави, Мерло, Ркацители, Рислинг,
                                                            Шардоне, Пино Нуар</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/IMG_6383.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: auto;">
                                            <a href="https://russianvine.ru/vinodelnia-konstantina-dzitoeva"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box">
                        <img src="/image/catalog/дзитоев/logo.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


                <div id="pane-5" class="tab-pane ">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Дагестан</h2>
                                <p>Дагестан - регион с достаточно древней историей, и это самая многонациональная
                                    республика России. Его территория располагается в северо-восточной части Кавказа,
                                    вдоль побережья Каспийского моря, площадь республики составляет 50 270 кв. км. При
                                    этом он занимает второе место в стране по площади виноградников, около 23 000 га.
                                    Дагестан подразделён на три почвенно-климатические зоны: горная, предгорная и
                                    равнинная. &nbsp;&nbsp;</p>
                                <a href="https://russianvine.ru/region-dagestan" class="btn-white">Подробнее о
                                    регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Алиготе, Шардоне, Рислинг, Совиньон, Кара-Койсу, Пино Блан,
                                                            Каберне Совиньон, Алый Терский, Гимра, Ркацители</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/dopolnitelno/руки виоград.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: auto;">
                                            <a href="https://russianvine.ru/vinidelnya-derbentskay-kompaniya"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box">
                        <img src="/image/catalog/dvk/logo_derbent.png">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


                <div id="pane-6" class="tab-pane ">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Нижняя Волга</h2>
                                <p>Волгоградская область является самой северной зоной виноделия России. Располагается
                                    она на юго-востоке Восточно-Европейской равнины и является самым большим регионом
                                    (112 877 кв. км) на юге страны, при этом 78% территории составляют земли
                                    сельскохозяйственного назначения. При этом однако регион практически не представлен
                                    современным виноделием и виноградарством, за исключение малых фермерских
                                    хозяйств.</p>&nbsp;<br>
                                <a href="https://russianvine.ru/region-nignya-volga" class="btn-white">Подробнее о
                                    регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Каберне Совиньон, Саперави, Красностоп Золотовский, Мерло,
                                                            Цимлянский черный, Рислинг, Шардоне, Сибирьковый</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/IMG_0060 — копия.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                    <!-- slide start -->
                                    <div class="col-xs-6 col-sm-3 col-md-2 text-center image-border">
                                        <div style="height: auto;">
                                            <a href="https://russianvine.ru/vinodelny-dmitria-guseva"
                                               class="p-t-60 p-b-60">
                      <span class="middle-box">
                        <img src="/image/catalog/лого Гусев.jpg">
                      </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- slide end -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


                <div id="pane-7" class="tab-pane ">

                    <div class="container container-lg">
                        <div class="row">
                            <div class="col-lg-6 region-description">
                                <h2>Ставрополь</h2>
                                <p>Ставропольский край расположен в центральной части Предкавказья и на северном склоне
                                    Большого Кавказа, горной системы между Чёрным и Каспийским морями. Особое богатство
                                    края составляют минеральные лечебные воды. Регион обладает достаточно внушительной
                                    территорией (66 500 кв. км.) с обширной площадью виноградников (7000 га). Однако,
                                    несмотря на это, регион совершенно не представлен винодельнями нового поколения, их
                                    практически нет в регионе.&nbsp; &nbsp;&nbsp;</p>
                                <a href="https://russianvine.ru/region-stavropol" class="btn-white">Подробнее о
                                    регионе</a>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="col-lg-offset-2 col-lg-10 col-md-6 col-md-offset-6 region-info background-grey">
                                    <div class="row">
                                        <div class="col-lg-9 col-lg-offset-3 wine-species">
                                            <div>
                                                <div class="col-xs-12 background-white">
                                                    <div class="col-xs-3 text-right">
                                                        <span class="icon-icon_wine_species"></span>
                                                    </div>
                                                    <div class="col-xs-9 wine-species-text">
                                                        <h4>Сорта винограда:</h4>
                                                        <p>Алиготе, Сильванер, Рислинг, Мускат белый, Ркацители,
                                                            Саперави, Каберне Совиньон, Пино серый, Шардоне</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-10 col-md-9 region-image">
                                        <img src="/image/catalog/IMG_6386.jpg">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <br><br><br>
                                <h3 class="text-center p-b-30">Винодельни региона</h3>
                            </div>
                        </div>
                    </div>


                    <div class="p-t-30 p-b-30" style="overflow: hidden">
                        <div class="region-wineries">
                            <div class="col-xs-12">
                                <div class="row auto-height">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>


            </div>

            <br><br><br>


            <p>&nbsp;</p>


            <script>
                var markers = [];

                var showActiveMarkers = function (region) {
                    for (var i = 0; i < markers.length; i++) {
                        if (markers[i].region == region) {
                            markers[i].setOpacity(1);
                        } else {
                            markers[i].setOpacity(0.55);
                        }
                    }
                }

                $(function () {
                    $('#content a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                        var region = $(e.target).text();
                        showActiveMarkers(region);
                    });
                });

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 6,
                        center: {lat: 46.3287957, lng: 43.1502572},
                        styles: [
                            {
                                "featureType": "all",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#333333"
                                    },
                                    {
                                        "lightness": 40
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 17
                                    },
                                    {
                                        "weight": 1.2
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 20
                                    },
                                    {
                                        "gamma": "0.61"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ebebeb"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 29
                                    },
                                    {
                                        "weight": 0.2
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 18
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "gamma": "1"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    },
                                    {
                                        "lightness": 19
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#e1e1e1"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            }
                        ]
                    });

                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Кубань',
                            position: {lat: 45.034937, lng: 38.984963},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-1"]').click();
                        });
                    })();
                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Крым',
                            position: {lat: 44.957931, lng: 34.098635},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-2"]').click();
                        });
                    })();
                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Долина Дона',
                            position: {lat: 47.216655, lng: 39.678577},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-3"]').click();
                        });
                    })();
                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Долина Терека',
                            position: {lat: 43.040077, lng: 44.659892},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-4"]').click();
                        });
                    })();
                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Дагестан',
                            position: {lat: 44.579121, lng: 46.155391},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-5"]').click();
                        });
                    })();
                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Нижняя Волга',
                            position: {lat: 48.709632, lng: 44.520324},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-6"]').click();
                        });
                    })();
                    (function () {
                        var marker = new google.maps.Marker({
                            region: 'Ставрополь',
                            position: {lat: 45.043366, lng: 41.979728},
                            icon: '/catalog/view/theme/ruswine/image/map_marker.png',
                            map: map
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            $('#content a[data-toggle="tab"][data-target="#pane-7"]').click();
                        });
                    })();
                    showActiveMarkers("Кубань");
                }
            </script>
            <script async="" defer=""
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHQLIuJDYQmVKj24JJmBYzr46M2SJbQYU&amp;callback=initMap&amp;language=ru"></script>

        </div>
    </div>
@endsection
