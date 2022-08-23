<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Brand;
use Image;

class BannerController extends Controller
{
    public function BannerView(){
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $products = Product::latest()->get();
        $banners = Banner::leftJoin('categories', 'categories.id', '=', 'banners.category_id')
                            ->leftJoin('subcategories', 'subcategories.id', '=', 'banners.subcategory_id')
                            ->leftJoin('products', 'products.id', '=', 'banners.product_id')
                            ->get(['banners.*', 'categories.category_name_en','subcategories.subcategory_name_en','products.product_name_en']);
        
      
        return view('backend.banner.banner_view',compact('banners','brands','categories','subcategories','products'));
    } //end method


    public function BannerViewInSubcategory($subcategory_id){

        $banners = Banner::leftJoin('subcategories', 'subcategories.id', '=', 'banners.subcategory_id')
                            ->where('subcategories.id','=',$subcategory_id)
                            ->get(['banners.*', 'subcategories.subcategory_name_en']);
        
      
        return view('backend.banner.banner_subcategory_view',compact('banners'));

    }

    public function BannerAdd(){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategories = Subcategory::latest()->get();
        return view('backend.banner.banner_add',compact('brands','categories','subcategories'));
    } //end method

    public function BannerStore(Request $request){
        $request->validate([
    		'banner_title_th' => 'required',
    		'banner_title_en' => 'required',
            'banner_title_ch' => 'required',
    	],[
    		'banner_title_th.required' => 'Title in Thai is required.',
    		'banner_title_en.required' => 'Title in English is required.',
            'banner_title_ch.required' => 'Title in Chinese is required.',
    	]);


        $width = 1200;
        $height = null;
        if($request->category_id !="") $width = 1200;
        if($request->subcategory_id !="") $width = 1200;
        if($request->product_id !=""){
            $width = 1200;
            $height = 400;
        }

        // Banner for  desktop : constrain aspect ratio
		if ($request->file('banner_image')) {
			$banner_image = $request->file('banner_image');
			$name_gen1 = hexdec(uniqid()).'.'.$banner_image->getClientOriginalExtension();
            if($height==null){
                // resize the image to a width of 800 and constrain aspect ratio (auto height)
                Image::make($banner_image)->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('upload/banner/'.$name_gen1);
            }else{
                Image::make($banner_image)->resize($width, $height)->save('upload/banner/'.$name_gen1);
            }
            
			$banner_image = 'upload/banner/'.$name_gen1;
		}

        //  Banner for mobile device : fix size
		if ($request->file('banner_mobile_image')) {
			$banner_mobile_image = $request->file('banner_mobile_image');
			$name_gen2 = hexdec(uniqid()).'.'.$banner_mobile_image->getClientOriginalExtension();
			Image::make($banner_mobile_image)->resize(1000, 750)->save('upload/banner/'.$name_gen2);
			$banner_mobile_image = 'upload/banner/'.$name_gen2;
		}

    
		Banner::insert([
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'product_id' =>$request->product_id,
			'banner_title_th' => $request->banner_title_th,
			'banner_title_en' => $request->banner_title_en,
			'banner_title_ch' => $request->banner_title_ch,
            'banner_image' => $banner_image,
            'banner_mobile_image' => $banner_mobile_image,
            'banner_url' => $request->banner_url,
			'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The banner information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


    public function BannerEdit($id){
		$banner = Banner::findOrFail($id);
		$category_id = $banner->category_id;
        $subcategory_id = $banner->subcategory_id;
        $product_id = $banner->product_id;
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        
		if($category_id !=NULL){
            $subcategories = Subcategory::where('category_id','=',$category_id)->orderBy('subcategory_name_en','ASC')->get();
        }else{
            $subcategories = Subcategory::orderBy('subcategory_name_en','ASC')->get();
        }
        
        if($subcategory_id !=NULL){
            $products = Product::where('subcategory_id','=',$subcategory_id)->orderBy('product_name_en','ASC')->get();
        }else{
            $products = Product::orderBy('product_name_en','ASC')->get();
        }

    	
    	return view('backend.banner.banner_edit',compact('banner','products','subcategories','categories','brands'));

    } //end method


    public function BannerUpdate(Request $request){
    	
    	$banner_id = $request->id;
        $old_image = $request->old_image;
        $banner_image = $old_image;
        $old_mobile_image = $request->old_mobile_image;
        $banner_mobile_image = $old_mobile_image;

        $width = 1200;
        $height = null;
        if($request->category_id !="") $width = 1200;
        if($request->subcategory_id !="") $width = 1200;
        if($request->product_id !=""){
            $width = 1200;
            $height = 400;
        }
        


        // Banner for  desktop : constrain aspect ratio
		if ($request->file('banner_image')) {
            if(file_exists($old_image)){
                unlink($old_image);
            }
            
			$banner_image = $request->file('banner_image');
			$name_gen1 = hexdec(uniqid()).'.'.$banner_image->getClientOriginalExtension();
            if($height==null){
                // resize the image to a width of 800 and constrain aspect ratio (auto height)
                Image::make($banner_image)->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('upload/banner/'.$name_gen1);
            }else{
                Image::make($banner_image)->resize($width, $height)->save('upload/banner/'.$name_gen1);
            }
            
			$banner_image = 'upload/banner/'.$name_gen1;
		}

        //  Banner for mobile device : fix size
		if ($request->file('banner_mobile_image')) {
            if(file_exists($old_mobile_image)){
                unlink($old_mobile_image);
            }
            
			$banner_mobile_image = $request->file('banner_mobile_image');
			$name_gen2 = hexdec(uniqid()).'.'.$banner_mobile_image->getClientOriginalExtension();
			Image::make($banner_mobile_image)->resize(1000, 750)->save('upload/banner/'.$name_gen2);
			$banner_mobile_image = 'upload/banner/'.$name_gen2;
		}

	    Banner::findOrFail($banner_id)->update([
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'product_id' =>$request->product_id,
			'banner_title_th' => $request->banner_title_th,
			'banner_title_en' => $request->banner_title_en,
			'banner_title_ch' => $request->banner_title_ch,
            'banner_image' => $banner_image,
            'banner_mobile_image' => $banner_mobile_image,
            'banner_url' => $request->banner_url,
			'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The banner information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.banner')->with($notification);

    	
    } // end method 

    public function BannerDelete($id){

    	$banner = Banner::findOrFail($id);
    	$banner_image = $banner->banner_image;
        $banner_mobile_image = $banner->banner_mobile_image;

        if(!empty($banner_image)){
            unlink($banner_image);
        }
    	if(!empty($banner_mobile_image)){
            unlink($banner_mobile_image);
        }  

    	Banner::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'The banner information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
}
