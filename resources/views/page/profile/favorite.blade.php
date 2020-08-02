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
        #cssTable {
            margin-top: 30px;
        }
        #cssTable td
        {
            vertical-align: middle;
        }

        .makeOrderButton {
            width: 180px;
            height: 40px;
            background-color:#DA224D ;
            color: white;
            border-radius: 50px;
        }
        .deletefavorite {
            border: none;
        }
    </style>
    <div id="franchise">
        <div id="content">
            <div class="row">
                <div class="col-md-4" style="background-color: rgb(44, 32, 48)">
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
                    @if (isset($favorites[0]))
                        <div style="margin: 30px;">
                            <h1>Избранное</h1>
                            <table class="table" id="cssTable">
                            @foreach($favorites as $favorite)
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="prog"></td>
                                        <td><img src="{{ asset ('image/1OLwTAcYZZn9L9hwUju2.png') }}" width="30px" height="100px" alt=""></td>
                                        <td>
                                            {{$favorite->title}}

                                            <div style="margin-top: 8px;">
                                                <span>{{$favorite->color->title}} </span> | <span>{{$favorite->sugar->title}} </span> | <span>{{$favorite->year}}</span>
                                            </div>
                                        </td>
                                        <td>{{$favorite->price}}</td>
                                        <form action="{{route('favdelete')}}" method="GET">
                                            <td><button type="submit" class="deletefavorite"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                        </form>
                                        
                                    </tr>
                                    </tbody>
                            @endforeach
                            </table>
                            <input class="makeOrderButton" type="submit" id="submit_prog" value='Сделать заказ' />
                        </div>
                    @else
                    <div style="color: grey !important; margin: 160px;">
                        <center>
                            <h3>В избраном пока ничего нет <br> но вы можете их добавить из винотеки</h3>

                            <a href={{route('wine-shop')}}><button class="favorite-button">Перейти в Винотеку</button></a>

                        </center>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection