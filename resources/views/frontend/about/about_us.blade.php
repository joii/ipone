@extends('frontend.main_master')
@section('title')
About Us | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner " >
    <div class="title-rotate d-none d-lg-block white wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; margin-top:20px;">
        <span class="group" style="margin-top:100px;">    
        <span>A<br>B<br>O<br>U<br>T<br><br>  U<br>S</span>
        </span>

    </div>
    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-1920x820--1.jpg')}}" alt="IP ONE">
</div>
<!--section-banner-->

<script>
    $(window).on("load", function() {
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

    
</script>
@endsection    