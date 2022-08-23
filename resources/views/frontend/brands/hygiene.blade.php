@extends('frontend.main_master')
@section('title')
Hygiene | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner hygiene wow fadeInUp" data-bg="header-trans-black">
    <img class="w-100" src="{{asset('frontend/img/thumb/hygiene/photo-1920x1380.jpg')}}" alt="Hygiene">

    <div class="banner-caption hygiene">
        <div class="logo" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(200px) translateZ(0);">
            <img class="w-100" src="{{asset('frontend/img/thumb/hygiene/logo.png')}}" alt="Hygiene">
        </div>
        <div class="caption" data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);">
            @if(session()->get('language') == 'thai') 
            <h3>ผู้เชี่ยวชาญด้านการดูแลผ้า<br> ครบทุกขั้นตอน</h3>
            @else
            <h3>FABRIC CARE EXPERT <br>FOR ALL STEPS</h3>
            @endif
            
            <p>THE EXPERT IN FABRIC CARE </p>
        </div>
    </div><!--banner-caption-->

    <div class="scrolldown wow fadeInUp">
        <a class="target" href="#s_video">
            S<br>C<br>R<br>O<br>L<br>L<br>D<br>O<br>W<br>N
            <span class="icons"><span class="arrow-down"></span>
        </a>
    </div>
</div><!--section-->

<div id="s_video" class="section section-hygiene video" data-bg="header-white"  >
    <div class="container">
        <div class="swiper-overflow video wow fadeInUp">
            <div class="swiper-container swiper-video"> 
                <div class="swiper-wrapper" style="height:auto;">

                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/poHFy4DDm38" title="Hygiene campaign" allowfullscreen ></iframe>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/poHFy4DDm38" title="Hygiene campaign" allowfullscreen ></iframe>
                        </div>
                    </div>
                  
                    
                </div><!--swiper-wrapper-->
                
            </div><!--swiper-container-->
          
            <div class="swiper-pagination video normal"></div>
            <div class="swiper-button swiper-button-prev video normal"></div> 
            <div class="swiper-button swiper-button-next video normal"></div>
           
        </div><!--swiper-overflow-->
    </div><!--container-->

    <div class="bubble"></div>
</div>

    <div class="section section-hygiene laundry" data-bg="header-white">
        <div class="container-fluid">
            <div class="article laundry top">
                <div class="inner"> 
                    <h2 class="wow fadeInUp">THE RIGHT WAY TO DO LAUNDRY</h2>
                    <h3 class="wow fadeInUp " data-wow-delay="0.2s">
                        @if(session()->get('language') == 'thai') 
                        <span>นวัตกรรมเพื่อการ<br class="d-block d-sm-none">ดูแลผ้าครบทุกขั้นตอน</span>
                        @else
                        <span>Innovation for all steps <br class="d-block d-sm-none">of fabric care</span>
                        @endif
                    </h3>


                    <p class="wow fadeInUp mb-0" data-wow-delay="0.4s">
                       @if(session()->get('language') == 'thai') 
                        <strong>" ไฮยีน "</strong> เป็นผู้เชี่ยวชาญการดูแลผ้า เพียบพร้อมด้วยประสบการณ์กว่า 30 ปี <br class="d-none d-md-block">
                        และเป็นแบรนด์เดียวที่มีผลิตภัณฑ์การดูแลผ้าครบทุกขั้นตอน <br class="d-none d-md-block">
                        ช่วยให้การดูแลผ้าสมบูรณ์แบบ และเป็นเรื่องง่าย
                        @else
                        <strong>" Hygiene "</strong> the fabric care expert. With over 30 years of experience. <br class="d-none d-md-block">
                        Offers complete process of  fabric care products  <br class="d-none d-md-block">
                        for perfect care of fabrics.
                        @endif
                    </p>

                            
                </div>
                <div class="circle wow fadeInUp" data-wow-delay="0.8s"></div>
            </div><!--article-->
        </div>
    </div>

    <div class="section section-hygiene laundry" data-bg="header-blue"> 
        <div class="container-fluid"> 
            <div class="hygiene-steps">
                <ul class="box-steps wow fadeInUp d-none d-lg-block d-xl-block"> 
                    <li></li>
                </ul>

                <p class="wow fadeInUp">
                    <img src="{{asset('frontend/img/thumb/hygiene/step/steps-mobile.png')}}" class="d-block d-sm-none th" width="100%" />
                    <img src="{{asset('frontend/img/thumb/hygiene/step/steps-mobile-en.png')}}" class="d-block d-sm-none en" width="100%" />
                </p>

                <ul class="hygiene-steps-info d-none d-lg-block d-xl-block">
                    <li class="wow fadeIn">
                        <div class="number wow fadeInUp" data-wow-delay="0.4s">1</div>
                        @if(session()->get('language') == 'thai') 
                        <div>
                            <h3>ขจัดคราบ<br>
                                ฝังแน่นได้หมดจด
                            </h3>
                            <p>คืนความสะอาดสดใส<br>
                                ทั้งผ้าสีและผ้าขาว</p>
                        </div>
                        @else
                        <div>
                            <h3>
                                Stains Remover <br>Fabric
                            </h3>
                            <p>Give cleanliness and <br>brightness for both colored <br>and white fabrics.</p>
                        </div>
                        @endif
                    </li>

                    <li class="wow fadeIn">
                        <div class="number wow fadeInUp" data-wow-delay="0.4s">2</div>
                        @if(session()->get('language') == 'thai') 
                        <div>
                            <h3>ซักสะอาด</h3>
                            <p>เทคโนโลยีเพื่อผ้าสะอาดล้ำลึก <br>
                                หอมสดชื่นทุกการเคลื่อนไหว</p>
                        </div>
                        @else
                        <div>
                            <h3>Expert Wash</h3>
                            <p>
                                Technology for washing <br>
                                with fresh scent for <br>
                                every movement
                            </p>
                        </div>
                        @endif
                    </li>

                    <li class="wow fadeIn">
                        <div class="number wow fadeInUp" data-wow-delay="0.4s">3</div>
                        @if(session()->get('language') == 'thai') 
                        <div>
                            <h3>ผ้านุ่มฟูน่าสัมผัส</h3>
                            <p>กลิ่นหอมยาวนาน <br>
                                พร้อมนวัตกรรมการดูแลผ้า<br>
                                ที่สมบูรณ์แบบ
                            </p>
                        </div>
                        @else
                        <div>
                            <h3>Soft and fluffy</h3>
                            <p>fabric that is pleasant <br/>
                                to the touch.Long-lasting <br/>
                                fragrance with perfect care.
                            </p>
                        </div>
                        @endif
                    </li>

                    <li class="wow fadeIn">
                        <div class="number wow fadeInUp" data-wow-delay="0.4s">4</div>
                        @if(session()->get('language') == 'thai') 
                        <div>
                            <h3>ให้ผ้ารีดลื่น </h3>
                            <p>รีดเรียบเร็ว อยู่ทรง</p>
                        </div>
                        @else
                        <div>
                            <h3>Easy to iron</h3>
                            <p>smooth, fast ironing.</p>
                        </div>
                        @endif
                    </li>

                    <li class="wow fadeIn">
                        <div class="number wow fadeInUp" data-wow-delay="0.4s">5</div>
                        @if(session()->get('language') == 'thai') 
                        <div>
                            <h3>เก็บความหอม<br>
                                พร้อมไปต่อ
                                </h3>
                            <p>หอมยาวนาน ลดรอยยับ<br>
                                พร้อมไปต่อ</p>
                        </div>
                        @else
                        <div>
                            <h3>Keep the fragrance<br>ready to go</h3>
                            <p>Long-lasting fragrance, <br>reduce wrinkles</p>
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div><!--container-->
    </div><!--section-->

    <div class="section section-hygiene softener" data-bg="header-white">
        <div class="row">
            <div class="col-lg-6">
                <div class="hygiene-images softener">
                    <div class="shirt">
                        <img data-bottom-top="transform: translateY(-200px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/softener/shirt.png')}}" alt="Hygiene">
                    </div>
                    <div class="tank">
                        <img data-bottom-top="transform: translateY(-50px) translateZ(0);" data-top-bottom="transform: translateY(50px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/softener/bg.png')}}" alt="Hygiene">
                    </div>
                    <!-- <div class="flower">
                        <img data-bottom-top="transform: translateY(-50px) translateZ(0);" data-top-bottom="transform: translateY(50px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/softener/flower.svg')}}" alt="Hygiene">
                    </div> -->
                    <div class="product">
                        <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/softener/product.png')}}" alt="Hygiene">
                    </div>
                    <div class="p_shadow">
                        <img src="{{asset('frontend/img/thumb/hygiene/softener/shadow.png')}}" alt="Hygiene">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="article wow fadeInUp">
                    <h2>
                        @if(session()->get('language') == 'thai') 
                        <span>ปรับผ้านุ่มหอม</span>
                        @else 
                        <span>Fabric softener</span>
                        @endif
                    </h2>
                    <h4>FABRIC SOFTENER</h4>
                    <H6>
                        @if(session()->get('language') == 'thai') 
                        <span>ผลิตภัณฑ์ปรับผ้านุ่มไฮยีน</span>
                        @else
                        <span>Hygiene fabric softener</span>
                        @endif
                    </H6>
                        @if(session()->get('language') == 'thai') 
                        <p> 
                            ให้ผ้านุ่มฟูน่าสัมผัส พร้อมกลิ่นหอมยาวนาน <br>
                            ครั้งแรกของนวัตกรรมการดูแลผ้าที่สมบูรณ์แบบ  <br>
                            ตอบทุกไลฟ์สไตล์การใส่เสื้อผ้า ปกป้องและคงความหอมต่อเนื่องยาวนาน
                        </p>
                        @else
                        <p> 
                            or soft and fluffy fabric with a long-lasting <br>
                            fragrance the first innovation of perfect care <br>
                            for fabrics. For every lifestyle of  clothes. 
                        </p>
                        @endif
                    <div class="buttons">
                        <a class="btn" href="hygiene-subcategory.html">
                            @if(session()->get('language') == 'thai') 
                            <span>ดูรายละเอียด</span>
                            @else
                            <span>READ MORE</span>
                            @endif
                        </a>
                    </div>
                </div><!--article-->
                
            </div><!--col-md-6-->
        </div><!--row-->
    </div><!--section-hygiene-->

    <div class="section section-hygiene liquid" data-bg="header-white">
        <div class="row">
            <div class="col-lg-6">
                <div class="hygiene-images liquid">
                    <div class="shirt">
                        <img data-bottom-top="transform: translateY(-200px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/liquid/shirt.png')}}" alt="Hygiene">
                    </div>
                    <div class="tank wow fadeInUp">
                        <img src="{{asset('frontend/img/thumb/hygiene/liquid/tank.svg')}}" alt="Hygiene">
                    </div>
                    <div class="star wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('frontend/img/thumb/hygiene/liquid/stars.svg')}}" alt="Hygiene">
                    </div>
                    <div class="product">
                        <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/liquid/product.png')}}" alt="Hygiene">
                    </div>
                    <div class="p_shadow">
                        <img src="{{asset('frontend/img/thumb/hygiene/shadow.png')}}" alt="Hygiene">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="article liquid wow fadeInUp">
                    <div class="hgroup">
                        <h2>
                           @if(session()->get('language') == 'thai')
                            <span>ซักสะอาด</span>
                           @else 
                            <span>Expert Wash</span>
                           @endif 
                        </h2>
                        <h4>LIQUID DETERGENT</h4>
                    </div>
                    
                    <H6>
                        @if(session()->get('language') == 'thai')
                        <span>ผลิตภัณฑ์ซักผ้าชนิดน้ำไฮยีน</span>
                        @else
                        <span>Hygiene Expert Wash</span>
                        @endif
                    </H6>
                    @if(session()->get('language') == 'thai')
                    <p> 
                        มิติใหม่ของการซักผ้า เทคโนโลยีเพื่อผ้าสะอาดล้ำลึก<br>
                        ช่วยขจัดคราบหนักและทุกกลิ่นติดแน่น<br>
                        พร้อมปล่อยพลังความหอมปกป้องให้เสื้อผ้าของคุณ<br>
                        หอมสดชื่นทุกการเคลื่อนไหว
                        
                    </p>
                    @else
                    <p> 
                        A new way of liquid detergent technology <br>
                        for deep cleaning, remove heavy stains and all odors. <br>
                        With a long-lasting fragrance to protect your clothes. <br>
                        Fresh scent with every movement
                        
                    </p>
                    @endif
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
            </div><!--col-md-6-->
        </div><!--row-->
    </div><!--section-hygiene-->

    <div class="section section-hygiene pretreat" data-bg="header-white">
        <div class="row flex-row-reverse">
            <div class="col-lg-6">
                <div class="hygiene-images pretreat">
                    <div class="shirt">
                        <img data-bottom-top="transform: translateY(-200px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);"  src="{{asset('frontend/img/thumb/hygiene/pretreat/shirt.png')}}" alt="Hygiene">
                    </div> 
                    <div class="triangle wow fadeInUp">
                        <img src="{{asset('frontend/img/thumb/hygiene/pretreat/triangle.svg')}}" alt="Hygiene">
                    </div> 
                    <div class="line wow fadeIn">
                        <img src="{{asset('frontend/img/thumb/hygiene/pretreat/line.svg')}}" alt="Hygiene">
                    </div> 
                    <div class="flower wow fadeInUp">
                        <img src="{{asset('frontend/img/thumb/hygiene/pretreat/flower.svg')}}" alt="Hygiene">
                    </div> 
                    <div class="product">
                        <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/pretreat/product.png')}}" alt="Hygiene">
                    </div> 
                    <div class="p_shadow">
                        <img src="{{asset('frontend/img/thumb/hygiene/shadow.png')}}" alt="Hygiene">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="article pretreat wow fadeInUp">
                    <h2 class="yellow">
                        @if(session()->get('language') == 'thai')
                        <span>ขจัดคราบ</span>
                        @else
                        <span>Remove stains</span>
                        @endif
                    </h2>
                    <h4>PRE TREAT</h4>
                    <H6>
                        @if(session()->get('language') == 'thai')
                        <span>ผลิตภัณฑ์ขจัดคราบไฮยีน</span>
                        @else
                        <span>Hygiene Remove stains</span>
                        @endif
                    </H6>
                    @if(session()->get('language') == 'thai')
                    <p> 
                        ช่วยขจัดรอยเปื้อน และคราบสกปรกฝังแน่น<br>
                        ที่ติดเส้นใยผ้าได้หลากหลาย พร้อมขจัดกลิ่นอับบนเสื้อผ้า<br>
                        คืนความสะอาดสดใสทั้งผ้าสีและผ้าขาว
                    </p>
                    @else
                    <p> 
                        Removed the stain and dirt for different fabric <br>
                        Give a cleanliness and brightness for <br>
                        both colored and white fabrics.
                    </p>
                    @endif
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
            </div><!--col-md-6-->
        </div><!--row-->
    </div><!--section-hygiene-->


    <div class="section section-hygiene starch" data-bg="header-white">
        <div class="article left starch wow fadeInUp"> 
            <div class="hgroup">
                <h2 class="yellow wow fadeInUp">
                    @if(session()->get('language') == 'thai')
                    <span>รีดเรียบเร็ว</span>
                    @else
                    <span>Fast Ironing Spray</span>
                    @endif
                </h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.2s">STARCH</h4>
            </div> 
        </div>
        <div class="row">
                
            <div class="col-lg-6 ms-auto center">
                <div class="hygiene-images starch">
                    <div class="shirt">
                        <img data-bottom-top="transform: translateY(-200px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/starch/shirt.png')}}" alt="Hygiene">
                    </div>
                    <div class="iron wow fadeInUp">
                        <img src="{{asset('frontend/img/thumb/hygiene/starch/iron.svg')}}" alt="">
                    </div>
                    <div class="line wow fadeInUp" data-wow-delay="0.2s">
                        <img data-bottom-top="transform: translateY(140px) translateZ(0);" data-top-bottom="transform: translateY(-140px) translateZ(0);"  src="{{asset('frontend/img/thumb/hygiene/starch/line.svg')}}" alt="Hygiene">
                    </div>
                    <div class="product">
                        <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/starch/product.png')}}" alt="Hygiene">
                    </div>
                    <div class="p_shadow">
                        <img src="{{asset('frontend/img/thumb/hygiene/shadow.png')}}" alt="Hygiene">
                    </div>
                </div>
            </div> 
            <div class="col-xl-4 col-lg-5 ">
                
                <div class="article starch right wow fadeInUp">  
                    <div class="hgroup d-block d-lg-none">
                        <h2 class="yellow">
                            @if(session()->get('language') == 'thai')
                            <span>รีดเรียบเร็ว</span>
                            @else
                            <span>Fast Ironing Spray</span>
                            @endif
                        </h2>
                        <h4>STARCH</h4>
                    </div>
                    <H6>
                        @if(session()->get('language') == 'thai')
                        <span>ผลิตภัณฑ์รีดเรียบและอัดกลีบไฮยีน</span>
                        @else
                        <span>Hygiene Ironing Spray</span>
                        @endif
                    </H6>
                    @if(session()->get('language') == 'thai')
                    <p>   
                        มอบคุณสมบัติพิเศษของการรีดและดูแลผ้า
                        ช่วยให้ผ้าคลายตัว ทำให้รีดลื่น เรียบเร็ว 
                        อยู่ทรงนาน เหมาะกับผ้าทุกประเภท 
                        พร้อมคุณสมบัติพิเศษ ช่วยขจัดกลิ่นอับชื้น 
                        ให้ผ้าหอมสะอาดสดชื่น และป้องกันความร้อน
                        จากการรีด ให้ผ้าคงสีสันสดใส 
                        ช่วยให้งานรีดผ้ากองใหญ่ เป็นเรื่องง่ายยิ่งขึ้น
                    </p>
                    @else
                    <p>   
                        Provides special features of ironing and 
                        caring of fabrics with long-lasting smooth, 
                        suitable for all types of fabrics.  
                        Prevent heat from ironing to keep 
                        the fabric bright.
                    </p>
                    @endif
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
            </div><!--col-lg-6-->
        </div><!--row-->
    </div><!--section-hygiene-->

    <div class="section section-hygiene ready" data-bg="header-white">
        <div class="article left ready wow fadeInUp"> 
            <h6>
               @if(session()->get('language') == 'thai')
                <span>ผลิตภัณฑ์ถุงหอม <br>
                และผลิตภัณฑ์สเปรย์หอม<br>
                ปรับผ้าเรียบเร็วไฮยีน
                </span>
                @else
                <span>Scented bag <br>and fast starching spray 
                </span>
                @endif
            </h6>
            @if(session()->get('language') == 'thai')
            <p>   
                ตอบครบทุกความต้องการจัดเก็บเสื้อผ้า<br>
                ให้ผ้าหอมหอมมั่นใจ ขจัดกลิ่นไม่พึงประสงค์<br>
                ช่วยลดรอยยับจากจัดเก็บ<br>
                และรอยยับระหว่างสวมใส่   ให้ความหอม<br>
                พร้อมไปต่อทุกสถานการณ์
            </p>
            @else
            <p>   
                The answer for all needs of storing clothes <br>
                to make the confident with good scents <br>
                eliminate odors, reduces creases from <br>
                storage and during the day. ready <br>
                for every situation.
            </p>
            @endif
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
        <div class="row"> 
            <div class="col-lg-6 mx-auto center">
                <div class="hygiene-images ready">
                    <div class="shirt">
                        <img data-bottom-top="transform: translateY(-100px) translateZ(0);" data-top-bottom="transform: translateY(100px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/ready/shirt.png')}}" alt="Hygiene">
                    </div>
                    <div class="window wow fadeInUp">
                        <img src="{{asset('frontend/img/thumb/hygiene/ready/window.svg')}}" alt="Hygiene">
                    </div> 
                    <div class="product">
                        <img data-bottom-top="transform: translateY(100px) translateZ(0);" data-top-bottom="transform: translateY(-80px) translateZ(0);" src="{{asset('frontend/img/thumb/hygiene/ready/product.png')}}" alt="Hygiene">
                    </div>
                    <div class="p_shadow">
                        <img src="{{asset('frontend/img/thumb/hygiene/shadow.png')}}" alt="Hygiene">
                    </div>
                </div>
            </div>  
        </div><!--row-->

        <div class="article ready right wow fadeInUp">  
            <div class="hgroup">
                <h2>
                    @if(session()->get('language') == 'thai')
                    <span>เก็บความหอม<br class="d-block d-md d-lg-block">พร้อมไปต่อ</span>
                    @else
                    <span>Keep the <br class="d-none d-lg-block d-xl-block">fragrance <br class="d-block d-md d-lg-block"> ready to go</span>
                    @endif
                </h2>
                <h4>STORE &<br class="d-none d-lg-block">READY TO GO</h4>
            </div>

            <div class="d-block d-lg-none">
                <h6>
                    @if(session()->get('language') == 'thai')
                    <span>ผลิตภัณฑ์ถุงหอม <br class="d-none d-lg-block">
                    และผลิตภัณฑ์สเปรย์หอม<br class="d-none d-lg-block">
                    ปรับผ้าเรียบเร็วไฮยีน
                    </span>
                    @else
                    <span>Scented bag <br class="d-none d-lg-block">
                        and fast starching spray
                    </span>
                    @endif
                </h6>
                @if(session()->get('language') == 'thai')
                <p>   
                    ตอบครบทุกความต้องการจัดเก็บเสื้อผ้า
                    ให้ผ้าหอมหอมมั่นใจ ขจัดกลิ่นไม่พึงประสงค์
                    ช่วยลดรอยยับจากจัดเก็บ
                    และรอยยับระหว่างสวมใส่   ให้ความหอม
                    พร้อมไปต่อทุกสถานการณ์
                </p>
                @else
                <p>   
                    The answer for all needs of storing clothes 
                    to make the confident with good scents 
                    eliminate odors, reduces creases from 
                    storage and during the day. ready for 
                    every situation.
                </p>
                @endif
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
    </div><!--section-hygiene-->

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