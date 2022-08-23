<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use Image;

class CategoryController extends Controller
{
    public function CategoryView(){
       // $categories = Category::latest()->get();
	   $categories = Category::join('brands', 'brands.id', '=', 'categories.brand_id')
	   						   ->get(['categories.*', 'brands.brand_name_en']);

        return view('backend.category.category_view',compact('categories'));
    } //end method

    public function CategoryAdd(){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        return view('backend.category.category_add',compact('brands'));
    } //end method

    public function CategoryStore(Request $request){
        $request->validate([
    		'category_name_th' => 'required',
    		'category_name_en' => 'required',
            'category_name_ch' => 'required',
    	],[
    		'category_name_th.required' => 'Name in Thai is required.',
    		'category_name_en.required' => 'Name in English is required.',
            'category_name_ch.required' => 'Name in Chinese is required.',
    	]);

    

        // Image#1 : category_image
		if ($request->file('category_image')) {
			$category_image = $request->file('category_image');
			$name_gen1 = hexdec(uniqid()).'.'.$category_image->getClientOriginalExtension();
			Image::make($category_image)->save('upload/category/'.$name_gen1);
			$category_image = 'upload/category/'.$name_gen1;

		}

        // Image#1 : category_product_image
		if ($request->file('category_product_image')) {
			$category_product_image = $request->file('category_product_image');
			$name_gen2 = hexdec(uniqid()).'.'.$category_product_image->getClientOriginalExtension();
			Image::make($category_product_image)->save('upload/category/'.$name_gen2);
			$category_product_image = 'upload/category/'.$name_gen2;

		}

		// Background image
		if ($request->file('category_background_image')) {
			$background_image = $request->file('category_background_image');
			$bg_name_gen = hexdec(uniqid()).'.'.$background_image->getClientOriginalExtension();
			Image::make($background_image)->save('upload/category/'.$bg_name_gen);
			$category_background_image = 'upload/category/'.$bg_name_gen;

		}

		Category::insert([
            'brand_id' =>$request->brand_id,
			'category_name_th' => $request->category_name_th,
			'category_name_en' => $request->category_name_en,
			'category_name_ch' => $request->category_name_ch,
            'category_subtitle_th' => $request->category_subtitle_th,
			'category_subtitle_en' => $request->category_subtitle_en,
			'category_subtitle_ch' => $request->category_subtitle_ch,
			'category_description_th' => $request->category_description_th,
			'category_description_en' => $request->category_description_en,
			'category_description_ch' => $request->category_description_ch,
			'category_detail_th' => $request->category_detail_th,
			'category_detail_en' => $request->category_detail_en,
			'category_detail_ch' => $request->category_detail_ch,
			'category_slug_th' => str_replace(' ', '-',$request->category_name_th),
			'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
			'category_slug_ch' => str_replace(' ', '-',$request->category_name_ch),
			'status' => $request->status,
			'category_image' => $category_image,
			'category_product_image'=>$category_product_image,
            'category_background_image'=>$category_background_image,

    	]);

	    $notification = array(
			'message' => 'The category information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


    public function CategoryEdit($id){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
    	$category = Category::findOrFail($id);
    	return view('backend.category.category_edit',compact('category','brands'));

    } //end method


    public function CategoryUpdate(Request $request){
    	
    	$category_id = $request->id;
    	$old_image = $request->old_image;
        $category_image = $old_image;
		$old_product_image = $request->old_product_image;
		$category_product_image = $old_product_image;
        $old_background_image = $request->old_background_image;
		$category_background_image = $old_background_image;

    	 // Image#1 : category_image
		if ($request->file('category_image')) {
			if(file_exists($old_image)){
				unlink($old_image);
			}
            
			$category_image = $request->file('category_image');
			$name_gen1 = hexdec(uniqid()).'.'.$category_image->getClientOriginalExtension();
			Image::make($category_image)->save('upload/category/'.$name_gen1);
			$category_image = 'upload/category/'.$name_gen1;

		}

        // Image#1 : category_product_image
		if ($request->file('category_product_image')) {
			if(file_exists($old_product_image)){
				unlink($old_product_image);
			}
			$category_product_image = $request->file('category_product_image');
			$name_gen2 = hexdec(uniqid()).'.'.$category_product_image->getClientOriginalExtension();
			Image::make($category_product_image)->save('upload/category/'.$name_gen2);
			$category_product_image = 'upload/category/'.$name_gen2;

		}

		// Background image
		if ($request->file('category_background_image')) {
			if(file_exists($old_background_image)){
            unlink($old_background_image);
			}
			$background_image = $request->file('category_background_image');
			$bg_name_gen = hexdec(uniqid()).'.'.$background_image->getClientOriginalExtension();
			Image::make($background_image)->save('upload/category/'.$bg_name_gen);
			$category_background_image = 'upload/category/'.$bg_name_gen;

		}


	    Category::findOrFail($category_id)->update([
            'brand_id' =>$request->brand_id,
			'category_name_th' => $request->category_name_th,
			'category_name_en' => $request->category_name_en,
			'category_name_ch' => $request->category_name_ch,
            'category_subtitle_th' => $request->category_subtitle_th,
			'category_subtitle_en' => $request->category_subtitle_en,
			'category_subtitle_ch' => $request->category_subtitle_ch,
			'category_description_th' => $request->category_description_th,
			'category_description_en' => $request->category_description_en,
			'category_description_ch' => $request->category_description_ch,
			'category_detail_th' => $request->category_detail_th,
			'category_detail_en' => $request->category_detail_en,
			'category_detail_ch' => $request->category_detail_ch,
			'category_slug_th' => str_replace(' ', '-',$request->category_name_th),
			'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
			'category_slug_ch' => str_replace(' ', '-',$request->category_name_ch),
			'status' => $request->status,
			'category_image' => $category_image,
			'category_product_image'=>$category_product_image,
            'category_background_image'=>$category_background_image,

    	]);

	    $notification = array(
			'message' => 'The category information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.category')->with($notification);

    	
    } // end method 

    public function CategoryDelete($id){

    	$category = Category::findOrFail($id);
    	$img = $category->category_image;
        $product_img = $category->category_product_image;
		$background_img = $category->category_background_image;
    	unlink($img);
		unlink( $product_img);
        unlink($background_img);

    	Category::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'The category information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 
   

	public function GetCategory($brand_id){

		$category = Category::where('brand_id',$brand_id)->orderBy('category_name_en','ASC')->get();
		return json_encode($category);
	}


}
