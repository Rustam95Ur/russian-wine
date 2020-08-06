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
    $('#count-prods').text(total);
}

function increaseQty(productid) {
    $('input[name="quantity[' + productid + ']"]').val(parseInt($('input[name="quantity[' + productid + ']"]').val()) + 1);
    var prodsum = parseInt($('input[name="quantity[' + productid + ']"]').val()) * parseInt($('input[name="quantity[' + productid + ']"]').attr('data-price'));
    $('input[name="quantity[' + productid + ']"]').parent().parent().siblings('.total').html('<b>' + prodsum + '</b><span>о</span>');
    recountTotal();
};

function decreaseQty(productid) {
    $('input[name="quantity[' + productid + ']"]').val(parseInt($('input[name="quantity[' + productid + ']"]').val()) - 1);
    if (parseInt($('input[name="quantity[' + productid + ']"]').val()) > 0) {
        var prodsum = parseInt($('input[name="quantity[' + productid + ']"]').val()) * parseInt($('input[name="quantity[' + productid + ']"]').attr('data-price'));
        $('input[name="quantity[' + productid + ']"]').parent().parent().siblings('.total').html('<b>' + prodsum + '</b><span>о</span>');
    }
    recountTotal();
};

function cart_remove(wine_id, qtn) {
    $.ajax({
        url: '/cart/remove/' + wine_id + '/' + qtn,
        success: function (data) {
            $('#tr-'+ wine_id).remove()
            recountTotal();
            count_wines();
        },
    });
}
