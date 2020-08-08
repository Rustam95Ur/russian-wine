@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endpush
@section('content')
    @push('styles')
        <style>
            /*#cssTable {*/
            /*    margin-top: 30px;*/
            /*}*/
            /*#cssTable td*/
            /*{*/
            /*    vertical-align: middle;*/
            /*}*/

            /*.makeOrderButton {*/
            /*    width: 180px;*/
            /*    height: 40px;*/
            /*    background-color:#DA224D ;*/
            /*    color: white;*/
            /*    border-radius: 50px;*/
            /*}*/
            /*.deletefavorite {*/
            /*    border: none;*/
            /*}*/
        </style>
    @endpush
    <div id="profile">
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
                                        <td><img src="{{ asset ('image/1OLwTAcYZZn9L9hwUju2.png') }}" width="30px"
                                                 height="100px" alt=""></td>
                                        <td>
                                            {{$favorite->title}}

                                            <div style="margin-top: 8px;">
                                                <span>{{$favorite->color->title}} </span> |
                                                <span>{{$favorite->sugar->title}} </span> |
                                                <span>{{$favorite->year}}</span>
                                            </div>
                                        </td>
                                        <td>{{$favorite->price}}</td>
                                        <td>
                                            <button type="submit" class="deletefavorite" id="{{$favorite->id}}"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <input class="btn-danger" type="submit" id="submit_prog" value='Сделать заказ'/>
                        </div>
                    @else
                        <div class="mt-lg text-center">
                            <h3>В избраном пока ничего нет <br> но вы можете их добавить из винотеки</h3>
                            <a href={{route('wine-shop')}}>
                                <button class="btn-danger">Перейти в Винотеку</button>
                            </a>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function () {

                var $submit = $("#submit_prog").hide(),
                    $cbs = $('input[name="prog"]').click(function () {
                        $submit.toggle($cbs.is(":checked"));
                    });

            });
        </script>
    @endpush
@endsection
