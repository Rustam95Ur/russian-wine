function qua_plus(wine_id) {
    var qua = parseInt($('#wine-' + wine_id).val()) + 1
    $('#wine-' + wine_id).val(qua)
    $('.cart-btn-' + wine_id).attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
}

function qua_mins(wine_id) {
    var qua = parseInt($('#wine-' + wine_id).val()) - 1
    if (qua > 0) {
        $('#wine-' + wine_id).val(qua)
        $('.cart-btn-' + wine_id).attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
    }
}

function cart_add(wine_id, qtn, type) {
    $.ajax({
        url: '/cart/add/' + type + '/' + wine_id + '/' + qtn,
        success: function (data) {
        },
        complete: function () {
            $('.cart-btn-' + wine_id).addClass('active');
            $('.cart-btn-' + wine_id).text('В корзине');
            cart_table_update()
            countItem();
        }
    });
}
