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
								<li class="breadcrumb-item active" aria-current="page">All bannr</li>
							</ol>
						</nav>
					</div>
				</div>
                <div class="float-rught"><a href="{{ route('banner.add')}}" class="btn btn-outline btn-dark mb-5">Add New</a></div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
            <div class="row">
                <div class=" col-12">
                <div class="box">
					<div class="box-header">						
						<h4 class="box-title">All Banner</h4>
                        <div style="float:right;">
                          
                            <select name="brand_id"  aria-controls="complex_header" class="form-control form-control-sm"  >
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name_en}}</option>
                                @endforeach
                            </select>
                        
                            <select name="category_id" aria-controls="complex_header" class="form-control form-control-sm" style="display:none;">
                               
                            </select>
                           
                            <select name="subcategory_id"  aria-controls="complex_header" class="form-control form-control-sm" style="display:none;">
                               
                            </select>
                            
                        </div>
					</div>
					<div class="box-body">
                    <div class="table-responsive">
						<div id="complex_header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">     
                            <table id="complex_header" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
								<thead>
									<tr role="row">
									    <th></th>
                                        <th>Cat/SubCat/Prod</th>
                                        <th>Title</th>
                                        <th>Banner</th>
										<th>Status</th>

                                    </tr>
									
								</thead>
								<tbody>	
									@foreach($banners as $item)
								    <tr role="row" class="odd">
										<td>
										<a href="{{ route('banner.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="{{ route('banner.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
										</td>
										<td>
                   
                                            {{$item->category_id==''?'':$item->category_name_en.'/'}}
                                            {{$item->subcategory_id==''?'':$item->subcategory_name_en.'/'}}
                                            {{$item->product_id==''?'':$item->product_name_en}}

                                        </td>
										<td>{{$item->banner_title_th}}<br>{{$item->banner_title_en}}<br>{{$item->banner_title_ch}}</td>
										<td>
                                        @if(!empty($item->banner_image))
                                            <a href="{{ asset($item->banner_image)}}" target="_blank">  
                                            <img src="{{ asset($item->banner_image)}}" width="100" />
                                            </a>
                                        @endif  
                                        </td>
										<td>{{$item->status==1?'Active':'Inactive'}}</td>
									</tr>
									@endforeach
                                   
                                </tbody>
							</table>
 						</div>
					</div>
				</div>
                </div>
                <!-- /. box -->
                </div>  <!-- /. col-12 -->
               
            </div>

		</section>
		<!-- /.content -->
 </div>

 <script>
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
                    $.each(data, function(key, value){
                        $('select[name="category_id"]').append('<option value="'+ value.id +'">' + value.category_name_en + '</option>');
                    });
                    $('select[name="category_id"]').show();    
                   
            },
        });
    } else {
        alert('danger');
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
                    $('select[name="subcategory_id"]').show();
            },
        });
    } else {
        alert('danger');
    }
    });

 </script>


@endsection  