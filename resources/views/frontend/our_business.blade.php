@extends('frontend.main_master')
@section('title')
Our Business | I.P. ONE
@endsection
@section('content')
<link href="{{ asset('frontend/css/gmap.css')}}" rel="stylesheet">
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<style>
    .more-info {
        display: none;
    }
</style>

<div class="section section-banner " >
    <div class="title-rotate d-none d-lg-block white wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; margin-top:20px;">
        <span class="group" style="margin-top:100px;">    
        <span>O<br>U<br>R<br><br>  B<br>U<br>S<br>I<br>N<br>E<br>S<br>S</span>
        </span>

    </div>
    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-1920x820--1.jpg')}}" alt="IP ONE">
</div>
<!--section-banner-->

<div class="section section-ourbusiness bg-blue">
<div class="container-fluid">

    <div class="article">
        <div class="section-title wow fadeIn">
            <h2 class="title-lg d-flex wow fadeInUp">
                
                @if(session()->get('language') == 'thai')    
                กลุ่มบริษัท <span class="yellow">ไอ.พี.</span><span class="icons icon-heart"></span>
                @elseif(session()->get('language') == 'english') 
                <span class="yellow">I.P GROUP</span><span class="icons icon-heart"></span>
                @elseif(session()->get('language') == 'chinese') 
                <span class="yellow">I.P GROUP</span><span class="icons icon-heart"></span>
                @endif
            </h2>
        </div>

        <p class=" wow fadeInUp">
        @if(session()->get('language') == 'thai')     
        เรามีบริษัทในกลุ่มที่พร้อมสนับสนุนและเพิ่มศักยภาพให้สามารถตอบสนองความต้องการของผู้บริโภคได้อย่างทั่วถึง<br class="d-none d-xl-block"> และ มีประสิทธิภาพมากที่สุด ปัจจุบันธุรกิจในกลุ่มบริษัทไอ.พี. เจริญก้าวหน้าและครอบคลุม กลุ่มธุรกิจอีกหลายประเภทดังนี้
        @elseif(session()->get('language') == 'english') 
        เรามีบริษัทในกลุ่มที่พร้อมสนับสนุนและเพิ่มศักยภาพให้สามารถตอบสนองความต้องการของผู้บริโภคได้อย่างทั่วถึง<br class="d-none d-xl-block"> และ มีประสิทธิภาพมากที่สุด ปัจจุบันธุรกิจในกลุ่มบริษัทไอ.พี. เจริญก้าวหน้าและครอบคลุม กลุ่มธุรกิจอีกหลายประเภทดังนี้
        @elseif(session()->get('language') == 'chinese') 
        เรามีบริษัทในกลุ่มที่พร้อมสนับสนุนและเพิ่มศักยภาพให้สามารถตอบสนองความต้องการของผู้บริโภคได้อย่างทั่วถึง<br class="d-none d-xl-block"> และ มีประสิทธิภาพมากที่สุด ปัจจุบันธุรกิจในกลุ่มบริษัทไอ.พี. เจริญก้าวหน้าและครอบคลุม กลุ่มธุรกิจอีกหลายประเภทดังนี้
        @endif
            
        
    
    </p>
    </div>
    <!--article-->
</div>

<div class="custom-shape-divider-bottom-1657270548">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
</div>
<!--section-ourbusiness-->

<div class="section section-ourbusiness" style="margin-top:-1px;">
    <div class="container-fluid">
        <div class="card-company">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp">
                <img class="w-100" src="{{ asset('frontend/img/thumb/photo-ourbusiness--1.png')}}" alt="IP ONE">
                </div>
                <!--col-lg-6-->
                <div class="col-lg-6 my-auto wow fadeIn">

                    <div class="card-body">

                        <h3>
                            
                            @if(session()->get('language') == 'thai')    
                            บริษัท ไอ.พี. วัน จำกัด
                            @elseif(session()->get('language') == 'english') 
                            I.P. One Co., Ltd.
                            @elseif(session()->get('language') == 'chinese') 
                            I.P. One Co., Ltd.
                            @endif

                        </h3>
                        <p class="infos">
                            ก่อตั้งขึ้นเมื่อปี พ.ศ. 2515 ประกอบธุรกิจจัดจำหน่ายสินค้า อุปโภคบริโภค ภายใต้แบรนด์ ไฮยีน วิกซอล วิซ แดนซ์ โฟกัส และไอวี่


                        </p>
                        <div class="more-info" id="more-info1">
                           
                            @if(session()->get('language') == 'thai')    
                            <p>
                                มีช่องทางการจัดจำหน่ายครอบคลุมพื้นที่ทั่วประเทศ แบ่งเป็นร้านค้าปลีกส่งแบบดั้งเดิม (Traditional Trade) ร้านสะดวกซื้อ และช่องทาง พิเศษอื่นๆ
                            </p>
                            @elseif(session()->get('language') == 'english') 
                            <p>
                                มีช่องทางการจัดจำหน่ายครอบคลุมพื้นที่ทั่วประเทศ แบ่งเป็นร้านค้าปลีกส่งแบบดั้งเดิม (Traditional Trade) ร้านสะดวกซื้อ และช่องทาง พิเศษอื่นๆ
                            </p>
                            @elseif(session()->get('language') == 'chinese') 
                            <p>
                                มีช่องทางการจัดจำหน่ายครอบคลุมพื้นที่ทั่วประเทศ แบ่งเป็นร้านค้าปลีกส่งแบบดั้งเดิม (Traditional Trade) ร้านสะดวกซื้อ และช่องทาง พิเศษอื่นๆ
                            </p>
                            @endif

                            <div class="map-info">
                                <p><span class="icons icon-pin"></span>
                                @if(session()->get('language') == 'thai')    
                                65 ถนนรามคำแหง แขวงสะพานสูง เขตสะพานสูง กรุงเทพฯ 10240 
                                @elseif(session()->get('language') == 'english') 
                                65 Ramkamhaeng Road, Sapan-Sung Sub-district, Sapan-Sung District, Bangkok 10240
                                @elseif(session()->get('language') == 'chinese')
                                65 Ramkamhaeng Road, Sapan-Sung Sub-district, Sapan-Sung District, Bangkok 10240
                                @endif

                               </p>
                                <p><span class="icons icon-phone"></span>(02) 372 3461-79</p>
                                <p><span class="icons icon-fax"></span>(02) 372 3481</p>
                            </div>
                        </div>

                        <button class="btn" onclick="showDetail(this,'more-info1')">
                        @if(session()->get('language') == 'thai') 
                        ดูรายละเอียด
                        @elseif(session()->get('language') == 'english') 
                        ดูรายละเอียด
                        @elseif(session()->get('language') == 'chinese')
                        ดูรายละเอียด
                        @endif

                        </button>




                    </div>
                    <!--card-body-->

                </div>
                <!--col-lg-6-->
            </div>
            <!--row-->
        </div>
        <!--card-company-->

        <div class="card-company">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 wow fadeInUp">
                    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-ourbusiness--2.png')}}" alt="IP ONE">
                </div>
                <!--col-lg-6-->
                <div class="col-lg-6 my-auto wow fadeIn">
                    <div class="card-body">
                        <h3>บริษัท ไอ.พี. วัน จำกัด (บางปู)</h3>
                        <p class="infos">
                            ก่อตั้งขึ้นเมื่อปี พ.ศ. 2515 ประกอบธุรกิจผลิตสินค้าอุปโภคบริโภคภายใต้แบรนด์<br class="d-none d-xl-block"> ไฮยีน วิกซอล วิซ แดนซ์ โฟกัส และไอวี่
                        </p>

                        <div class="more-info" id="more-info2">
                            <p>
                                โรงงานของเราเป็นโรงงานของคนไทย ด้วยความมุ่งมั่นอย่างแรงกล้า ที่อยากเห็นคนไทยได้ใช้สินค้าที่มีคุณภาพ เพื่อยกระดับคุณภาพชีวิตของ คนไทยในทุกครัวเรือนเราจึงตั้งใจพิถีพิถันในทุกขั้นตอน ตั้งแต่การวิจัย และพัฒนาผลิตภัณฑ์ การออกแบบ การใช้เครื่องจักรที่ทันสมัยในทุก
                                ขั้นตอนการผลิตที่เน้นเรื่องคุณภาพ และความปลอดภัยต่อพนักงานจน ถึงผู้บริโภค<br/><br/> โรงงานของเราใส่ใจต่อสิ่งแวดล้อม และรับผิดชอบต่อสังคม จึงเลือกใช้ วัตถุดิบที่สามารถย่อยสลายได้ในธรรมชาติ
                                (Biodegradable ingredients) เป็นรายแรกๆ ในเอเชีย และใช้พลังงานสะอาดจาก Solar roof ควบคู่ไปพร้อม ๆ กับการอนุรักษ์การใช้น้ำอย่างรู้คุณค่า และรักษา พื้นที่สีเขียวในโรงงานให้ได้มากที่สุด<br/><br/> ในวันพรุ่งนี้ของทุก
                                ๆ วัน เราจะไม่หยุดสร้างสรรค์ และผลิตสินค้าที่มี คุณภาพ ด้วยวิสัยทัศน์ที่แน่วแน่ “มุ่งมั่น สร้างสรรค์นวัตกรรม เพื่ออนาคตการใช้ชีวิตที่ดีขึ้น” (INNOVATE PASSIONATELY FOR THE FUTURE OF BETTER LIVING.) ด้วยความภาคภูมิใจ
                                ของคนไทย
                            </p>
                            <div class="map-info">
                                <p><span class="icons icon-pin"></span>319 หมู่ 4 นิคมอุตสาหกรรมบางปู ซอย 6 ถนนสุขุมวิท อำเภอเมืองสมุทรปราการ จังหวัดสมุทรปราการ 10280 </p>
                                <p><span class="icons icon-phone"></span>(02) 709 3955</p>
                                <p><span class="icons icon-fax"></span>(02) 709 3964</p>
                            </div>
                        </div>

                        <button class="btn btn-yellow" onclick="showDetail(this,'more-info2')">ดูรายละเอียด</button>


                    </div>
                    <!--card-body-->

                </div>
                <!--col-lg-6-->
            </div>
            <!--row-->
        </div>
        <!--card-company-->

        <div class="card-company">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp">
                    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-ourbusiness--3.png')}}" alt="IP ONE">
                </div>
                <!--col-lg-6-->
                <div class="col-lg-6 my-auto wow fadeIn">
                    <div class="card-body">
                        <h3>บริษัท ไอ.พี. เนเชอรัล โปรดักส์ จำกัด</h3>
                        <p class="infos">
                            ก่อตั้งเมื่อปี พ.ศ. 2562 ในชื่อโครงการ I factory in the forest (IFIF) <br class="d-none d-xl-block"> ประกอบธุรกิจผลิตนมเปรี้ยวพร้อมดื่มบรรจุกล่องแบบ UHT ภายใต้แบรนด์สินค้า Ivy

                        </p>

                        <div class="more-info" id="more-info3">
                            <p>
                                ไอ.พี. เนเชอรัล โปรดักส์ จำกัด เป็นหนึ่งในกลุ่มบริษัท ไอ.พี. วัน จำกัด ซึ่งเป็นโรงงานของคนไทย ด้วยความมุ่งมั่นอยากให้คนไทยได้กินของอร่อย มีคุณภาพ เราจึงพิถีพิถันในทุกขั้นตอนตั้งแต่การวิจัยและพัฒนา การใช้เครื่องจักรที่ทันสมัย การเลือกใช้วัตถุดิบ และไม่ใช้สีผสมอาหาร
                                เพื่อคุณภาพและความปลอดภัยของพนักงานจนถึงผู้บริโภค ตลอดจนสร้างสรรค์นวัตกรรมและรสชาติใหม่ๆ เข้าไปในผลิตภัณฑ์ Ivy<br/><br/> โรงงานของเรายังมีความใส่ใจในสิ่งแวดล้อม และรับผิดชอบต่อสังคม
                                มีการใช้พลังงานไฟฟ้าจาก Solar roof ควบคู่ไปกับใช้ทรัพยากรน้ำอย่างรู้คุณค่า และรักษาพื้นที่สีเขียวในโรงงานให้เหลือมากที่สุด มีการพึ่งพาอาศัยกันระหว่างชุนชนและโรงงาน ในปี 2564 เรายังได้รับรางวัลธรรมาภิบาลสิ่งแวดล้อมอีกด้วย
                                <br/><br/> เราจะไม่หยุดสร้างสรรค์ และผลิตสินค้าที่มีคุณภาพ และจะมีส่วนในการสร้างงาน รวมทั้งจะเป็นศูนย์กลางการเรียนรู้ ด้วยวิสัยทัศน์ที่แน่วแน่ของกลุ่มบริษัท ไอ.พี. วัน จำกัด มุ่งมั่น สร้างสรรค์นวัตกรรมเพื่ออนาคตที่ดีขึ้น
                                INNOVATE PASSIONATELY FOR THE FUTURE OF BETTER LIVING ด้วยความภาคภูมิใจ โรงงานของคนไทย

                            </p>
                            <div class="map-info">
                                <p><span class="icons icon-pin"></span>210 หมู่ 12 ตำบลแปลงยาว อำเภอแปลงยาว จังหวัดฉะเชิงเทรา 21490 </p>
                                <p><span class="icons icon-phone"></span>(038) 575 931</p>
                            </div>
                        </div>

                        <button class="btn" onclick="showDetail(this,'more-info3')">ดูรายละเอียด</button>

                    </div>
                    <!--card-body-->

                </div>
                <!--col-lg-6-->
            </div>
            <!--row-->
        </div>
        <!--card-company-->

        <div class="card-company">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 wow fadeInUp">
                    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-ourbusiness--4.png')}}" alt="IP ONE">
                </div>
                <!--col-lg-6-->
                <div class="col-lg-6 my-auto wow fadeIn">
                    <div class="card-body">
                        <img class="flag" src="img/flag/mm.svg" alt="">
                        <h3>บริษัท ไอ. พี. วัน (ประเทศพม่า) จำกัด</h3>
                        <p class="infos">
                            ก่อตั้งขึ้นเมื่อปี ค.ศ. 2018 โดยมีวัตถุประสงค์ที่จะจัดจำหน่ายสินค้าของ บจก.ไอ.พี.วัน สำนักงานใหญ่ เพื่อให้ครอบคลุมและเป็นที่รู้จักทั่วประเทศพม่า

                        </p>

                        <div class="more-info" id="more-info4">
                            <p>
                                โดยมีเป้าหมายที่จะเป็นเจ้าตลาดของสินค้าน้ำยาปรับผ้านุ่มสูตรเข้มข้น และ โยเกริต์พร้อมดื่ม
                            </p>
                            <div class="map-info">
                                <p><span class="icons icon-pin"></span>57 Corner of Pyay Road&Shewe Hinn Thar Street, 6.5Mile, Hlaing Township,Yangon.
                                </p>
                                <p><span class="icons icon-phone"></span>(+95) 1 753 2949</p>
                                <p><span class="icons icon-email"></span>pudol.s@ip-one.com</p>
                            </div>
                        </div>

                        <button class="btn btn-yellow" onclick="showDetail(this,'more-info4')">ดูรายละเอียด</button>


                    </div>
                    <!--card-body-->
                </div>
                <!--col-lg-6-->
            </div>
            <!--row-->
        </div>
        <!--card-company-->

        <div class="card-company">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp">
                    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-ourbusiness--5.png')}}" alt="IP ONE">
                </div>
                <!--col-lg-6-->
                <div class="col-lg-6 my-auto wow fadeIn">
                    <div class="card-body">
                        <img class="flag" src="img/flag/vn.svg" alt="">
                        <h3>บริษัท ไอ.พี. เวียดนาม จำกัด</h3>
                        <p class="infos">
                            ก่อตั้งขึ้นเมื่อปี ค.ศ.2012 โดยมีวัตถุประสงค์ที่จะจัดจำหน่ายสินค้าของ บจก.ไอ.พี.วัน สำนักงานใหญ่ เพื่อให้ครอบคลุมและเป็นที่รู้จักทั่วประเทศเวียดนาม

                        </p>

                        <div class="more-info" id="more-info5">
                            <p>
                                โดยต้องการที่จะเป็นฐานการผลิตอีกแห่งหนึ่ง เพื่อจะรองรับการขยายสินค้าไปยังประเทศต่างๆทั่วโลก
                            </p>
                            <div class="map-info">
                                <p><span class="icons icon-pin"></span>8th Floor, Bach Building, 111 Ly Chinh Thang Street, Vo Thi Sau Ward, District 3, Ho Chi Minh City, Vietnam
                                </p>
                                <p><span class="icons icon-phone"></span>(+84) 283 526 1071</p>
                                <p><span class="icons icon-email"></span>quy.le@ip-one.com</p>
                            </div>
                        </div>

                        <button class="btn" onclick="showDetail(this,'more-info5')">ดูรายละเอียด</button>

                    </div>
                    <!--card-body-->
                </div>
                <!--col-lg-6-->
            </div>
            <!--row-->
        </div>
        <!--card-company-->

    </div>
    <!--container-->

    <div class="element-animate business">
        <img class="img1 wow fadeInUp" data-wow-delay="0.5s" src="{{ asset('frontend/img/thumb/business-shape--1.png')}}" alt="IP ONE">
        <img class="img3 wow fadeInUp" data-wow-delay="0.3s" src="{{ asset('frontend/img/thumb/business-shape--3.png')}}" alt="IP ONE">
        <img class="img2 wow fadeInUp" data-wow-delay="0.1s" src="{{ asset('frontend/img/thumb/business-shape--2.png')}}" alt="IP ONE">
    </div>
    <!--element-animate-->
</div>
<!--section-ourbusiness-->
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



        function showDetail(e, obj) {
            var elm = document.getElementById(obj);
            var btn = e;
            // (elm.style.display == 'none') ?'block' :'none'
            if (elm.style.display == 'block') {
                elm.style.display = 'none';
                btn.innerHTML = "ดูรายละเอียด"
            } else {
                elm.style.display = 'block';
                btn.innerHTML = "ปิด"
            }
        };
    </script>

@endsection