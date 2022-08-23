<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function BrandView(){
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_view',compact('brands'));
    } //end method

    public function BrandAdd(){
        return view('backend.brand.brand_add');
    } //end method

    public function BrandStore(Request $request){
        $request->validate([
    		'brand_name_th' => 'required',
    		'brand_name_en' => 'required',
            'brand_name_ch' => 'required',
    		'brand_logo' => 'required',
			'brand_background_image' => 'required',
    	],[
    		'brand_name_th.required' => 'Name in Thai is required.',
    		'brand_name_en.required' => 'Name in English is required.',
            'brand_name_ch.required' => 'Name in Chinese is required.',
    	]);

    	$logo = $request->file('brand_logo');
    	$name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
    	//Image::make($logo)->resize(300,300)->save('upload/brand/'.$name_gen); // resize image
		Image::make($logo)->save('upload/brand/'.$name_gen);
    	$brand_logo = 'upload/brand/'.$name_gen;

		// Background image on homepage
		$brand_background_image = NULL;
		if ($request->file('brand_background_image')) {
			$background_image = $request->file('brand_background_image');
			$bg_name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
			Image::make($background_image)->save('upload/brand/'.$bg_name_gen);
			$brand_background_image = 'upload/brand/'.$bg_name_gen;

		}

		Brand::insert([
			'brand_name_th' => $request->brand_name_th,
			'brand_name_en' => $request->brand_name_en,
			'brand_name_ch' => $request->brand_name_ch,
			'brand_description_th' => $request->brand_description_th,
			'brand_description_en' => $request->brand_description_en,
			'brand_description_ch' => $request->brand_description_ch,
			'brand_detail_th' => $request->brand_detail_th,
			'brand_detail_en' => $request->brand_detail_en,
			'brand_detail_ch' => $request->brand_detail_ch,
			'brand_slug_th' => str_replace(' ', '-',$request->brand_name_th),
			'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
			'brand_slug_ch' => str_replace(' ', '-',$request->brand_name_ch),
			'status' => $request->status,
			'brand_logo' => $brand_logo,
			'brand_background_image'=>$brand_background_image,
			'status'=>$request->status,
    	]);

	    $notification = array(
			'message' => 'The brand information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


    public function BrandEdit($id){
    	$brand = Brand::findOrFail($id);
    	return view('backend.brand.brand_edit',compact('brand'));

    } //end method

    public function BrandUpdate(Request $request){
    	
    	$brand_id = $request->id;
    	$old_logo = $request->old_logo;
        $brand_logo = $old_logo;
		$old_background_image = $request->old_background_image;
		$brand_background_image = $old_background_image;

    	if ($request->file('brand_logo')) {

    	unlink($old_logo);
    	$logo = $request->file('brand_logo');
    	$name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
    	//Image::make($logo)->resize(300,300)->save('upload/brand/'.$name_gen);
		Image::make($logo)->save('upload/brand/'.$name_gen);
    	$brand_logo = 'upload/brand/'.$name_gen;

        }

		// Background image on homepage
		if ($request->file('brand_background_image')) {
			unlink($old_background_image);
			$background_image = $request->file('brand_background_image');
			$bg_name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
			Image::make($background_image)->save('upload/brand/'.$bg_name_gen);
			$brand_background_image = 'upload/brand/'.$bg_name_gen;

		}


	    Brand::findOrFail($brand_id)->update([
            'brand_name_th' => $request->brand_name_th,
            'brand_name_en' => $request->brand_name_en,
            'brand_name_ch' => $request->brand_name_ch,
            'brand_description_th' => $request->brand_description_th,
            'brand_description_en' => $request->brand_description_en,
            'brand_description_ch' => $request->brand_description_ch,
            'brand_detail_th' => $request->brand_detail_th,
            'brand_detail_en' => $request->brand_detail_en,
            'brand_detail_ch' => $request->brand_detail_ch,
            'brand_slug_th' => str_replace(' ', '-',$request->brand_name_th),
            'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
            'brand_slug_ch' => str_replace(' ', '-',$request->brand_name_ch),
            'status' => $request->status,
            'brand_logo' => $brand_logo,
			'brand_background_image'=>$brand_background_image,

    	]);

	    $notification = array(
			'message' => 'The brand information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.brand')->with($notification);

    	
    } // end method 


    public function BrandDelete($id){

    	$brand = Brand::findOrFail($id);
    	$logo_img = $brand->brand_logo;
		$bg_img = $brand->brand_background_image;
    	unlink($logo_img);
		unlink($bg_img);

    	Brand::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'The brand information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 



}


