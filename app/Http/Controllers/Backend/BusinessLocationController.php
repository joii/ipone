<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessLocation;
use App\Models\Country;
use Image;

class BusinessLocationController extends Controller
{
    public function BusinessLocationView(){
       // $locations = BusinessLocation::latest()->get();
	   $locations = BusinessLocation::join('countries', 'countries.id', '=', 'business_locations.country_id')
	   ->get(['business_locations.*', 'countries.country_name_th']);
	   
        return view('backend.business_location.business_location_view',compact('locations'));
    } //end method

    public function BusinessLocationAdd(){
        $countries = Country::orderBy('country_name_en','ASC')->get();
        return view('backend.business_location.business_location_add',compact('countries'));
    } //end method

    public function BusinessLocationStore(Request $request){
        $request->validate([
            'section_id' => 'required',
			'country_id' =>'required',
    		'bl_name_th' => 'required',
    		'bl_name_en' => 'required',
            'bl_name_ch' => 'required',
            'bl_address1_th' => 'required',
    		'bl_address1_en' => 'required',
            'bl_address1_ch' => 'required',
            'bl_marker' => 'required',
			'latitude'=>'required',
			'longitude'=>'required',
    	],[
            'section_id.required' => 'Please select section.',
			'country_id.required' => 'Please select country.',
    		'bl_name_th.required' => 'Name in Thai is required.',
    		'bl_name_en.required' => 'Name in English is required.',
            'bl_name_ch.required' => 'Name in Chinese is required.',
            'bl_address1_th.required' => 'Address in Thai is required.',
    		'bl_address1_en.required' => 'Address in English is required.',
            'bl_address1_ch.required' => 'Address in Chinese is required.',
            'bl_marker.required' => 'Image marker is required.',
			'latitude.required' => 'Latitude is required.',
			'longitude.required' => 'Longitude is required.',
    	]);


        // Image : 300x175
		
		if ($request->file('bl_image')) {
			$bl_image = $request->file('bl_image');
			$name_gen1 = hexdec(uniqid()).'.'.$bl_image->getClientOriginalExtension();
            Image::make($bl_image)->resize(300, 175)->save('upload/location/'.$name_gen1);
			$bl_image = 'upload/location/'.$name_gen1;
		}else{
			$bl_image = NULL;
		}

        //  Marker : 60x90 / 80x110
		// Inter Business : section_id = 1 use 80x110
		// Contact : section_id = 2 use 60x90

		$w = 80;
		$h = 110;
		if($request->section_id==2){
			$w = 60;
			$h = 90;
		}

		
		if ($request->file('bl_marker')) {
			$bl_marker = $request->file('bl_marker');
			$name_gen2 = hexdec(uniqid()).'.'.$bl_marker->getClientOriginalExtension();
            Image::make($bl_marker)->resize($w, $h)->save('upload/location/pin/'.$name_gen2);
			$bl_marker = 'upload/location/pin/'.$name_gen2;
		}else{
			$bl_marker = NULL;
		}

		//  Flag : 60x60
		
		if ($request->file('bl_flag')) {
			$bl_flag = $request->file('bl_flag');
			$name_gen3 = hexdec(uniqid()).'.'.$bl_flag->getClientOriginalExtension();
            Image::make($bl_flag)->resize(60, 60)->save('upload/location/flag/'.$name_gen3);
			$bl_flag = 'upload/location/flag/'.$name_gen3;
		}else{
			$bl_flag = NULL;
		}


    
		BusinessLocation::insert([
            'section_id' =>$request->section_id,
            'country_id' =>$request->country_id,
            'bl_type_id' =>$request->type_id,
			'bl_name_th' => $request->bl_name_th,
			'bl_name_en' => $request->bl_name_en,
			'bl_name_ch' => $request->bl_name_ch,
            'bl_address1_th' => $request->bl_address1_th,
			'bl_address1_en' => $request->bl_address1_en,
			'bl_address1_ch' => $request->bl_address1_ch,
            'bl_address2_th' => $request->bl_address2_th,
			'bl_address2_en' => $request->bl_address2_en,
			'bl_address2_ch' => $request->bl_address2_ch,
            'bl_address3_th' => $request->bl_address3_th,
			'bl_address3_en' => $request->bl_address3_en,
			'bl_address3_ch' => $request->bl_address3_ch,
            'bl_phone' => $request->bl_phone,
            'bl_email' => $request->bl_email,
            'bl_transportation_th' => $request->bl_transportation_th,
			'bl_transportation_en' => $request->bl_transportation_en,
			'bl_transportation_ch' => $request->bl_transportation_ch,
            'bl_bts_th' => $request->bl_bts_th,
			'bl_bts_en' => $request->bl_bts_en,
			'bl_bts_ch' => $request->bl_bts_ch,
			'bl_social_name' => $request->bl_social_name,
			'bl_social_url' => $request->bl_social_url,
            'latitude' => $request->latitude,
			'longitude' => $request->longitude,
            'bl_image' => $bl_image,
            'bl_marker' => $bl_marker,
			'bl_flag' => $bl_flag,
			'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The business location information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } //end method


    public function BusinessLocationEdit($id){
		$location = BusinessLocation::findOrFail($id);
        $countries = Country::orderBy('country_name_en','ASC')->get();	
    	return view('backend.business_location.business_location_edit',compact('location','countries'));

    } //end method

	public function BusinessLocationUpdate(Request $request){
    	
    	$location_id = $request->id;
    	$old_image = $request->old_image;
        $bl_image = $old_image;
		$old_marker = $request->old_marker;
		$bl_marker = $old_marker;
		$old_flag = $request->old_flag;
		$bl_flag = $old_flag;

		$request->validate([
            'section_id' => 'required',
			'country_id' =>'required',
    		'bl_name_th' => 'required',
    		'bl_name_en' => 'required',
            'bl_name_ch' => 'required',
            'bl_address1_th' => 'required',
    		'bl_address1_en' => 'required',
            'bl_address1_ch' => 'required',
    
    	],[
            'section_id.required' => 'Please select section.',
			'country_id.required' => 'Please select country.',
    		'bl_name_th.required' => 'Name in Thai is required.',
    		'bl_name_en.required' => 'Name in English is required.',
            'bl_name_ch.required' => 'Name in Chinese is required.',
            'bl_address1_th.required' => 'Address in Thai is required.',
    		'bl_address1_en.required' => 'Address in English is required.',
            'bl_address1_ch.required' => 'Address in Chinese is required.',
          
    	]);



		// Image : 300x175
		if ($request->file('bl_image')) {
			if(file_exists($old_image))
				unlink($old_image);
			$bl_image = $request->file('bl_image');
			$name_gen1 = hexdec(uniqid()).'.'.$bl_image->getClientOriginalExtension();
            Image::make($bl_image)->resize(300, 175)->save('upload/location/'.$name_gen1);
			$bl_image = 'upload/location/'.$name_gen1;
		}

		//  Marker : 60x90 / 80x110
		// Inter Business : section_id = 1 use 80x110
		// Contact : section_id = 2 use 60x90

		$w = 80;
		$h = 110;
		if($request->section_id==2){
			$w = 60;
			$h = 90;
		}
		if ($request->file('bl_marker')) {
			if(file_exists($old_marker))
				unlink($old_marker);
			$bl_marker = $request->file('bl_marker');
			$name_gen2 = hexdec(uniqid()).'.'.$bl_marker->getClientOriginalExtension();
            Image::make($bl_marker)->resize($w, $h)->save('upload/location/pin/'.$name_gen2);
			$bl_marker = 'upload/location/pin/'.$name_gen2;
		}


		//  Flag : 60x60
		
		if ($request->file('bl_flag')) {
			if(file_exists($old_flag))
				unlink($old_flag);
			$bl_flag = $request->file('bl_flag');
			$name_gen3 = hexdec(uniqid()).'.'.$bl_flag->getClientOriginalExtension();
            Image::make($bl_flag)->resize(60, 60)->save('upload/location/flag/'.$name_gen3);
			$bl_flag = 'upload/location/flag/'.$name_gen3;
		}


	    BusinessLocation::findOrFail($location_id)->update([
			'section_id' =>$request->section_id,
            'country_id' =>$request->country_id,
            'bl_type_id' =>$request->type_id,
			'bl_name_th' => $request->bl_name_th,
			'bl_name_en' => $request->bl_name_en,
			'bl_name_ch' => $request->bl_name_ch,
            'bl_address1_th' => $request->bl_address1_th,
			'bl_address1_en' => $request->bl_address1_en,
			'bl_address1_ch' => $request->bl_address1_ch,
            'bl_address2_th' => $request->bl_address2_th,
			'bl_address2_en' => $request->bl_address2_en,
			'bl_address2_ch' => $request->bl_address2_ch,
            'bl_address3_th' => $request->bl_address3_th,
			'bl_address3_en' => $request->bl_address3_en,
			'bl_address3_ch' => $request->bl_address3_ch,
            'bl_phone' => $request->bl_phone,
            'bl_email' => $request->bl_email,
            'bl_transportation_th' => $request->bl_transportation_th,
			'bl_transportation_en' => $request->bl_transportation_en,
			'bl_transportation_ch' => $request->bl_transportation_ch,
            'bl_bts_th' => $request->bl_bts_th,
			'bl_bts_en' => $request->bl_bts_en,
			'bl_bts_ch' => $request->bl_bts_ch,
			'bl_social_name' => $request->bl_social_name,
			'bl_social_url' => $request->bl_social_url,
            'latitude' => $request->latitude,
			'longitude' => $request->longitude,
            'bl_image' => $bl_image,
            'bl_marker' => $bl_marker,
			'bl_flag' => $bl_flag,
			'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The business location information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.business_location')->with($notification);

    	
    } // end method 


	public function BusinessLocationDelete($id){

    	$location = BusinessLocation::findOrFail($id);
    	$bl_image = $location->bl_image;
		$bl_marker =$location->bl_marker;
		$bl_flag =$location->bl_flag;
    	unlink($bl_image);
		unlink($bl_marker);
		unlink($bl_flag);

    	BusinessLocation::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'The business location information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 



}
