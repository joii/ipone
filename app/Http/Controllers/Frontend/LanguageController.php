<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App;

class LanguageController extends Controller
{
    
    function changeLang($langcode){
    
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }

    public function Thai(){
        session()->get('language');
        session()->forget('language');
        App::setLocale('thai');
        session()->put("lang_code",'th');
        Session::put('language','thai');
        return redirect()->back();
    }
 
    public function English(){
        session()->get('language');
        session()->forget('language');
        App::setLocale('english');
        session()->put("lang_code",'en');
        Session::put('language','english');
        return redirect()->back();
    }

    public function Chinese(){
        session()->get('language');
        session()->forget('language');
        App::setLocale('chinese');
        session()->put("lang_code",'ch');
        Session::put('language','chinese');
        return redirect()->back();
    }
 
}
