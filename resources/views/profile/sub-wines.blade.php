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
                @include('profile.layouts.left-side-menu')
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
