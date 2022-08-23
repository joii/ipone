@extends('admin.admin_master')
@section('admin')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<style>
    .note-editable{
        color:#ccc !important;
    }
</style>
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Category</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Category</li>
								<li class="breadcrumb-item active" aria-current="page">Update</li>
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
						<h4 class="box-title">Update product category</h4>
                        <h6 class="box-subtitle">Please fill in all required fields.</h6>
					</div>
					<div class="box-body">
                    <div class="row">
                    <div class="col">
                    <form method="post" action="{{ route('category.update')}}" enctype="multipart/form-data" >
                        @csrf 
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Brand :</h5>
                                    <div class="controls">
                                    <select name="brand_id" class="form-control" required="" >
                                        <option value="" selected="" disabled="">Select Brand</option>
                                        @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ $brand->id == $category->brand_id ? 'selected': '' }}>{{ $brand->brand_name_en }}</option>	
                                        @endforeach
                                    </select>
                                    @error('brand_id') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>
                                </div>						
                                <div class="form-group">
                                    <h5>Name (TH): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="category_name_th" class="form-control"  value="{{ $category->category_name_th }}">
                                    @error('category_name_th')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Name (EN): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="category_name_en" class="form-control" value="{{ $category->category_name_en }}" >
                                    @error('category_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Name (CH): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="category_name_ch" class="form-control" value="{{ $category->category_name_ch }}">
                                    @error('category_name_ch')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <h5>Short title (TH): </h5>
                                    <div class="controls">
                                    <input type="text" name="category_subtitle_th" class="form-control" value="{{ $category->category_subtitle_th }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Short title (EN): </h5>
                                    <div class="controls">
                                    <input type="text" name="category_subtitle_en" class="form-control" value="{{ $category->category_subtitle_en }}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Short title (CH): </h5>
                                    <div class="controls">
                                    <input type="text" name="category_subtitle_ch" class="form-control" value="{{ $category->category_subtitle_ch }}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (TH): </h5>
                                    <div class="controls">
                                    <textarea name="category_description_th" class="form-control">{{ $category->category_description_th }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (EN): </h5>
                                    <div class="controls">
                                    <textarea name="category_description_en" class="form-control" >{{ $category->category_description_en }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (CH): </h5>
                                    <div class="controls">
                                    <textarea name="category_description_ch" class="form-control" >{{ $category->category_description_ch }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (TH)</h5>
                                    <div class="controls">
                                    <textarea name="category_detail_th" class="summernote" >{{ $category->category_detail_th }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (EN)</h5>
                                    <div class="controls">
                                    <textarea name="category_detail_en" class="summernote">{{ $category->category_detail_en }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (CH)</h5>
                                    <div class="controls">
                                    <textarea name="category_detail_ch" class="summernote">{{ $category->category_detail_ch }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Category Image (800x800px) : </h5>
                                    <div class="controls">
                                    @if(!empty($category->category_image))
                                        <p><a href="{{ asset($category->category_image)}}" target="_blank">  
                                            <img src="{{ asset($category->category_image)}}" width="80" />
                                        </a></p>
                                    @endif
                                    <input type="file" name="category_image" class="form-control"  id="image">
                                    @error('category_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <h5>Category Product Image (795×1080px) : </h5>
                                    <div class="controls">
                                    @if(!empty($category->category_product_image))
                                        <p><a href="{{ asset($category->category_product_image)}}" target="_blank">  
                                            <img src="{{ asset($category->category_product_image)}}" width="80" />
                                        </a></p>
                                    @endif
                                    <input type="file" name="category_product_image" class="form-control"  id="image">
                                    @error('category_product_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <h5>Category Background : </h5>
                                    <div class="controls">
                                    @if(!empty($category->category_background_image))
                                        <p><a href="{{ asset($category->category_background_image)}}" target="_blank">
                                            <img src="{{ asset($category->category_background_image)}}" width="80" />
                                        </a></p>
                                    @endif
                                    <input type="file" name="category_background_image" class="form-control"  id="image">
                                    @error('category_background_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div> 
                              
                                <div class="form-group">
                                <input name="status" type="radio" id="status1" value="1" class="radio-col-success" {{ $category->status == 1 ? 'checked': '' }}>
                                <label for="status1">Active</label>
                                <input name="status" type="radio" id="status2" value="0" class="radio-col-danger" {{ $category->status == 0 ? 'checked': '' }}>
                                <label for="status2">Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs-right">  
                            <input type="hidden" name="old_image" value="{{ $category->category_image }}" />
                            <input type="hidden" name="old_product_image" value="{{ $category->category_product_image }}" />
                            <input type="hidden" name="old_background_image" value="{{ $category->category_background_image }}" />
                            <input type="hidden" name="id" value="{{ $category->id }}" />
                            <input type="submit" class="btn btn-outline btn-primary mb-5" value="Update">
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

 <script>
      $('.summernote').summernote({
    placeholder: 'Brand detail',
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ]
    });

    
</script>

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