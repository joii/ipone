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
					<h3 class="page-title">Subcategory</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Subcategory</li>
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
                    <form method="post" action="{{ route('subcategory.store')}}" enctype="multipart/form-data" >
                        @csrf 
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Brand :<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <select name="brand_id" class="form-control" required="" >
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
                                    <h5>Category :<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <select name="category_id" class="form-control" required="" >
                                        <option value="" selected="" disabled="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>	
                                        @endforeach
                                    </select>
                                    @error('category_id') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>
                                </div>						
                                <div class="form-group">
                                    <h5>Name (TH): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_name_th" class="form-control" >
                                    @error('subcategory_name_th')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Name (EN): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_name_en" class="form-control" >
                                    @error('subcategory_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Name (CH): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_name_ch" class="form-control" >
                                    @error('subcategory_name_ch')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <h5>Short title (TH): </h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_subtitle_th" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Short title (EN): </h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_subtitle_en" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Short title (CH): </h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_subtitle_ch" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (TH): </h5>
                                    <div class="controls">
                                    <textarea name="subcategory_description_th" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (EN): </h5>
                                    <div class="controls">
                                    <textarea name="subcategory_description_en" class="form-control" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (CH): </h5>
                                    <div class="controls">
                                    <textarea name="subcategory_description_ch" class="form-control" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (TH)</h5>
                                    <div class="controls">
                                    <textarea name="subcategory_detail_th" class="summernote" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (EN)</h5>
                                    <div class="controls">
                                    <textarea name="subcategory_detail_en" class="summernote"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (CH)</h5>
                                    <div class="controls">
                                    <textarea name="subcategory_detail_ch" class="summernote"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Youtube URL (Ex.https://www.youtube.com/embed/poHFy4DDm38) : </h5>
                                    <div class="controls">
                                    <input type="text" name="subcategory_youtube" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Subcategory Image (1400x1200px) : </h5>
                                    <div class="controls">
                                    <input type="file" name="subcategory_image" class="form-control"  id="image">
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <h5>Subcategory Banner on product list page (1600x920px) : </h5>
                                    <div class="controls">
                                    <input type="file" name="subcategory_product_image" class="form-control"  id="image">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <h5> Subcategory Detail Image : </h5>
                                    <div class="controls">
                                    <input type="file" name="subcategory_background_image" class="form-control"  id="image">
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

</script>


@endsection