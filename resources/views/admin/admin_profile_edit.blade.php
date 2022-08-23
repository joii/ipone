@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Admin Profile</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Admin</li>
								<li class="breadcrumb-item active" aria-current="page">Edit profile</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit Profile</h4>
			  <h6 class="box-subtitle">Please fill in all required fields.</h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
				<form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" >
					@csrf 
                    <div class="row">
						<div class="col-12">						
							<div class="form-group">
								<h5>Name : <span class="text-danger">*</span></h5>
								<div class="controls">
                                <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}">
                                </div>
							</div>
							<div class="form-group">
								<h5>Email : <span class="text-danger">*</span></h5>
								<div class="controls">
                                <input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}">
								</div>
							</div>
							<div class="form-group">
								<h5>Profile image (300x300px) : <span class="text-danger">*</span></h5>
								<div class="controls">
                                <p>
                                <img id="showImage" src="{{ (!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path):url('upload/admin_images/no-image.webp') }}" style="width: 100px; height: 100px;">				
                                </p>
                                <input type="file" name="profile_photo_path" class="form-control"  id="image">
								</div>
							</div>
							
						</div>
						
					  </div>
						
						
						<div class="text-xs-right">
                        <input type="hidden" name="oldImage" value="{{$editData->profile_photo_path}}" />    
                        <input type="submit" class="btn btn-primary mb-5" value="Update">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>

<script type="text/javascript">
$(document).ready(function(){
$('#image').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);	
    }
    reader.readAsDataURL(e.target.files['0']);
});
});
</script>
@endsection  