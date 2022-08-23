@extends('frontend.main_master')
@section('title')
Subcategory | I.P. ONE
@endsection
@section('content')
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

 <div class="section section-banner gy-category wow fadeInUp" data-bg="header-white">
   
    <img class="w-100 d-none d-sm-block" src="{{asset($banners->banner_image)}}" alt="">
    <img class="w-100 d-block d-sm-none" src="{{asset($banners->banner_mobile_image)}}" alt="">  

</div><!--section  -->

@foreach($subcategories as $subcategory)
<div class="section section-category hygiene">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="images-category wow fadeInLeft">
                    <img class="w-100" src="{{asset($subcategory->subcategory_image)}}" alt="">
                </div><!--images-category-->
            </div><!--col-lg-6-->

            <div class="col-lg-5 ms-auto wow fadeInRight">
                <article class="article category">
                    <h4>
                        {{$subcategory->id}}
                        @if(session()->get('language') == 'thai')     
                        {{ $category->category_name_th }}
                        @elseif(session()->get('language') == 'english') 
                        {{ $category->category_name_en }}
                        @elseif(session()->get('language') == 'chinese') 
                        {{ $category->category_name_ch }}
                        @else
                        {{ $category->category_name_th }}
                        @endif
                        
                    </h4>
                    <h2>
                        @if(session()->get('language') == 'thai')     
                        {{$subcategory->subcategory_name_th}}
                        @elseif(session()->get('language') == 'english') 
                        {{$subcategory->subcategory_name_en}}
                        @elseif(session()->get('language') == 'chinese') 
                        {{$subcategory->subcategory_name_ch}}
                        @else
                        {{$subcategory->subcategory_name_th}}
                        @endif
                        
                    </h2>
                    <p>
                        @if(session()->get('language') == 'thai')     
                        {{$subcategory->subcategory_description_th}}
                        @elseif(session()->get('language') == 'english') 
                        {{$subcategory->subcategory_description_en}}
                        @elseif(session()->get('language') == 'chinese') 
                        {{$subcategory->subcategory_description_ch}}
                        @else
                        {{$subcategory->subcategory_description_th}}
                        @endif
                    </p>
                </article>

                <div class="swiper-overflow">
                    
                    <div class="swiper-button swiper-button-prev category"></div> 
                    <div class="swiper-button swiper-button-next category"></div>
                    <div class="swiper-pagination category"></div>

                    <div class="swiper-container swiper-category"> 
                        <div class="swiper-wrapper">

                        @foreach($arr_products as $product)
                           @if($product['subcategory_id']==$subcategory->id)
                            @foreach($product['products'] as $item)
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <a class="card-link" href="#"></a>
                                        <div class="card-photo">
                                            <div class="photo" style="background-image: url({{asset('frontend/img/thumb/photo-500x500--19.jpg')}});">
                                                <img src="{{asset('frontend/img/thumb/frame-100x100.png')}}" alt="">
                                            </div>
                                        </div>
                                        <h4 class="card-title">
                                            กลิ่นซัมเมอร์ มาการอง {{$item->product_name_th}}
                                        </h4>
                                    </div><!--card-product-->
                                </div><!--swiper-slide-->
                                @endforeach
                            @endif
                         @endforeach 
                           
                        </div><!--swiper-wrapper-->
                    </div><!--swiper-container--> 
                </div><!--swiper-overflow-->

                <div class="buttons pt-1 pb-0">
                    <a class="btn" href="#">ดูรายละเอียด</a>
                </div>
            </div><!--col-lg-6-->
        </div><!--row-->
    </div><!--container-fluid-->
</div><!--section-category-->
@endforeach




<div class="d-block p-5"></div>


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

            $(".swiper-category").each(function(index, element){
            var $this = $(this);
            var swiper = new Swiper(this, {
                slidesPerView:3,
                spaceBetween:0, 
                speed: 700, 
                effect: 'slide',  
                observer: true,
                observeParents: true,
                watchOverflow: true, 
                breakpoints: { 
                    576: {
                        slidesPerView: 3,  
                        spaceBetween: 0,  
                    }, 
                    0: {
                        slidesPerView: 2,  
                        spaceBetween: 0,  
                    }, 
                },
                pagination: {
                    el: $this.parent().find('.swiper-pagination.category'),
                    clickable: true,
                },
                navigation: {
                    nextEl: $this.parent().find(".swiper-button-next.category")[0],
                    prevEl: $this.parent().find(".swiper-button-prev.category")[0],
                }
            });
        });
        });

         
    </script>
@endsection    