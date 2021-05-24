@extends('layouts.app')
@section('body_class', 'footer-hide')
@section('content')
    <div class="container" id="checkoutpage">
        <div class="row">
            <div id="content-checkout">
                <h1>Обновления пароля</h1>
                <div class="-content">
                    <div id="checkout_form_0">
                        <div class="checkout">
                            <div class="checkout-step">
                                <div class="checkout-block" id="checkout_customer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form method="post" id="order_checkout"
                                                  action="{{route('password.update')}}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">
                                                <fieldset id="account">
                                                    <div class="form-group required">
                                                        <label class="control-label"
                                                               for="email">E-Mail</label>
                                                        <input id="email" type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email" value="{{ $email ?? old('email') }}"
                                                               required autocomplete="email" autofocus>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="password"
                                                               class="control-label">Новый пароль</label>
                                                            <input id="password" type="password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   name="password" required autocomplete="new-password"
                                                                   placeholder="Новый пароль">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group required">

                                                        <label for="password-confirm"
                                                               class="control-label">Подтвердить Пароль</label>
                                                            <input id="password-confirm" type="password"
                                                                   class="form-control" name="password_confirmation"
                                                                   required autocomplete="new-password"
                                                                   placeholder="Подтвердить Пароль">
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="checkout-confirm">
                                <div class="button-block buttons" id="buttons">
                                    <div class="button-left">
                                        <input type="submit" form="order_checkout" value="Обновить"
                                               id="button-confirm"
                                               class="btn btn-primary">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
