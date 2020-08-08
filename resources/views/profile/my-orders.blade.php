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
                @include('profile.layouts.left-side-menu')
                <div class="col-md-8">
                    <div style="margin: 50px;">
                        <div style="margin: 30px;">
                            <h1>Мои заказы</h1>
                            <table class="table" id="cssTable" style="margin-top: 30px;">
                                    <tbody>
                                    @foreach($orders as $key => $order)
                                    <tr>
                                        <td><b>Заказ #{{$key + 1}}</b></td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->price}}</td>
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
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
