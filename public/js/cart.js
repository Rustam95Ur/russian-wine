function cart_add(wine_id, qtn) {
    $('.cart-btn-' + wine_id).addClass('active');
    $.ajax({
        url: '/cart/add/' + wine_id + '/' + qtn,
        success: function (data) {
            countItem();
        },
    });
}
function countItem() {
    $.ajax({
        type: "GET",
        url: '/cart/count',
        success: function (data) {
            $('#cartCount').html(data.count);
        }
    });
}
$('.qua_plus').click(function () {
    var qua = parseInt($(this).siblings('input').val()) + 1,
        wine_id =  $(this).siblings('input').attr('data-id');
    $(this).siblings('input').val(qua);
    $(this).parent().siblings("button").attr("onclick", "cart_add('"+ wine_id + "', '" + qua + "'); $(this).addClass('active')");
});
$('.qua_mins').click(function () {
    var qua = parseInt($(this).siblings('input').val()) - 1,
        wine_id =  $(this).siblings('input').attr('data-id');
    $(this).siblings('input').val(qua);
    $(this).parent().siblings("button").attr("onclick", "cart_add('"+ wine_id + "', '" + qua + "'); $(this).addClass('active')");

});
