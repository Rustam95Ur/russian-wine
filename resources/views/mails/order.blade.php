<h2>Заказ на сайте.</h2>

<p><u>Данные покупателя:</u></p>

<div>
    <p><b>Имя</b> {{ $mail->name }}</p>
    <p><b>Телефон:</b> {{ $mail->phone }}</p>
    <p><b>Email:</b> {{ $mail->email }}</p>
    <p><b>Информация о заказе:</b> {!! $mail->cart_info !!}</p>
</div>
