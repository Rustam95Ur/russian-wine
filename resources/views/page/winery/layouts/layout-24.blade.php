{{ header }} 
<div class="normal_container" id="satera">
	<div class="main_bg" style="background-image: url('/image/{{ description_main_image }}'); background-size: cover;">
		<div class="container container-lg">
		<img src="/image/{{ image }}" class="logo">
			<h2 class="brand_title">{{ heading_title }}</h2>
			<p class="signature">{{ description_signature }}</p>
		</div>
	</div>
<div class="about_person">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 text_s_s first_about_text half_plus">
                {{ description_first }}
            </div>
            <div class="col-md-5 col-xs-12 half_minus">
                <img src="image/{{ description_first_image }}" class="first_image page_img" />
            </div>
            <div class="col-md-12 col-xs-12 text_mxl">
                {{ description_first_two }}
            </div>
            <div class="col-md-5 col-xs-12 half_minus">
                <img src="image/{{ description_first_image_two }}" class="second_image page_img" />
            </div>
            <div class="col-md-7 col-xs-12 half_plus about_last_text text_s_s">
                {{ description_first_three }}
            </div>
        </div>
    </div>
</div>
<div class="teruar_bg">
    <div class="container"><h2 class="teruar">Терруар</h2></div>
    <img src="image/{{ description_second_image }}" class="page_img">
    <div class="container">
        <div class="row margin_r" style="position:relative;">
            <div class="col-md-6 col-xs-12 background_purple text_s_s">
                {{ description_second }}
            </div>
            <div class="col-md-6 col-xs-12 map_cont" id="map">
            </div>
        </div>
    </div>
</div>
<div class="vinogradniki">
    <div class="container">
	<h3>Виноградники</h3>
        <div class="row">
            <div class="col-md-7 col-xs-12 half_plus">
                <img src="image/{{ description_third_image }}" class="page_img" />
                <img src="image/{{ description_third_image }}" class="abs_img page_img" />
                <div id="area_space">
                    {{ description_area }}
                </div>
            </div>
            <div class="col-md-5 col-xs-12 half_minus text_mxl pad_mxl">
                {{ description_third }}
            </div>
        </div>
		</div>
		<div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-xs-12 text_space_old">
                {{ description_third_two }}
            </div>
            <div class="col-md-7 col-xs-12 background_grey text_s_s">
                {{ description_third_three }}
            </div>
        </div>
		</div>
		<div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 spec_cont_img">
                <img src="image/{{ description_third_image_two }}" class="page_img fluid_img" />
            </div>
            <div class="col-md-12 col-xs-12 text_s_s">
                {{ description_third_four }}
            </div>
        </div>
		</div>
    </div>

<div class="vinodelnia">
    <div class="container">
	    <h3>Винодельня</h3>
        <div class="row flex_elem">
            <div class="col-md-6 col_2 half_minus text_s_s flying_cont background_purple">
                {{ description_fourth }}
            </div>
            <div class="col-md-offset-3 col_1 col-md-9 half_minus">
                 <img src="image/{{ description_fourth_image }}" class="page_img" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 half_plus">
                <img src="image/{{ description_fourth_image_two }}" class="page_img" />
            </div>
            <div class="col-md-4 col-xs-12 text_s_s half_minus">
                {{ description_fourth_two }}
            </div>
            <div class="col-md-12 col-xs-12 text_mxl">
                {{ description_fourth_three }}
            </div>
        </div>
    </div>
</div>
</div>

</div>


	
<link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen">
<script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
	 	 <div id="information-winery" class="information-winery">
	     <div id="inf_winery"><div class="winery-wines">
          <div class="col-xs-12">
            <h2>{{ description_wines_title }}</h2>              
          </div>
</div>
<div class="swiper-viewport">
  <div id="wines-carousel" class="swiper-container">
    <div class="swiper-wrapper"> 	{% for product in products %}
                    <div class="swiper-slide">
                      <div class="item-inner">
                        <div class="row">
                          <div class="col-xs-12 col-sm-4">
                            <div class="no_pad_no_act" style="padding-left: 20px; padding-top: 20px; padding-right: 20px">
                              <div class="image">
                                <div class="wine">
                                  <a href="{{ product.link }}" class="preview">
                                    <img src="/image/{{ product.image }}" class="img-responsive" />
                                  </a>
                                </div>
                              </div>
                            </div>                  
                          </div>
                          <div class="col-xs-12 col-sm-6 col-sm-offset-1 wine-description">
                            <div class="wine">
                              <h3>
                                <a href="{{ product.link }}" class="preview">
                                  {{ product.name }}
                                </a>  
                              </h3>
                            </div>
                            <div class="specs">
                              <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                  Крепость:
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                  {{ product.attributes['5'].text }}
                                </div>
                              </div>
                              {% if product.attributes['4'] %}
                              <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                  Цвет:
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                  {{ product.attributes['4'].text }}
                                </div>
                              </div>
                              {% endif %}
                              <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                  Сорт винограда:
                                </div>
                                <div class="col-xs-4 col-sm-6 sorts_of_v">
								{% if product.attributes['6'] %}
                                  <span>{{ product.attributes['6'].text }}</span>
								{% endif %}
								{% if product.attributes['18'] %}
								  <span>{{ product.attributes['18'].text }}</span>
								{% endif %}
								{% if product.attributes['19'] %}
								  <span>{{ product.attributes['19'].text }}</span>
								{% endif %}
								{% if product.attributes['20'] %}
								  <span>{{ product.attributes['20'].text }}</span>
								{% endif %}
								{% if product.attributes['21'] %}
								  <span>{{ product.attributes['21'].text }}</span>
								{% endif %}
								{% if product.attributes['22'] %}
								  <span>{{ product.attributes['22'].text }}</span>
								{% endif %}
								{% if product.attributes['23'] %}
								  <span>{{ product.attributes['23'].text }}</span>
								{% endif %}
								{% if product.attributes['24'] %}
								  <span>{{ product.attributes['24'].text }}</span>
								{% endif %}
								{% if product.attributes['25'] %}
								  <span>{{ product.attributes['25'].text }}</span>
								{% endif %}
								{% if product.attributes['26'] %}
								  <span>{{ product.attributes['26'].text }}</span>
								{% endif %}
								{% if product.attributes['27'] %}
								  <span>{{ product.attributes['27'].text }}</span>
								{% endif %}
								{% if product.attributes['28'] %}
								  <span>{{ product.attributes['28'].text }}</span>
								{% endif %}
								{% if product.attributes['35'] %}
								  <span>{{ product.attributes['35'].text }}</span>
								{% endif %}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                  Содержание сахара:
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                  {{ product.attributes['7'].text }}
                                </div>
                              </div>
                              {% if product.attributes['8'] %}
                              <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                  Год урожая:
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                  {{ product.attributes['8'].text }}
                                </div>
                              </div>
                              {% endif %}
                            </div>
                            <div class="special">
                              <p><strong>{{ text_description_production_specials }}</strong></p>
                              <p>{{ product.description_production_specials }}</p>
                            </div>
                          </div>
                        </div>
                      </div></div>
                    {% endfor %}                 
                   </div>
				     <div class="dots">
<div class="row">
                    <div class="col-md-8 col-md-offset-4 text-center">
                      <div class="carousel-indicators">
                          <div class="swiper-pagination wines-carousel"></div>
                      </div>
                    </div>
                  </div>
                </div>
  </div>

  <div class="swiper-pager">
    <div class="swiper-button-next swiper-button-white" style="right:22%; filter:brightness(100);"></div>
    <div class="swiper-button-prev swiper-button-white" style="left:22%; filter:brightness(100);"></div>
  </div>
        
		</div>
		
 <script type="text/javascript"><!--
var swiper = new Swiper('.swiper-container', {
	mode: 'horizontal',
	slidesPerView: 'auto',
	centeredSlides: true,
	center: true,
    loop: true,
	loopFillGroupWithBlank: true,
	pagination: '.wines-carousel',
	paginationClickable: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});
--></script>	   </div>

    {# content_bottom #}

    
    <script>
        var markers = [];
  
        function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: { lat: {{ coordinate_lat }}, lng: {{ coordinate_lng }} },
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
          
          (function() {
            var marker = new google.maps.Marker({
              position: { lat: {{ coordinate_lat }}, lng: {{ coordinate_lng }} },
              icon: '/catalog/view/theme/ruswine/image/map_marker.png',
              map: map
            });
            markers.push(marker);
          })();
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHQLIuJDYQmVKj24JJmBYzr46M2SJbQYU&callback=initMap&language={{ lang }}"></script>
  
  </div>
</div>
	<link href="/catalog/view/theme/ruswine/stylesheet/ipd.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

{{ footer }}