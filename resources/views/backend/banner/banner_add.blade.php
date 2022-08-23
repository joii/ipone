@extends('admin.admin_master')
@section('admin')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Banner</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Banner</li>
								<li class="breadcrumb-item active" aria-current="page">Add new</li>
							</ol>
						</nav>
					</div>
				</div>
          
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
            <div class="row">
                <div class=" col-12">
                <div class="box">
					<div class="box-header">						
						<h4 class="box-title">Add new</h4>
                        <h6 class="box-subtitle">Please fill in all required fields.</h6>
					</div>
					<div class="box-body">
                    <div class="row">
                         <div class="col">
                            <form method="post" action="{{ route('banner.store')}}" enctype="multipart/form-data" >
                            @csrf 
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Brand : <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <select name="brand_id" class="form-control" >
                                            <option value="" selected="" disabled="">Select Brand</option>
                                            @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>	
                                            @endforeach
                                        </select>
                                        @error('brand_id') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        </div>
                                    </div>	
                                    <div class="form-group">
                                        <h5>Category (Optional):</h5>
                                        <div class="controls">
                                        <select name="category_id" class="form-control" >
                                        
                                        </select>
                                        @error('category_id') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        </div>
                                    </div>		
                                    <div class="form-group">
                                        <h5>Subcategory (Optional):</h5>
                                        <div class="controls">
                                        <select name="subcategory_id" class="form-control"  >
                                        </select>
                                    
                                        </div>
                                    </div>	
                                    <div class="form-group">
                                        <h5>Product (Optional):</h5>
                                        <div class="controls">
                                        <select name="product_id" class="form-control"  >
                                        </select>
                                    
                                        </div>
                                    </div>			
                                    <div class="form-group">
                                        <h5>Title (TH): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="banner_title_th" class="form-control" >
                                        @error('banner_title_th')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Title (EN): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="banner_title_en" class="form-control" >
                                        @error('banner_title_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Title (CH): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="banner_title_ch" class="form-control" >
                                        @error('banner_title_ch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Banner :(Maximum width: 1400px) : </h5>
                                        <div class="controls">
                                        <input type="file" name="banner_image" class="form-control"  id="image">
                                        <img id="showImage" width="80"></img>
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <h5>Mobile Banner :(1000x750px) : </h5>
                                        <div class="controls">
                                        <input type="file" name="banner_mobile_image" class="form-control"  id="mobile_image">
                                        <img id="showMobileImage" width="80"></img>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>External Link:</h5>
                                        <div class="controls">
                                        <input name="banner_url" type="text" class="form-control" >
                                        @error('banner_url') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                    <input name="status" type="radio" id="status1" value="1" class="radio-col-success" checked>
                                    <label for="status1">Active</label>
                                    <input name="status" type="radio" id="status2" value="0" class="radio-col-danger">
                                    <label for="status2">Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">  
                                <input type="submit" class="btn btn-outline btn-primary mb-5" value="Add new">
                            </div>
                            </form>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
			</div>
			<!-- /.box-body -->
                </div>
                <!-- /. box -->
                </div>  <!-- /. col-12 -->
               
            </div>

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
    $('#mobile_image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showMobileImage').attr('src',e.target.result);	
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});


$('select[name="brand_id"]').on('change', function(){
    var brand_id = $(this).val();
    if(brand_id) {
        $.ajax({
            url: "{{  url('/category/ajax') }}/"+brand_id,
            type:"GET",
            dataType:"json",
            success:function(data) {
                $('select[name="category_id"]').html('');
                var d =$('select[name="category_id"]').empty();
                    $('select[name="category_id"]').append('<option value="" selected="">Select Category</option>');
                    $.each(data, function(key, value){
                        $('select[name="category_id"]').append('<option value="'+ value.id +'">' + value.category_name_en + '</option>');
                    });
            },
        });
    } else {
        alert('No items selected');
    }
});


$('select[name="category_id"]').on('change', function(){
    var category_id = $(this).val();
    if(category_id) {
        $.ajax({
            url: "{{  url('/subcategory/ajax') }}/"+category_id,
            type:"GET",
            dataType:"json",
            success:function(data) {
                $('select[name="subcategory_id"]').html('');
                var d =$('select[name="subcategory_id"]').empty();
                $('select[name="subcategory_id"]').append('<option value="" selected="">Select Subcategory</option>');
                    $.each(data, function(key, value){
                        $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                    });
            },
        });
    } else {
        alert('No items selected');
    }
});

$('select[name="subcategory_id"]').on('change', function(){
    var subcategory_id = $(this).val();
    if(subcategory_id) {
        $.ajax({
            url: "{{  url('/product/ajax') }}/"+subcategory_id,
            type:"GET",
            dataType:"json",
            success:function(data) {
                $('select[name="product_id"]').html('');
                var d =$('select[name="product_id"]').empty();
                $('select[name="product_id"]').append('<option value="" selected="">Select Product</option>');
                    $.each(data, function(key, value){
                        $('select[name="product_id"]').append('<option value="'+ value.id +'">' + value.product_name_en + '</option>');
                    });
            },
        });
    } else {
        alert('No items selected');
    }
});
</script>


@endsection