<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function CountryView(){
        $countries = Country::latest()->get();
        return view('backend.country.country_view',compact('countries'));
    } //end method

    public function CountryAdd(){
        return view('backend.country.country_add');
    } //end method

    public function CountryStore(Request $request)
    {
        $request->validate([
    		'country_name_th' => 'required',
    		'country_name_en' => 'required',
            'country_name_ch' => 'required',
    	],[
    		'country_name_th.required' => 'Name in Thai is required.',
    		'country_name_en.required' => 'Name in English is required.',
            'country_name_ch.required' => 'Name in Chinese is required.',
    	]);

		Country::insert([
			'country_name_th' => $request->country_name_th,
			'country_name_en' => $request->country_name_en,
			'country_name_ch' => $request->country_name_ch,
			'status'=>$request->status,

    	]);

	    $notification = array(
			'message' => 'The country information was inserted successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } //end method

    public function CountryEdit($id){
    	$country = Country::findOrFail($id);
    	return view('backend.country.country_edit',compact('country'));

    } //end method


    public function CountryUpdate(Request $request){
    	
    	$country_id = $request->id;
    
	    Country::findOrFail($country_id)->update([
            'country_name_th' => $request->country_name_th,
            'country_name_en' => $request->country_name_en,
            'country_name_ch' => $request->country_name_ch,
            'status' => $request->status,

    	]);

	    $notification = array(
			'message' => 'The country information was updated successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.country')->with($notification);

    	
    } // end method 


    public function CountryDelete($id){

    	Country::findOrFail($id)->delete();
    	 $notification = array(
			'message' => 'The country information was deleted successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method 


}
