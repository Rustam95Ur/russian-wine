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



<div id="overlay" >
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль">

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

<div id="overlay1" >
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
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" required autocomplete="first_name" autofocus placeholder="Имя">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Придумайте пароль">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Повторите пароль">
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
</div>
