@extends('admin.admin_master')
@section('admin')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<style>
    .note-editable{
        color:#ccc !important;
    }

    .bootstrap-tagsinput {
        border: 1px solid rgba(255, 255, 255, 0.1) !important; 
        box-shadow: none;
        outline: none;
        background-color: #272e48;
        color: #8a99b5 !important;
        padding: 4px 3px;
        vertical-align: middle;
        border-radius: 10px;
        line-height: 22px;
        cursor: text;
        width:100% !implements;
        max-width: 100% !important;
    }

</style>
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Products</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Products</li>
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
						<h4 class="box-title">Update</h4>
                        <h6 class="box-subtitle">Please fill in all required fields.</h6>
					</div>
					<div class="box-body">
                    <div class="row">
                    <div class="col">
                    <form method="post" action="{{ route('product.update')}}" enctype="multipart/form-data" >
                        @csrf 
                        <div class="row">
                            <div class="col-12">
                            <div class="form-group">
                                    <h5>Brand :<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <select name="brand_id" class="form-control" required="" >
                                        <option value="" selected="" disabled="">Select Brand</option>
                                        @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}"  {{ $brand->id == $product->brand_id ? 'selected': '' }}>{{ $brand->brand_name_en }}</option>	
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
                                        <option value="{{ $category->id }}"  {{ $category->id == $product->category_id ? 'selected': '' }}>{{ $category->category_name_en }}</option>	
                                        @endforeach
                                    </select>
                                    @error('category_id') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>
                                </div>		
                                <div class="form-group">
                                    <h5>Subcategory :</h5>
                                    <div class="controls">
                                    <select name="subcategory_id" class="form-control"  >
                                        @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"  {{ $subcategory->id == $product->subcategory_id ? 'selected': '' }}>{{ $subcategory->subcategory_name_en }}</option>	
                                        @endforeach
                                    </select>
                                   
                                    </div>
                                </div>					
                                <div class="form-group">
                                    <h5>Name (TH): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="product_name_th" class="form-control" value="{{ $product->product_name_th }}">
                                    @error('product_name_th')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Name (EN): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="product_name_en" class="form-control" value="{{ $product->product_name_en }}">
                                    @error('product_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Name (CH): <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="product_name_ch" class="form-control" value="{{ $product->product_name_ch }}" >
                                    @error('product_name_ch')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <h5>Short title (TH): </h5>
                                    <div class="controls">
                                    <input type="text" name="product_subtitle_th" class="form-control" value="{{ $product->product_subtitle_th }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Short title (EN): </h5>
                                    <div class="controls">
                                    <input type="text" name="product_subtitle_en" class="form-control" value="{{ $product->product_subtitle_en }}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Short title (CH): </h5>
                                    <div class="controls">
                                    <input type="text" name="product_subtitle_ch" class="form-control" value="{{ $product->product_subtitle_ch }}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (TH): </h5>
                                    <div class="controls">
                                    <textarea name="product_description_th" class="form-control">{{ $product->product_description_th }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (EN): </h5>
                                    <div class="controls">
                                    <textarea name="product_description_en" class="form-control" >{{ $product->product_description_en }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description (CH): </h5>
                                    <div class="controls">
                                    <textarea name="product_description_ch" class="form-control" >{{ $product->product_description_ch }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (TH)</h5>
                                    <div class="controls">
                                    <textarea name="product_detail_th" class="summernote" >{{ $product->product_detail_th }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (EN)</h5>
                                    <div class="controls">
                                    <textarea name="product_detail_en" class="summernote">{{ $product->product_detail_en }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Detail (CH)</h5>
                                    <div class="controls">
                                    <textarea name="product_detail_ch" class="summernote">{{ $product->product_detail_ch }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Size (ml.):<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input name="product_size" type="text" data-role="tagsinput"  class="form-control" value="{{ $product->product_size}}" >
                                    @error('product_size') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>
                                </div>	
                                <div class="form-group">
                                    <h5>Shopee Link:</h5>
                                    <div class="controls">
                                    <input name="shopee_url" type="text" class="form-control" value="{{ $product->shopee_url}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Lazada Link:</h5>
                                    <div class="controls">
                                    <input name="lazada_url" type="text" class="form-control" value="{{ $product->lazada_url}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>JD Central Link:</h5>
                                    <div class="controls">
                                    <input name="jd_url" type="text" class="form-control"  value="{{ $product->jd_url}}">
                                    </div>
                                </div>	
                                <div class="form-group">
                                    <h5>Product thumbnail :(400x300px) : </h5>
                                    <div class="controls">
                                    @if(!empty($product->product_thumbnail))
                                        <p><a href="{{ asset($product->product_thumbnail)}}" target="_blank">  
                                            <img src="{{ asset($product->product_thumbnail)}}" width="80" />
                                        </a></p>
                                    @endif    
                                    <input type="file" name="product_thumbnail" class="form-control"  id="image">
                                    <div class="row" id="thumb_preview_img"></div>
                                    </div>
                                </div>  
                                <div class="form-group">
                                <input name="status" type="radio" id="status1" value="1" class="radio-col-success" {{ $product->status == 1 ? 'checked': '' }}>
                                <label for="status1">Active</label>
                                <input name="status" type="radio" id="status2" value="0" class="radio-col-danger" {{ $product->status == 0 ? 'checked': '' }}>
                                <label for="status2">Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs-right">  
                            <input type="hidden" name="old_thumbnail" value="{{ $product->product_thumbnail }}" />
                            <input type="hidden" name="id" value="{{ $product->id }}" />
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

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                        <div class="box bt-3 border-info">
                            <div class="box-header"><h4 class="box-title">Product Gallery Image <strong>Update</strong></h4> </div>
                            <form method="post" action="{{ route('update-product-gallery') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row row-sm">
                                    @foreach($products_galleries as $img)
                                    <div class="col-md-3 p-30">
                                        <div class="card">
                                        <img src="{{ asset($img->photo_url) }}"  style="height:auto; width: 150px;">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="{{ route('product.products_galleries.delete',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i> </a>
                                            </h5>
                                            <p class="card-text"> 
                                                <div class="form-group">
                                                    <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                                                    <input class="form-control" type="file" name="photo_gallery[{{ $img->id }}]">
                                                </div> 
                                            </p>
                                        </div>
                                        </div> 		
                                    </div><!--  end col md 3		 -->	
                                    @endforeach

                                </div>			
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                                </div>
                            <br><br>
                        </form>		   
                    </div>
                </div>	
            </div> <!-- // end row  -->
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
        $('#thumb_preview_img').attr('src',e.target.result);	
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
        alert('No items selected');alert('No items selected');
    }
});


$('select[name="category_id"]').on('change', function(){
    var brand_id = $(this).val();
    if(brand_id) {
        $.ajax({
            url: "{{  url('/subcategory/ajax') }}/"+brand_id,
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
</script>


@endsection