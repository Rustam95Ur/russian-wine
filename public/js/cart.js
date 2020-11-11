function qua_plus(wine_id) {
    var qua = parseInt($('#wine-' + wine_id).val()) + 1
    var price = $('.wine_price').val()
    $('.wine_show_price').html(price*qua + ' <span class="currency">п</span>')
    $('#wine-' + wine_id).val(qua)
    $('.cart-btn-' + wine_id).attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
}

function qua_mins(wine_id) {
    var qua = parseInt($('#wine-' + wine_id).val()) - 1
    if (qua > 0) {
        var price = $('.wine_price').val()
        $('.wine_show_price').html(price*qua + ' <span class="currency">п</span>')
        $('#wine-' + wine_id).val(qua)
        $('.cart-btn-' + wine_id).attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
    }
}

function cart_add(wine_id, qtn, type) {
    var wine_btn = $('.cart-btn-' + wine_id)
    $.ajax({
        url: '/cart/add/' + type + '/' + wine_id + '/' + qtn,
        success: function (data) {
        },
        complete: function () {
            wine_btn.addClass('active');
            wine_btn.text('В корзине');
            setTimeout(function () {
                wine_btn.removeClass('active');
                wine_btn.text('В корзину');
            }, 1500);
            cart_table_update()
            countItem();
        }
    });
}
