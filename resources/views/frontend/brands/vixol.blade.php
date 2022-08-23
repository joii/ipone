@extends('frontend.main_master')
@section('title')
Vixol | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<div class="section section-banner vixol wow fadeInUp" data-bg="header-trans-black">
    <img class="w-100" src="{{asset('frontend/img/thumb/vixol/banner.jpg')}}" alt="Vixol">

    <div class="banner-caption vixol">
        <div class="caption" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
            <div class="d-flex">
                <h2 class="wow fadeInRight">
                    @if(session()->get('language') == 'thai') 
                    <span>วิกซอล ผู้ช่วยมือหนึ่ง<br>เรื่องห้องน้ำสะอาด</span>
                    @else
                    <span>VIXOL, EXPERT FOR <br>BATH ROOM CLEANING</span>
                    @endif
                </h2>
                <div class="logo wow fadeInRight" data-wow-delay="0.4s">
                    <img src="{{asset('frontend/img/thumb/vixol/logo.png')}}" alt="Vixol">
                </div>
            </div>
            <p class="wow fadeInRight" data-wow-delay="0.1s">SMART SOLUTION <br class="d-block d-sm-none">FOR ALL BATHROOM CLEANING</p>
        </div><!--caption-->
    </div><!--banner-caption--> 
</div><!--section-->

<div id="s_video" class="section section-vixol video" data-bg="header-white">
    <div class="container">
        <div class="swiper-overflow video wow fadeInUp">
            <div class="swiper-container swiper-video"> 
                <div class="swiper-wrapper" style="height:auto;">
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/orHRNvPHH60" title="Vixol" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/orHRNvPHH60" title="Vixol" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                </div><!--swiper-wrapper-->
            </div><!--swiper-container-->
            <div style="height: 80px;"></div>
            
            <div class="swiper-pagination video normal"></div>
            <div class="swiper-button swiper-button-prev video normal"></div> 
            <div class="swiper-button swiper-button-next video normal"></div>
        </div><!--swiper-overflow-->
    </div><!--container-->

    <div class="circle"></div>
</div>

<div class="section section-vixol bg-blue py-1" data-bg="header-blue">
    <div class="container-fluid">
        <div class="article vixol top">
            <div class="inner"> 
                <h2 class="wow fadeInUp">
                    THE EASY WAY <br>
                    TO CLEAN YOUR BATHROOM 
                    <span class="icons icon-quote wow fadeInUp" data-wow-delay="0.4s"></span>
                </h2> 
                <p class="wow fadeInUp mb-0" data-wow-delay="0.4s">
                    @if(session()->get('language') == 'thai') 
                    <span>ผลิตภัณฑ์ทำความสะอาดห้องน้ำที่ถูกคิดค้นและวิจัยพัฒนาอย่างต่อเนื่อง<br class="d-none d-md-block">
                    มากว่า 40 ปี เพื่อให้ได้สูตรที่ดีที่สุด ที่ตอบโจทย์ทุกปัญหาของห้องน้ำ<br class="d-none d-md-block">
                    และตรงตามความต้องการอย่างแท้จริง ช่วยให้ห้องน้ำสะอาดง่าย<br class="d-none d-md-block">
                    สบายแรง เพื่ออนามัยที่ดีของทุกคนในครอบครัว
                    </span>
                    @else
                    <span>
                        The innovation of bathroom cleaning products <br class="d-none d-md-block">
                        that developed more than 40 years for the best formula. <br class="d-none d-md-block">
                        The solution of all bathroom needs, be clean, <br class="d-none d-md-block">
                        easy and comfort for the good health of <br class="d-none d-md-block">
                        everyone in the family.
                    </span>
                    @endif

                </p>
            </div>
            <span class="icons icon-cloud wow fadeInUp" data-wow-delay="0.4s"></span>
        </div><!--article-->
    </div>
</div>
<div class="section section-vixol brands" data-bg="header-white">
    <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="brands-images classic"> 
                <div class="product">
                    <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);"  src="{{asset('frontend/img/thumb/vixol/classic/product.png')}}" alt="Vixol">
                </div>  
                <div class="bg wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/vixol/classic/bg.png')}}" alt="Vixol">
                </div> 
                <div class="mascot wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/vixol/classic/mascot.png')}}" alt="Vixol">
                </div> 
                <div class="water wow fadeInUp">
                    <img data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);" src="{{asset('frontend/img/thumb/vixol/classic/water.png')}}" alt="Vixol">
                </div> 
                
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/vixol/shadow.png')}}" alt="Vixol">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="article classic wow fadeInUp">
                <h2>
                    @if(session()->get('language') == 'thai') 
                    <span>ผลิตภัณฑ์ทำความสะอาด<br>ห้องน้ำวิกซอล</span>
                    @else
                    <span>VIXOL, <br>bathroom cleaning </span>
                    @endif
                </h2>
                <h4>VIXOL CLASSIC</h4> 
                @if(session()->get('language') == 'thai') 
                <p> 
                    พลังสะอาดที่เหนือกว่า เอาอยู่ทุกคราบฝังแน่น<br class="d-none d-md-block">
                    สะอาดง่าย สบายแรง และยังมีสารเคลือบกันคราบ<br class="d-none d-md-block">
                    ทำให้ห้องน้ำสะอาดนาน พร้อมฆ่าเชื้อโรค<br class="d-none d-md-block">
                    เพื่ออนามัยที่ดีของทุกคนในบ้าน

                </p>
                @else
                <p> 
                    Clean power that removes all stubborn stains, <br class="d-none d-md-block">
                    and also has stain resistant coating to keep <br class="d-none d-md-block">
                    the bathroom clean for a long time. <br class="d-none d-md-block">
                    Kill germs for the good health of <br class="d-none d-md-block">
                    everyone in the house.

                </p>
                @endif
                <div class="buttons">
                    <a class="btn " href="#">
                        @if(session()->get('language') == 'thai') 
                        <span>ดูรายละเอียด</span>
                        @else
                        <span>READ MORE</span>
                        @endif
                    </a>
                </div>
            </div>
        </div><!--col-md-6-->
    </div><!--row-->
</div><!--section-vixol-->

<div class="section section-vixol brands oxy" data-bg="header-white">
    <div class="article left oxy wow fadeInUp"> 
        <h2>
            @if(session()->get('language') == 'thai') 
            <span>ผลิตภัณฑ์ทำความสะอาด<br>ห้องน้ำวิกซอล ออกซี่</span> 
            @else
            <span>VIXOL OXY, <br>bathroom cleaning </span>
            @endif
            </h2>
            <h4>VIXOL OXY</h4> 
    </div>
    <div class="row"> 
        <div class="col-lg-6 mx-auto center">
            <div class="brands-images oxy">
                <div class="product">
                    <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-80px) translateZ(0);" src="{{asset('frontend/img/thumb/vixol/oxy/product.png')}}" alt="Vixol">
                </div>  
                <div class="bg wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/vixol/oxy/bg.png')}}" alt="Vixol">
                </div> 
                <div class="water wow fadeInUp">
                    <img data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);" src="{{asset('frontend/img/thumb/vixol/oxy/water.png')}}" alt="Vixol">
                </div> 
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/vixol/shadow.png')}}" alt="Vixol">
                </div>
            </div>
        </div>  
    </div><!--row-->

    <div class="article oxy right wow fadeInUp">  
        <div class="hgroup d-block d-lg-none">
            <h2>
                @if(session()->get('language') == 'thai') 
                <span>ผลิตภัณฑ์ทำความสะอาด<br>ห้องน้ำวิกซอล ออกซี่ </span>
                @else
                <span>VIXOL OXY, <br>bathroom cleaning </span>
                @endif
                </h2>
                <h4>VIXOL OXY</h4>
        </div>
        @if(session()->get('language') == 'thai') 
        <p>   
            คราบหาย หอมสบาย ไม่ทำลายพื้นผิว
            นวัตกรรมเดียวในผลิตภัณฑ์ทำความสะอาด
            ห้องน้ำที่ใช้ “พลังออกซิเจน” 
            ขจัดคราบสกปรกได้ถึง 12 คราบ 
            ใช้ได้กับหลายพื้นผิวในห้องน้ำ ทั้งพื้นกระเบื้อง
            โถสุขภัณฑ์ อ่างล้างมือ อ่างอาบน้ำ
            พร้อมฆ่าเชื้อแบคทีเรียได้ถึง 99.9% 
            และเชื้อรา เพื่ออนามัยที่ดีของทุกคนในบ้าน
            สะอาดแบบอ่อนโยน

        </p>
        @else
        <p>   
            Removed stains with good scents. 
            Does not damage the surface of bathroom with 
            “oxygen power”. Removes the 12 stains and 
            can be used on different surfaces in the bathroom, 
            tile floors, toilet bowls, sinks, and bathtubs. 
            Kill 99.9% of bacteria and fungi for the good 
            health of everyone in the house.

        </p>
        @endif
        <div class="buttons">
            <a class="btn " href="#">
                @if(session()->get('language') == 'thai') 
                <span>ดูรายละเอียด</span>
                @else
                <span>READ MORE</span>
                @endif
            </a>
        </div>
    </div>
</div><!--section-vixol-->

             


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