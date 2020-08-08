$(function () {
    $('.add_to_favorite').on('click', function () {
        var wine_id = $(this).attr('id')
        $.ajax({
            url: 'add-to-favorite',
            data: {
                'wine_id': wine_id
            },
            type: 'get',
            dataType: 'json',
            success: function (response) {
                $('.like-' + wine_id).hide()
                $('.unlike-' + wine_id).show()
            },
            error: function (response) {
                //$('.errorMessage').html(response.responseJSON.message);
                if (response.status == 401) {
                    // Display Modal
                    $('#login_modal').removeClass('hide')
                }
            }
        });
    });
});


$(function () {
    $('.delete_favorite').on('click', function () {
        var wine_id = $(this).attr('id');
        $.ajax({
            url: 'delete-from-favorite',
            data: {
                'wine_id': wine_id
            },
            type: 'get',
            dataType: 'json',
            success: function (data) {
                $('.like-' + wine_id).show()
                $('.unlike-' + wine_id).hide()
                $('#fav-tr-' + wine_id).remove()
                var rowCount = $('#favorite_table tr').length;
                if(rowCount === 0 ) {
                    $('.favorite_block').hide();
                    $('#favorite_zero').show();

                }
            },
        });

    });
});

$('input[name="wines[]"]').on('click', function () {
    var checkbox_len = $('input[name="wines[]"]').filter(':checked').length;
    if (checkbox_len > 0) {
        $('#form-send-btn').show();
    } else  {
        $('#form-send-btn').hide();
    }
});
