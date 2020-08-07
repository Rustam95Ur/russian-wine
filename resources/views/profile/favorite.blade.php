@extends('layouts.app')
@section('content')

    @push('styles')
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
    @endpush
    <div id="franchise">
        <div id="content">
            <div class="row">
                @include('profile.layouts.left-side-menu')
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
                                            <td><button type="submit" class="deletefavorite" id="{{$favorite->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
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

    @push('scripts')
        <script>
            $(document).ready(function() {

                var $submit = $("#submit_prog").hide(),
                    $cbs = $('input[name="prog"]').click(function() {
                        $submit.toggle( $cbs.is(":checked") );
                    });

            });
        </script>
    @endpush
@endsection
