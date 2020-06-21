$(document).ready(function() {
	var openPreview = function(data) {
		$('body').append('<div id="product-preview"></div>');
		$('body').addClass('nooverflow');
		$('#product-preview').html(data);
		var width = $('#product-preview > *:eq(0)').width();
		var close = $('<div class="icon-icon_x"></div>');
		close.on('click', closePreview);
		$('#product-preview').append(close);
		$('#product-preview').css({ left: width }).animate({ left: 0 });
		// $('html, body').animate({
		// 	scrollTop: $("#product-preview").offset().top
		// }, 500);
		var product_preview_wrap = $('#product-preview');
		product_preview_wrap.on('click', function(e) {
			if (e.target == product_preview_wrap[0]) {
				closePreview.call(this);
			}
		});
		$('#product-preview').on('scroll.preview', function() {
			if ($(this).scrollTop() > 800) {
				$('#product-preview .showcase').addClass('scrolled');
			} else {
				$('#product-preview .showcase').removeClass('scrolled');				
			}
		});
	};

	var closePreview = function() {
		$(this).off('click');
		$('body').removeClass('nooverflow');
		var product_preview_wrap = $('#product-preview');		
		product_preview_wrap.fadeOut(400, function() {
			product_preview_wrap.remove();
		});
		$('#product-preview').off('scroll.preview');
	};
	
	$('body').on('click', '.product_layout a.preview', function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		href += (href.indexOf('?') == -1 ? '?' : '&') + 'nowrap=1';
		$.get(href, function(data) {
			openPreview(data);
		}).error(function(err) {
			// error in ajax
		});
	});
});
