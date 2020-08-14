/*  POPOVER JS*/

tippy('.tippyTooltip', {
    content(reference) {
        const id = reference.getAttribute('data-template');
        const template = document.getElementById(id);
        return template.innerHTML;
    },
    trigger: 'click',
    allowHTML: true,
    theme: 'light-border',
    interactive: true,
    hideOnClick: true,
    maxWidth: 'none',
    offset: [0, 10],
    placement: 'right',
});

$(window).on('hashchange', function () {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else {
            wine_filter_search(page);
        }
    }
});
/*  POPOVER JS END*/

$(document).ready(function () {
    $(document).on('click', '.pagination a', function (event) {
        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');

        var page = $(this).attr('href').split('page=')[1];
        var filter = $('#searching-form').serialize()
        wine_filter_search(filter, page)
    });

});

function wine_filter_search(filter, page = 1) {
    $.ajax(
        {
            url: '?' + filter + '&page=' + page,
            type: "get",
            datatype: "html"
        }).done(function (data) {
        $("#wine_list_block").empty().html(data);
        // location.hash = page;
    }).error(function (jqXHR, ajaxOptions, thrownError) {
        console.log(jqXHR)
        console.log(ajaxOptions)
        console.log(thrownError)
    });
}
function clear_filter()
{
    $("input[type=checkbox]").prop('checked', false)
    var filter = $('#searching-form').serialize()
    wine_filter_search(filter, '')
    $("input[name=title]").val('')
}

$('#search-main').on('keyup', function () {
    var filter = $('#searching-form').serialize()
    wine_filter_search(filter)
})
$(".form-check-input").change(function () {
    var filter = $('#searching-form').serialize()
    wine_filter_search(filter)
});
$("select[name='price_sort']").change(function () {
    var filter = $('#searching-form').serialize()
    wine_filter_search(filter)
});

function collapse_click(type) {
    $("#collapse-" + type).on("hide.bs.collapse", function () {
        $('#btnCollapse-' + type).html('<span>Посмотреть все</span>' +
            '<img src="/image/arrow-down.svg" alt="" class="collapseIcon">'
        )
        ;
    });
    $("#collapse-" + type).on("show.bs.collapse", function () {
        $('#btnCollapse-' + type).html('<span>Закрыть</span>' +
            '<img src="/image/arrow-up.svg" alt="" class="collapseIcon">'
        );
    });
}


$(".custom-select").each(function () {
    var classes = $(this).attr("class"),
        id = $(this).attr("id"),
        name = $(this).attr("name");
    var template = '<div class="' + classes + '">';
    template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options">';
    $(this).find("option").each(function () {
        if ($(this).attr("value")) {
            template += '<span class="custom-option" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        }
    });
    template += '</div></div>';
    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});
$(".custom-option:first-of-type").hover(function () {
    $(this).parents(".custom-options").addClass("option-hover");
}, function () {
    $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function () {
    $('html').one('click', function () {
        $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
});
$(".custom-option").on("click", function () {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
    var filter = $('#searching-form').serialize()
    wine_filter_search(filter)
});


function search(type) {
    var search_input, filter, inputs, label_text, i;
    search_input = document.getElementById("search-main-" + type);
    filter = search_input.value.toUpperCase();
    var input_type = type.replace('-mob', '')
    inputs = $('input[name="' + input_type + '[]"]').map((i, el) => $(el).val()).get();
    for (i = 0; i < inputs.length; i++) {
        label_text = $("label[for='shop-" + type + inputs[i] + "']").text()
        if (label_text.toUpperCase().indexOf(filter) > -1) {
            $("#form-" + type + "-" + inputs[i]).show()
        } else {
            $("#form-" + type + "-" + inputs[i]).hide()
        }
    }
    if (filter.length === 0) {
        $('#collapse-' + type).removeClass('show')
        $('#btnCollapse-' + type).show()
    } else {
        $('#collapse-' + type).addClass('show')
        $('#btnCollapse-' + type).hide()
    }
}
