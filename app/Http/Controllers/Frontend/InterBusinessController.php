<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessLocation;

class InterBusinessController extends Controller
{
    public function InterBusinessPage(){
        $locations = BusinessLocation::join('countries', 'countries.id', '=', 'business_locations.country_id')
        ->where('business_locations.section_id','=','1')
	    ->get(['business_locations.*', 'countries.*']);

        return view('frontend.inter_business',compact('locations'));
     }
}
