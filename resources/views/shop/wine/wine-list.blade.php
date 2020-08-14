<div class="shopSearch col-md-9">
    <div class="row featured_cont">
        @foreach($wines as $wine)
            <div class="col-md-4 col-xs-6">
                <div class="swiper-slide">
                    <div class="wine">
                        <div class="image">
                            <p class="delete_favorite likeSlider unlike-{{$wine->id}}"  id="{{$wine->id}}"
                               style="display: {{in_array($wine->id, $favorite) ? '' : 'none'}}">
                                <img src="{{ asset ('image/un_like.svg') }}" alt="unlike for this wine">
                            </p>
                            <p class="add_to_favorite likeSlider like-{{$wine->id}}" id="{{$wine->id}}"
                               style="display: {{in_array($wine->id, $favorite) ? 'none' : ''}}">
                                <img src="{{ asset ('image/like.svg') }}" alt="like for this wine">
                            </p>
                            <a href="{{route('wine-bread', $wine->slug)}}" class="preview">
                                <img alt="{{$wine->title}}" src="{{ Voyager::image($wine->image) }}">
                                <span class="attributes"></span>
                            </a>
                        </div>
                        <h2><a href="{{route('wine-bread', $wine->slug)}}" class="preview">{{$wine->title}}</a>
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
                                <a href="{{route('wine-bread', $wine->slug)}}" class="preview">{{$wine->price}} <span>п</span></a>
                            </div>
                            <div class="button_cont">
                                <div class="prod_quantity">
                                    <span class="qua_mins"></span>
                                    <input type="number" class="quantity" data-id="{{$wine->id}}"
                                           value="1">
                                    <span class="qua_plus"></span>
                                </div>
                                <button id="button-carts" class="cart-btn-{{$wine->id}}"
                                        onclick="cart_add('{{$wine->id}}', 1, 'wine');">
                                    <span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if(count($wines) == 0 and $filters)
            <div class="text-center">
                <h2>По вашему фильтру ничего не найдено</h2>
            </div>
        @endif
        <div class="col-md-12 xol-xs-12 mt-lg">
            {{$wines->appends(request()->input())->links()}}
        </div>
    </div>
</div>
