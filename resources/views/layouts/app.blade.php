<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
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
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">--}}

<!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/color1.css') }}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{asset('icon/favicon.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset('icon/favicon.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('icon/favicon.png')}}" rel="shortcut icon">
    <!-- Slider Revolution CSS Files -->
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/settings.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/layers.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('rev-slider/css/navigation.css') }}">--}}

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
{{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/rev-slider.js') }}"></script>--}}
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<script src="{{ asset('js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('swiperJs/swiper.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


<script>
    (function ($) {
        $.fn.floatLabels = function (options) {

            // Settings
            var self = this;
            var settings = $.extend({}, options);


            // Event Handlers
            function registerEventHandlers() {
                self.on('input keyup change', 'input, textarea', function () {
                    actions.swapLabels(this);
                });
            }


            // Actions
            var actions = {
                initialize: function() {
                    self.each(function () {
                        var $this = $(this);
                        var $label = $this.children('label');
                        var $field = $this.find('input,textarea').first();

                        if ($this.children().first().is('label')) {
                            $this.children().first().remove();
                            $this.append($label);
                        }

                        var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                        $label.data('placeholder-text', placeholderText);
                        $label.data('original-text', $label.text());

                        if ($field.val() == '') {
                            $field.addClass('empty')
                        }
                    });
                },
                swapLabels: function (field) {
                    var $field = $(field);
                    var $label = $(field).siblings('label').first();
                    var isEmpty = Boolean($field.val());

                    if (isEmpty) {
                        $field.removeClass('empty');
                        $label.text($label.data('original-text'));
                    }
                    else {
                        $field.addClass('empty');
                        $label.text($label.data('placeholder-text'));
                    }
                }
            }


            // Initialization
            function init() {
                registerEventHandlers();

                actions.initialize();
                self.each(function () {
                    actions.swapLabels($(this).find('input,textarea').first());
                });
            }
            init();


            return this;
        };

        $(function () {
            $('.float-label-control').floatLabels();
        });
    })(jQuery);
</script>


{{--<!-- Slider -->--}}
{{--<script src="{{ asset('rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/rev-slider.js') }}"></script>--}}
{{--<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.actions.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.carousel.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.kenburn.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.layeranimation.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.migration.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.navigation.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.parallax.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.slideanims.min.js')  }}"></script>--}}
{{--<script src="{{ asset('rev-slider/js/extensions/revolution.extension.video.min.js')  }}"></script>--}}
<script type="text/javascript">
    jQuery(".nav-folderized h5").click(function () {
        jQuery(this).parent(".nav").toggleClass("open");
    });

</script>
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


<!-- Ajax search Нужно допилить -->
<!-- Ниже пример  HTML который был -->

<!-- <ul>
    <li id="searchList"><img id="search" src="{{ asset ('image/6.png') }}" class="xs-thumb"></li>
    <li id="searchList"><img id="search" src="{{ asset ('image/6.png') }}" class="xs-thumb"></li>
    <li id="searchList"><img id="search" src="{{ asset ('image/6.png') }}" class="xs-thumb"></li>
</ul> -->
<script type="text/javascript">
    $('#search').on('keyup',function(){
        if($(this).val().length >= 3){
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'q':$value},
            success:function(data){
                res = []

                if (data.length > 0) {
                    for (var i = 0; i < 3; i++) {
                    res[i] = "<ul><li><img id='search' src='/storage/"+data[0].image+"' class='xs-thumb'>"+data[i].title+ ' ' + data[i].production_feature.substring(1,40)+ '...' + "</li></ul>"

                }

                $("#searchResult").html(res)
                } else {
                    $("#searchResult").html("<div class='col-md-12 searchError'>"+data.error+"</div>")
                }
                }

            });
        }
    })
</script>


{{--Работа с избранными--}}
<script type="text/javascript">
    $(function () {
        $('.likeSlider').on('click', function () {
            $.ajax({
                url: '{{URL::to('fav')}}',
                data: {
                    'client_id' : 1,
                    'wine_id': 1
                },
                type: 'get',
                dataType : 'json'
            });
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('.likeSlider123').on('click', function () {
            $.ajax({
                url: '{{URL::to('favdelete')}}',
                data: {
                    'client_id' : 1,
                    'wine_id': 1
                },
                type: 'get',
                dataType : 'json'
            });
        });
    });
</script>


{{--<script>--}}
{{--    setTimeout(function(){ //using setTimeout function--}}
{{--        document.getElementById('success-message').style.display ='none'; //displaying the button again after 3000ms or 3 seconds--}}
{{--    },3000);--}}
{{--</script>--}}



@include('layouts.modal')
@if ($message = Session::get('success') or $message = Session::get('error') or $message = Session::get('warning') or $message = Session::get('info') or $errors->any())
    <script>
        (function ($) {
            $(function () {
                $('#messageModal').modal('show');
                setTimeout(function () {
                    $('#messageModal').modal('hide')
                }, 5000);
            });
        })(jQuery);
    </script>
@endif
</body>
</html>
