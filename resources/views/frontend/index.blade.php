@extends('frontend.home_master')
@section('title')
About Us | I.P. ONE
@endsection
@php
$page_name = "home";
@endphp

@section('content')
<style>
    .logo-small {
            width: 80%;
            margin-top: 3vh;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    
    @media screen and (max-width: 600px) {
        .logo-small {
            width: 100%;
        }

</style>
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

	
<div class="section section-innovate" data-bg="header-blue">
                <div class="container-fluid">
                    <div class="innovate-box">
                        <div class="text-group" data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);">
                            <div class="text1 wow fadeInUp">
                                <img src="{{ asset('frontend/img/thumb/innovate-text--1.svg')}}" alt="">
                                <img src="{{ asset('frontend/img/thumb/innovate-text--1.1.svg')}}" alt="">
                            </div>

                            <img class="text2 wow fadeInUp" data-wow-delay="0.2s" src="{{ asset('frontend/img/thumb/innovate-text--2.svg')}}" alt="">
                            <img class="text3 wow fadeInUp" data-wow-delay="0.5s" src="{{ asset('frontend/img/thumb/innovate-text--3.png')}}" alt="">
                        </div>

                        <div class="people-group">
                            <div class="child" data-bottom-top="transform: translateY(300px) translateZ(0);" data-top-bottom="transform: translateY(-200px) translateZ(0);">
                                <img class="wow fadeInUp" data-wow-delay="0.9s" src="{{ asset('frontend/img/thumb/child.png')}}" alt="">
                            </div>
                            <div class="man" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(200px) translateZ(0);">
                                <img class="wow fadeInUp" data-wow-delay="0.6s" src="{{ asset('frontend/img/thumb/man.png')}}" alt="">
                            </div>
                            <div class="heart" data-bottom-top="transform: translateY(-150px) translateZ(0);" data-top-bottom="transform: translateY(250px) translateZ(0);">
                                <img class="wow fadeInLeft" data-wow-delay="0.6s" src="{{ asset('frontend/img/thumb/heart.svg')}}">
                            </div>
                        </div>

                        <div class="cloud-group">
                            <img class="cloud1" src="{{ asset('frontend/img/thumb/cloud.png')}}" alt="">
                            <img class="cloud2" src="{{ asset('frontend/img/thumb/cloud2.png')}}" alt="">
                            <img class="cloud3" src="{{ asset('frontend/img/thumb/cloud.png')}}" alt="">
                            <img class="cloud4" src="{{ asset('frontend/img/thumb/cloud.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <!--section-innovate-->

            <div class="section section-50th" data-bg="header-white">
                <div class="light-wrap d-block wow">
                    <div class="light"></div>
                    <div class="light-img">
                        <img src="{{ asset('frontend/img/thumb/light-img.svg')}}" alt="">
                    </div>
                </div>

                <div class="title-rotate d-none d-lg-block wow fadeInUp">
                    <span class="group">    
					<span>A<br>B<br>O<br>U<br>T <br><br>U<br>S</span>
                    </span>
                </div>

                <div class="section-title sub-header d-block d-lg-none">
                    <h3 class="blue">ABOUT US</h3>
                </div>

                <div class="container-fluid">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6 d-flex">
                            <div class="box-50th-text">
                                <img class="img-50th wow fadeIn d-none d-lg-block" data-wow-delay="0.2s" data-wow-duration="1.2s" src="{{ asset('frontend/img/thumb/img-50th-3.svg')}}" alt="">

                                <p>
                                    <img class=" wow fadeIn d-block d-lg-none" data-wow-delay="0.2s" data-wow-duration="1.2s" src="{{ asset('frontend/img/thumb/50-th-mobile.png')}}" alt="">
                                </p>



                                <div class="hgroup wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="th">
                                        <h3>Innovate passionately</h3>
                                        <h4>50 ปีนวัตกรรม<br class="d-block d-sm-none">เปลี่ยนชีวิตสู่อนาคต</h4>
                                    </div>
                                    <div class="en">
                                        <h3>Innovate passionately</h3>
                                        <h4>50 years of innovation for a better living of life.</h4>
                                    </div>
                                </div>

                                <div class="bgroup wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="cols">
                                        <div class="th">
                                            <h5>มุ่งมั่นสร้างสรรค์น<span class="blue">วัตกรรม</span><br>เพื่อ<span class="blue">อนาคต</span>การใช้ชีวิตที่ดีขึ้น</h5>
                                        </div>
                                        <div class="en">
                                            <h5><span class="blue">Innovate Passionately</span><br> for the Future <br>Of Better Living. </h5>
                                        </div>

                                    </div>
                                    <div class="cols">
                                        <p class="my-0 th">ไอ.พี.วัน ยึดมั่นผลิตสินค้าอุปโภคบริโภคที่ดีมีคุณภาพสู่คนไทย ให้ได้ใช้ผลิตภัณฑ์ที่มีมาตรฐานการผลิต และคุณภาพระดับสากล
                                        </p>

                                        <p class="my-0 en">
                                            At I.P. One Co., Ltd., we commit to producing high quality consumer products and we strongly believe that a good quality leads to sustainable future. We continue to innovate passionately and have high commitment to provide
                                        </p>
                                    </div>
                                </div>
                                <!--bgroup-->
                                
                            </div>
                            <!--box-50th-text-->


                        </div>
                        <!--col-xl-6-->
                        <div class="col-lg-6 d-flex">
                            <div class="box-50th-images">
                                <img class="text wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="1s" src="{{ asset('frontend/img/thumb/img-50th-1.png')}}" alt="">
                                <img class="img wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.2s" src="{{ asset('frontend/img/thumb/img-50th-2.png')}}" alt="">
                            </div>
                        </div>
                        <!--col-xl-6-->

                    </div>
                    <!--row-->
                    <div class="row flex-row" style="margin-top:30px;">
                        <div class="col-2 d-flex justify-content-center">
                            <a href="hygiene.html"><img src="{{ asset('frontend/img/thumb/logo-small-01.png')}}" class="logo-small wow fadeInUp" data-wow-delay="0.6s" /></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="vixol.html"><img src="{{ asset('frontend/img/thumb/logo-small-02.png')}}" class="logo-small wow fadeInUp" data-wow-delay="0.65s" /></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="ivy.html"><img src="{{ asset('frontend/img/thumb/logo-small-03.png')}}" class="logo-small wow fadeInUp" data-wow-delay="0.7s" /></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="vixol.html"><img src="{{ asset('frontend/img/thumb/logo-small-04.png')}}" class="logo-small wow fadeInUp" data-wow-delay="0.75s" /></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="dance.html"><img src="{{ asset('frontend/img/thumb/logo-small-05.png')}}" class="logo-small wow fadeInUp" data-wow-delay="0.8s" /></a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <a href="focus.html"><img src="{{ asset('frontend/img/thumb/logo-small-06.png')}}" class="logo-small wow fadeInUp" data-wow-delay="0.85s" /></a>
                        </div>

                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->
            </div>
            <!--section-50th-->

            <div class="section section-brands  wow fadeInUp" data-bg="header-white" id="section-brands">
                <div class="container-fluid">
                    <div class="title-rotate d-none d-lg-block wow fadeInUp">
                        <span class="group">    
						<span>O<br>U<br>R <br><br>B<br>R<br>A<br>N<br>D<br>S</span>
                        </span>
                    </div>
                    <div class="section-title sub-header pb-0 d-block d-lg-none">
                        <h3 class="blue">OUR BRANDS</h3>
                    </div>
                </div>


                <div class="swiper-overflow">

                    <div class="swiper-container swiper-brands">
                        <div class="swiper-wrapper ">
                            <!-- HYGIENE-->
                            <div class="swiper-slide">
                                <div class="background" style="background-image: url({{ asset('frontend/img/thumb/bg-brand-fabric.jpg')}});"></div>
                                <a href="{{ route('page.brand_hygiene') }}">
                                    <div class="card-swipe-brands hygiene">
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/logo-hygiene.png')}});"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="th">
                                                <h3>ผู้เชี่ยวชาญด้านการ<br> ดูแลผ้าครบทุกขั้นตอน
                                                </h3>
                                                <p>ไฮยีน เพียบพร้อมด้วยประสบการณ์กว่า 30 ปี<br> ช่วยให้การดูแลผ้าเป็นเรื่องง่าย
                                                </p>
                                            </div>
                                            <div class="en">
                                                <h3>Hygiene, an expert in Fabric Care.</h3>
                                                <p>With more than 30 years experience, offering laundry solution export for life</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--card-swipe-brands-->

                                <div class="brands-photo">
                                <a href="{{ route('page.brand_hygiene') }}"><img class="w-100" src="{{ asset('frontend/img/thumb/product-hygiene.png')}}" alt=""></a>
                                </div>

                                <div class="brands-icon w-80">
                                    <img class="w-100" src="{{ asset('frontend/img/thumb/text-fabric-care.png')}}" alt="">
                                </div>
                            </div>

                            <!-- HYGIENE-->

                            <!-- VIXOL-->
                            <div class="swiper-slide">
                                <div class="background" style="background-image: url({{ asset('frontend/img/thumb/bg-brand-vixol.jpg')}});"></div>
                                <a href="{{ route('page.brand_vixol') }}">
                                    <div class="card-swipe-brands vixol">
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/logo-vixol.png')}});"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="th">
                                                <h3>วิกซอล ผู้ช่วยมือหนึ่ง<br> เรื่องห้องน้ำสะอาด

                                                </h3>
                                                <p>ตอบโจทย์ทุกปัญหาของห้องน้ำ<br> ตรงความต้องการของลูกค้าอย่างแท้จริง
                                                </p>
                                            </div>
                                            <div class="en">
                                                <h3>Vixol, perfect assistant for bathroom cleanliness.</h3>
                                                <p>The complete solution for bathroom cleanliness problems that truly understand your needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--card-swipe-brands-->

                                <div class="brands-photo">
                                    <a href="{{ route('page.brand_vixol') }}"><img class="w-100" src="{{ asset('frontend/img/thumb/product-vixol.png')}}" alt=""></a>
                                </div>

                                <div class="brands-icon">
                                    <img class="w-100" src="{{ asset('frontend/img/thumb/text-bathroom-cleaner.png')}}" alt="">
                                </div>
                            </div>
                            <!-- VIXOL-->

                            <!-- IVY-->
                            <div class="swiper-slide">
                                <div class="background" style="background-image: url({{ asset('frontend/img/thumb/bg-brand-ivy.jpg')}});"></div>
                                    <a href="{{ route('page.brand_ivy') }}">
                                    <div class="card-swipe-brands ivy">
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/logo-ivy.png')}});"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="th">
                                                <h3>เครื่องดื่มที่ผลิตจาก<br> วัตถุดิบธรรมชาติ <strong>100%</strong>
                                                </h3>
                                                <p>เพื่อให้ได้รสชาติความอร่อยและคุณภาพที่เหนือกว่า มีให้เลือกหลากหลายดีกับสุขภาพในทุกๆวัน
                                                </p>
                                            </div>
                                            <div class="en">

                                                <p>Our beverages are made with 100% Natural ingredients to indulge the superior taste and quality. Available in wide selection and good for health.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--card-swipe-brands-->

                                <div class="brands-photo">
                                <a href="{{ route('page.brand_ivy') }}"><img class="w-100" src="{{ asset('frontend/img/thumb/product-ivy.png')}}" alt=""></a>
                                </div>

                                <div class="brands-icon">
                                    <img class="w-100" src="{{ asset('frontend/img/thumb/text-drinking-yoghurt.png')}}" alt="">
                                </div>
                            </div>
                            <!-- IVY-->

                            <!-- WHIZ-->
                            <div class="swiper-slide">
                                <div class="background" style="background-image: url({{ asset('frontend/img/thumb/bg-brand-whiz.jpg')}});"></div>
                                <a href="{{ route('page.brand_whiz') }}">
                                    <div class="card-swipe-brands whiz">
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/logo-whiz.png')}});"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="th">
                                                <h3>วิซ เติมเต็มความสุข ในบ้าน

                                                </h3>
                                                <p>กลิ่นหอมสบาย เป็นมิตรกับทุกคนในครอบครัว เพื่อเสริมบรรยากาศให้บ้านสดชื่น น่าอยู่
                                                </p>
                                            </div>
                                            <div class="en">
                                                <h3>Whiz, fulfilling happiness in your home. </h3>
                                                <p>A fresh fragrance which is friendly for all family members, helps to bring out the refreshing ambience to your home. </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--card-swipe-brands-->

                                <div class="brands-photo">
                                <a href="{{ route('page.brand_whiz') }}"><img class="w-100" src="{{ asset('frontend/img/thumb/product-whiz.png')}}" alt=""></a>
                                </div>

                                <div class="brands-icon">
                                    <img class="w-100" src="{{ asset('frontend/img/thumb/text-household-cleaner.png')}}" alt="">
                                </div>
                            </div>
                            <!-- WHIZ-->
                        
                            <!-- DANCE--> 
                            <div class="swiper-slide">
                                <div class="background" style="background-image: url({{ asset('frontend/img/thumb/bg-brand-dance.jpg')}});"></div>
                                <a href="{{ route('page.brand_dance') }}">
                                    <div class="card-swipe-brands dance">
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/logo-dance.png')}});"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="th">
                                                <h3>เสน่ห์ หอม เป็นตัวเอง</h3>
                                                <p>ด้วยแรงบันดาลใจจากน้ำหอมคุณภาพ ชั้นนำจากทั่วโลก เพิ่มเสน่ห์ดึงตัวตน ของสาวแต่ละสไตล์

                                                </p>
                                            </div>
                                            <div class="en">
                                                <h3>Be yourself, Be Charming </h3>
                                                <p>Inspired by leading perfumes from around the world, enhancing the unique charming of every woman.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--card-swipe-brands-->

                                <div class="brands-photo">
                                <a href="{{ route('page.brand_dance') }}"><img class="w-100" src="{{ asset('frontend/img/thumb/product-dance.png')}}" alt=""></a>
                                </div>

                                <div class="brands-icon">
                                    <img class="w-100" src="{{ asset('frontend/img/thumb/text-personal-care.png')}}" alt="">
                                </div>
                            </div>
                            <!-- DANCE--> 

                            <!-- FOCUS-->   
                            <div class="swiper-slide">
                                <div class="background" style="background-image: url({{ asset('frontend/img/thumb/bg-brand-focus.jpg')}});"></div>
                                <a href="{{ route('page.brand_focus') }}">
                                    <div class="card-swipe-brands focus">
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/logo-focus.png')}});"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="th">
                                                <h3>เท่ เป็นตัวเอง </h3>
                                                <p>ให้คุณใช้ชีวิต ACTIVE ได้อย่างมั่นใจ ไม่ว่าเจอสถานการณ์แบบไหนก็เอาอยู่
                                                </p>
                                            </div>
                                            <div class="en">
                                                <h3>Unique and Be yourself, </h3>
                                                <p>live the active lifestyle confidently and be in control in any situation. </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--card-swipe-brands-->

                                <div class="brands-photo">
                                <a href="{{ route('page.brand_focus') }}"><img class="w-100" src="{{ asset('frontend/img/thumb/product-focus.png')}}" alt=""></a>
                                </div>

                                <div class="brands-icon">
                                    <img class="w-100" src="{{ asset('frontend/img/thumb/text-personal-care.png')}}" alt="">
                                </div>
                            </div>
                            <!-- FOCUS--> 
                            
                        </div>
                       
                    </div>
                    <!--swiper-container-->

                    <div class="swiper-pagination brands"></div>
                    <div class="swiper-button-wrapper">
                        <div class="swiper-button swiper-button-prev brands"></div>
                        <div class="swiper-button swiper-button-next brands"></div>
                    </div>
                </div>
                <!--swiper-overflow-->

            </div>
            <!--section-brands-->

            <div class="section section-news wow slideInUp" data-bg="header-blue">
                <div class="section section-wave ">
                    <div class="ocean">
                        <div class="wave"></div>
                        <div class="wave"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="title-rotate d-none d-lg-block white wow fadeInUp">
                        <span class="group">    
						<span>N<br>E<br>W<br>S</span>
                        </span>
                    </div>

                    <div class="section-title sub-header-white pt-0 d-block d-lg-none">
                        <h3>NEWS</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="news-woman wow fadeInUp">
                                <img class="woman" src="{{ asset('frontend/img/thumb/news-woman.png')}}" alt="">

                                <img class="img-news" data-bottom-top="transform: translateY(200px) translateZ(0);" data-top-bottom="transform: translateY(0px) translateZ(0);" src="{{ asset('frontend/img/thumb/img-news.svg')}}" alt="">
                            </div>
                        </div>
                        <!--col-md-6-->
                        <div class="col-lg-6 my-auto">
                            <div class="swiper-overflow news wow fadeIn">
                                <div class="swiper-container swiper-news">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card-news">
                                                <div class="card-photo">
                                                    <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/photo-800x1033--1.jpg')}});">
                                                        <img src="{{ asset('frontend/img/thumb/frame-100x129.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="th">เทรนด์ตู้รีฟีลมาแรง! “ไอ.พี.วัน” เปิดตัว เทรนด์ตู้รีฟีลมาแรง! “ไอ.พี.วัน” เปิดตัว Hygiene Refill Station ตู้รีฟีลน้ำยาปรับผ้านุ่ม พลิกโฉมวงการ FMCG

                                                        <p class="en">Refill Dispenser is trending! “I.P. One” launches Hygiene Refill Station, a fabric softener refill dispenser, transforming the FMCG industry</p>

                                                        <p class="readmore">
                                                            <a href="https://www.brandbuffet.in.th/2021/10/hygiene-refill-station/" target="_blank">Read more</a> <span class="arrow-right"></span>
                                                        </p>
                                                </div>
                                            </div>
                                            <!--card-news-->
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="card-news">
                                                <div class="card-photo">
                                                    <div class="photo" style="background-image: url({{ asset('frontend/img/thumb/photo-800x1033--2.jpg')}});">
													<img src="{{ asset('frontend/img/thumb/frame-100x129.png')}}" alt="">
                                                        
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="th">
                                                        ไอ.พี.วัน ผุดโครงการ Hope To Home ส่งความหวังถึงบ้านช่วยเหลือพี่น้องคนไทย ก้าวผ่านโควิดไปด้วยกัน
                                                    </p>

                                                    <p class="en">I.P. One launches the “Hope To Home” project, sending hope to homes to help Thai people. Let's get through covid together</p>

                                                    <p class="readmore"><a href="https://www.thairath.co.th/news/local/2178475" target="_blank">Read more</a><span class="arrow-right"></span></p>
                                                </div>
                                            </div>
                                            <!--card-news-->
                                        </div>




                                    </div>
                                    <!--swiper-wrapper-->
                                </div>
                                <!--swiper-container-->

                                <div class="swiper-pagination news wow fadeInUp"></div>
                                <div class="swiper-button swiper-button-prev news wow fadeInLeft">
                                    <span class="arrow-left"></span>
                                </div>
                                <div class="swiper-button swiper-button-next news wow fadeInRight">
                                    <span class="arrow-right"></span>
                                </div>
                            </div>
                            <!--swiper-overflow-->
                        </div>
                        <!--col-md-6-->
                    </div>
                    <!--row-->
                </div>
                <!--container-fluid-->
            </div>
            <!--section-news-->

           


@endsection