@extends('layouts.app')
@section('title', $set->seo_title)
@section('description', $set->meta_description)
@section('keywords', $set->meta_keywords)
@section('body_class', 'set-page footer-hide other-page')
@section('content')
    <div id="desktop-product">
        <div class="other-page" id="other-page">
            <div class="product-page">
                <div id="spec-cont" class="col-sp-15">
                    <div class="inner-image">
                        <div class="image-set">
                            @switch($wine_count)
                                @case(1)
                                @for ($i = 0; $i < 6; $i++)
                                    <a data-bottle="{{$set->wines[0]->id}}">
                                        <img alt="{{$set->wines[0]->title}}"
                                             src="{{Voyager::image($set->wines[0]->image)}}">
                                    </a>
                                @endfor
                                @break
                                @case(2)
                                @for ($i = 0; $i < 3; $i++)
                                    <a data-bottle="{{$set->wines[0]->id}}">
                                        <img alt="{{$set->wines[0]->title}}"
                                             src="{{Voyager::image($set->wines[0]->image)}}">
                                    </a>
                                    <a data-bottle="{{$set->wines[1]->id}}">
                                        <img alt="{{$set->wines[1]->title}}"
                                             src="{{Voyager::image($set->wines[1]->image)}}">
                                    </a>
                                @endfor
                                @break
                                @case(3)
                                @for ($i = 0; $i < 2; $i++)
                                    <a data-bottle="{{$set->wines[0]->id}}">
                                        <img alt="{{$set->wines[0]->title}}"
                                             src="{{Voyager::image($set->wines[0]->image)}}">
                                    </a>
                                    <a data-bottle="{{$set->wines[1]->id}}">
                                        <img alt="{{$set->wines[1]->title}}"
                                             src="{{Voyager::image($set->wines[1]->image)}}">
                                    </a>
                                    <a data-bottle="{{$set->wines[2]->id}}">
                                        <img alt="{{$set->wines[2]->title}}"
                                             src="{{Voyager::image($set->wines[2]->image)}}">
                                    </a>
                                @endfor
                                @break
                                @default
                                @foreach($set->wines as $wine)
                                    <a data-bottle="{{$wine->id}}">
                                        <img alt="{{$wine->title}}" src="{{Voyager::image($wine->image)}}">
                                    </a>
                                @endforeach
                                @break
                            @endswitch
                            {{--                            @foreach($set->wines as $wine)--}}
                            {{--                                <a data-bottle="{{$wine->id}}">--}}
                            {{--                                    <img alt="{{$wine->title}}" src="{{Voyager::image($wine->image)}}">--}}
                            {{--                                </a>--}}
                            {{--                            @endforeach--}}
                        </div>
                    </div>
                    <a class="other-product"
                       href="{{ isset($set->prevSet) ? route('set', $set->prevSet->slug)  : '/' }}">
                        <img alt="prev_image" src="{{asset('image/prev.png')}}">
                    </a>
                    <a class="other-product"
                       href="{{isset($set->nextSet) ? route('set', $set->nextSet->slug ) : '/'}}">
                        <img alt="next_image" src="{{asset('image/next.png')}}">
                    </a>
                </div>
                <div class="col-sp-7">
                    <div class="description-set">
                        <h1>{{$set->title}}</h1>
                        <div class="nooverflow">
                            <p>{!! $set->description!!}</p>
                            <div class="quantity_quickorder" id="sety-calc">
                                <p>Количество сетов</p>
                                <span id="qminus"><input type="button" id="decrease_quickorder"
                                                         onclick="button_minus();">
                                    <img alt="minus_image" src="{{asset('image/white_minus.png')}}"></span>
                                <input type="text" data-quantity="1" class="qty_quickorder" name="quantity"
                                       id="htop_quickorder1" size="2" value="1">
                                <span id="qplus">
                                    <input type="button" id="increase_quickorder" value=""
                                           onclick="button_plus();">
                                    <img alt="plus_image" src="{{asset('image/white_plus.png')}}"></span>
                            </div>
                            <span class="price">{{$set->price}} <span>о</span>
                               <div id="skidka">
                                   @if($set->sale)
                                       -{{ $set->sale }}%
                                   @endif
		                        </div>
	                        </span>
                            <button class="add-cart btn-danger" onclick="cart_add('{{$set->id}}', 1, 'set');">в
                                корзину
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div id="mobile-instructions">--}}
            {{--                Нажмите на бутылку,<br>Чтобы почитать о вине--}}
            {{--            </div>--}}
        </div>
        {{--        <div id="mobile-price">--}}
        {{--  <span class="price" id="calculatingprice">{{$set->price}} <span>о</span>--}}
        {{--  <div id="skidka">--}}
        {{--			</div>--}}
        {{--	</span>--}}
        {{--            <button id="podpisatsa" onclick="fastorder_open({{$set->id}});">Подписаться</button>--}}
        {{--        </div>--}}
    </div>
    <div id="bottle-container">
        <div id="bottle">
            <div class="close"
                 onclick="$('#bottle-container').removeClass('show'); $('#other-page').removeClass('nooverflow');$('body').removeClass('nooverflow');$('body').addClass('other-page');$('body').attr('style', '');$('#desktop-product').removeClass('nooverflow');">
                <img alt="close_img" src="{{asset('image/closeicon.png')}}"></div>
            <ul class="otherbottles">
                @foreach($set->wines as $wine)
                    <li class="bottle_list" data-bottle="{{$wine->id}}">
                        <img alt="{{$wine->id}}" src="{{Voyager::image($wine->image)}}">
                    </li>
                @endforeach
            </ul>
            @foreach($set->wines as $wine)
                <div class="bottle_info" id="bottle{{$wine->id}}">
                    <div class="col-sp-12">
                        <img src="{{Voyager::image($wine->image)}}" class="main_img">
                        <div class="bottle-image">
                            <div class="attributes proizvoditelwc">{{$wine->winery->title}}</div>
                            <div class="attributes colorwc">
                                <img src="{{Voyager::image($wine->color->image)}}">
                                {{$wine->color->title}}
                            </div>
                            <div class="attributes vyderzhkawc">
                                <span>Выдержка</span>
                                <img alt="excerpt_image" src="{{asset('image/vyderjka.png')}}">
                                <p>{{isset($wine->excerpt) ? $wine->excerpt->title : ''}}<br></p>
                            </div>
                            <div class="attributes sort-vinogradawc">
                                <span>Сорт винограда</span>
                                {{$wine->sort->title}}
                            </div>
                            <div class="attributes tirajwc">
                                <span>Тираж</span>
                                {{$wine->edition}} <sup>БУТЫЛОК</sup>
                            </div>
                            <div class="attributes graduswc">
                                <img src="{{asset('image/gradus.png')}}">{{$wine->fortress}}%
                            </div>
                            <div class="attributes volumewc">{{$wine->volume}}</div>
                            <div class="attributes yearwc">{{$wine->year}}</div>
                        </div>
                    </div>
                    <div class="col-sp-12">
                        <h2>{{$wine->title}}</h2>
                        <h2 id="bottle-main-title">{{$wine->title}}</h2>
                        <div class="description-1">
                            <span>Особенности производства</span>
                            {!!  $wine->production_feature!!}
                        </div>
                        <div class="description-2">
                            <span>Дегустационные характеристики</span>
                            {!! $wine->feature!!}
                        </div>
                        <div class="description-3">
                            <span>Гастрономическое сочетание</span>
                            {!! $wine->combination!!}
                        </div>
                        <div class="description-4">
                            <span>Подача</span>
                            {!! $wine->innings!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @push('scripts')

        <script type="text/javascript"><!--
            function button_plus() {
                document.getElementById("htop_quickorder1").value++;
                var count = document.getElementById("htop_quickorder1").value;
                var total = {{$set->price}} *
                count;
                @if($set->sale)
                $('.price').html(total + ' <span>о</span> <div id="skidka">-{{$set->sale}}%</div>');
                @else
                $('.price').html(total + ' <span>о</span>');
                @endif

                var asd = $('#htop_quickorder1').attr('data-quantity');
                $('#htop_quickorder1').attr('data-quantity', ++asd);
            }

            function button_minus() {
                var button_val = $('#htop_quickorder1').val();
                if (button_val > 1) {
                    document.getElementById("htop_quickorder1").value--;
                    var count = document.getElementById("htop_quickorder1").value;
                    if (count > 0) {
                        var total = {{$set->price}} *
                        count;
                        @if($set->sale)
                        $('.price').html(total + ' <span>о</span> <div id="skidka">-{{$set->sale}}%</div>');
                        @else
                        $('.price').html(total + ' <span>о</span>');
                        @endif
                        var asd = $('#htop_quickorder1').attr('data-quantity');
                        $('#htop_quickorder1').attr('data-quantity', asd - 1);
                    }
                }

            }

            //--></script>
        <script>
            $(".image-set a").click(function () {
                var bottle = $(this).attr('data-bottle');
                $('#bottle-container').addClass('show');
                $('.bottle_info').removeClass('active');
                var activeid = '#bottle' + bottle;
                $(activeid).addClass('active');
                var liactive = $('.otherbottles li[data-bottle=' + bottle + ']');
                $(liactive).addClass('active');
            });
            $(".bottle_list").click(function () {

                var bottle = $(this).attr('data-bottle');
                $('#bottle-container').addClass('show');
                $('.bottle_list').removeClass('active');
                $('.bottle_info').removeClass('active');
                var activeid = '#bottle' + bottle;
                $(activeid).addClass('active');
                var liactive = $('.otherbottles li[data-bottle=' + bottle + ']');
                $(liactive).addClass('active');
            });

        </script>
        <script src="{{ asset('js/cart.js') }}"></script>
    @endpush

@endsection
