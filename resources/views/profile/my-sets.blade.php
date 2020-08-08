@extends('layouts.app')
@section('content')

    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/profile-personal-info-form.css') }}">
        <style>
            .rowlist{
                margin-top: 10px;
            }
            ul{
                list-style: none;
                color:white;
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

            .reorder {
                font-size: 15px;
                width: 180px;
                height: 40px;
                background-color:#DA224D ;
                color: white;
                border-radius: 50px;
            }

        </style>
    @endpush
    <div id="franchise">
        <div id="content">
            <div class="row">
                @include('profile.layouts.left-side-menu')
                <div class="col-md-8">
                    <div style="margin: 30px;">
                        <h1>Сеты</h1>
                        <table class="table" id="cssTable">
                                <tbody>
                                @foreach($sets as $set)
                                <tr>
                                    <td><img src="{{$set->image}}" width="30px" height="100px" alt=""></td>
                                    <td>{{$set->title}}</td>
                                    <td>{{$set->price}}</td>
                                    <form action="" method="GET">
                                        <td><input class="reorder" type="submit" id="submit_prog" value='Повторить заказ' /></td>
                                    </form>

                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
