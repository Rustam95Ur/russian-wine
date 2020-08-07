@extends('layouts.app')
@section('body_class', 'footer-hide')
@section('content')
    <div class="container" id="checkoutpage">
        <div class="row">
            <div id="content-checkout">
                <h1>Оформление заказа</h1>
                <div class="-content">
                    <div id="checkout_form_0">
                        <div class="checkout">
                            <div class="checkout-step">
                                <div class="checkout-block" id="checkout_customer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form method="post" id="order_checkout" action="{{route('checkout_order')}}">
                                                @csrf
                                                <fieldset id="account">
                                                    <div class="form-group required">
                                                        <label class="control-label"
                                                               for="input-payment-name">Имя</label>
                                                        <input type="text" required name="name" value="" placeholder="Имя"
                                                               id="input-payment-name" class="form-control">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="control-label"
                                                               for="input-payment-email">E-Mail</label>
                                                        <input type="email" required name="email" value="" placeholder="E-Mail"
                                                               id="input-payment-email" class="form-control">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label class="control-label"
                                                               for="input-payment-phone">Телефон</label>
                                                        <input type="text" required name="phone" value="" placeholder="Телефон"
                                                               id="input-payment-phone" class="form-control">
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="checkout-confirm">
                                <div id="totalsum">Сумма к оплате<span>{{$total_price}}<i>о</i></span></div>
                                <div class="button-block buttons" id="buttons">
                                    <div class="button-left">
                                        <input type="submit" form="order_checkout" value="Оставить заявку" id="button-confirm"
                                              class="btn btn-primary">

                                    </div>
                                    <span id="agreement_checkbox">
                                    Нажимая кнопку «Заказать», вы даете согласие на обработаку персональных данных
                                </span>
                                </div>
                                <div id="subtext">
                                    <p>
                                        В соответствии с рекомендациями ФС РАР от 25.06.18 уведомляем: алкогольная
                                        продукция не продается
                                        и не доставляется в ночное время, не продается и не доставляется
                                        несовершеннолетним, не продается дистанционно, а может быть приобретена
                                        непосредственно в магазине по адресу г. Москва,
                                        ул. Расплетина, д. 21.
                                    </p>
                                    <p>
                                        ООО «Вайн Стори» ИНН 7734360271, лицензия:№ 77 РПА 0013578 от 13.12.18,
                                        Москва, улица Расплетина, д. 21, пом. V, комн. 1,2,3,5&lt;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
