@extends('layouts.app')
@section('content')
    <style>
        .rowlist{
            margin-top: 10px;
        }
        ul{
            list-style: none;
            color:white;
        }
        .right {
            text-align: right
        }
        .heading{
            color: white;
        }
        .discount {
            color:#DA224D;
            margin-top:-10px
        }
        .additional {
            margin-top: 20px;
        }
        .logout{
            margin-top: 50px;
        }

        .changePass {
            font-size: 25px;
        }

        .prof {
            font-size: 15px !important;
            outline: 0;
            border-width: 0 0 1px !important;
            border-color: black !important;
        }

        .prof:focus {
            border-color: black;
        }

        .float-label-control { position: relative; margin-bottom: 1.5em; }
        .float-label-control ::-webkit-input-placeholder { color: transparent; }
        .float-label-control :-moz-placeholder { color: transparent; }
        .float-label-control ::-moz-placeholder { color: transparent; }
        .float-label-control :-ms-input-placeholder { color: transparent; }
        .float-label-control input:-webkit-autofill,
        .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
        .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 30px; box-shadow: none; -webkit-box-shadow: none; }
        .float-label-control input:focus,
        .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; }
        .float-label-control textarea:focus { padding-bottom: 4px; }
        .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid #aaa; outline: none; margin: 0px; background: none; }
        .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
        .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: #aaaaaa; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
        .float-label-control input.empty + label,
        .float-label-control textarea.empty + label { top: 0.1em; font-size: 0.8em; animation: none; -webkit-animation: none; }
        .float-label-control input:not(.empty) + label,
        .float-label-control textarea:not(.empty) + label { z-index: 1; }
        .float-label-control input:not(.empty):focus + label,
        .float-label-control textarea:not(.empty):focus + label { color: #aaaaaa; }
        .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
        .float-label-control.label-bottom input:not(.empty) + label,
        .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


        @keyframes float-labels {
            0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
            20% { font-size: 1.5em; opacity: 0; }
            30% { top: 0.1em; }
            50% { opacity: 0; font-size: 0.85em; }
            100% { top: -1em; opacity: 1; }
        }

        @-webkit-keyframes float-labels {
            0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
            20% { font-size: 1.5em; opacity: 0; }
            30% { top: 0.1em; }
            50% { opacity: 0; font-size: 0.85em; }
            100% { top: -1em; opacity: 1; }
        }

        @keyframes float-labels-bottom {
            0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
            20% { font-size: 1.5em; opacity: 0; }
            30% { top: 0.1em; }
            50% { opacity: 0; font-size: 0.85em; }
            100% { top: 3em; opacity: 1; }
        }

        @-webkit-keyframes float-labels-bottom {
            0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
            20% { font-size: 1.5em; opacity: 0; }
            30% { top: 0.1em; }
            50% { opacity: 0; font-size: 0.85em; }
            100% { top: 3em; opacity: 1; }
        }

        .saveProfile {
            text-transform: uppercase;
            color: white;
            width: 200px;
            height: 50px;
            border-radius: 30px;
            background-color: #DA224D;
        }
    </style>

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


@endsection