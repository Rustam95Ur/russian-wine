$('#close-mask').click(function () {
    $('#cart-cont').removeClass('open');
    $('body').removeClass('nooverflow1');
    $('body').removeClass('nooverflow');
});

function recountTotal() {
    var sum = 0;
    $('#product_buy .total b').each(function () {
        sum = sum + parseInt($(this).text());
    })
    $('#total_price').text(sum);
};

function count_wines() {
    var total = $('#cart_table tr').length;
    if ($('#cart_table tr').length == 0) {
        $('.empty_cart').show();
        $('.empty_cart_block').addClass('empty-cart');
        $('.not_empty_cart').hide();
    }
    $('#count-prods').text(total);
}

$(document).ready(function () {
    decreaseQty()
    increaseQty()
    cart_remove()
})

function decreaseQty() {
    $('.decreaseQty').on('click', function () {
        var product_id = $(this).attr('id').replace('decrease-', ''),
            input_val = $('input[name="quantity[' + product_id + ']"]').val()
        if (input_val > 1) {
            $('input[name="quantity[' + product_id + ']"]').val(parseInt($('input[name="quantity[' + product_id + ']"]').val()) - 1);
            if (parseInt($('input[name="quantity[' + product_id + ']"]').val()) > 0) {
                var prodsum = parseInt($('input[name="quantity[' + product_id + ']"]').val()) * parseInt($('input[name="quantity[' + product_id + ']"]').attr('data-price'));
                $('input[name="quantity[' + product_id + ']"]').parent().parent().siblings('.total').html('<b>' + prodsum + '</b><span>о</span>');
            }
        }
        recountTotal();

    })

}

function increaseQty() {
    $('.increaseQty').on('click', function () {
        var product_id = $(this).attr('id').replace('increase-', '');
        console.log(product_id)
        $('input[name="quantity[' + product_id + ']"]').val(parseInt($('input[name="quantity[' + product_id + ']"]').val()) + 1);
        var prodsum = parseInt($('input[name="quantity[' + product_id + ']"]').val()) * parseInt($('input[name="quantity[' + product_id + ']"]').attr('data-price'));
        $('input[name="quantity[' + product_id + ']"]').parent().parent().siblings('.total').html('<b>' + prodsum + '</b><span>о</span>');
        recountTotal();

    })

}
function cart_remove()
{
    $('.cart_remove').on('click', function () {
        var wine_id = $(this).attr('id').replace('cart-wine-remove-', '');
        $.ajax({
            url: '/cart/remove/' + wine_id + '/' + 0,
            success: function (data) {
                $('#tr-' + wine_id).remove()
                recountTotal();
                count_wines();
                countItem();
            },
        });
    })
}


function cart_table_update() {
    $.ajax({
            type: "GET",
            url: '/cart/get-wines',
            success: function (data) {
                document.getElementById("product_buy").innerHTML = "";
                $.each(data.wines, function (key, value) {
                    $("#product_buy").append("<tr id='tr-" + value['wine_id'] + "'><td class='image'>\n" +
                        "<a><img src='" + value['image'] + "' alt='" + value['title'] + "' title='" + value['title'] + "' " +
                        "style='width: 40%'></a></td><td class='name'><a>" + value['title'] + "</a>" + value['price'] +
                        "<span>п</span><div class='options'></div></td><td class='quantity'>" +
                        "<div class='input-group btn-block' style='max-width: 200px;'><span class='input-group-btn cheight'>\n" +
                        "<button class='btn btn-primary decreaseQty' id='decrease-" + value['wine_id'] + "' data-toggle='tooltip' " +
                        "type='submit' data-original-title='' title=''><i class='fa fa-minus'></i></button></span>\n" +
                        "<input class='form-control cheight' data-price='" + value['price'] +  "' type='text' data-onchange='changeProductQuantity' " +
                        "name='quantity[" + value['wine_id'] + "]' value='" + value['count'] +  "' size='1'>\n" +
                        "<span class='input-group-btn cheight'><button class='btn btn-primary increaseQty' id='increase-" + value['wine_id'] + "' " +
                        "data-toggle='tooltip' type='submit' data-original-title='' title=''><i class='fa fa-plus'></i>\n" +
                        "</button></span></div></td><td class='total'><b>" + value['total'] + "</b>\n" +
                        "<span>о</span></td><td class='remove'><button class='btn btn-danger cart_remove' " +
                        "id='cart-wine-remove-" + value['wine_id'] + "' title='Удалить'><i class='fa fa-times-circle'></i>\n" +
                        "</button></td></tr>")
                })
                $('#total_price').text(data.total_sum);
                $('#count-prods').text(data.total_sum);
                decreaseQty()
                increaseQty()
                cart_remove()
            }
        }
    )
    ;
}



