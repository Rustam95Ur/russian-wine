@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endpush
@section('body_class', 'footer-hide')
@section('content')
    <div id="profile">
        <div id="content">
            <div class="row">
                @include('profile.layouts.left-side-menu')
                @if(count($orders) > 0)
                    <div class="col-md-8">
                        <div class="order-table-block">
                            <h1>Мои заказы</h1>
                            <table class="table" id="order_table">
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td><b>Заказ #{{ $order['id'] }}</b></td>
                                        <td>{{$order['date_created']}}</td>
                                        <td>
                                            <b>{{$order['total_price']}}</b>
                                            <span class="currency">о</span>
                                        </td>
                                        <td>
                                            <button type="submit" class="show-details">
                                                <i class="fa fa-align-justify" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="mt-lg text-center">
                        <h3>Вы не сделали ни одного заказа</h3>
                        <a href={{route('wine-shop')}}>
                            <button class="btn-danger">Перейти в Винотеку</button>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
