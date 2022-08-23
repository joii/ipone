@extends('frontend.main_master')
@section('title')
Focus | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner focus wow fadeIn" data-bg="">
    <img class="w-100 wow fadeInUp" src="{{asset('frontend/img/thumb/focus/banner.jpg')}}" alt="Focus">
</div>
<!--section-->

<div id="s_video" class="section section-focus video" data-bg="header-yellow">
    <div class="container">

        <div class="swiper-overflow video wow fadeInUp">
            <div class="icons icon1 wow fadeInUp">
                <img src="{{asset('frontend/img/thumb/focus/video/1.svg')}}" alt="Focus">
            </div>
            <div class="icons icon2 wow fadeInUp">
                <img src="{{asset('frontend/img/thumb/focus/video/2.svg')}}" alt="Focus">
            </div>
            <div class="icons icon3 wow fadeInUp">
                <img src="{{asset('frontend/img/thumb/focus/video/3.svg')}}" alt="Focus">
            </div>

            <div class="swiper-container swiper-video">
                <div class="swiper-wrapper" style="height:auto;">
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/hUsQeBZU2-w" title="Focus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>


                </div>
                <!--swiper-wrapper-->
            </div>
            <!--swiper-container-->

           <div class="swiper-pagination video black"></div>
            <div class="swiper-button swiper-button-prev video normal"></div>
            <div class="swiper-button swiper-button-next video normal"></div> 
        </div>
        <!--swiper-overflow-->

        <div class="icons icon4 wow fadeInUp">
            <img src="{{asset('frontend/img/thumb/focus/video/4.svg')}}" alt="Focus">
        </div>

        <div class="article focus wow fadeInUp">

            <h3>
                @if(session()->get('language') == 'thai')     
                ผลิตภัณฑ์ดูแลร่างกายสำหรับหนุ่มวัยมันส์ <br class="d-none d-sm-block"> เพิ่มความมั่นใจได้ตลอดวัน
                @else
                ผลิตภัณฑ์ดูแลร่างกายสำหรับหนุ่มวัยมันส์ <br class="d-none d-sm-block"> เพิ่มความมั่นใจได้ตลอดวัน
                @endif
            </h3>

            <p>
                @if(session()->get('language') == 'thai') 
                เมื่อต้องอยู่ท่ามกลางกลุ่มเพื่อน โฟกัส เพิ่มเสน่ห์ให้หนุ่ม ๆ <br class="d-none d-md-block"> มุ่งมั่นพิชิตทุกเป้าหมายอย่างที่เป็นตัวเอง ให้คุณใช้ชีวิต ACTIVE ได้อย่างมั่นใจ <br class="d-none d-md-block"> ไม่ว่าเจอสถานการณ์แบบไหนก็เอาอยู่
                @else
                เมื่อต้องอยู่ท่ามกลางกลุ่มเพื่อน โฟกัส เพิ่มเสน่ห์ให้หนุ่ม ๆ <br class="d-none d-md-block"> มุ่งมั่นพิชิตทุกเป้าหมายอย่างที่เป็นตัวเอง ให้คุณใช้ชีวิต ACTIVE ได้อย่างมั่นใจ <br class="d-none d-md-block"> ไม่ว่าเจอสถานการณ์แบบไหนก็เอาอยู่
                @endif
            </p>
        </div>
    </div>
    <!--container-->
</div>

<div class="section section-focus brands roll-on" data-bg="header-white">
    <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="brands-images roll-on">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/focus/roll-on/product.png')}}" alt="Focus">
                </div>
                <div class="bg1" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/focus/roll-on/bg1.svg')}}" alt="Focus">
                </div>
                <div class="bg2">
                    <img src="{{asset('frontend/img/thumb/focus/roll-on/bg2.svg')}}" alt="Focus">
                </div>
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/focus/shadow.png')}}" alt="Focus">
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex">
            <div class="article perfume wow fadeInUp">

                <h3 class="blue">
                   
                    @if(session()->get('language') == 'thai') 
                    โฟกัส โรลออน 
                    @else
                    Focus Roll On 
                    @endif
                </h3>
                <p class="mb-2">
                    @if(session()->get('language') == 'thai')
                    <strong>ช่วยปกป้องคุณจากเหงื่อและกลิ่นกายได้ยาวนานในวันปกติ<br class="d-none d-sm-block">
                        และปกป้องเป็นพิเศษในวันที่เหงื่อออกมาก <br class="d-none d-sm-block">
                        ด้วย นวัตกรรม Focus Active Control <br class="d-none d-sm-block">
                        เข้าปกป้องที่ต้นตอทันทีเมื่อมีความชื้นใต้วงแขน </strong>
                    @else
                    <strong>ช่วยปกป้องคุณจากเหงื่อและกลิ่นกายได้ยาวนานในวันปกติ<br class="d-none d-sm-block">
                        และปกป้องเป็นพิเศษในวันที่เหงื่อออกมาก <br class="d-none d-sm-block">
                        ด้วย นวัตกรรม Focus Active Control <br class="d-none d-sm-block">
                        เข้าปกป้องที่ต้นตอทันทีเมื่อมีความชื้นใต้วงแขน </strong>
                    @endif

                </p>
                <p>
                    @if(session()->get('language') == 'thai')    
                    และจะปกป้องเพิ่มขึ้นอัตโนมัติ เมื่อเหงื่อออกมาก<br class="d-none d-sm-block">ยิ่ง Active ยิ่งปกป้อง
                    @else
                    และจะปกป้องเพิ่มขึ้นอัตโนมัติ เมื่อเหงื่อออกมาก<br class="d-none d-sm-block">ยิ่ง Active ยิ่งปกป้อง
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
<!--section-focus-->

<div class="section section-focus brands perfume" data-bg="header-white">
    <div class="article left cologne wow fadeInUp">
        <h3 class="yellow">
            @if(session()->get('language') == 'thai') 
            โฟกัส เพอร์ฟูม
            @else
            Focus perfume
            @endif
        </h3>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto center">
            <div class="brands-images focus-perfume">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/focus/perfume/product.png')}}" alt="Focus">
                </div>
                <div class="bg1" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/focus/perfume/bg1.svg')}}" alt="Focus">
                </div>
                <div class="bg2">
                    <img src="{{asset('frontend/img/thumb/focus/perfume/bg2.svg')}}" alt="Focus">
                </div>
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/focus/shadow.png')}}" alt="Focus">
                </div>
            </div>
        </div>
    </div>
    <!--row-->

    <div class="article focus-perfume right wow fadeInUp">
        <div class="hgroup d-block d-lg-none">
            <h3 class="yellow">
                @if(session()->get('language') == 'thai') 
                โฟกัส เพอร์ฟูม
                @else
                Focus perfume
                @endif
            </h3>
        </div>

        <p class="mb-2">
            @if(session()->get('language') == 'thai') 
            <strong>
                หล่อ เท่ สั่งได้ดั่งใจ ด้วยน้ำหอมโฟกัส</strong><br> แรงบันดาลใจจากน้ำหอมนำเทรนด์คุณภาพชั้นนำ
            <br> จากทั่วโลกให้กลิ่นหอมยาวนาน
            @else
            <strong>
                หล่อ เท่ สั่งได้ดั่งใจ ด้วยน้ำหอมโฟกัส</strong><br> แรงบันดาลใจจากน้ำหอมนำเทรนด์คุณภาพชั้นนำ
            <br> จากทั่วโลกให้กลิ่นหอมยาวนาน
            @endif

        </p>
        <div class="buttons">
            <a class="btn yellow" href="#">
                @if(session()->get('language') == 'thai') 
                <span>ดูรายละเอียด</span>
                @else
                <span>READ MORE</span>
                @endif
            </a>
        </div>
    </div>
</div>
<!--section-dance-->

<div class="section section-focus brands focus-cologne" data-bg="header-white">
    <div class="row flex-row-reverse">
        <div class="col-lg-6 d-flex">
            <div class="brands-images focus-cologne">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/focus/cologne/product.png')}}" alt="Focus">
                </div>
                <div class="bg1" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/focus/cologne/bg1.svg')}}" alt="Focus">
                </div>
                <div class="bg2">
                    <img src="{{asset('frontend/img/thumb/focus/cologne/bg2.svg')}}" alt="Focus">
                </div>
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/focus/shadow.png')}}" alt="Focus">
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex">
            <div class="article focus-cologne wow fadeInUp">

                <h3 class="blue">
                    
                    @if(session()->get('language') == 'thai') 
                    โฟกัส โคโลญ
                    @else
                    Focus Cologne
                    @endif
                </h3>
                <p class="mb-2">
                    @if(session()->get('language') == 'thai') 
                    <strong>
                        แรงบันดาลใจจากน้ำหอมนำเทรนด์คุณภาพชั้นนำจากทั่วโลก<br class="d-none d-sm-block">
                        พร้อมแนวกลิ่นที่หลากหลาย เพื่อให้ตรงกับสไตล์ที่หลากหลาย</strong><br> ของหนุ่มวัยมันส์
                    @else
                    <strong>
                        แรงบันดาลใจจากน้ำหอมนำเทรนด์คุณภาพชั้นนำจากทั่วโลก<br class="d-none d-sm-block">
                        พร้อมแนวกลิ่นที่หลากหลาย เพื่อให้ตรงกับสไตล์ที่หลากหลาย</strong><br> ของหนุ่มวัยมันส์
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
<!--section-focus-->


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