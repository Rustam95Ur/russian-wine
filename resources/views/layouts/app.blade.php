<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{Voyager::setting('site.title')}}</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/color1.css') }}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="icon/icon.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/icon.png" rel="apple-touch-icon-precomposed">
    <link href="icon/icon.png" rel="shortcut icon">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/navigation.css') }}">

    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Custom/custom.css') }}">

    <!-- Old style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Custom/old-site.css') }}">
    @stack('styles')
</head>
<body>
<div id="loading-overlay">
    <div class="loader"></div>
</div> <!-- /.loading-overlay -->
@include('layouts.header')
@yield('content')
@include('layouts.footer')


<a id="scroll-top"><i class="fa fa-angle-right" aria-hidden="true"></i></a> <!-- /#scroll-top -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/rev-slider.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<script src="{{ asset('js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Slider -->
<script src="{{ asset('rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/rev-slider.js') }}"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.actions.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.carousel.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.kenburn.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.layeranimation.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.migration.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.navigation.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.parallax.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.slideanims.min.js')  }}"></script>
<script src="{{ asset('rev-slider/js/extensions/revolution.extension.video.min.js')  }}"></script>
@stack('scripts')
</body>
</html>
