@extends('layouts.app')
@section('content')

    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/profile-personal-info-form.css') }}">
    @endpush

    <div id="franchise">
        <div id="content">
            <div class="row">
                @include('page.profile.layouts.left-side-menu')
                <div class="col-md-8">
                    <div style="color: grey !important; margin: 50px;">
                        <h1>Персональные данные</h1>
                        <div class="row" style="margin-top: 30px">
                            <form role="form" method="POST" action="{{route('profile-update')}}">
                            <div class="col-sm-5">
                                @csrf
                                    <div class="form-group float-label-control">
                                        <label for="">Имя</label>
                                        <input type="text" class="form-control prof" name="first_name" placeholder="Имя" value="{{Auth::user()->first_name}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Фамилия</label>
                                        <input type="text" class="form-control prof" name="last_name" placeholder="Фамилия" value="{{Auth::user()->last_name}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control prof" name="email" placeholder="Email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Телефон</label>
                                        <input type="text" class="form-control prof" name="phone" placeholder="Телефон" value="{{Auth::user()->phone}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Дата рождения</label>
                                        <input type="text" class="form-control prof" name="birth_date" onfocus="(this.type='date')" placeholder="Дата рождения" value="{{Auth::user()->birth_date}}">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <button type="submit" class="saveProfile">Сохранить</button>
                                    </div>

                                <div class="form-group float-label-control" id="success-message">
                                    {{$success ?? ''}}
                                </div>
                            </div>

                            <div class="col-sm-5" style="margin-left: 80px;">

                                    <h3 class="changePass">Изменить пароль</h3>
                                    <div class="form-group float-label-control">
                                        <label for="">Старый пароль</label>
                                        <input type="password" name="oldpassword prof" class="form-control" placeholder="Старый пароль">
                                    </div>
                                    <div class="form-group float-label-control">
                                        <label for="">Новый пароль</label>
                                        <input type="password" name="newpassword prof" class="form-control" placeholder="Новый пароль">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/profile-input-animation.js') }}"></script>
    @endpush

@endsection