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
                    <div>
                        <div class="tab" style="margin-top: 30px">
                            <h1>Подписки</h1>
                            <button class="tablinks active" onclick="openSubWines(event, 'current')">Действующие</button>
                            <button class="tablinks" onclick="openSubWines(event, 'old')">Прошедшие</button>
                        </div>

                        <div id="current" class="tabcontent active">
                            <div style="color: grey !important; margin: 100px;">
                                <center>
                                    <h3>У вас нет действующих подписок</h3>



                                    <button class="favorite-button"><a  href="{{route('profile')}}"></a>Оформить подписку</button>
                                </center>
                            </div>
                        </div>

                        <div id="old" class="tabcontent">
                            <div style="color: grey !important; margin: 100px;">
                                <center>
                                    <h3>Здесь ничего нет</h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function openSubWines(evt, subTime) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(subTime).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection