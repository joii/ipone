<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Brand;


class MediaController extends Controller
{
    public function MediaView(){
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $media = Media::leftJoin('brands', 'brands.id', '=', 'media.brand_id')
                             ->leftJoin('categories', 'categories.id', '=', 'media.category_id')
                             ->leftJoin('subcategories', 'subcategories.id', '=', 'media.subcategory_id')
                             ->leftJoin('products', 'products.id', '=', 'media.product_id')
	   						 ->get(['media.*', 'brands.brand_name_en','categories.category_name_en','subcategories.subcategory_name_en','products.product_name_en']);
        return view('backend.media.media_view',compact('media','brands','categories','subcategories'));
    } //end method

    public function MediaAdd(){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategories = Subcategory::latest()->get();
        return view('backend.media.media_add',compact('brands','categories','subcategories'));
    } //end method


    public function MediaStore(Request $request){
        $request->validate([
    		'media_title_th' => 'required',
    		'media_title_en' => 'required',
            'media_title_ch' => 'required',
    	],[
    		'media_title_th.required' => 'Name in Thai is required.',
    		'media_title_en.required' => 'Name in English is required.',
            'media_title_ch.required' => 'Name in Chinese is required.',
    	]);

    
		Media::insert([
            'brand_id' =>$request->brand_id,
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'product_id' =>$request->product_id,
			'media_title_th' => $request->media_title_th,
			'media_title_en' => $request->media_title_en,
			'media_title_ch' => $request->media_title_ch,
            'media_url' => $request->media_url,
			'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The media information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


    public function MediaEdit($id){
		$media = Media::findOrFail($id);
		$media_id = $media->id;
		$brand_id = $media->brand_id;
		$category_id = $media->category_id;
        $subcategory_id = $media->subcategory_id;
        $product_id = $media->product_id;
        $brands = Brand::orderBy('brand_name_en','ASC')->get();

        if($brand_id!=NULL){
            $categories = Category::where('brand_id','=',$brand_id)->orderBy('category_name_en','ASC')->get();
        }else{
            $categories = Category::orderBy('category_name_en','ASC')->get();
        }
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

    	
    	return view('backend.media.media_edit',compact('media','products','subcategories','categories','brands'));

    } //end method


    public function MediaUpdate(Request $request){
    	
    	$media_id = $request->id;

	    Media::findOrFail($media_id)->update([
            'brand_id' =>$request->brand_id,
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
            'product_id' =>$request->product_id,
			'media_title_th' => $request->media_title_th,
			'media_title_en' => $request->media_title_en,
			'media_title_ch' => $request->media_title_ch,
            'media_url' => $request->media_url,
			'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The media information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.media')->with($notification);

    	
    } // end method 


    public function MediaDelete($id){
    	Media::findOrFail($id)->delete();
    	 $notification = array(
			'message' => 'The media information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


}
