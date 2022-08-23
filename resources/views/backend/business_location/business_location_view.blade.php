@extends('admin.admin_master')
@section('admin')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Business Location</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
							    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Business Location</li>
								<li class="breadcrumb-item active" aria-current="page">All bannr</li>
							</ol>
						</nav>
					</div>
				</div>
                <div class="float-rught"><a href="{{ route('business_location.add')}}" class="btn btn-outline btn-dark mb-5">Add New</a></div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
            <div class="row">
                <div class=" col-12">
                <div class="box">
					<div class="box-header">						
						<h4 class="box-title">All Location</h4>
                        <div style="float:right;">
                          
                           
                            
                        </div>
					</div>
					<div class="box-body">
                    <div class="table-responsive">
						<div id="complex_header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">     
                            <table id="complex_header" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
								<thead>
									<tr role="row">
									    <th></th>
                                        <th>Country</th>
                                        <th>Location</th>
                                        <th>Latitude/Longitude</th>
                                        <th>Marker</th>
										<th>Status</th>

                                    </tr>
									
								</thead>
								<tbody>	
									@foreach($locations as $item)
								    <tr role="row" class="odd">
										<td>
										<a href="{{ route('business_location.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="{{ route('business_location.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
										</td>
										<td>{{$item->country_name_th}}</td>
										<td>{{$item->bl_name_th}}<br>
                                            {{$item->bl_name__en}}<br>
                                            {{$item->bl_name__ch}}
                                        </td>
										<td>{{$item->latitude."/".$item->longitude}}</td>
                                        <td>
                                        @if(!empty($item->bl_marker))
                                            <a href="{{ asset($item->bl_marker)}}" target="_blank">  
                                            <img src="{{ asset($item->bl_marker)}}" width="60" />
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

 


@endsection  