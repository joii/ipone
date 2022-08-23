@extends('admin.admin_master')
@section('admin')
<style>
::placeholder {
  color: #555 !important;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #555 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #555 !important;
}
</style>
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
                            <form method="post" action="{{ route('business_location.update')}}" enctype="multipart/form-data" >
                            @csrf 
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Section : <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <select name="section_id" class="form-control" >
                                            <option value="" selected="" disabled="">Select Section</option>
                                            <option value="1" {{ $location->section_id == 1 ? 'selected': '' }}>International Business</option>	
                                            <option value="2" {{ $location->section_id == 2 ? 'selected': '' }}>Contact Us</option>
                                        </select>
                                        @error('section_id') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        </div>
                                    </div>	

                                    <div class="form-group">
                                        <h5>Country : <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <select name="country_id" class="form-control" >
                                           <option value="" selected="" disabled="">Select Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}"  {{ $location->country_id == $country->id ? 'selected': '' }}>{{ $country->country_name_en }}</option>	
                                            @endforeach
                                        </select>
                                        @error('country_id') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        </div>
                                    </div>		
                                    <div class="form-group">
                                        <h5>Marker Type (For inter business section):</h5>
                                        <div class="controls">
                                        <select name="type_id" class="form-control"  >
                                            <option value="" selected="" disabled="">Select Type</option>
                                            <option value="1" {{ $location->bl_type_id == 1 ? 'selected': '' }}>Office</option>	
                                            <option value="2" {{ $location->bl_type_id == 2 ? 'selected': '' }}>Factory</option>
                                        </select>
                                    
                                        </div>
                                    </div>			
                                    <div class="form-group">
                                        <h5>Name (TH): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="bl_name_th" class="form-control" value="{{ $location->bl_name_th }}" >
                                        @error('bl_name_th')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Name (EN): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="bl_name_en" class="form-control" value="{{ $location->bl_name_en }}" >
                                        @error('bl_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Name (CH): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="bl_name_ch" class="form-control" value="{{ $location->bl_name_ch }}">
                                        @error('bl_name_ch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                        <h5>Address (TH): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                       <p>
                                       <input type="text" name="bl_address1_th" class="form-control" value="{{ $location->bl_address1_th }}" >
                                       @error('bl_address1_th')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                       </p>
                                       <p><input type="text" name="bl_address2_th" class="form-control" placeholder="Optional"  value="{{ $location->bl_address2_th }}"></p>
                                       <p><input type="text" name="bl_address3_th" class="form-control"  placeholder="Optional" value="{{ $location->bl_address3_th }}"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Address (EN): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                       <p>
                                       <input type="text" name="bl_address1_en" class="form-control"  value="{{ $location->bl_address1_en }}" >
                                       @error('bl_address1_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                       </p>
                                       <p><input type="text" name="bl_address2_en" class="form-control" placeholder="Optional"  value="{{ $location->bl_address2_en }}"></p>
                                       <p><input type="text" name="bl_address3_en" class="form-control"  placeholder="Optional" value="{{ $location->bl_address3_en }}"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Address (CH): <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                       <p>
                                       <input type="text" name="bl_address1_ch" class="form-control" value="{{ $location->bl_address1_ch }}">
                                       @error('bl_address1_ch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                       </p>
                                       <p><input type="text" name="bl_address2_ch" class="form-control" placeholder="Optional" value="{{ $location->bl_address2_ch }}"></p>
                                       <p><input type="text" name="bl_address3_ch" class="form-control"  placeholder="Optional" value="{{ $location->bl_address3_ch }}"></p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Phone No.: </h5>
                                        <div class="controls">
                                        <input type="text" name="bl_phone" class="form-control" value="{{ $location->bl_phone }}">
                                        @error('bl_phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>E-mail Address: </h5>
                                        <div class="controls">
                                        <input type="email" name="bl_email" class="form-control" value="{{ $location->bl_email }}">
                                        @error('bl_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Transportation (TH):</h5>
                                        <div class="controls">
                                        <input type="text" name="bl_transportation_th" class="form-control" value="{{ $location->bl_transportation_th }}" >
                                     
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Transportation (EN): </h5>
                                        <div class="controls">
                                        <input type="text" name="bl_transportation_en" class="form-control" value="{{ $location->bl_transportation_en }}">
                                      
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Transportation (CH): </h5>
                                        <div class="controls">
                                        <input type="text" name="bl_transportation_ch" class="form-control" value="{{ $location->bl_transportation_ch }}">
                                       
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>BTS (TH): </h5>
                                        <div class="controls">
                                        <input type="text" name="bl_bts_th" class="form-control" value="{{ $location->bl_bts_th }}">
                                     
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>BTS (EN): </h5>
                                        <div class="controls">
                                        <input type="text" name="bl_bts_en" class="form-control" value="{{ $location->bl_bts_en }}">
                                      
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>BTS (CH):</h5>
                                        <div class="controls">
                                        <input type="text" name="bl_bts_ch" class="form-control"  value="{{ $location->bl_bts_ch }}">
                                       
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Social Media Name:</h5>
                                        <div class="controls">
                                        <input type="text" name="bl_social_name" class="form-control" value="{{ $location->bl_social_name }}">
                                       
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Social Media URL:</h5>
                                        <div class="controls">
                                        <input type="text" name="bl_social_url" class="form-control" value="{{ $location->bl_social_url }}">
                                       
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <h5>Latitude:</h5>
                                        <div class="controls">
                                        <input type="text" name="latitude" class="form-control"  value="{{ $location->latitude }}">
                                       
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <h5>Longitude:</h5>
                                        <div class="controls">
                                        <input type="text" name="longitude" class="form-control"  value="{{ $location->longitude }}">
                                       
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Image :(300x175px) : </h5>
                                        <div class="controls">
                                        @if(!empty($location->bl_image))
                                        <p>
                                          <a href="{{ asset($location->bl_image)}}" target="_blank">  
                                          <img src="{{ asset($location->bl_image)}}" width="80" />
                                          </a>
                                        </p>
                                        @endif    
                                        <input type="file" name="bl_image" class="form-control"  id="image">
                                        <img id="showImage" width="80"></img>
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <h5>Map Marker :(80x110px for inter business page and 60x90px for contact us page) : </h5>
                                        <div class="controls">
                                        @if(!empty($location->bl_marker))
                                        <p>
                                          <a href="{{ asset($location->bl_marker)}}" target="_blank">  
                                          <img src="{{ asset($location->bl_marker)}}" width="80" />
                                          </a>
                                        </p>
                                        @endif      
                                        <input type="file" name="bl_marker" class="form-control"  id="marker">
                                        @error('bl_marker') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        <br/>
                                        <img id="showMarker" width="30"></img>
                                      
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Flag Icon :(60x60px) : </h5>
                                        <div class="controls">
                                        @if(!empty($location->bl_flag))
                                        <p>
                                          <a href="{{ asset($location->bl_flag)}}" target="_blank">  
                                          <img src="{{ asset($location->bl_flag)}}" width="60" />
                                          </a>
                                        </p>
                                        @endif   
                                        <input type="file" name="bl_flag" class="form-control"  id="flag">
                                        <img id="showFlag" width="60"></img>
                                        </div>
                                    </div> 

                                  
                                
                                    <div class="form-group">
                                    <input name="status" type="radio" id="status1" value="1" class="radio-col-success" {{ $location->status ==1? "checked":"" }}>
                                    <label for="status1">Active</label>
                                    <input name="status" type="radio" id="status2" value="0" class="radio-col-danger" {{ $location->status ==0? "checked":"" }}>
                                    <label for="status2">Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">  
                                <input type="hidden" name="old_image" value="{{ $location->bl_image }}" />
                                <input type="hidden" name="old_marker" value="{{ $location->bl_marker }}" />
                                <input type="hidden" name="old_flag" value="{{ $location->bl_flag }}" />
                                <input type="hidden" name="id" value="{{ $location->id }}" />
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



<script type="text/javascript">
$(document).ready(function(){
$('#image').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);	
    }
    reader.readAsDataURL(e.target.files['0']);
});

$('#marker').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showMarker').attr('src',e.target.result);	
    }
    reader.readAsDataURL(e.target.files['0']);
});

$('#flag').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showFlag').attr('src',e.target.result);	
    }
    reader.readAsDataURL(e.target.files['0']);
});


});

</script>


@endsection