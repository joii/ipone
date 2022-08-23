@extends('frontend.main_master')
@section('title')
International Business | I.P. ONE
@endsection
@section('content')
<link href="{{ asset('frontend/css/gmap.css')}}" rel="stylesheet">
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>


<div class="section section-banner" style="margin-top:-20px;">
    <div class="title-rotate d-none d-lg-block white wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; margin-top:20px;">
        <span class="group" style="margin-top:100px;">    
            <span>I<br>N<br>T<br>E<br>R<br><br>B<br>U<br>S<br>I<br>N<br>E<br>S<br>S</span>
        </span>
    </div>
    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-1920x790--2.jpg')}}" alt="IP ONE">

</div>
<!--section-banner-->

<div class="section section-contact interbiz">
    <div class="container-fluid">
        <div class="section-title wow fadeIn">
            <h2 class="title-lg d-flex">
                @if(session()->get('language') == 'thai') 
                <span>ธุรกิจระหว่างประเทศ</span>
                @elseif(session()->get('language') == 'english') 
                <span>International Business</span>
                @elseif(session()->get('language') == 'chinese') 
                <span>国际贸易</span>
                @endif
                <span class="icons icon-airplane"></span></h2>
        </div>
        <div class="intermap wow fadeIn">
            @foreach ($locations as $location)
            
            <div class="marker" data-lat="{{ $location->latitude}}" data-lng="{{ $location->longitude}}" data-pin="{{ asset($location->bl_marker)}}">
                <div class="map-info">
                    <img class="flag" src="{{ asset($location->bl_flag)}}" alt="IP ONE">
                    <div>
                        <h5>
                        @if(session()->get('language') == 'thai')     
                        {{ $location->bl_name_th }}
                        @elseif(session()->get('language') == 'english') 
                        {{ $location->bl_name_en }}
                        @elseif(session()->get('language') == 'chinese') 
                        {{ $location->bl_name_ch }}
                        @endif


                        </h5>
                        <p><span class="icons icon-phone"></span>{{ $location->bl_phone }}</p>
                        <p><span class="icons icon-email"></span>
                            <a href="mailto:{{ $location->email }}">{{ $location->bl_email }}</a>
                        </p>
                    </div>
                </div>

            </div>
            <!--marker-->

            @endforeach

        </div>
        <!--acf-map-->

    </div>
    <!--container-fluid-->

    <div class="interbiz-images wow fadeIn ">
        <img class="heart " src="{{ asset('frontend/img/thumb/heart.svg')}}" alt="IP ONE ">
        <img class="text " src="{{ asset('frontend/img/thumb/interbiz-text.png')}}" alt="IP ONE ">
    </div>
</div>
<!--section-contact-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initialise"></script>

<script>
    $(window).on("load ", function() {
        skrollr.init({
            smoothScrolling: true,
            smoothScrollingDuration: 400,
            mobileDeceleration: 0,
            forceHeight: false,
            mobileCheck: function() {
                return false;
            }
        });
    });

    ///////////// Map //////////////

    (function($) {

        var global_markers = [];
        var global_infowindows = [];


        function new_map($el) {

            // var
            var $markers = $el.find('.marker');


            // vars
            var args = {
                zoom: 10,
                center: new google.maps.LatLng(0, 0),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };


            // create map	        	
            var map = new google.maps.Map($el[0], args);


            // add a markers reference
            map.markers = [];


            // add markers
            $markers.each(function() {

                add_marker($(this), map);

            });


            // center map
            center_map(map);

            // Toggles between infowindows
            for (var i = 0; i < global_markers.length; i++) {
                (function(i) {
                    google.maps.event.addListener(global_markers[i], 'click', function() {
                        closeInfowindows();
                        global_infowindows[i].open(map, global_markers[i]);
                    });
                }(i));
            }

            // return
            return map;

        }



        function add_marker($marker, map) {

            // var
            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

            var icon = {
                url: $marker.attr('data-pin'),
                scaledSize: new google.maps.Size(60, 83), // size
            };


            // create marker
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: icon,

            });

            // add to array
            map.markers.push(marker);
            global_markers.push(marker);

            // if marker contains HTML, add it to an infoWindow
            if ($marker.html()) {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                global_infowindows.push(infowindow);


            }

        }


        function center_map(map) {

            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            $.each(map.markers, function(i, marker) {

                var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

                bounds.extend(latlng);

            });

            // only 1 marker?
            if (map.markers.length == 1) {
                // set center of map
                map.setCenter(bounds.getCenter());
                map.setZoom(10);
            } else {
                // fit to bounds
                map.fitBounds(bounds);
            }

        }

        // Close infowindow function
        function closeInfowindows() {
            for (var x = 0; x < global_infowindows.length; x++) {
                global_infowindows[x].close();
            }
        }


        // global var
        var map = null;

        $(document).ready(function() {

            $('.intermap').each(function() {
                // create map
                map = new_map($(this));

            });
        });

    })(jQuery);
</script>
@endsection    