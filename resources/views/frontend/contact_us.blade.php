@extends('frontend.main_master')
@section('title')
Contact Us | I.P. ONE
@endsection
@section('content')
<link href="{{ asset('frontend/css/gmap.css')}}" rel="stylesheet">
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

<div class="section section-banner ">
    <div class="title-rotate d-none d-lg-block white wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; margin-top:120px;">
        <span class="group">    
        <span>C<br>O<br>N<br>T<br>A<br>C<br>T <br><br>U<br>S</span>
        </span>
    </div>
    <img class="w-100" src="{{ asset('frontend/img/thumb/photo-1920x890--1.jpg')}}" alt="">

    <div class="typing-banner">www.ip-one.com</div>
</div>
<!--section-banner-->
<div class="section section-contact">
    <div class="container-fluid">
        <div class="section-title wow fadeIn">
            <h2 class="title-lg d-flex">
                <span>{{ __("messages.contact-us.section_name")}}</span> <span class="icons icon-chat"></span></h2>
        </div>
    </div>

    <ul class="nav nav-tabs nav-contact-tabs">
        <li>
            <a href="#tab_thailand" data-bs-toggle="tab" class="active">
                <div class="icons icon-thailand"></div>
                <p>{{ __("messages.contact-us.country_name_tab1")}}</p>
            </a>
        </li>
        <li>
            <a href="#tab_myanmar" data-bs-toggle="tab" id="btn-myanmar">
                <div class="icons icon-myanmar"></div>
                <p>{{ __("messages.contact-us.country_name_tab2")}}</p>
            </a>
        </li>
        <li>
            <a href="#tab_vietnam" data-bs-toggle="tab" id="btn-vietnam">
                <div class="icons icon-vietnam"></div>
                <p>{{ __("messages.contact-us.country_name_tab3")}}</p>
            </a>
        </li>
    </ul>

    <div class="tab-content tab-map-content">
        <div id="tab_thailand" class="tab-pane show active">
            <div class="contact-box has-bg wow fadeIn">
                <div class="container-fluid">
                    <div class="cols">
                        <div class="googlemap" id="map1"></div>

                        
                    </div>
                    <!--cols-->
                    <div class="cols">
                        <div class="address">
                            <span class="icons icon-pin"></span>
                            <h3>
                                @if(session()->get('language') == 'thai') 
                                <span>บริษัท ไอ.พี. วัน จำกัด (สำนักงานใหญ่)</span>
                                @else 
                                <span>I.P. One Co., Ltd. (Headquarter)</span>
                                @endif
                            </h3>
                            <p>
                                
                                @if(session()->get('language') == 'thai') 
                                <span>65 ถนนรามคำแหง แขวงสะพานสูง เขตสะพานสูง กรุงเทพฯ 10240</span>
                                @else 
                                <span>65 Ramkamhaeng Road, Sapan-Sung Sub-district, Sapan-Sung District, Bangkok 10240</span>
                                @endif
                            </p>
                        </div>
                        <!--address-->
                    </div>
                    <!--cols-->
                </div>
                <!--container-->
            </div>
            <!--contact-box-->

            <div class="contact-box wow fadeIn">
                <div class="container-fluid">
                    <div class="cols">
                        <div class="googlemap" id="map2"></div>
                    </div>
                    <!--cols-->

                    <div class="cols">
                        <div class="address">
                            <span class="icons icon-pin"></span>
                            <h3>
                                @if(session()->get('language') == 'thai') 
                                <span>บริษัท ไอ.พี. วัน จำกัด (บางปู)</span>
                                @else 
                                <span>I.P. One Co., Ltd. (Bangpu)</span>
                                @endif
                            </h3>
                            <p>
                                @if(session()->get('language') == 'thai') 
                                <span>319 หมู่ 4 นิคมอุตสาหกรรมบางปู ซอย 6 ถนนสุขุมวิท อำเภอเมืองสมุทรปราการ จังหวัดสมุทรปราการ 10280</span>
                                @else
                                <span>319 Moo 4, Bangpu Industrial Estate Soi 6, Sukhumvit Road, Muaeng Samutprakan District, Samutprakan 10280</span>
                                @endif
                                
                            </p>
                        </div>
                        <!--address-->
                    </div>
                    <!--cols-->
                </div>
                <!--container-->
            </div>
            <!--contact-box-->

            <div class="contact-box has-bg wow fadeIn">
                <div class="container-fluid">
                    <div class="cols">
                        <div class="googlemap" id="map3"></div>

                    </div>
                    <!--cols-->
                    <div class="cols">
                        <div class="address">
                            <span class="icons icon-pin"></span>
                            <h3>
                                @if(session()->get('language') == 'thai') 
                                <span>บริษัท ไอ.พี. เนเชอรัล โปรดักส์ จำกัด</span>
                                @else
                                <span>I.P. Natural Products Co., Ltd.</span>
                                @endif
                            </h3>
                            <p>
                                @if(session()->get('language') == 'thai') 
                                <span>210 หมู่ 12 ตำบลแปลงยาว อำเภอแปลงยาว จังหวัดฉะเชิงเทรา 21490</span>
                                @else
                                <span>210 Moo 12, Plaengyao Sub-district, Plaengyao District, Chachoengsao 21490</span>
                                @endif
                                
                            </p>
                        </div>
                        <!--address-->
                    </div>
                    <!--cols-->
                </div>
                <!--container-->
            </div>
            <!--contact-box-->
        </div>
        <!--tab-pane-->

        <!--===============[End] tab_thailand =================-->

        <div id="tab_myanmar" class="tab-pane show">
            <div class="contact-box has-bg">
                <div class="container-fluid">
                    <div class="cols">
                        <div class="googlemap" id="map_myanmar1"></div>
                    </div>
                    <!--cols-->
                    <div class="cols">
                        <div class="address">
                            <span class="icons icon-pin"></span>
                            @if(session()->get('language') == 'thai') 
                            <h3>บริษัท ไอ. พี. วัน (ประเทศพม่า) จำกัด</h3>
                            @else
                            <h3>I.P.One (Myanmar) Co.,Ltd.</h3>
                            @endif
                            <p>  
                                57 Corner of Pyay Road and <br/>
                                Shewe Hinn Thar Street, 6.5Mile, <br/>
                                Hlaing Township,Yangon.
                            </p>
                        </div>
                        <!--address-->
                    </div>
                    <!--cols-->
                </div>
                <!--container-->
            </div>
            <!--contact-box-->


        </div>

        <!--===============[End] tab_Myanmar =================-->

        <div id="tab_vietnam" class="tab-pane show">
            <div class="contact-box has-bg">
                <div class="container-fluid">
                    <div class="cols">
                        <div class="googlemap" id="map_vietnam1"></div>
                    </div>
                    <!--cols-->
                    <div class="cols">
                        <div class="address">
                            <span class="icons icon-pin"></span>
                            @if(session()->get('language') == 'thai') 
                            <h3>บริษัท ไอ.พี. เวียดนาม จำกัด</h3>
                            @else
                            <h3>I.P. Vietnam Co., Ltd.</h3>
                            @endif
                            <p>
                                8th Floor, Bach Building,<br>
                                111 Ly Chinh Thang Street, Vo Thi Sau Ward, <br/>
                                District 3, Ho Chi Minh City, Vietnam
                            </p>
                        </div>
                        <!--address-->
                    </div>
                    <!--cols-->
                </div>
                <!--container-->
            </div>
            <!--contact-box-->


        </div>

        <!--===============[End] tab_Vietnam =================-->
    </div>
    <!--tab-content-->
</div>
<!--section-contact-->

<div class="secton section-contact form">
    <div class="section section-wave ">
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 mt-auto">
                <div class="contact-woman">
                    <img class="title" data-bottom-top="transform: translateY(250px) translateZ(0);" data-top-bottom="transform: translateY(0px) translateZ(0);" src="img/thumb/contact-title.png" alt="">
                    <img class="woman wow fadeInUp" src="{{ asset('frontend/img/thumb/contact-woman.png')}}" alt="">
                </div>
                <!--contact-woman-->
            </div>
            <!--col-xl-6-->
            <div class="col-xl-6">
                <form class="form-contact form-effect wow fadeInUp" id="form">
                    <div class="form-header">
                        <h4>
                           {{ __("messages.contact-us.form-title")}}
                        </h4>
                        <p class="m-0">
                           {{ __("messages.contact-us.form-description")}}
                        </p>
                    </div>

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-select" name="subject" id="subject" required>
                                    
        
                                </select>
                                    <label class="title">
                                    <span>{{ __("messages.contact-us.form-label1")}}<span class="star">*</span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" required>
                                    <label class="title">
                                    <span>{{ __("messages.contact-us.form-label2")}}<span class="star">*</span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" id="lastname" required>
                                    <label class="title">
                                    <span>{{ __("messages.contact-us.form-label3")}}<span class="star">*</span></span>
                                </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" required>
                                    <label class="title">
                                    <span>{{ __("messages.contact-us.form-label4")}}<span class="star">*</span></span>
                                </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" required>
                                    <label class="title">
                                    <span>{{ __("messages.contact-us.form-label5")}}<span class="star">*</span></span>
                                </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="detail" id="detail"></textarea>
                                    <label class="title">
                                    <span>{{ __("messages.contact-us.form-label6")}}</span>
                                </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control code" value="" name="" id="captcha">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control normal" value="" name="captcha_confirm" id="captcha_confirm" required>
                                </div>

                                <p class="note mb-0" id="err_msg">
                                <span>{{ __("messages.contact-us.form-label7")}}<span class="star">*</span></span>
                                </p>
                            </div>

                            <div class="col-md-12">
                                <div class="buttons">
                                    <button class="btn" type="submit" value="Submit">
                                    {{ __("messages.contact-us.form-button-label")}}
                                </button>
                                </div>
                            </div>

                            <p id="err_msg"></p>

                        </div>
                        <!--row-->
                    </div>
                    <!--form-body-->
                </form>

                <div class="hotline wow fadeInUp">
                    <div class="inner th">
                        <h5>สายด่วนผู้บริโภค</h5>
                        <h3><img src="{{ asset('frontend/img/thumb/icon-phone.png')}}" width="50" /><a href="tel:023723480">02 372 3480</a></h3>
                        <p>วันทำการ จันทร์-ศุกร์ เวลาทำการ 08:30 - 17:30 น.</p>
                    </div>
                    <div class="inner en">
                        <h5>Customer Hotline </h5>
                        <h3><img src="{{ asset('frontend/img/thumb/icon-phone.png')}}" width="50" /><a href="tel:023723480">02 372 3480</a></h3>
                        <p>Business hours: Monday – Friday from 8:30 a.m. – 5:30 p.m.</p>
                    </div>
                </div>
                <!--hotline-->
            </div>
            <!--col-xl-6-->
        </div>
        <!--row-->

    </div>
    <!--container-fluid-->
</div>
<!--section-contact-->

<script>
function setSelectList(){
    var arrSelectListTH = ["", "ติดต่อธุรกิจต่างประเทศ", "สอบถามข้อมูลผลิตภัณฑ์", "ข้อมูลส่วนบุคคล", "ติดต่อตัวแทนจำหน่าย", "สอบถามข้อมูลทั่วไป", "แนะนำติชม"];
    var arrSelectListEN = ["", "Contact International Busines", "I.P One Product Information", "Personal Information", "Apply for Reseller", "General Information", "Suggestion"];
    var select = document.getElementById('subject');
    var lang = getCookie("language");
    $('#subject').children().remove().end()
    for (var i = 0; i < 7; i++) {
        if (i == 0) {
            select.options[select.options.length] = new Option(arrSelectListTH[i], '', true);
        } else {
            @if(session()->get('language') == 'thai') 
                select.options[select.options.length] = new Option(arrSelectListTH[i], i);
            @else
                select.options[select.options.length] = new Option(arrSelectListEN[i], i);
            @endif

        }


    }

}


function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
setSelectList();


$(".lang").on('click', function(event) {
        var activeLang;
        var $this = $(this);
        if ($this.hasClass("lang-th")) {
            $("html").attr("lang", "th");
            activeLang = 'th';

        } else if ($this.hasClass("lang-en")) {
            $("html").attr("lang", "en");
            activeLang = 'en';

        } else {
            $("html").attr("lang", "ch");
        }
        setCookie("language", activeLang, 1);
        setSelectList();

    });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initialise"></script>
<script>
    function loadMap(obj, lat, lon, strInfo) {

        var mapOptions = {
            center: new google.maps.LatLng(lat, lon),
            pixelOffset: new google.maps.Size(10, -50),
            zoom: 13
        }

        var map = new google.maps.Map(obj, mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            draggable: true,
            icon: 'img/icons/marker.png'
        });

        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            maxWidth: 330,
            content: strInfo,
        });

        infowindow.open(map, marker);
    }


    var lat1 = 13.77561;
    var lon1 = 100.67041;
    var strInfo1 = "<div class='map-info '>" +
        "<img src='img/thumb/img-pin-01.jpg' alt=''>" +
        "<div>" +
        @if(session()->get('language') == 'thai') 
        "<h5>บริษัท ไอ.พี. วัน จำกัด (สำนักงานใหญ่)</h5>" +
        "<p><span class='icons icon-pin'></span>65  ถนนรามคำแหง แขวงสะพานสูง เขตสะพานสูง กรุงเทพฯ 10240</p>" +
        "<p><span class='icons icon-bus'></span>รถประจำทาง 58, 113, 168, 519, ปอ. 8, 113, 514</p>" +
        "<p><span class='icons icon-train'></span>รถไฟฟ้าสายสีส้ม สถานีสัมมากร</p>" +
        @else
        "<h5>I.P. One Co., Ltd. (Headquarter)</h5>" +
        "<p><span class='icons icon-pin'></span>65 Ramkamhaeng Road, Sapan-Sung Sub-district, Sapan-Sung District, Bangkok 10240</p>" +
        @endif
         "<p><span class='icons icon-phone'></span>+66 (0)2 372 3461</p>" +
        "</div>" +
        "</div>";

    var lat2 = 13.54521;
    var lon2 = 100.65605;
    var strInfo2 = "<div class='map-info'>" +
        "<img src='img/icons/img-pin-03.jpg' alt=''>" +
        "<div>" +
        @if(session()->get('language') == 'thai') 
        "<h5>บริษัท ไอ.พี. วัน จำกัด (บางปู)</h5>" +
        "<p><span class='icons icon-pin'></span>319 หมู่ 4 นิคมอุตสาหกรรมบางปู ซอย 6 ถนนสุขุมวิท อำเภอเมืองสมุทรปราการ จังหวัดสมุทรปราการ 10280</p>" +
        @else
        "<h5>I.P. One Co., Ltd. (Bangpu)</h5>" +
        "<p><span class='icons icon-pin'></span>319 Moo 4, Bangpu Industrial Estate Soi 6, Sukhumvit Road, Muaeng Samutprakan District, Samutprakan 10280</p>" +
        @endif
        "<p><span class='icons icon-phone'></span>+66 (0)2 709 3955</p>" +
        "</div>" +
        "</div>";

    var lat3 = 13.58480;
    var lon3 = 101.34137;
    var strInfo3 = "<div class='map-info'>" +
        "<img src='img/thumb/img-pin-02.jpg' alt=''>" +
        "<div>" +
        @if(session()->get('language') == 'thai') 
        "<h5>บริษัท ไอ.พี. เนเชอรัล โปรดักส์ จำกัด</h5>" +
        "<p><span class='icons icon-pin'></span>210 หมู่ 12 ตำบลแปลงยาว</p>" +
        "<p><span class='icons '></span>อำเภอแปลงยาว จังหวัดฉะเชิงเทรา</p>" +
        "<p><span class='icons '></span>21490</p>" +
        @else
        "<h5>I.P. Natural Products Co., Ltd.</h5>" +
        "<p><span class='icons icon-pin'></span>210 Moo 12, Plaengyao Sub-district</p>" +
        "<p><span class='icons '></span>Plaengyao District, Chachoengsao</p>" +
        "<p><span class='icons '></span>21490</p>" +
        "<p><span class='icons icon-phone'></span>+66 (0)38 575 931</p>" +
        @endif
        "</div>" +
        "</div>";

    var lat4 = 16.8483904;
    var lon4 = 96.1363644;
    var strInfo4 = "<div class='map-info '>" +
        "<img src='img/thumb/img-pin-04.jpg' alt=''>" +
        "<div>" +
        @if(session()->get('language') == 'thai') 
        "<h5>บริษัท ไอ. พี. วัน (ประเทศพม่า) จำกัด</h5>" +
        @else
        "<h5>I.P.One (Myanmar) Co.,Ltd.</h5>" +
        @endif
        "<p><span class='icons icon-pin'></span>57 Corner of Pyay Road and</p>" +
        "<p><span class='icons '></span>Shewe Hinn Thar Street, 6.5Mile,</p>" +
        "<p><span class='icons '></span>Hlaing Township,Yangon.</p>" +
        "<p><span class='icons icon-phone'></span>+95 1 753 2949</p>" +
        "<p><span class='icons icon-email'></span>pudol.s@ip-one.com</p>" +
        "</div>" +
        "</div>";

    var lat5 = 10.7880888;
    var lon5 = 106.6852216;
    var strInfo5 = "<div class='map-info'>" +
        "<img src='img/thumb/img-pin-05.jpg' alt=''>" +
        "<div>" +
        @if(session()->get('language') == 'thai') 
        "<h5>บริษัท ไอ.พี. เวียดนาม จำกัด</h5>" +
        @else
        "<h5>I.P. Vietnam Co., Ltd.</h5>" +
        @endif
        "<p><span class='icons icon-pin'></span>8th Floor, Bach Building,</p>" +
        "<p><span class='icons '></span>111 Ly Chinh Thang Street,</p>" +
        "<p><span class='icons '></span>Vo Thi Sau Ward, District 3,</p>" +
        "<p><span class='icons '></span>Ho Chi Minh City, Vietnam</p>" +
        "<p><span class='icons icon-phone'></span>+84 283 526 1071</p>" +
        "<p><span class='icons icon-email'></span>quy.le@ip-one.com</p>" +
        "</div>" +
        "</div>";






    loadMap(document.getElementById("map1"), lat1, lon1, strInfo1);
    loadMap(document.getElementById("map2"), lat2, lon2, strInfo2);
    loadMap(document.getElementById("map3"), lat3, lon3, strInfo3);

    $('#btn-myanmar').click(function() {
        loadMap(document.getElementById("map_myanmar1"), lat4, lon4, strInfo4);
    });

    $('#btn-vietnam').click(function() {
        loadMap(document.getElementById("map_vietnam1"), lat5, lon5, strInfo5);
    });




    var capthaKey = '';

    function makeCaptcha(obj) {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        obj.value = text;
        capthaKey = text;
    }
    makeCaptcha(document.getElementById('captcha'));

    function resetFormData() {
        $('input[type="text"], textarea').val('');
    }


    $('#form').submit(function(e) {

        if (capthaKey == $('#captcha_confirm').val()) {
            e.preventDefault();
            var $form = $(this);

            $.ajax({
                type: 'POST',
                url: 'sendmail.php',
                data: $('#form').serialize(),
                success: function(response) {
                    resetFormData();
                    $('#err_msg').html(response);

                },
            });

        } else {
            $('#err_msg').html('รหัสยืนยันความปลอดภัยไม่ถูกต้องกรุณาตรวจสอบอีกครั้งค่ะ<br>The website security standard verification code incorrect, please try again.');
            return false;
        }
    });
</script>

@endsection