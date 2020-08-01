<div id="policy" class="active activated">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var policy = document.getElementById('policy');
            var policy2cookie = document.cookie.match(new RegExp('(?:^|; )' +
                'policy_confirm'.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') +
                '=([^;]*)'));
            if (!policy2cookie || policy2cookie[1] != 'Y') {
                var policy_container = document.querySelector('div.policy__container');
                if (policy_container) {
                    if (!navigator.cookieEnabled) {
                        policy_container.innerHTML = '<div class="policy__text"><p>' + privacy_text_nocookie + '</p></div>'
                    } else {
                        policy_container.innerHTML = '<div id="is18plus"><div class="is18plus-box"><div class="is18plus-content">' +
                            '<img class="img-responsive" alt="18_pluc_img" src="/image/bg/18plus_bg.jpg" /><div>' +
                            '<div class="circle">18+</div><p>Для доступа необходимо подтвердить совершеннолетний возраст. </p>' +
                            '<a class="policy__confirm confirm btn-white" href="javascript:void(0)">Мне исполнилось 18 лет</a>' +
                            '</div></div></div></div>';
                    }
                    setTimeout(function () {
                        policy.appendChild(policy_container);
                        policy.classList.add('active');
                        setTimeout(function () {
                            policy.classList.add('activated')
                        }, 300);
                        var policy_confirm = document.querySelector('.policy__confirm');
                        if (policy_confirm) {
                            policy_confirm.addEventListener('click', function () {
                                policy.classList.remove('activated');
                                setTimeout(function () {
                                    policy.remove()
                                }, 300);
                                document.cookie = 'policy_confirm=Y; path=/'
                            })
                        }
                    }, 100)
                }
            } else {
                policy.remove()
            }
        })
    </script>
    <div class="policy__container">
        <div id="is18plus">
            <div class="is18plus-box">
                <div class="is18plus-content"><img alt="18_pluc_img" class="img-responsive"
                                                   src="{{asset('image/bg/18plus_bg.jpg')}}">
                    <div>
                        <div class="circle">18+</div>
                        <p>Для доступа необходимо подтвердить совершеннолетний возраст. </p>
                        <a class="policy__confirm confirm btn-white" href="javascript:void(0)">
                            Мне исполнилось 18 лет</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="overlay">
    <div class="close">
        <p class="closeclick" onclick="off()">X</p>
    </div>
    <div class="container logincontainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Авторизация</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" placeholder="Email"
                                           autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="Пароль">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn auth" id="enter">
                                        Войти
                                    </button>
                                </div>
                                <div class="forgotdiv">
                                    @if (Route::has('password.request'))
                                        <a class="forgot" href="#">
                                            Забыли пароль?
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <a class="regist" onclick="onRegister()">
                                        Зарегистрироваться
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="overlay1">
    <div class="close">
        <p class="closeclick" onclick="offRegister()">X</p>
    </div>
    <div class="container logincontainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Регистрация</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="first_name"
                                           required autocomplete="first_name" autofocus placeholder="Имя">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           required autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password" placeholder="Придумайте пароль">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Повторите пароль">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary auth">
                                        Зарегистрироваться
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <a class="regist" onclick="on()">
                                        у меня уже есть аккаунт
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                @if ($message = Session::get('success'))
                    <h6 class="text-center text-success">{!! $message !!}</h6>
                @endif
                @if ($message = Session::get('error'))
                    <h6 class="text-center text-danger">{!! $message !!}</h6>
                @endif
                @if ($message = Session::get('warning'))
                    <h6 class="text-center text-danger">{!! $message !!}</h6>
                @endif
                @if ($message = Session::get('info'))
                    <h6 class="text-center text-danger">{!! $message !!}</h6>
                @endif
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <ul class="questions">
                            <li class="text-danger"><h6>{!! $error !!}</h6></li>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@if(isset($home_tasting))
    <div id="degustacii_modal">
        <div class="shadow_close"
             onclick="$('#degustacii_modal').css('display', 'none');$('body').removeClass('nooverflow');"></div>
        <div class="degustacii_body">
            <div class="icon_close"
                 onclick="$('#degustacii_modal').css('display', 'none');$('body').removeClass('nooverflow');"></div>
            <div>
                <img alt="{{$home_tasting->title}}" class="degdescimg" src="{{Voyager::image($home_tasting->image)}}">
                <span id="deg-title">{{$home_tasting->title}}</span>
            </div>
            <div class="degustacii_description">

                <ul class="list-unstyled" id="deginfo">
                    <li>Дата: {{date('d M', strtotime($home_tasting->start_date))}}</li>
                    <li>Место: {{$home_tasting->place}}</li>
                    <li>Время: {{date('h:i', strtotime($home_tasting->start_date))}}</li>
                </ul>
                <p>
                    {{$home_tasting->description}}
                </p>
                <ul class="list-unstyled" id="bottle">
                    @foreach($home_tasting->wines as $wine)
                        <li>
                            <span>{{$loop->iteration}}</span>
                            {{isset($wine->winery) ? $wine->winery->title : '' }} |
                            {{$wine->title}} | {{$wine->year}} |
                            {{isset($wine->region) ? $wine->region->title : '' }}
                        </li>
                    @endforeach
                </ul>
                <a id="deg_order"
                   onclick="$('.mfp-wrap').css('display', 'block');$('#degustacii_modal').css('display', 'none');">Заказать
                    дегустацию</a>
                <a href="{{route('tastings')}}" id="deg_other">Другие дегустации</a>
            </div>
        </div>
    </div>
    <div id="home-zakaz" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready">
        <div class="mfp-container mfp-ajax-holder mfp-s-ready">
            <div class="shadow_close"
                 onclick="$('.mfp-wrap').css('display', 'none');$('body').removeClass('nooverflow');"></div>
            <div class="mfp-content">
                <div id="popup-quickorder">
                    <div class="popup-heading">{{$home_tasting->title}}</div>
                    <div class="popup-center">
                        <form id="fastorder_data" enctype="multipart/form-data" method="post">
                            <div class="col-sm-12" id="prods_c">
                                <div class="well well-sm products" style="margin-top:10px;">
                                    <div class="product">
                                        <div class="row">
                                            section#specials
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="col-xs-6 quantity_quickorder quick-cell">
                                                    <div class="quick-cell-content pquantity">
                                                        <div class="input-group popup-quantity">
                                                        <span class="input-group-btn">
                                                            <input class="btn btn-update-popup" type="button"
                                                                   id="decrease_quickorder" value="-"
                                                                   onclick="btnminus_quickorder('1');recalculateprice_quickorder();">
                                                        </span>
                                                            <input type="text"
                                                                   class="form-control input-sm qty_quickorder"
                                                                   name="quantity" id="htop_quickorder" size="2"
                                                                   value="1">
                                                            <span class="input-group-btn">
                                                            <input class="btn btn-update-popup" type="button"
                                                                   id="increase_quickorder" value="+"
                                                                   onclick="btnplus_quickorder();recalculateprice_quickorder();">
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 text-center quick-cell">
                                                    <div class="quick-cell-content">

                                                        <div class="price_fast"><span id="formated_price_quickorder"
                                                                                      data-price="15000.0000">15000</span>
                                                        </div>
                                                        <input type="hidden" id="price_tax_plus_options"
                                                               name="price_tax" value="15000">
                                                        <input type="hidden" id="price_no_tax_plus_options"
                                                               name="price_no_tax" value="15000">
                                                        <input id="total_form" type="hidden" value="15000"
                                                               name="total_fast">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12 col-sm-12 form-group sections_block_rquaired">
                                <div class="input-group margin-bottom-sm">
                                    <input id="contact-name" class="form-control contact-name" type="text"
                                           placeholder="Имя" value="" name="nameFF">

                                </div>

                            </div>


                            <div class="col-sm-12 col-sm-12 form-group sections_block_rquaired">
                                <div class="input-group margin-bottom-sm">
                                    <input id="contact-phone" class="form-control contact-phone" type="text"
                                           placeholder="Телефон" value="" name="contactFF">

                                </div>
                            </div>


                            <div class="col-sm-12 col-sm-12 form-group sections_block_rquaired">
                                <div class="input-group margin-bottom-sm">
                                    <input id="contact-email" class="form-control contact-email" type="text"
                                           placeholder="E-mail" value="" name="messageFF">

                                </div>
                            </div>


                            <div class="col-sm-12 form-group text-center"></div>
                            <input type="hidden" id="callback_url" value="" name="url_site">
                            <input type="hidden" id="this_prod_id" value="50" name="this_prod_id">


                            <input class="btn btn-quickorder-one" type="submit" value="Заказать дегустацию">
                        </form>
                    </div>
                    <div class="popup-footer">
                        <style>
                            #quickorder_btn .btn-quickorder {
                                background-color: # !important;
                                border-color: # !important;
                            }

                            #quickorder_btn .btn-quickorder:hover,
                            #quickorder_btn .btn-quickorder:focus {
                                background-color: # !important;
                            }

                        </style>

                        <div class="terms">
                            Нажимая кнопку вы даете согласие на обработку персональных данных в соответствии с <a>условиями
                                Пользовательского соглашения</a>.
                        </div>
                    </div>
                    <button title="Close (Esc)" type="button" class="mfp-close"
                            onclick="$('.mfp-wrap').css('display', 'none');$('body').removeClass('nooverflow');">×
                    </button>
                </div>
            </div>
            <div class="mfp-preloader"><span><i style="font-size:50px;" class="fa fa-spinner fa-pulse"></i></span></div>
        </div>
    </div>
@endif
