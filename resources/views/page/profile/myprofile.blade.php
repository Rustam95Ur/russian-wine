@extends('layouts.app')
@section('content')

    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/profile-personal-info-form.css') }}">
    @endpush

    <div id="franchise">
        <div id="content">
            <div class="row">
                <div class="col-md-4" style="background-color: rgb(44, 32, 48); height: 700px;">
                    <div class="userData" style="margin: 15%;">
                        <h3 style="color: white">{{Auth::user()->first_name}}</h3>

                        <h4 class="heading">Скидка</h4>
                        <h1 class="discount">5%</h1>

                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <ul>
                                    <li class="rowlist"><a href="{{route('favorite')}}">Избранное</a></li>
                                    <li class="rowlist"><a href="{{route('sub-wines')}}">Подписки</a></li>
                                    <li class="rowlist"><a href="">Сеты</a></li>
                                    <li class="rowlist"><a href="">Мои заказы</a></li>
                                </ul>

                                <ul class="additional">
                                    <li class="rowlist"><a href="">Спецпредложения</a></li>
                                    <li class="rowlist"><a href="{{route('profile')}}">Персональные данные</a></li>
                                </ul>

                                <div class="logout">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Выйти
                                    </a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <ul class="right">
                                    <li class="rowlist">0</li>
                                    <li class="rowlist">2</li>
                                    <li class="rowlist">5</li>
                                    <li class="rowlist">15</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div style="color: grey !important; margin: 50px;">
                        <h1>Персональные данные</h1>
                        <div class="row" style="margin-top: 30px">
                            <form role="form" method="POST" action="{{route('profile-update')}}">
                            <div class="col-sm-5">
                                @csrf
                                    <div class="form-group float-label-control">
                                        <label for="">Имя</label>
                                        <input type="text" class="form-control prof" name="first_name" placeholder="Имя" value="{{Auth::user()->first_name}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Фамилия</label>
                                        <input type="text" class="form-control prof" name="last_name" placeholder="Фамилия" value="{{Auth::user()->last_name}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control prof" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Телефон</label>
                                        <input type="text" class="form-control prof" name="phone" placeholder="Телефон" value="{{Auth::user()->phone}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Дата рождения</label>
                                        <input type="text" class="form-control prof" name="birth_date" onfocus="(this.type='date')" placeholder="Дата рождения" value="{{Auth::user()->birth_date}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <button type="submit" class="saveProfile">Сохранить</button>
                                    </div>

                                <div class="form-group float-label-control" id="success-message">
                                    {{$success ?? ''}}
                                </div>
                            </div>

                            <div class="col-sm-5" style="margin-left: 80px;">

                                    <h3 class="changePass">Изменить пароль</h3>
                                    <div class="form-group float-label-control">
                                        <label for="">Старый пароль</label>
                                        <input type="password" name="oldpassword prof" class="form-control" placeholder="Старый пароль">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Новый пароль</label>
                                        <input type="password" name="newpassword prof" class="form-control" placeholder="Новый пароль">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/profile-input-animation.js') }}"></script>
    @endpush
@endsection