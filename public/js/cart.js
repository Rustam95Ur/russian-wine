function cart_add(wine_id, qtn, type) {
    $.ajax({
        url: '/cart/add/'+  type + '/' + wine_id + '/' + qtn ,
        success: function (data) {
        },
        complete: function () {
            $('.cart-btn-' + wine_id).addClass('active');
            $('.cart-btn-'+ wine_id).text('В корзине');
            cart_table_update()
            countItem();
        }
    });
}

function countItem() {
    $.ajax({
        type: "GET",
        url: '/cart/count',
        success: function (data) {
            $('#cartCount').html(data.count);
            if (data.count === 1) {
                $('.empty_cart_block').removeClass('empty-cart');
                $('.not_empty_cart').show();
                $('.empty_cart').hide();
            }
        }
    });
}


$('.qua_plus').click(function () {
    var qua = parseInt($(this).siblings('input').val()) + 1,
        wine_id = $(this).siblings('input').attr('data-id');
    $(this).siblings('input').val(qua);
    $('.cart-btn-'+ wine_id).attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
    $(this).parent().siblings("button").attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
});
$('.qua_mins').click(function () {
    var qua = parseInt($(this).siblings('input').val()) - 1,
        wine_id = $(this).siblings('input').attr('data-id');
    if (qua > 0) {
        $(this).siblings('input').val(qua);
        $('.cart-btn-'+ wine_id).attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
        $(this).parent().siblings("button").attr("onclick", "cart_add('" + wine_id + "', '" + qua + "', 'wine'); $(this).addClass('active')");
    }



});
