<header id="head_f" class="home_header">
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
                            <li>
                                <a class="{{(\Request::route()->getName() == 'wine-shop') ? 'active_link' : ''}}"
                                   href="{{route('wine-shop')}}">{{trans('header.wine')}}</a>
                            </li>
                            <li><a class="{{(\Request::route()->getName() == 'sets') ? 'active_link' : ''}}" href="{{route('sets')}}">{{trans('header.sets')}}</a></li>
                            <li><a class="{{(\Request::route()->getName() == 'subscription') ? 'active_link' : ''}}" href="{{route('subscription')}}">{{trans('header.subscription')}}</a></li>
                            <li><a href="#">Именное вино</a></li>
                            <li><a href="#">Дегустации</a></li>
                            <li><a class="{{(\Request::route()->getName() == 'franchise') ? 'active_link' : ''}}" href="{{route('franchise')}}">{{trans('header.franchise')}}</a></li>
                            <li class="newdrop"><a href="" class="dropdown-toggle" data-toggle="dropdown">Информация</a>
                                <div class="dropdown-menu-custom">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Регионы виноделия</a></li>
                                            <li><a href="#">Русские винодельни</a></li>
                                            <li><a href="#">Микровинодельни</a></li>
                                            <li><a href="{{route('winemakers')}}">{{trans('header.winemakers')}}</a></li>
                                            <li><a href="#">Где купить</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-2">
                <div id="cart"><a
                        onclick="$('#cart-cont').addClass('open');$('body').addClass('nooverflow1');$('body').addClass('nooverflow');">
                        <img src="{{ asset ('image/cart.png') }}">
                        <b>0</b>
                    </a>
                </div>
                <div id="cart-cont">
                    <div>
                        <button id="close-cart"
                                onclick="$('#cart-cont').removeClass('open');$('body').removeClass('nooverflow1');$('body').removeClass('nooverflow');"></button>
                        <div id="close-mask" class="empty-cart"></div>
                        <div id="cart-cart" class="empty-cart">
                            <div class="newcart" id="for_the_scroll">
                                <div id="newcart">
                                    <div class="cart-content">
                                        <div id="empty_cart">
                                            <h2>
                                                Ваша корзина ещё пуста
                                            </h2>
                                            <img alt="cart-icon" src="{{ asset ('image/empty.jpg') }}">
                                            <button onclick="window.location.href=' hyperlink ';">Выбрать вино</button>
                                            <div style="display:none;" id="simplecheckout_cart_total">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @push('scripts')
                <script>
                    $('#close-mask').click(function() {
                        $('#cart-cont').removeClass('open');
                        $('body').removeClass('nooverflow1');
                        $('body').removeClass('nooverflow');
                    });
                    function recountTotal() {
                        var sum = 0;
                        $('#product_buy .total b').each(function () {
                            sum = sum + parseInt($(this).text());
                        })
                        $('#total_price').text(sum);
                    };

                    function increaseQty(productid) {
                        $('input[name="quantity[' + productid + ']"]').val(parseInt($('input[name="quantity[' + productid + ']"]').val()) + 1);
                        cart.addmini(productid, 1);
                        var prodsum = parseInt($('input[name="quantity[' + productid + ']"]').val()) * parseInt($('input[name="quantity[' + productid + ']"]').attr('data-price'));
                        $('input[name="quantity[' + productid + ']"]').parent().parent().siblings('.total').html('<b>' + prodsum + '</b><span>о</span>');
                        recountTotal();
                    };

                    function decreaseQty(productid) {
                        $('input[name="quantity[' + productid + ']"]').val(parseInt($('input[name="quantity[' + productid + ']"]').val()) - 1);
                        cart.addmini(productid, -1);
                        if (parseInt($('input[name="quantity[' + productid + ']"]').val()) > 0) {
                            var prodsum = parseInt($('input[name="quantity[' + productid + ']"]').val()) * parseInt($('input[name="quantity[' + productid + ']"]').attr('data-price'));
                            $('input[name="quantity[' + productid + ']"]').parent().parent().siblings('.total').html('<b>' + prodsum + '</b><span>о</span>');
                        } else {
                            $('#cart-cart > .newcart').load('index.php?route=common/cart/info #newcart');
                        }
                        recountTotal();
                    };
                </script>
                    @endpush
            </div>
        </div>
    </div>
</header>
