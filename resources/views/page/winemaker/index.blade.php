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
            @foreach($winemakers as $winemaker)
                <div class="winemaker-details winemaker-details-{{$winemaker->id}}">
                    <div class="close_block"></div>
                    <div class="float-right">
                        <div class="background-white">
                            <div class="container container-lg">
                                <div class="row">
                                    <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
                                        <h1>{{$winemaker->full_name}}</h1>
                                        <div id="in_par" class="text-center">
                                            <p>{{isset($winemaker->winery) ? $winemaker->winery->title : ''}}  |</p>
                                            <p>{{$winemaker->region->title}}</p>
                                        </div>
                                        <img src="{{Voyager::image($winemaker->modal_image)}}" alt="{{$winemaker->full_name}}"
                                             class="img-responsive">
                                        <div class="description">
                                            {!!  $winemaker->description !!}
                                        </div>
                                        <div class="winery-link">

                                            <a href="{{ isset($winemaker->winery) ? route('winery', $winemaker->winery->slug) : '#'}}">
                                                <p>{{isset($winemaker->winery) ? $winemaker->winery->title : ''}}</p>
                                                <span class="icon-icon_arrow_right"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                        <div class="icon-icon_x text-right close-icon"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
    @push('scripts')
        <script>
            $('.preview').on('click', function () {
               var id = $(this).data('target');
               $(id).show()
               $(id).addClass('product-preview')
            })
            $('.close-icon').on('click', function () {
               $('.winemaker-details').hide()
            })
            $('.close_block').on('click', function () {
                $('.winemaker-details').hide()
            })
        </script>
    @endpush
@endsection
