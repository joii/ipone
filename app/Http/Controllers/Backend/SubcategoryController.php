<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Brand;
use Image;

class SubcategoryController extends Controller
{
    public function SubcategoryView(){
       // $subcategories = Subcategory::latest()->get();
	   $subcategories = Subcategory::join('categories', 'categories.id', '=', 'subcategories.category_id')
	   						   ->get(['subcategories.*', 'categories.category_name_en']);
        return view('backend.subcategory.subcategory_view',compact('subcategories'));
    } //end method

    public function SubcategoryAdd(){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        return view('backend.subcategory.subcategory_add',compact('brands','categories'));
    } //end method

    public function SubcategoryStore(Request $request){
        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
    		'subcategory_name_th' => 'required',
    		'subcategory_name_en' => 'required',
            'subcategory_name_ch' => 'required',
    	],[
            'brand_id.required' => 'Please select one.',
            'category_id.required' => 'Please select one.',
    		'subcategory_name_th.required' => 'Name in Thai is required.',
    		'subcategory_name_en.required' => 'Name in English is required.',
            'subcategory_name_ch.required' => 'Name in Chinese is required.',
    	]);

    

        // Image#1 : subcategory_image
		$subcategory_image = NULL;
		if ($request->file('subcategory_image')) {
			$subcategory_image = $request->file('subcategory_image');
			$name_gen1 = hexdec(uniqid()).'.'.$subcategory_image->getClientOriginalExtension();
			Image::make($subcategory_image)->save('upload/subcategory/'.$name_gen1);
			$subcategory_image = 'upload/subcategory/'.$name_gen1;

		}

        // Image#1 : subcategory_product_image
		$subcategory_product_image = NULL;
		if ($request->file('subcategory_product_image')) {
			$subcategory_product_image = $request->file('subcategory_product_image');
			$name_gen2 = hexdec(uniqid()).'.'.$subcategory_product_image->getClientOriginalExtension();
			Image::make($subcategory_product_image)->save('upload/subcategory/'.$name_gen2);
			$subcategory_product_image = 'upload/subcategory/'.$name_gen2;

		}

		// Background image
		$subcategory_background_image = NULL;
		if ($request->file('subcategory_background_image')) {
			$background_image = $request->file('subcategory_background_image');
			$bg_name_gen = hexdec(uniqid()).'.'.$background_image->getClientOriginalExtension();
			Image::make($background_image)->save('upload/subcategory/'.$bg_name_gen);
			$subcategory_background_image = 'upload/subcategory/'.$bg_name_gen;

		}

		Subcategory::insert([
            'brand_id' =>$request->brand_id,
            'category_id' =>$request->category_id,
			'subcategory_name_th' => $request->subcategory_name_th,
			'subcategory_name_en' => $request->subcategory_name_en,
			'subcategory_name_ch' => $request->subcategory_name_ch,
            'subcategory_subtitle_th' => $request->subcategory_subtitle_th,
			'subcategory_subtitle_en' => $request->subcategory_subtitle_en,
			'subcategory_subtitle_ch' => $request->subcategory_subtitle_ch,
			'subcategory_description_th' => $request->subcategory_description_th,
			'subcategory_description_en' => $request->subcategory_description_en,
			'subcategory_description_ch' => $request->subcategory_description_ch,
			'subcategory_detail_th' => $request->subcategory_detail_th,
			'subcategory_detail_en' => $request->subcategory_detail_en,
			'subcategory_detail_ch' => $request->subcategory_detail_ch,
			'subcategory_youtube' => $request->subcategory_youtube,
			'subcategory_slug_th' => str_replace(' ', '-',$request->subcategory_name_th),
			'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
			'subcategory_slug_ch' => str_replace(' ', '-',$request->subcategory_name_ch),
			'status' => $request->status,
			'subcategory_image' => $subcategory_image,
			'subcategory_product_image'=>$subcategory_product_image,
            'subcategory_background_image'=>$subcategory_background_image,

    	]);

	    $notification = array(
			'message' => 'The subcategory information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


    public function SubcategoryEdit($id){
        $brands = Brand::orderBy('brand_name_en','ASC')->get();
    	$categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategory = Subcategory::findOrFail($id);
    	return view('backend.subcategory.subcategory_edit',compact('subcategory','categories','brands'));

    } //end method


    public function SubcategoryUpdate(Request $request){
    	
    	$subcategory_id = $request->id;
    	$old_image = $request->old_image;
        $subcategory_image = $old_image;
		$old_product_image = $request->old_product_image;
		$subcategory_product_image = $old_product_image;
        $old_background_image = $request->old_background_image;
		$subcategory_background_image = $old_background_image;

    	 // Image#1 : subcategory_image
		if ($request->file('subcategory_image')) {
            unlink($old_image);
			$subcategory_image = $request->file('subcategory_image');
			$name_gen1 = hexdec(uniqid()).'.'.$subcategory_image->getClientOriginalExtension();
			Image::make($subcategory_image)->save('upload/subcategory/'.$name_gen1);
			$subcategory_image = 'upload/subcategory/'.$name_gen1;

		}

        // Image#1 : subcategory_product_image
		if ($request->file('subcategory_product_image')) {
            unlink($old_product_image);
			$subcategory_product_image = $request->file('subcategory_product_image');
			$name_gen2 = hexdec(uniqid()).'.'.$subcategory_product_image->getClientOriginalExtension();
			Image::make($subcategory_product_image)->save('upload/subcategory/'.$name_gen2);
			$subcategory_product_image = 'upload/subcategory/'.$name_gen2;

		}

		// Background image
		if ($request->file('subcategory_background_image')) {
            unlink($old_background_image);
			$background_image = $request->file('subcategory_background_image');
			$bg_name_gen = hexdec(uniqid()).'.'.$background_image->getClientOriginalExtension();
			Image::make($background_image)->save('upload/subcategory/'.$bg_name_gen);
			$subcategory_background_image = 'upload/subcategory/'.$bg_name_gen;

		}


	    Subcategory::findOrFail($subcategory_id)->update([
            'brand_id' =>$request->brand_id,
            'category_id' =>$request->category_id,
			'subcategory_name_th' => $request->subcategory_name_th,
			'subcategory_name_en' => $request->subcategory_name_en,
			'subcategory_name_ch' => $request->subcategory_name_ch,
            'subcategory_subtitle_th' => $request->subcategory_subtitle_th,
			'subcategory_subtitle_en' => $request->subcategory_subtitle_en,
			'subcategory_subtitle_ch' => $request->subcategory_subtitle_ch,
			'subcategory_description_th' => $request->subcategory_description_th,
			'subcategory_description_en' => $request->subcategory_description_en,
			'subcategory_description_ch' => $request->subcategory_description_ch,
			'subcategory_detail_th' => $request->subcategory_detail_th,
			'subcategory_detail_en' => $request->subcategory_detail_en,
			'subcategory_detail_ch' => $request->subcategory_detail_ch,
			'subcategory_youtube' => $request->subcategory_youtube,
			'subcategory_slug_th' => str_replace(' ', '-',$request->subcategory_name_th),
			'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
			'subcategory_slug_ch' => str_replace(' ', '-',$request->subcategory_name_ch),
			'status' => $request->status,
			'subcategory_image' => $subcategory_image,
			'subcategory_product_image'=>$subcategory_product_image,
            'subcategory_background_image'=>$subcategory_background_image,

    	]);

	    $notification = array(
			'message' => 'The subcategory information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.subcategory')->with($notification);

    	
    } // end method 


    public function SubcategoryDelete($id){

    	$subcategory = Subcategory::findOrFail($id);
    	$img = $subcategory->subcategory_image;
        $product_img = $subcategory->subcategory_product_image;
		$background_img = $subcategory->subcategory_background_image;
    	unlink($img);
		unlink( $product_img);
        unlink($background_img);

    	Subcategory::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'The subcategory information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


	public function GetSubCategory($category_id){

		$subcategory = Subcategory::where('category_id',$category_id)->orderBy('subcategory_name_en','ASC')->get();
		return json_encode($subcategory);
	}

   



}
