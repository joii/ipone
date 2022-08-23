@extends('frontend.main_master')
@section('title')
Whiz | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner whiz wow fadeIn" data-bg="header-trans-black">
    <img class="w-100" src="{{asset('frontend/img/thumb/whiz/banner.jpg')}}" alt="Whiz">

    <div class="banner-caption whiz">
        <div class="caption wow fadeInUp">
            <div class="logo">
                <img class="w-100" src="{{asset('frontend/img/thumb/whiz/logo.png')}}" alt="Whiz">
            </div>
            <h2>วิซ เติมเต็มความสุข ในบ้าน</h2>
            <p>WHIZ YOU A HAPPY HOME</p>
        </div>
        <!--caption-->
    </div>
    <!--banner-caption-->
</div>
<!--section-->

<div id="s_video" class="section section-whiz video" data-bg="header-white">
    <div class="container">

        <div class="swiper-overflow video wow fadeInUp">
            <div class="icons icon-star wow fadeInUp"></div>
            <div class="icons icon-flower  wow fadeInUp"></div>

            <div class="swiper-container swiper-video">
                <div class="swiper-wrapper" style="height:auto;">
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/OfFWMqqJX-Q" title="Whiz" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>


                </div>
                <!--swiper-wrapper-->
            </div>
            <!--swiper-container-->

            <div class="swiper-pagination video"></div>
            <div class="swiper-button swiper-button-prev video normal white"></div>
            <div class="swiper-button swiper-button-next video normal white"></div>

        </div>
        <!--swiper-overflow-->
        <p style="height:30px;"></p>
        <div class="article whiz wow fadeInUp">
            @if(session()->get('language') == 'thai')
            <p>“ วิซ ” ผลิตภัณฑ์ทำความสะอาดพื้นผิวในบ้าน ที่มีประสิทธิภาพการทำความสะอาดที่หมดจด<br class="d-none d-lg-block"> จึงเป็นจุดเริ่มต้นของ “วิซ” ที่ตอบโจทย์การทำความสะอาดได้หลายพื้นผิวภายในบ้าน<br> นอกจากเรื่องประสิทธิภาพทำความสะอาดแล้วยังมีกลิ่นหอมสบาย
                <br class="d-none d-md-block"> เป็นมิตรกับทุกคนในครอบครัว เสริมบรรยากาศให้บ้านสดชื่น น่าอยู่ มีชีวิตชีวา</p>
            @else
            <p>“ วิซ ” ผลิตภัณฑ์ทำความสะอาดพื้นผิวในบ้าน ที่มีประสิทธิภาพการทำความสะอาดที่หมดจด<br class="d-none d-lg-block"> จึงเป็นจุดเริ่มต้นของ “วิซ” ที่ตอบโจทย์การทำความสะอาดได้หลายพื้นผิวภายในบ้าน<br> นอกจากเรื่องประสิทธิภาพทำความสะอาดแล้วยังมีกลิ่นหอมสบาย
                <br class="d-none d-md-block"> เป็นมิตรกับทุกคนในครอบครัว เสริมบรรยากาศให้บ้านสดชื่น น่าอยู่ มีชีวิตชีวา</p>
            @endif
        </div>
    </div>
    <!--container-->
</div>

<div class="section section-whiz brands" data-bg="header-white">
    <div class="row">
        <div class="col-lg-5 d-flex">
            <div class="brands-images whiz1">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz1/product.png')}}" alt="Whiz">
                </div>

                <div class="bg">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz1/bg.png')}}" alt="Whiz">
                </div>
                <div class="star-flower" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz1/star-flower.svg')}}" alt="Whiz">
                </div>

                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/whiz/shadow.png')}}" alt="Whiz">
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="article whiz1 wow fadeInUp">
                <h4 class="pink">
                    @if(session()->get('language') == 'thai')
                    ผลิตภัณฑ์ทำความสะอาดพื้นสูตรเข้มข้นหอมยาวนาน<br class="d-none d-md-block d-lg-none"> ผลิตภัณฑ์ทำความสะอาดพื้นสูตรฆ่าเชื้อ
                    @else
                    ผลิตภัณฑ์ทำความสะอาดพื้นสูตรเข้มข้นหอมยาวนาน<br class="d-none d-md-block d-lg-none"> ผลิตภัณฑ์ทำความสะอาดพื้นสูตรฆ่าเชื้อ
                    @endif
                </h4>
                <h3>WHIZ</h3>
                <p class="mb-2">
                    @if(session()->get('language') == 'thai')
                    <strong>พื้นสะอาด แห้งเร็ว หอมยาวนาน</strong><br>
                    <strong>พร้อมทำความสะอาดและฆ่าเชื้อโรค</strong>
                    @else
                    <strong>พื้นสะอาด แห้งเร็ว หอมยาวนาน</strong><br>
                    <strong>พร้อมทำความสะอาดและฆ่าเชื้อโรค</strong>
                    @endif
                </p>
                <p>
                    @if(session()->get('language') == 'thai')
                    ให้กลิ่นหอมฟุ้งทันทีที่ถู กระจายความหอมยาวนาน ขจัดกลิ่นไม่พึงประสงค์ และช่วยขจัดคราบ ดักจับฝุ่น ทำความสะอาดได้อย่างหมดจด ใช้ได้กับทุกพื้นผิว นอกจากนี้ยัง แห้งเร็ว ไม่เหนียวเท้า พร้อมสูตรฆ่าเชื้อแบคทีเรีย เพื่อสุขอนามัยที่ดีของทุกคนในบ้าน
                    @else
                    ให้กลิ่นหอมฟุ้งทันทีที่ถู กระจายความหอมยาวนาน ขจัดกลิ่นไม่พึงประสงค์ และช่วยขจัดคราบ ดักจับฝุ่น ทำความสะอาดได้อย่างหมดจด ใช้ได้กับทุกพื้นผิว นอกจากนี้ยัง แห้งเร็ว ไม่เหนียวเท้า พร้อมสูตรฆ่าเชื้อแบคทีเรีย เพื่อสุขอนามัยที่ดีของทุกคนในบ้าน
                    @endif
                </p>

                <div class="buttons">
                    <a class="btn pink" href="#">
                        @if(session()->get('language') == 'thai')
                        <span>ดูรายละเอียด</span>
                        @else
                        <span>READ MORE</span>
                        @endif
                    </a>
                </div>
            </div>
        </div>
        <!--col-md-6-->
    </div>
    <!--row-->
</div>
<!--section-whiz-->

<div class="section section-whiz brands whiz2" data-bg="header-white">
    <div class="article left whiz2 wow fadeInUp">
        <h3 class="bluelight mb-2">ผลิตภัณฑ์เช็ดกระจก</h3>
        <h4>WHIZ NO DUST</h4>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto center">
            <div class="brands-images whiz2">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz2/product.png')}}" alt="Whiz">
                </div>
                <div class="mirror">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz2/mirror.png')}}'" alt="Whiz">
                </div>
                <div class="bg" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz2/bg.svg')}}" alt="Whiz">
                </div>
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/whiz/shadow.png')}}" alt="Whiz">
                </div>
            </div>
        </div>
    </div>
    <!--row-->

    <div class="article whiz2 right wow fadeInUp">
        <div class="hgroup d-block d-lg-none">
            <h3 class="bluelight mb-2">ผลิตภัณฑ์เช็ดกระจก</h3>
            <h4>WHIZ NO DUST</h4>
        </div>

        <p class="mb-2">
            @if(session()->get('language') == 'thai')
            <strong>สะอาดใส ใช้ได้หลายพื้นผิว</strong><br> ให้กระจกสะอาดใส เงาวับ ขจัดคราบฝุ่นละออง<br class="d-none d-xl-block"> คราบมันและคราบสกปรกต่าง ๆ ได้เป็นอย่างดี<br class="d-none d-xl-block"> ไร้สารแอมโมเนีย ทำให้กลิ่นไม่ฉุน<br class="d-none d-xl-block">                        ให้บ้านสะอาดใสไร้ฝุ่นกวนใจ
            @else
            <strong>สะอาดใส ใช้ได้หลายพื้นผิว</strong><br> ให้กระจกสะอาดใส เงาวับ ขจัดคราบฝุ่นละออง<br class="d-none d-xl-block"> คราบมันและคราบสกปรกต่าง ๆ ได้เป็นอย่างดี<br class="d-none d-xl-block"> ไร้สารแอมโมเนีย ทำให้กลิ่นไม่ฉุน<br class="d-none d-xl-block">   
            @endif
        </p>
        <div class="buttons">
            <a class="btn bluelight" href="#">
                @if(session()->get('language') == 'thai')
                <span>ดูรายละเอียด</span>
                @else
                <span>READ MORE</span>
                @endif
            </a>
        </div>
    </div>
</div>
<!--section-whiz-->

<div class="section section-whiz whiz3 brands" data-bg="header-white">
    <div class="row flex-row-reverse ">
        <div class="col-lg-6">
            <div class="brands-images whiz3">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz3/product.png')}}" alt="Whiz">
                </div>

                <div class="bg" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz3/bg.svg')}}" alt="Whiz">
                </div>
                <div class="door">
                    <img src="{{asset('frontend/img/thumb/whiz/whiz3/door.png')}}" alt="Whiz">
                </div>

                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/whiz/shadow.png')}}" alt="Whiz">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="article whiz3 wow fadeInUp">
                <h3 class="blue mb-2">วิช สเปรย์ฆ่าเชื้อ<br>พื้นผิวอเนกประสงค์</h3>
                <h4 class="pb-2">WHIZ MULTI SURFACE <br>DISINFECTANT SPRAY</h4>
                <p class="mb-2">
                    @if(session()->get('language') == 'thai')
                    <strong>มอบประสิทธิภาพในการฆ่าเชื้อ <span class="nowrap">และทำความสะอาดได้หลายพื้นผิว  </span>
                    </strong> <br> ทั้งพื้น ฝาผนัง โต๊ะ ลูกบิด มือจับประตู ราวบันได เก้าอี้ โถสุขภัณฑ์ ผนังห้องน้ำ ห้องครัวหรือกุญแจ มาพร้อมกับกลิ่นเฟรชมินท์ หอมสะอาด เพื่อการอยู่บ้านที่สบายและห่างไกลเชื้อโรค
                    และใช้ได้มากกว่า 800 ครั้ง
                    @else
                    <strong>มอบประสิทธิภาพในการฆ่าเชื้อ <span class="nowrap">และทำความสะอาดได้หลายพื้นผิว  </span>
                    </strong> <br> ทั้งพื้น ฝาผนัง โต๊ะ ลูกบิด มือจับประตู ราวบันได เก้าอี้ โถสุขภัณฑ์ ผนังห้องน้ำ ห้องครัวหรือกุญแจ มาพร้อมกับกลิ่นเฟรชมินท์ หอมสะอาด เพื่อการอยู่บ้านที่สบายและห่างไกลเชื้อโรค
                    และใช้ได้มากกว่า 800 ครั้ง
                    @endif

                </p>

                <div class="buttons">
                    <a class="btn" href="#">
                        @if(session()->get('language') == 'thai')
                        <span>ดูรายละเอียด</span>
                        @else
                        <span>READ MORE</span>
                        @endif
                    </a>
                </div>
            </div>
        </div>
        <!--col-md-6-->
    </div>
    <!--row-->
</div>
<!--section-whiz-->



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

        $(document).ready(function(){
             
            var youtubeSwiper = new Swiper('.swiper-video', {
                slidesPerView: 1,
                spaceBetween: 0,
                speed: 800, 
                observer: true,
                effect: 'slide',
                observeParents: true,
                watchOverflow: true, 
                pagination: {
                    el: ".swiper-pagination.video",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next.video',
                    prevEl: '.swiper-button-prev.video',
                },
                // function to stop youtube video on slidechange
                on: {
                    slideChange: function (el) {
                    $('.swiper-slide').each(function () {
                        var youtubePlayer = $(this).find('iframe').get(0);
                        if (youtubePlayer) {
                            youtubePlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                        }
                    });
                    },
                },
            });

            
        });

        
    </script>
@endsection    