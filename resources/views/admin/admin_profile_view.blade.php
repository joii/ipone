@extends('admin.admin_master')
@section('admin')
<div class="container-full">

<!-- Main content -->
<section class="content">
    <div class="row">
        
    <div class="box box-inverse bg-img" data-overlay="2">
					  <div class="flexbox px-20 pt-20">
					  <p></p>
						<div class="dropdown  flex-end">
						  <a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
						  <div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="{{ route('admin.profile.edit')}}"><i class="fa fa-user"></i> Edit profile</a>
							<a class="dropdown-item" href="{{ route('admin.change.password')}}"><i class="fa fa-unlock-alt"></i>Change password</a>
						  </div>
						</div>
					  </div>

					  <div class="box-body text-center pb-50">
						<a href="#">
						  <img class="avatar avatar-xxl avatar-bordered" src="{{ !empty($adminData->profile_photo_path)? url('upload/admin_images/'.$adminData->profile_photo_path): url('upload/admin_images/no-image.webp') }}" alt="">
						</a>
						<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{ $adminData->name }}</a></h4>
						<span><i class=" w-20"></i> {{ $adminData->email }}</span>
						
					  </div>

					 
					</div>

				
        
    </div>
</section>
<!-- /.content -->
</div>
 @endsection  