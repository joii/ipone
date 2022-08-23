<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
	   $id =1;// Auth::id();
	   $adminData = Admin::find($id);
	   $user = Auth::user();

       return view('admin.admin_profile_view',compact('adminData'));
    } // end method

    public function AdminProfileEdit(){
     
	    $id = 1;//Auth::id();
		$editData = Admin::find($id);
        return view('admin.admin_profile_edit',compact('editData'));
    } // end method 

    public function AdminProfileStore(Request $request){

		$id = 1;//Auth::id();
		$data = Admin::find($id);
		$data->name = $request->name;
		$data->email = $request->email;


		if ($request->file('profile_photo_path')) {
			$file = $request->file('profile_photo_path');
			@unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('upload/admin_images'),$filename);
			$data['profile_photo_path'] = $filename;
		}else{
            $data['profile_photo_path'] = $request->oldImage;
        }
		$data->save();

		$notification = array(
			'message' => 'Admin Profile Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('admin.profile')->with($notification);

	} // end method 


    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    } // end method

    public function AdminUpdateChangePassword(Request $request){

		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',
		]);

		$hashedPassword = Admin::find(1)->password; //Auth::user()->password;
		if (Hash::check($request->oldpassword,$hashedPassword)) {
			$id = 1;//Auth::id();
			$admin = Admin::find($id); 
			$admin->password = Hash::make($request->password);
			$admin->save();
			Auth::logout();
			return redirect()->route('admin.logout');
		}else{
			return redirect()->back();
		}


	} // end method

}
