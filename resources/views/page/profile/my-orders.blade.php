@extends('layouts.app')
@section('content')

    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/profile-personal-info-form.css') }}">
        <style>
            .show-details {
                border: none;
            }
        </style>
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
                                    <li class="rowlist"><a href="{{route('my-sets')}}">Сеты</a></li>
                                    <li class="rowlist"><a href="{{route('my-orders')}}">Мои заказы</a></li>
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
                    <div style="margin: 50px;">
                        <div style="margin: 30px;">
                            <h1>Мои заказы</h1>
                            <table class="table" id="cssTable" style="margin-top: 30px;">
                                    <tbody>
                                    <tr>
                                        <td><b>Заказ 1</b></td>
                                        <td>20.01.2020</td>
                                        <td>10 000 Р</td>
                                        <td>
                                            <button type="submit" class="show-details">
                                                <i class="fa fa-align-justify" aria-hidden="true"></i>
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><b>Заказ 2</b></td>
                                        <td>20.01.2020</td>
                                        <td>10 000 Р</td>
                                        <td>
                                            <button type="submit" class="show-details">
                                                <i class="fa fa-align-justify" aria-hidden="true"></i>
                                            </button>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td><b>Заказ 3</b></td>
                                        <td>20.01.2020</td>
                                        <td>10 000 Р</td>
                                        <td>
                                            <button type="submit" class="show-details">
                                                <i class="fa fa-align-justify" aria-hidden="true"></i>
                                            </button>
                                        </td>

                                    </tr>
                                    </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection