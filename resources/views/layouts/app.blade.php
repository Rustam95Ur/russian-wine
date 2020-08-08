<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title', Voyager::setting('site.title'))</title>
    <meta name="description" content="@yield('description', Voyager::setting('site.description'))">
    <meta name="keywords" content="@yield('keywords', Voyager::setting('site.keywords'))"/>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Owl carousel  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Swiper.js  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('swiperJs/swiper.min.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/color1.css') }}" id="colors">
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>
    <!-- Favicon and touch icons  -->
    <link href="{{asset('icon/favicon.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset('icon/favicon.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('icon/favicon.png')}}" rel="shortcut icon">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Custom/custom.css') }}">
    <!-- Old style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Custom/old-site.css') }}">
    @stack('styles')
</head>
<body class="@yield('body_class', '')">
<div id="loading-overlay">
    <div class="loader"></div>
</div>
<!-- /.loading-overlay -->
@include('layouts.header')
@yield('content')
@include('layouts.footer')

{{--<a id="scroll-top"><i class="fa fa-angle-right" aria-hidden="true"></i></a> <!-- /#scroll-top -->--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<script src="{{ asset('js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('swiperJs/swiper.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/header_cart.js') }}"></script>


@stack('scripts')
<script>
    @php
        $route = Request::route()->getName();
    @endphp
    @if($route == 'home' or $route == 'tastings' or $route == 'sets' )
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        //>=, not <=
        if (scroll <= 300) {
            //clearHeader, not clearheader - caps H
            $("#head_f").removeClass("darkHeader");
        }
        if (scroll >= 300) {
            //clearHeader, not clearheader - caps H
            $("#head_f").addClass("darkHeader");
        }
    });
    @else
    $('#head_f').addClass("darkHeader")
    @endif
</script>


<script type="text/javascript">
    $('#search').on('keyup', function () {
        if ($(this).val().length >= 3) {
            var value = $(this).val();
            $(".allResults").attr("href", "{{route('wine-shop')}}?title=" + value)
            $.ajax({
                type: 'get',
                url: '{{URL::to('search')}}',
                data: {'title': value},
                success: function (data) {
                    var res = []
                    if (data.length > 0) {
                        for (var i = 0; i < 3; i++) {
                            var wine_desc = ((data[i].production_feature.substring(1, 40)).replace('p>', '')).replace('</p>', '')
                            res[i] = "<ul><li><a class='text-danger' href='/wine/" + data[i].slug + "'><img id='search' src='/storage/" + data[i].image + "' class='xs-thumb'>" + data[i].title + ' ' + wine_desc + '...' + "</a></li></ul>"
                        }
                        $("#searchResult").html(res)
                    } else {
                        $("#searchResult").html("<div class='col-md-12 searchError'>" + data.error + "</div>")
                    }
                }

            });
        }
    })
</script>
<script>
    function login_modal() {
        $('.auth_register_modal').addClass('hide')
        $('#login_modal').removeClass('hide')
    }

    function register_modal() {
        $('.auth_register_modal').addClass('hide')
        $('#register_modal').removeClass('hide')
    }

    function close_modal() {
        $('.auth_register_modal').addClass('hide')
    }
</script>


@include('layouts.modal')
@if ($message = Session::get('success') or $message = Session::get('error') or $message = Session::get('warning') or $message = Session::get('info') or $errors->any())
    <script>
        (function ($) {
            $(function () {
                $('#messageModal').removeClass('hide');
                setTimeout(function () {
                    $('#messageModal').addClass('hide')
                }, 5000);
            });
        })(jQuery);
    </script>
@endif
</body>
</html>
