@extends('frontend.main_master')
@section('title')
Ivy | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner ivy wow fadeInUp" data-bg="header-trans-black">
<img class="w-100" src="{{asset('frontend/img/thumb/ivy/banner2.png')}}" alt="Ivy">
<div class="banner-caption ivy">
    <div class="logo wow fadeInUp">
        <img class="w-100" src="{{asset('frontend/img/thumb/ivy/logo.png')}}" alt="Ivy">
    </div>
    <h3 class=" wow fadeInUp " data-wow-delay="0.2s">
        @if(session()->get('language') == 'thai') 
        <span>ความอร่อยสดชื่นที่แตกต่าง</span>
        @else
        <span>The uniqueness of <br>refreshing deliciousness</span>
        @endif
    </h3>
    <p class=" wow fadeInUp  " data-wow-delay="0.3s" style="font-size: 1.5vw;color:#fff; font-weight:400;">
        @if(session()->get('language') == 'thai') 
        <span>
            ไอวี่โยเกิร์ตพร้อมดื่มคุณภาพพรีเมียมที่มาสร้างเซอร์ไพรส์<br class="d-none d-md-block">
            และแต่งแต้มรอยยิ้มด้วยประสบการณ์ความอร่อยโดนเต็มๆ <br class="d-none d-md-block">
            กับคุณประโยชน์จากธรรมชาติ เปลี่ยนความน่าเบื่อจำเจ <br class="d-none d-md-block">
            ให้มีสีสัน สนุกทุกวัน 
        </span>
        @else

        @endif
    </p>
</div><!--banner-caption--> 
</div><!--section-->

<div class="section section-ivy video">
    <div class="container">
        <div class="swiper-overflow video wow fadeInUp">
            <div class="swiper-container swiper-video"> 
                <div class="swiper-wrapper" style="height:auto;">
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/57p2cJWjwUA" title="Ivy" allowfullscreen></iframe>
                        </div>
                    </div> 

                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/57p2cJWjwUA" title="Ivy" allowfullscreen ></iframe>
                        </div>
                    </div> 
                    
                </div><!--swiper-wrapper-->
            </div><!--swiper-container-->
            <div class="swiper-pagination  video"></div>
            <div class="swiper-button swiper-button-prev normal white video"></div> 
            <div class="swiper-button swiper-button-next normal white video"></div> -->
        </div><!--swiper-overflow-->

        <div class="article ivy wow fadeInUp">
            <h3>
                @if(session()->get('language') == 'thai') 
                <span>ไอวี่ โยเกิร์ตพร้อมดื่ม<br>
                    พิถีพิถันคัดสรรวัตถุดิบที่ดีมีคุณภาพ<br>
                    ไม่ใส่สี, ไม่แต่งกลิ่นสังเคราะห์, ไม่ใส่วัตถุกันเสีย 
                </span>
                @else
                <span>Ivy, Ready-to-drink yogurt<br>100% natural ingredients </span>
                @endif
            </h3>
           
        </div>
    </div><!--container-->

    <div class="cloud-wrap">
        <img class="cloud1 wow fadeInRight" src="{{asset('frontend/img/thumb/ivy/cloud1.svg')}}" alt="Ivy">
        <img class="cloud2 wow fadeInLeft" src="{{asset('frontend/img/thumb/ivy/cloud2.svg')}}" alt="Ivy">
        <img class="cloud3 wow fadeInLeft" src="{{asset('frontend/img/thumb/ivy/cloud3.svg')}}" alt="Ivy">
        <img class="cloud4 wow fadeInRight" src="{{asset('frontend/img/thumb/ivy/cloud4.svg')}}" alt="Ivy">
    </div>
</div><!--section-ivy-->

<div class="section section-ivy brands" data-bg="header-white">
    <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="brands-images ivy-sweet"> 
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);" >
                    <img src="{{asset('frontend/img/thumb/ivy/sweet/product.png')}}" alt="Ivy">
                </div>  
                <div class="milk" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/ivy/sweet/milk.png')}}" alt="Ivy">
                    
                </div>  
                <div class="cake wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/ivy/sweet/cake.svg')}}" alt="Ivy">
                </div>  
                
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/ivy/shadow.png')}}" alt="Ivy">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="article ivy-sweet wow fadeInUp">
                <h2 class="green">
                    @if(session()->get('language') == 'thai') 
                    <span>ไอวี่ โยเกิร์ตพร้อมดื่ม <span class="d-block purple">กลิ่นขนมหวานพรีเมียม</span></span>
                    @else
                    <span style="font-size:smaller;">Ivy, Ready-to-drink yogurt <span class="d-block purple">Premium Dessert Flavor</span></span>
                    @endif
                </h2> 
                @if(session()->get('language') == 'thai') 
                <p class="pt-2"> 
                    เซอร์ไพรส์กับรสชาติของขนมหวานพรีเมียมยอดนิยมระดับโลก<br class="d-none d-md-block">
                    อร่อยฟินไม่ซ้ำใคร เติมพลังให้คุณอร่อยสดชื่น<br class="d-none d-md-block">
                    สุขภาพดีจากวิตามินซีสูง ประโยชน์เต็มกล่อง

                </p>
                @else
                <p class="pt-2"> 
                    Surprise with the taste of the premium desserts.<br class="d-none d-md-block">
                    Delicious with unique taste that good <br class="d-none d-md-block">
                    for your health with high vitamin c 

                </p>
                @endif
                <div class="buttons">
                    <a class="btn green" href="#">
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
</div><!--section-ivy-->

<div class="section section-ivy brands" data-bg="header-white">
    <div class="row flex-row-reverse">
        <div class="col-lg-6 d-flex">
            <div class="brands-images ivy-vitc"> 
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/ivy/vitc/product.png')}}" alt="Ivy">
                </div>  
                <div class="milk" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/ivy/vitc/milk.png')}}" alt="Ivy">
                </div>  
                <div class="bg wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/ivy/vitc/bg.svg')}}" alt="Ivy">
                </div>  
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/ivy/shadow.png')}}" alt="Ivy">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="article ivy-vitc wow fadeInUp">
                <h2 class="green">
                    @if(session()->get('language') == 'thai') 
                    <span>ไอวี่ โยเกิร์ตพร้อมดื่ม <span class="d-block  orange">สูตร วิตามินซีสูง</span></span>
                    @else
                    <spans tyle="font-size:smaller;">Ivy, Ready-to-drink yogurt, <span class="d-block orange">High Vitamin C</span></spans>
                    @endif
                </h2> 
                @if(session()->get('language') == 'thai') 
                <p class="pt-2"> 
                    อร่อยโดนเต็ม ๆ กับรสชาติผลไม้พรีเมียมเน้น ๆ<br class="d-none d-md-block">
                    คัดสรรผลไม้สายพันธุ์ดีจากแหล่งเพาะปลูกระดับโลก!<br class="d-none d-md-block">
                    พร้อมวิตามินซีสูง ภูมิคุ้มกันก็มี ผิวดีก็มา
                    
                </p>
                @else
                <p class="pt-2"> 
                    The deliciousness with premium fruit flavors.<br class="d-none d-md-block">
                    Selected the fruit from world-class origin!<br class="d-none d-md-block">
                    With high vitamin c that good skin for your skin.
                    
                </p>
                @endif
                <div class="buttons">
                    <a class="btn green" href="#">
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
</div><!--section-ivy-->

<div class="section section-ivy brands" data-bg="header-white">
    <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="brands-images ivy-plus"> 
                <div class="product" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                    <img src="{{asset('frontend/img/thumb/ivy/plus/product.png')}}" alt="Ivy">
                </div>  
                <div class="milk" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);"> 
                    <img src="{{asset('frontend/img/thumb/ivy/plus/milk.png')}}" alt="Ivy">
                </div>  
                <div class="bg wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/ivy/plus/bg.svg')}}" alt="Ivy">
                </div>  
                <div class="p_shadow">
                    <img src="{{asset('frontend/img/thumb/ivy/shadow.png')}}" alt="Ivy">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="article ivy-plus wow fadeInUp">
                <h2 class="green">
                    @if(session()->get('language') == 'thai') 
                    <span>ไอวี่ โยเกิร์ตพร้อมดื่ม <span class="d-block black">สูตร วิตามินพลัส</span></span>
                    @else
                    <span style="font-size:smaller;">Ivy, Ready-to-drink yogurt <span class="d-block black">Vitamin Plus</span></span>
                    @endif
                </h2> 
                @if(session()->get('language') == 'thai') 
                <p class="pt-2"> 
                    พิถีพิถันคัดสรรวัตถุดิบที่ดีมีคุณภาพ จากน้ำนมโคคุณภาพดี<br class="d-none d-md-block">
                    ผสมผสานน้ำผลไม้แท้ พร้อมวิตามินพลัส (เอ,บี2,อี และแคลเซียม)<br class="d-none d-xl-block">
                    และใช้จุลินทรย์แล็กโทบาซิลลัส บัลแกริคัสและสเตรปโทค็อกคัส<br class="d-none d-xl-block">
                    เทอร์โมฟิลัส ช่วยให้ระบบขับถ่ายทำงานอย่างมีประสิทธิภาพ<br class="d-none d-xl-block">
                    รสชาติอร่อย ประโยชน์เต็มกล่อง
                    
                </p>
                @else
                <p class="pt-2"> 
                    Selected good quality of milk blended with fruit <br class="d-none d-md-block">
                    juices and vitamin plus (a, b2, e and calcium) <br class="d-none d-md-block">
                    added lactobacillus bulgaricus and streptococcus<br class="d-none d-md-block">
                    thermophilus for your health
                    
                </p>
                @endif
                <div class="buttons">
                    <a class="btn green" href="#">
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
</div><!--section-ivy-->


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