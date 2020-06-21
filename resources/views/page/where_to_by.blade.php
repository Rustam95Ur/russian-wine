@extends('layouts.app')
@section('title', 'Где купить российское вино, магазин русское вино, винный магазин Русское Вино')
@section('description', '')
@section('keywords', '')
@section('content')
    <div id="wheretobuy">
        <div id="content">
            <div class="heading-wrap">
                <div class="container container-lg">
                    <div class="row">
                        <div class="hidden-xs hidden-sm col-md-5 col-lg-4">
                            <h1 class="title">Где купить</h1>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-8">
                            <input class="form-control search pac-target-input" type="text" placeholder="ВАШ ГОРОД"
                                   autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-wrap">
                <div class="row no-gutters row-eq-height">
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-3">
                        <div class="addresses" style="max-height: 680px;">
                            <div class="address selected" data-index="1">
                                <h2>Русское Вино (Salon del Vino)</h2>
                                <p>
                                    <span class="icon-wrap">
                                        <img src="{{asset('image/address_marker.png')}}"></span>
                                    г. Москва, ул. Расплетина, д. 21</p>
                                <p>
                                    <span class="icon-wrap">
                                        <img src="{{asset('image/address_phone.png')}}"></span>
                                    +7 915 457 60 81
                                </p>
                                <p>
                                    <span class="icon-wrap">
                                        <img src="{{asset('image/address_time.png')}}">
                                    </span>
                                    с 11:00 до 22:00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
                        <div id="map"></div>
                    </div>
                </div>
            </div>


            <script>
                var markers = [];

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 10.3,
                        center: {lat: 55.8410561, lng: 46.8521622},
                        styles: [
                            {
                                "featureType": "all",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#333333"
                                    },
                                    {
                                        "lightness": 40
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "all",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 17
                                    },
                                    {
                                        "weight": 1.2
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 20
                                    },
                                    {
                                        "gamma": "0.61"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ebebeb"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 29
                                    },
                                    {
                                        "weight": 0.2
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 18
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "gamma": "1"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    },
                                    {
                                        "lightness": 19
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#e1e1e1"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            }
                        ]
                    });

                    (function () {
                        var marker = new google.maps.Marker({
                            position: {lat: 55.798257, lng: 37.481990},
                            icon: '/catalog/view/theme/ruswine/image/map_marker_wine.png',
                            map: map
                        });
                        var infowindow = new google.maps.InfoWindow({
                            content: '<div class="address">' +
                                '<h2>Русское Вино (Salon del Vino)</h2>' +
                                '<p><span class="icon-wrap"><img src="/catalog/view/theme/ruswine/image/address_marker.png" /></span> г. Москва, ул. Расплетина, д. 21</p>' +
                                '<p><span class="icon-wrap"><img src="/catalog/view/theme/ruswine/image/address_phone.png" /></span> +7 915 457 60 81</p>' +
                                '<p><span class="icon-wrap"><img src="/catalog/view/theme/ruswine/image/address_time.png" /></span> с 11:00 до 22:00</p>' +
                                '</div>'
                        });
                        markers.push(marker);
                        marker.addListener('click', function () {
                            infowindow.open(map, marker);
                            $('.addresses .address[data-index="1"]').click();
                        });
                    })();
                    var addresses = $('.addresses .address');
                    var activemarker = null;
                    addresses.on('click', function () {
                        addresses.removeClass('selected');
                        $(this).addClass('selected');
                        if (activemarker) {
                            activemarker.setIcon('/catalog/view/theme/ruswine/image/map_marker_wine.png');
                        }
                        activemarker = markers[$(this).attr('data-index') - 1];
                        activemarker.setIcon('/catalog/view/theme/ruswine/image/map_marker_wine_active.png');
                        map.panTo(activemarker.getPosition());
                    });
                    // first active
                    if (markers.length) {
                        $('.addresses .address[data-index="1"]').click();
                    }
                    // box heights
                    $(window).on('resize', function () {
                        var max = $(window).height() - $('header').height();
                        $('.addresses').css('max-height', max);
                        if ($(window).width() < 767) {
                            $('#map').css('min-height', max);
                        } else {
                            $('#map').css('min-height', 300);
                        }
                    }).trigger('resize');
                    // autocomplete
                    var autocomplete = new google.maps.places.Autocomplete($('#wheretobuy .search')[0]);
                    autocomplete.addListener('place_changed', function () {
                        var place = autocomplete.getPlace();
                        if (!place.geometry) {
                            return false;
                        }
                        map.panTo(place.geometry.location);
                    });
                }
            </script>
            <script async="" defer=""
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHQLIuJDYQmVKj24JJmBYzr46M2SJbQYU&amp;callback=initMap&amp;libraries=places&amp;language=ru"></script>

        </div>
    </div>
@endsection
