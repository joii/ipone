<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ url('admin/dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <h3><b>CONTENT MANAGEMENT</b></h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="{{ url('admin/dashboard')}}">
            <i data-feather="grid"></i>
			        <span>Dashboard</span>
          </a>
        </li>  
	
        <li class="treeview">
          <a href="#">
            <i data-feather="heart"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.brand') }}"><i class="ti-more"></i>View All</a></li>
          </ul>
        </li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="tag"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.category') }}"><i class="ti-more"></i>Category</a></li>
            <li><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>Subcategory</a></li>
            <li><a href="{{ route('all.product') }}"><i class="ti-more"></i>Products</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="image"></i>
            <span>Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.banner') }}"><i class="ti-more"></i>All Banners</a></li>
            <li><a href="#"><i class="ti-more"></i>Category Banner</a></li>
            <li><a href="#"><i class="ti-more"></i>Subcategory Banner</a></li>
            <li><a href="#"><i class="ti-more"></i>Products Banner</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="video"></i>
            <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.media') }}"><i class="ti-more"></i>View All</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="copy"></i>
            <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.media') }}"><i class="ti-more"></i>View All</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="book"></i>
            <span>Tips</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.media') }}"><i class="ti-more"></i>View All</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="map"></i>
            <span>Business Location</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.business_location') }}"><i class="ti-more"></i>View All</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="award"></i>
            <span>Awards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="ti-more"></i>View All</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="settings"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.country') }}"><i class="ti-more"></i>Country</a></li>
          </ul>
        </li>
		
		
		   		  
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
       
		<li>
          <a href="{{ route('admin.logout') }}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	

  </aside>
