@extends('admin.admin_master')
@section('admin')


    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Country</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Country</li>
								<li class="breadcrumb-item active" aria-current="page">All country</li>
							</ol>
						</nav>
					</div>
				</div>
                <div class="float-rught"><a href="{{ route('country.add')}}" class="btn btn-outline btn-dark mb-5">Add New</a></div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">
            <div class="row">
                <div class=" col-12">
                <div class="box">
					<div class="box-header">						
						<h4 class="box-title">All Country</h4>
					</div>
					<div class="box-body">
                    <div class="table-responsive">
						<div id="complex_header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">     
                            <table id="complex_header" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
								<thead>
									<tr role="row">
									    <th colspan="1" rowspan="2"></th>
                                        
                                         <th colspan="3" rowspan="1" style="60%">Name</th>
                                         <th colspan="1" rowspan="2">Status</th>
                                    </tr>
									<tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >TH</th>
                                        <th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending">EN</th>
                                        <th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending"  style="border-right-width:1px;" >CH</th>
									</tr>
								</thead>
								<tbody>	
									@foreach($countries as $country)
								    <tr role="row" class="odd">
										<td>
										<a href="{{ route('country.edit',$country->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="{{ route('country.delete',$country->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
										</td>
										<td>{{$country->country_name_th}}</td>
										<td>{{$country->country_name_en}}</td>
										<td>{{$country->country_name_ch}}</td>
                                        <td>{{$country->status==1?'Active':'Inactive'}}</td>
										
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