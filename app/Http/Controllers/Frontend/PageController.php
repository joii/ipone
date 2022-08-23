<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Banner;

class PageController extends Controller
{
   // All Static Pages

   // Page : About Us
   public function AboutUsPage(){
      return view('frontend.about.about_us');
   }

   
   // Page : Contact Us
   public function ContactUsPage(){
      return view('frontend.contact_us');
   }

   // Page : Brand
   public function BrandIndexPage(){
      return view('frontend.brands.index');
   }

   // Page : Hygiene
   public function BrandHygienePage(){
      $categories = Category::join('brands', 'brands.id', '=', 'categories.brand_id')
      ->where('brands.id', '=', '1')
      ->get(['categories.*', 'brands.brand_name_en']);
      return view('frontend.brands.hygiene',compact('categories'));
   }

   // Page : Vixol
   public function BrandVixolPage(){
      return view('frontend.brands.vixol');
   }

   // Page : Ivy
   public function BrandIvyPage(){
      return view('frontend.brands.ivy');
   }

   // Page : Whiz
   public function BrandWhizPage(){
      return view('frontend.brands.whiz');
   }

   // Page : Dance
   public function BrandDancePage(){
      return view('frontend.brands.dance');
   }

   // Page : Focus
   public function BrandFocusPage(){
      return view('frontend.brands.focus');
   }


   // Page : Our Business
   public function OurBusinessPage(){
      return view('frontend.our_business');
   }


   // Page : Product Subcategory

   public function SubcategoryView($category_id){
      $category = Category::findOrFail($category_id);
      $subcategories = Subcategory::where('category_id','=',$category_id)->where('status','=',1)->get();

      $arr_products = array();

      foreach($subcategories as $item){
         $subcategory_id = $item->id;

         $products = Product::where('brand_id','=',$category->brand_id)
         ->where('subcategory_id','=',$subcategory_id)
         ->get();
         $prod_arr = array("subcategory_id"=>$subcategory_id, "products"=>$products);
         array_push($arr_products,$prod_arr);
      }
    
      // $subcategories =  Subcategory::join('products', 'products.subcategory_id', '=', 'subcategories.id')
      // ->where('subcategories.category_id','=',$category_id)
      // ->get(['subcategories.*', 'products.*']);

      $banners = Banner::select('*')
      ->where('category_id','=',$category_id)
      ->where('subcategory_id', '=', NULL)
      ->where('product_id', '=', NULL)
      ->get()->last();
      return view('frontend.products.subcategory_view',compact('category','subcategories','banners','arr_products'));

   } //end method



}
