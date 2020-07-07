@extends('layouts.app')
@section('content')
    <div id="winemakers">
        <div id="content">
            <div class="heading-wrap">
                <h1>Виноделы</h1>
                <div class="container container-lg">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p>Вы должны знать их в лицо, это профессионалы своего дела. Вино стало для них новым
                                вызовов, а главное отдушиной. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="winemaker-details winemaker-details-67">
                <div class="float-right">
                    <div class="background-white">
                        <div class="container container-lg">
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
                                    <h1>Андриенко Павел</h1>
                                    <h2 id="in_par"><p>Завод марочных вин Коктебель</p> | <p>Крым</p></h2>
                                    <img
                                        src="https://russianvine.ru/image/cache/catalog/koktebel/foto-andrienko1-570x336.jpg"
                                        alt="" class="img-responsive">
                                    <div class="description">
                                        <p>Российский винодел Павел Андриенко родился в 1974 году в Краснодарском крае.
                                            В 2004 году окончил Кубанский государственный
                                            технологический университет, в Краснодаре по специальности "Технология
                                            бродильных производств и виноделие».

                                            С 2003 г. по 2005 г. работал в ЗАО АПФ «Мирный».
                                            Прошел путь от рабочего до технолога-винодела. Один из участников проекта по
                                            запуску цеха по производству игристых вин.

                                            С 2005 г. по 2013 г. работал в ООО «Кубанские вина»
                                            сначала в должности технолога, а затем - заместителем генерального
                                            директора, директором по производству. За все
                                            время работы основным направлением было улучшение качества выпускаемых вин с
                                            применением передовых технологий. Сохранение производства Хереса
                                            классическим
                                            способом. Непосредственное участие над выпуском вин Шардоне, Каберне, Мерло,
                                            серии «Звезда Тамани». В настоящее время работает на «Заводе марочных вин
                                            Коктебель» в качестве главного технолога-винодела.
                                            Основное направление - это сохранение заводских традиций виноделия с
                                            постоянным
                                            совершенствованием. Продолжение классического производства вина Мадера
                                            Коктебель, выпуска вина «Кагор Высшего качества», так же Шардоне,
                                            Каберне-Совиньон, Бастардо.</p>
                                    </div>
                                    <div class="winery-link">
                                        <a href="https://russianvine.ru/vinodelnya-koktebel"><p>Завод марочных вин
                                                Коктебель</p> <span class="icon-icon_arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-lg mt-md">
                <div class="row">
                    @foreach($winemakers as $winemaker)
                        <div id="winemaker{{$winemaker->id}}" class="col-sm-6 col-md-4 mt-xs mb-md winemaker-cont">
                            <div class="winemaker">
                                <div class="image">
                                    <a class="preview" data-target=".winemaker-details-{{$winemaker->id}}"><img
                                            src="{{Voyager::image($winemaker->image)}}"
                                            alt="{{$winemaker->seo_title}}" class="img-responsive"></a>
                                </div>
                                <div class="description-wrap">
                                    <h2>{{$winemaker->full_name}}</h2>
                                    <div class="description">
                                        <ul>
                                            <li>
                                                <p>{{isset($winemaker->winery) ? $winemaker->winery->title  : '' }}</p>
                                            </li>
                                            <li><p>{{$winemaker->region->title}}</p></li>
                                            <li><p>Вина:
                                                    @foreach($winemaker->wines as $wine)
                                                        {{$wine->title}}@if(!$loop->last),@endif
                                                    @endforeach
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>

    </div>
@endsection
