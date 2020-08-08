@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endpush
@section('body_class', 'footer-hide')
@section('content')
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
                                    <td>
                                        <img src="{{Voyager::image($set->image)}}"
                                             alt="{{$set->title}}">
                                    </td>
                                    <td>{{$set->title}}</td>
                                    <td>{{$set->price}}</td>
                                        <td>
                                            <form action="" method="post">
                                            <input class="btn-danger" type="submit" id="submit_prog"
                                                   value='Повторить заказ'/>
                                            </form>
                                        </td>
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
