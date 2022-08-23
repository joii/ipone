@extends('frontend.main_master')
@section('title')
Dance | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner dance wow fadeIn" data-bg="header-trans-black">
    <img class="w-100" src="{{asset('frontend/img/thumb/dance/banner.jpg')}}" alt="Dance">

    <div class="banner-caption dance">
        <div class="caption wow fadeInUp">
            <div class="logo">
                <img class="w-100" src="{{asset('frontend/img/thumb/dance/logo.png')}}" alt="Dance">
            </div>
            <h2>เสน่ห์ หอม เป็นตัวเอง</h2>
            <p>PERSONAL CARE PRODUCTS FOR WOMEN</p>
        </div>
        <!--caption-->
    </div>
    <!--banner-caption-->
</div>
<!--section-->

<div id="s_video" class="section section-dance video" data-bg="header-white">
    <div class="container">

        <div class="swiper-overflow video wow fadeInUp">
            <div class="icons icon-heart wow fadeInUp">
                <img src="{{asset('frontend/img/thumb/dance/heart.svg')}}" alt="Dance">
            </div>
            <div class="icons icon-arrow wow fadeInUp">
                <img src="{{asset('frontend/img/thumb/dance/arrow.svg')}}" alt="Dance">
            </div>
            <div class="icons icon-flower wow fadeInUp">
                <img src="{{asset('frontend/img/thumb/dance/flower.svg')}}" alt="Dance">
            </div>

            <div class="icons icon-star wow fadeInUp"></div>
            <div class="icons icon-flower  wow fadeInUp"></div>

            <div class="swiper-container swiper-video">
                <div class="swiper-wrapper" style="height:auto;">
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <img src="{{asset('frontend/img/thumb/dance/Banner-Dance-1.png')}}" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <img src="{{asset('frontend/img/thumb/dance/Banner-Dance-2.png')}}" />
                        </div>
                    </div>
                    <!--swiper-wrapper-->
                </div>
                <!--swiper-container-->
                <p style="height: 30px;"></p>
                <div class="swiper-pagination video"></div>
                <div class="swiper-button swiper-button-prev video normal pink"></div>
                <div class="swiper-button swiper-button-next video normal pink"></div>

            </div>
            <!--swiper-overflow-->
            <p style="height:30px;"></p>
            <div class="article dance wow fadeInUp">
                <div class="icons icon-quotes wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/dance/quotes.svg')}}" alt="Dance">
                </div>
                
                <h3>
                    @if(session()->get('language') == 'thai') 
                    เพิ่มเสน่ห์ให้สาวทุกสไตล์
                    @else
                    เพิ่มเสน่ห์ให้สาวทุกสไตล์
                    @endif
                </h3>
                <p>
                    @if(session()->get('language') == 'thai') 
                    เพิ่มความมั่นใจเมื่อต้องอยู่ใกล้ เพราะเรารู้ว่ากลิ่นหอม <br class="d-none d-sm-block"> เป็นจุดเริ่มต้นของเสน่ห์ที่สำคัญ แดนซ์ จึงพัฒนาผลิตภัณฑ์ <br class="d-none d-sm-block"> ด้วยแรงบันดาลใจจากน้ำหอมคุณภาพชั้นนำจากทั่วโลก
                    <br class="d-none d-sm-block"> เพิ่มเสน่ห์ดึงตัวตนของสาวแต่ละสไตล์
                    @else
                    เพิ่มความมั่นใจเมื่อต้องอยู่ใกล้ เพราะเรารู้ว่ากลิ่นหอม <br class="d-none d-sm-block"> เป็นจุดเริ่มต้นของเสน่ห์ที่สำคัญ แดนซ์ จึงพัฒนาผลิตภัณฑ์ <br class="d-none d-sm-block"> ด้วยแรงบันดาลใจจากน้ำหอมคุณภาพชั้นนำจากทั่วโลก
                    <br class="d-none d-sm-block"> เพิ่มเสน่ห์ดึงตัวตนของสาวแต่ละสไตล์
                    @endif

                </p>
            </div>
        </div>
        <!--container-->

        <div class="icons icon-line wow fadeInUp">
            <img src="{{asset('frontend/img/thumb/dance/line.svg')}}" alt="Dance">
        </div>
    </div>

    <div class="section section-dance brands cologne" data-bg="header-white">
        <div class="article left cologne wow fadeInUp">
            <h3 class="blue">
                @if(session()->get('language') == 'thai') 
                แดนซ์ โคโลญ 
                @else
                Dance Cologne
                @endif
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-5 mx-auto center">
                <div class="brands-images cologne">
                    <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                        <img src="{{asset('frontend/img/thumb/dance/cologne/product.png')}}" alt="Dance">
                    </div>
                    <div class="heart" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                        <img src="{{asset('frontend/img/thumb/dance/cologne/heart.svg')}}" alt="Dance">
                    </div>

                    <div class="p_shadow">
                        <img src="{{asset('frontend/img/thumb/dance/shadow.png')}}" alt="Dance">
                    </div>
                </div>
            </div>
        </div>
        <!--row-->

        <div class="article cologne right wow fadeInUp">
            <div class="hgroup d-block d-lg-none">
                <h3 class="blue">
                    @if(session()->get('language') == 'thai') 
                    แดนซ์ โคโลญ 
                    @else
                    Dance Cologne
                    @endif
                </h3>
            </div>

            <p class="mb-2">
                @if(session()->get('language') == 'thai') 
                <strong>แรงบันดาลใจจากน้ำหอมคุณภาพชั้นนำจากทั่วโลก<br>
            หลากหลายแนวกลิ่นหอมเพิ่มเสน่ห์ <span class="nowrap">ดึงตัวตนหลากสไตล์</span></strong><br> พร้อมบำรุงผิวด้วยส่วนผสมที่สกัดจากธรรมชาติ <br> มั่นใจได้ว่าไม่ระคายเคืองผิว <br> เพิ่มความนุ่มให้ผิวได้ตลอดวันตามต้องการ
                @else
                <strong>แรงบันดาลใจจากน้ำหอมคุณภาพชั้นนำจากทั่วโลก<br>
            หลากหลายแนวกลิ่นหอมเพิ่มเสน่ห์ <span class="nowrap">ดึงตัวตนหลากสไตล์</span></strong><br> พร้อมบำรุงผิวด้วยส่วนผสมที่สกัดจากธรรมชาติ <br> มั่นใจได้ว่าไม่ระคายเคืองผิว <br> เพิ่มความนุ่มให้ผิวได้ตลอดวันตามต้องการ


                @endif
            </p>
            <div class="buttons">
                <a class="btn" href="dance-subcategory-1.html">
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
</div>

<div class="section section-dance brands perfume" data-bg="header-white">
    <div class="row">
        <div class="col-lg-5 d-flex">
            <div class="brands-images perfume">
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/dance/perfume/product.png')}}" alt="Dance">
                </div>
                <div class="flower" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/dance/perfume/flower.svg')}}" alt="Dance">
                </div>

                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/dance/shadow.png')}}" alt="Dance">
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-flex">
            <div class="article perfume wow fadeInUp">

                <h3 class="yellow">
                    @if(session()->get('language') == 'thai') 
                    แดนซ์ 2 in 1 Body & Hair<br class="d-none d-md-block"> เพอร์ฟูม มิสท์
                    @else
                    Dance 2 in 1 Body & Hair <br class="d-none d-md-block">Perfume Mist
                    @endif
                </h3>
                <p class="mb-2">
                    @if(session()->get('language') == 'thai') 
                    <strong>ความหอม 2 in 1 ในขวดเดียว ที่ไม่เพียงแต่จะเพิ่มเสน่ห์ผิวให้หอมนุ่ม
                    แต่ยังสามารถใช้ได้กับเส้นผม ด้วยน้ำหอมคุณภาพระดับเคาน์เตอร์แบรนด์
                    จากผู้ผลิตหัวน้ำหอมระดับโลก </strong>
                    @else
                    <strong>ความหอม 2 in 1 ในขวดเดียว ที่ไม่เพียงแต่จะเพิ่มเสน่ห์ผิวให้หอมนุ่ม
                    แต่ยังสามารถใช้ได้กับเส้นผม ด้วยน้ำหอมคุณภาพระดับเคาน์เตอร์แบรนด์
                    จากผู้ผลิตหัวน้ำหอมระดับโลก </strong>

                    @endif

                </p>
                <p>
                    @if(session()->get('language') == 'thai') 
                    ที่จะดึงเสน่ห์ชวนหลงใหลจุดประกายความสดใส ให้คุณมากกว่าใคร หอมทั้งผิว หอมทั้งผม เสน่ห์ความหอมมั่นใจในแบบที่เป็นตัวเอง
                    @else
                    ที่จะดึงเสน่ห์ชวนหลงใหลจุดประกายความสดใส ให้คุณมากกว่าใคร หอมทั้งผิว หอมทั้งผม เสน่ห์ความหอมมั่นใจในแบบที่เป็นตัวเอง
                    @endif
                </p>

                <div class="buttons">
                    <a class="btn yellow" href="dance-subcategory-2.html">
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
<!--section-dance-->

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