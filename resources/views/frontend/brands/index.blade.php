@extends('frontend.home_master')
@section('title')
I.P. ONE : Brands
@endsection
@section('content')
@php
$page_name = "brands";
@endphp
<style>
.logo-small{
width:100%;
margin-top: 3vh;
display: block;
margin-left: auto;
margin-right: auto;

}

</style>
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/ie11CustomProperties.js')}}"></script>
<script src="{{asset('frontend/js/skrollr.min.js')}}"></script>


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
                               @if(session()->get('language') == 'thai') 
                                <div>
                                    <h3>ผู้เชี่ยวชาญด้านการ<br> ดูแลผ้าครบทุกขั้นตอน
                                    </h3>
                                    <p>ไฮยีน เพียบพร้อมด้วยประสบการณ์กว่า 30 ปี<br> ช่วยให้การดูแลผ้าเป็นเรื่องง่าย
                                    </p>
                                </div>
                                @else
                                <div>
                                    <h3>Hygiene, an expert in Fabric Care.</h3>
                                    <p>With more than 30 years experience, offering laundry solution export for life</p>
                                </div>
                                @endif
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
                                @if(session()->get('language') == 'thai') 
                                <div>
                                    <h3>วิกซอล ผู้ช่วยมือหนึ่ง<br> เรื่องห้องน้ำสะอาด

                                    </h3>
                                    <p>ตอบโจทย์ทุกปัญหาของห้องน้ำ<br> ตรงความต้องการของลูกค้าอย่างแท้จริง
                                    </p>
                                </div>
                                @else
                                <div>
                                    <h3>Vixol, perfect assistant for bathroom cleanliness.</h3>
                                    <p>The complete solution for bathroom cleanliness problems that truly understand your needs.</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </a>
                    <!--card-swipe-brands-->

                    <div class="brands-photo">
                        <a href="{{ route('page.brand_vixol') }}" ><img class="w-100" src="{{ asset('frontend/img/thumb/product-vixol.png')}}" alt=""></a>
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
                                @if(session()->get('language') == 'thai') 
                                <div>
                                    <h3>เครื่องดื่มที่ผลิตจาก<br> วัตถุดิบธรรมชาติ <strong>100%</strong>
                                    </h3>
                                    <p>เพื่อให้ได้รสชาติความอร่อยและคุณภาพที่เหนือกว่า มีให้เลือกหลากหลายดีกับสุขภาพในทุกๆวัน
                                    </p>
                                </div>
                                @else
                                <div>
                                    <p>Our beverages are made with 100% Natural ingredients to indulge the superior taste and quality. Available in wide selection and good for health.</p>
                                </div>
                                @endif
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
                                @if(session()->get('language') == 'thai') 
                                <div>
                                    <h3>วิซ เติมเต็มความสุข ในบ้าน

                                    </h3>
                                    <p>กลิ่นหอมสบาย เป็นมิตรกับทุกคนในครอบครัว เพื่อเสริมบรรยากาศให้บ้านสดชื่น น่าอยู่
                                    </p>
                                </div>
                                @else
                                <div>
                                    <h3>Whiz, fulfilling happiness in your home. </h3>
                                    <p>A fresh fragrance which is friendly for all family members, helps to bring out the refreshing ambience to your home. </p>
                                </div>
                                @endif
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
                                @if(session()->get('language') == 'thai') 
                                <div>
                                    <h3>เสน่ห์ หอม เป็นตัวเอง</h3>
                                    <p>ด้วยแรงบันดาลใจจากน้ำหอมคุณภาพ ชั้นนำจากทั่วโลก เพิ่มเสน่ห์ดึงตัวตน ของสาวแต่ละสไตล์

                                    </p>
                                </div>
                                @else
                                <div>
                                    <h3>Be yourself, Be Charming </h3>
                                    <p>Inspired by leading perfumes from around the world, enhancing the unique charming of every woman.</p>
                                </div>
                                @endif
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
                                @if(session()->get('language') == 'thai') 
                                <div>
                                    <h3>เท่ เป็นตัวเอง </h3>
                                    <p>ให้คุณใช้ชีวิต ACTIVE ได้อย่างมั่นใจ ไม่ว่าเจอสถานการณ์แบบไหนก็เอาอยู่
                                    </p>
                                </div>
                                @else
                                <div>
                                    <h3>Unique and Be yourself, </h3>
                                    <p>live the active lifestyle confidently and be in control in any situation. </p>
                                </div>
                                @endif
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




@endsection