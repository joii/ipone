function initialise(obj,strInfo) {
		var myLatlng = new google.maps.LatLng(13.775504, 100.670502); // Add the coordinates
		var mapOptions = {
			zoom: 16, // The initial zoom level when your map loads (0-20)
			minZoom: 6, // Minimum zoom level allowed (0-20)
			maxZoom: 17, // Maximum soom level allowed (0-20)
			zoomControl:true, // Set to true if using zoomControlOptions below, or false to remove all zoom controls.
			zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT // Change to SMALL to force just the + and - buttons.
			},
			center: myLatlng, // Centre the Map to our coordinates variable
			mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
			scrollwheel: false, // Disable Mouse Scroll zooming (Essential for responsive sites!)
			// All of the below are set to true by default, so simply remove if set to true:
			panControl:false, // Set to false to disable
			mapTypeControl:false, // Disable Map/Satellite switch
			scaleControl:false, // Set to false to hide scale
			streetViewControl:false, // Set to disable to hide street view
			overviewMapControl:false, // Set to false to remove overview control
			rotateControl:false // Set to false to disable rotate control
	  	}
		var map = new google.maps.Map(obj, mapOptions); // Render our map within the empty div
		var image = new google.maps.MarkerImage("img/icons/icon-marker.png", null, null, null, new google.maps.Size(62,97)); // Create a variable for our marker image.
		var marker = new google.maps.Marker({ // Set the marker
			position: myLatlng, // Position marker to coordinates
			icon:image, //use our image as the marker
			map: map, // assign the market to our map variable
			title: 'Click here for more details' // Marker ALT Text
		});
	
		var contentString = strInfo;
		var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
  			content: contentString, // HTML contents of the InfoWindow
			maxWidth: 330,  
  		});
		google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
  			infowindow.open(map,marker); // Open our InfoWindow
  		});
		google.maps.event.addDomListener(window, 'resize', function() { map.setCenter(myLatlng); }); // Keeps the Pin Central when resizing the browser on responsive sites
	}


	var contentStringM1 =
		"<div class='map-info'>" +
		"<img src='img/thumb/img-pin-01.jpg' alt=''>" +
		"<div>" +
		"<h5>บริษัท ไอ.พี. วัน จำกัด (สำนักงานใหญ่)aa</h5>" +
		"<p><span class='icons icon-pin'></span>65  ถนนรามคำแหง แขวงสะพานสูง เขตสะพานสูง กรุงเทพฯ 10240</p>" +
		"<p><span class='icons icon-phone'></span>(02) 372 3461-790 - 2372 - 3481</p>" +
		"<p><span class='icons icon-email'></span>iphouses@iphouses.com</p>" +
		"<p><span class='icons icon-bus'></span>รถประจำทาง 58, 113, 168, 519, ปอ. 8, 113, 514</p>" +
		"<p><span class='icons icon-train'></span>รถไฟฟ้าสายสีส้ม สถานีสัมมากร</p>" +
		"</div>" +
		"</div>";

	var contentStringM2 =
		"<div class='map-info'>" +
		"<img src='img/thumb/img-pin-01.jpg' alt=''>" +
		"<div>" +
		"<h5>บริษัท ไอ.พี. วัน จำกัด (สำนักงานใหญ่)</h5>" +
		"<p><span class='icons icon-pin'></span>65  ถนนรามคำแหง แขวงสะพานสูง เขตสะพานสูง กรุงเทพฯ 10240</p>" +
		"<p><span class='icons icon-phone'></span>(02) 372 3461-790 - 2372 - 3481</p>" +
		"<p><span class='icons icon-email'></span>iphouses@iphouses.com</p>" +
		"<p><span class='icons icon-bus'></span>รถประจำทาง 58, 113, 168, 519, ปอ. 8, 113, 514</p>" +
		"<p><span class='icons icon-train'></span>รถไฟฟ้าสายสีส้ม สถานีสัมมากร</p>" +
		"</div>" +
		"</div>"; 		

	initialise(document.getElementById('map-canvas-th-1'),contentStringM1);
	initialise(document.getElementById('map-canvas-th-2'),contentStringM2);
	
	
	//google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded.




