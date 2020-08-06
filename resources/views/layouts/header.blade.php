<header id="head_f"
        class="home_header">
    <div class="container container-lg">
        <div class="row">
            <div class="col-sm-2">
                <div id="logo">
                    <a href="{{route('home')}}">
                        <img src="{{ Voyager::image(setting('site.logo'))}}" title="{{Voyager::setting('site.title')}}"
                             alt="{{Voyager::setting('site.title')}}" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-sm-1">
                <a target="_blank" href="https://www.youtube.com/channel/UCN-RcIaaNGUmZBYg9HJtoKg">
                    <img alt="youtube-icon" src="{{ asset ('image/youtube.png') }}">
                </a>
                <a target="_blank" href="https://instagram.com/russianvine.ru?igshid=1kot521x7b8l">
                    <img alt="instagram-icon" src="{{ asset ('image/instagram.png') }}">
                </a>
            </div>
            <div class="col-sm-8">
                <!---->
                <nav id="menu" class="navbar navbar-right" style="pointer-events:all">
                    <div class="navbar-header">
                        <button type="button" class="btn btn-navbar navbar-toggle"
                                onclick="$('body').addClass('nooverflow');" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse">
                            <div></div>
                            <div></div>
                            <div></div>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <button type="button" class="btn btn-navbar navbar-toggle"
                                onclick="$('body').removeClass('nooverflow');" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse">
                            <div></div>
                            <div></div>
                        </button>
                        <ul class="nav navbar-nav">
                            <li><a class="{{(\Request::route()->getName() == 'wine-shop') ? 'active_link' : ''}}"
                                   href="{{route('wine-shop')}}">{{trans('header.wine')}}</a>
                            </li>
                            <li><a class="{{(\Request::route()->getName() == 'sets') ? 'active_link' : ''}}"
                                   href="{{route('sets')}}">{{trans('header.sets')}}</a></li>
                            <li><a class="{{(\Request::route()->getName() == 'subscription') ? 'active_link' : ''}}"
                                   href="{{route('subscription')}}">{{trans('header.subscription')}}</a></li>
                            <li><a class="{{(\Request::route()->getName() == 'personal-wine') ? 'active_link' : ''}}"
                                   href="{{route('personal-wine')}}">{{trans('header.personal-wine')}}</a></li>
                            <li><a class="{{(\Request::route()->getName() == 'tastings') ? 'active_link' : ''}}"
                                   href="{{route('tastings')}}">{{trans('header.testing')}}</a></li>
                            <li><a class="{{(\Request::route()->getName() == 'franchise') ? 'active_link' : ''}}"
                                   href="{{route('franchise')}}">{{trans('header.franchise')}}</a></li>
                            <li class="newdrop"><a href="" class="dropdown-toggle" data-toggle="dropdown">Информация</a>
                                <div class="dropdown-menu-custom">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{route('regions')}}">{{trans('header.regions')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('wineries')}}">{{trans('header.wineries')}}</a>
                                            </li>
                                            <li><a href="{{route('micro_winery')}}">{{trans('header.micro_winery')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('winemakers')}}">{{trans('header.winemakers')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('where_to_by')}}">{{trans('header.where_to_by')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 col-sm-2">
                <div id="navSearch">
                    <a onclick="$('#myOverlay').addClass('open', 1000);" id="searchStart">
                        <img alt="search icon" src="{{ asset ('image/search.svg') }}">
                    </a>
                </div>
                <div id="login">
                    @if(Auth::guard('client')->check())
                        <a href="{{route('profile')}}">
                            <img alt="login icon" src="{{ asset ('image/login.svg') }}">
                        </a>
                    @else
                        <a onclick="login_modal()">
                            <img alt="login icon" src="{{ asset ('image/login.svg') }}">
                        </a>
                    @endif
                </div>
                <div id="cart">
                    <a onclick="$('#cart-cont').addClass('open');$('body').addClass('nooverflow1');$('body').addClass('nooverflow');">
                        <img alt="cart icon" src="{{ asset ('image/cart.png') }}">
                        <b id="cartCount">{{$countCart}}</b>
                    </a>
                </div>
                <div id="cart-cont">
                    <div>
                        <button id="close-cart"
                                onclick="$('#cart-cont').removeClass('open');$('body').removeClass('nooverflow1');$('body').removeClass('nooverflow');"></button>
                        <div id="close-mask" class="empty_cart_block {{($countCart == 0 ? 'empty-cart' : '')}}"></div>
                        <div id="cart-cart" class="empty_cart_block {{($countCart == 0 ? 'empty-cart' : '')}}">
                            <div class="newcart" id="for_the_scroll">
                                <div id="newcart">
                                    <div class="cart-content">
                                        <div class="empty_cart" id="empty_cart"
                                             style="display: {{($countCart == 0 ? 'block' : 'none')}}">
                                            <h2>
                                                Ваша корзина ещё пуста
                                            </h2>
                                            <img alt="cart-icon" src="{{ asset ('image/empty.jpg') }}">
                                            <button onclick="window.location.href=' {{route('wine-shop')}} ';">
                                                Выбрать вино
                                            </button>
                                        </div>
                                    </div>
                                    <div class="not_empty_cart"
                                         style="display: {{($countCart == 0 ? 'none' : 'block')}};">
                                        <div class="cart-cart">
                                            <h3>Корзина</h3>
                                            <div class="cart-block" id="simplecheckout_cart">
                                                <div class="table-responsive" id="for-cart">
                                                    <table class="ul-cart" id="cart_table">
                                                        <colgroup>
                                                            <col class="image">
                                                            <col class="name">
                                                            <col class="quantity">
                                                            <col class="total">
                                                            <col class="remove">
                                                        </colgroup>
                                                        <tbody id="product_buy">
                                                        @foreach($cart_wines as $wine)
                                                            <tr id="tr-{{$wine['wine_id']}}">
                                                                <td class="image">
                                                                    <a>
                                                                        <img src="{{$wine['image']}}"
                                                                             alt="{{$wine['title']}}"
                                                                             title="{{$wine['title']}}"
                                                                             style="width: 40%">
                                                                    </a>
                                                                </td>
                                                                <td class="name">
                                                                    <a>{{$wine['title']}}</a>
                                                                    {{$wine['price']}} <span>п</span>
                                                                    <div class="options">
                                                                    </div>
                                                                </td>
                                                                <td class="quantity">
                                                                    <div class="input-group btn-block"
                                                                         style="max-width: 200px;">
                                                        <span class="input-group-btn cheight">
                                                            <button class="btn btn-primary decreaseQty"
                                                                    id="decrease-{{$wine['wine_id']}}"
                                                                    data-toggle="tooltip" type="submit"
                                                                    data-original-title="" title="">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                        </span>
                                                                        <input class="form-control cheight"
                                                                               data-price="{{$wine['price']}} "
                                                                               type="text"
                                                                               data-onchange="changeProductQuantity"
                                                                               name="quantity[{{$wine['wine_id']}}]"
                                                                               value="{{$wine['count']}}" size="1">
                                                                        <span class="input-group-btn cheight">
                                                            <button class="btn btn-primary increaseQty"
                                                                    id="increase-{{$wine['wine_id']}}"
                                                                    data-toggle="tooltip" type="submit"
                                                                    data-original-title="" title="">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td class="total"><b>{{$wine['total']}}</b>
                                                                    <span>о</span></td>
                                                                <td class="remove">
                                                                    <button class="btn btn-danger cart_remove"
                                                                            id="cart-wine-remove-{{$wine['wine_id']}}"
                                                                            title="Удалить">
                                                                        <i class="fa fa-times-circle"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="itog">
                                                    <div class="row">
                                                        <div class="col-md-4 first_cl">
                                                            <span>Позиций (<span id="count-prods">{{$countWine}}</span>) </span>
                                                            <div class=" simplecheckout-cart-total"
                                                                 id="total_sub_total">
                                                                    <span class="simplecheckout-cart-total-value">Итого <span
                                                                            id="total_price">{{$total_sum}}</span> р. </span>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 second_cl">
                                                            <button id="oformlenie">
                                                                <a href="{{route('wine-shop')}}">Оформить заявку</a>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 third_cl">
                                                            <p>Пожалуйста
                                                                <a href="{{route('wine-shop')}}"
                                                                   style="color: #23252b;text-decoration:underline;"
                                                                   id="link_wine">добавьте</a>
                                                                товары в корзину
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myOverlay" class="overlay">
        <a class="closebtn" onclick="$('#myOverlay').removeClass('open');" title="Close Overlay"><img
                src="{{ asset ('image/plus.png') }}" style="transform: rotateZ(45deg); "></a>
        <div class="overlay-content">
            <form action="{{route('search')}}">
                <img alt="search icon" src="{{ asset ('image/search.svg') }}" id="searchInputIcon">
                <input type="text" placeholder="Поиск..." name="search" id="search">
            </form>
        </div>
        <div class="overlay-results">
            <div id="searchResult">
            </div>
            <button type="button" name="all Search  Results" class="allResults">Показать все результаты</button>
        </div>
    </div>
</header>

