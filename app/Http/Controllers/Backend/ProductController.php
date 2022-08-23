<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Brand;
use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function ProductView(){
        //$products = Product::latest()->get();
        $products = Product::join('brands', 'brands.id', '=', 'products.brand_id')
	   						   ->get(['products.*', 'brands.brand_name_en']);
        return view('backend.product.product_view',compact('products'));
    } //end method

    public function ProductAdd(){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        return view('backend.product.product_add',compact('brands'));
    } //end method

    public function ProductStore(Request $request){
        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
    		'product_name_th' => 'required',
    		'product_name_en' => 'required',
            'product_name_ch' => 'required',
			'product_size' => 'required',
    	],[
    		'product_name_th.required' => 'Name in Thai is required.',
    		'product_name_en.required' => 'Name in English is required.',
            'product_name_ch.required' => 'Name in Chinese is required.',
			'product_size.required' => 'Product size is required.',
    	]);

    

        // Image#1 : product thumbnail
		if ($request->file('product_thumbnail')) {
			$product_thumbnail = $request->file('product_thumbnail');
			$name_gen = hexdec(uniqid()).'.'.$product_thumbnail->getClientOriginalExtension();
			Image::make($product_thumbnail)->save('upload/product/'.$name_gen);
			$product_thumbnail = 'upload/product/'.$name_gen;

		}

		$product_id = Product::insertGetId([
            'brand_id' =>$request->brand_id,
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
			'product_name_th' => $request->product_name_th,
			'product_name_en' => $request->product_name_en,
			'product_name_ch' => $request->product_name_ch,
            'product_subtitle_th' => $request->product_subtitle_th,
			'product_subtitle_en' => $request->product_subtitle_en,
			'product_subtitle_ch' => $request->product_subtitle_ch,
			'product_description_th' => $request->product_description_th,
			'product_description_en' => $request->product_description_en,
			'product_description_ch' => $request->product_description_ch,
			'product_detail_th' => $request->product_detail_th,
			'product_detail_en' => $request->product_detail_en,
			'product_detail_ch' => $request->product_detail_ch,
            'product_size' => $request->product_size,
			'product_slug_th' => str_replace(' ', '-',$request->product_name_th),
			'product_slug_en' => strtolower(str_replace(' ', '-',$request->product_name_en)),
			'product_slug_ch' => str_replace(' ', '-',$request->product_name_ch),
			'product_thumbnail' => $product_thumbnail,
			'shopee_url' => $request->shopee_url,
			'lazada_url' => $request->lazada_url,
			'jd_url' => $request->jd_url,
			'status' => $request->status,
			

    	]);


		// Photo Gallery Upload Start
		$images = $request->file('photo_gallery');
		foreach ($images as $img) {
		   $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
		   Image::make($img)->resize(917,1000)->save('upload/product/gallery/'.$make_name);
		   $uploadPath = 'upload/product/gallery/'.$make_name;
  
		   ProductGallery::insert([
			  'product_id' => $product_id,
			  'photo_title_th' => $request->product_name_th,
			  'photo_title_en' => $request->product_name_en,
			  'photo_title_ch' => $request->product_name_ch,
			  'photo_url' => $uploadPath,
		      'status' =>1, 
			  'created_at' => Carbon::now(), 
  
		  ]);
  
		}
		// End Photo Gallery 


	    $notification = array(
			'message' => 'The product information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


	public function ProductEdit($id){
		$product = Product::findOrFail($id);
		$product_id = $product->id;
		$brand_id = $product->brand_id;
		$category_id = $product->category_id;
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
		$categories = Category::where('brand_id','=',$brand_id)->orderBy('category_name_en','ASC')->get();
		$subcategories = Subcategory::where('category_id','=',$category_id)->orderBy('subcategory_name_en','ASC')->get();
		$products_galleries = ProductGallery::where('product_id','=',$product_id)->get();
    	
    	return view('backend.product.product_edit',compact('product','subcategories','categories','brands','products_galleries'));

    } //end method


	public function ProductUpdate(Request $request){
    	
    	$product_id = $request->id;
    	$old_thumbnail = $request->old_thumbnail;
        $product_thumbnail = $old_thumbnail;

		$request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
    		'product_name_th' => 'required',
    		'product_name_en' => 'required',
            'product_name_ch' => 'required',
			'product_size' => 'required',
    	],[
    		'product_name_th.required' => 'Name in Thai is required.',
    		'product_name_en.required' => 'Name in English is required.',
            'product_name_ch.required' => 'Name in Chinese is required.',
			'product_size.required' => 'Product size is required.',
    	]);

		

    	 // Image#1 : product thumbnail
		if ($request->file('product_thumbnail')) {
            unlink($old_thumbnail);
			$product_thumbnail = $request->file('product_thumbnail');
			$name_gen = hexdec(uniqid()).'.'.$product_thumbnail->getClientOriginalExtension();
			Image::make($product_thumbnail)->save('upload/category/'.$name_gen);
			$product_thumbnail = 'upload/category/'.$name_gen;

		}

    

	    Product::findOrFail($product_id)->update([
            'brand_id' =>$request->brand_id,
            'category_id' =>$request->category_id,
            'subcategory_id' =>$request->subcategory_id,
			'product_name_th' => $request->product_name_th,
			'product_name_en' => $request->product_name_en,
			'product_name_ch' => $request->product_name_ch,
            'product_subtitle_th' => $request->product_subtitle_th,
			'product_subtitle_en' => $request->product_subtitle_en,
			'product_subtitle_ch' => $request->product_subtitle_ch,
			'product_description_th' => $request->product_description_th,
			'product_description_en' => $request->product_description_en,
			'product_description_ch' => $request->product_description_ch,
			'product_detail_th' => $request->product_detail_th,
			'product_detail_en' => $request->product_detail_en,
			'product_detail_ch' => $request->product_detail_ch,
            'product_size' => $request->product_size,
			'product_slug_th' => str_replace(' ', '-',$request->product_name_th),
			'product_slug_en' => strtolower(str_replace(' ', '-',$request->product_name_en)),
			'product_slug_ch' => str_replace(' ', '-',$request->product_name_ch),
			'product_thumbnail' => $product_thumbnail,
			'shopee_url' => $request->shopee_url,
			'lazada_url' => $request->lazada_url,
			'jd_url' => $request->jd_url,
			'status' => $request->status,
		
    	]);

	    $notification = array(
			'message' => 'The product information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.product')->with($notification);

    	
    } // end method 

	public function ProductGalleryUpdate(Request $request){
		$imgs = $request->photo_gallery;
		foreach ($imgs as $id => $img) {
	    $imgDel = ProductGallery::findOrFail($id);
	    unlink($imgDel->photo_url);
	     
    	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
    	Image::make($img)->resize(917,1000)->save('upload/product/gallery/'.$make_name);
    	$uploadPath = 'upload/product/gallery/'.$make_name;

    	ProductGallery::where('id',$id)->update([
    		'photo_url' => $uploadPath,
    		'updated_at' => Carbon::now(),

    	]);

	 } // end foreach

       $notification = array(
			'message' => 'Product Gallery Image Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

	} // end mehtod v


	public function ProductDelete($id){

    	$product = Product::findOrFail($id);
    	$thumbnail = $product->product_thumbnail;

    	unlink($thumbnail);
    	Product::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'The product information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 

	public function GetProducts($subcategory_id){

		$products = Product::where('subcategory_id',$subcategory_id)->orderBy('product_name_en','ASC')->get();
		return json_encode($products);
	}

	public function ProductGalleryDelete($id){
		$oldimg = ProductGallery::findOrFail($id);
		unlink($oldimg->photo_url);
		ProductGallery::findOrFail($id)->delete();

		$notification = array(
		   'message' => 'Product Gallery Image Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	} // end method 

	public function ProductActive($id){
		Product::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Product Active',
			  'alert-type' => 'success'
		  );
  
		  return redirect()->back()->with($notification);
		   
	}

	public function ProductInactive($id){
		Product::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Product Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}

   

}
