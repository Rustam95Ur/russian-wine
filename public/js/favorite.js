$('input[name="wines[]"]').on('click', function () {
    var checkbox_len = $('input[name="wines[]"]').filter(':checked').length;
    if (checkbox_len > 0) {
        $('#form-send-btn').show();
    } else {
        $('#form-send-btn').hide();
    }
});

function add_delete_favorite(wine_id, type) {
    var ajax_url = '/profile/add-to-favorite';
    if (type === 'delete') {
        ajax_url = '/profile/delete-from-favorite';
    }
    $.ajax({
        url: ajax_url,
        data: {
            'wine_id': wine_id
        },
        type: 'get',
        dataType: 'json',
        success: function (response) {
            if (type === 'delete') {
                $('.like-' + wine_id).show()
                $('.unlike-' + wine_id).hide()
                $('#fav-tr-' + wine_id).remove()
            } else {
                $('.like-' + wine_id).hide()
                $('.unlike-' + wine_id).show()
            }
        },
        complete: function () {
            if (type === 'delete') {
                var rowCount = $('#favorite_table tr').length;
                if (rowCount === 0) {
                    $('.favorite_block').hide();
                    $('#favorite_zero').show();

                }
                $('#favorite_count').text(rowCount);
            }
        },
        error: function (response) {
            //$('.errorMessage').html(response.responseJSON.message);
            if (response.status == 401) {
                // Display Modal
                $('#login_modal').removeClass('hide')
            }
        }
    });
}
