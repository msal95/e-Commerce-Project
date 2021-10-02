<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Centaurus - Bootstrap Admin Template</title>
	
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
	
	<!-- RTL support - for demo only -->
	<script src="js/demo-rtl.js"></script>
	<!-- 
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl"> 
	-->
	
	<!-- libraries -->
	<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css" />

	<!-- this page specific styles -->
	<style type="text/css">
	/* Set a size for our map container, the Google Map will take up 100% of this container */
	.map-content {
	    width: 100%;
	    height: 300px;
	}
	</style>
	
	<!-- Favicon -->
	<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

	<!-- google font libraries -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="theme-wrapper">
		<header class="navbar" id="header-navbar">
			<div class="container">
				<a href="index.html" id="logo" class="navbar-brand">
					<img src="img/logo.png" alt="" class="normal-logo logo-white"/>
					<img src="img/logo-black.png" alt="" class="normal-logo logo-black"/>
					<img src="img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
				</a>
				
				<div class="clearfix">
				<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				
				<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
					<ul class="nav navbar-nav pull-left">
						<li>
							<a class="btn" id="make-small-nav">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				
				<div class="nav-no-collapse pull-right" id="header-nav">
					<ul class="nav navbar-nav pull-right">
						<li class="mobile-search">
							<a class="btn">
								<i class="fa fa-search"></i>
							</a>
							
							<div class="drowdown-search">
								<form role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search...">
										<i class="fa fa-search nav-search-icon"></i>
									</div>
								</form>
							</div>
							
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-warning"></i>
								<span class="count">8</span>
							</a>
							<ul class="dropdown-menu notifications-list">
								<li class="pointer">
									<div class="pointer-inner">
										<div class="arrow"></div>
									</div>
								</li>
								<li class="item-header">You have 6 new notifications</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-comment"></i>
										<span class="content">New comment on ‘Awesome P...</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-plus"></i>
										<span class="content">New user registration</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-envelope"></i>
										<span class="content">New Message from George</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-shopping-cart"></i>
										<span class="content">New purchase</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-eye"></i>
										<span class="content">New order</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item-footer">
									<a href="#">
										View all notifications
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="count">16</span>
							</a>
							<ul class="dropdown-menu notifications-list messages-list">
								<li class="pointer">
									<div class="pointer-inner">
										<div class="arrow"></div>
									</div>
								</li>
								<li class="item first-item">
									<a href="#">
										<img src="img/samples/messages-photo-1.png" alt=""/>
										<span class="content">
											<span class="content-headline">
												George Clooney
											</span>
											<span class="content-text">
												Look, just because I don't be givin' no man a foot massage don't make it 
												right for Marsellus to throw...
											</span>
										</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<img src="img/samples/messages-photo-2.png" alt=""/>
										<span class="content">
											<span class="content-headline">
												Emma Watson
											</span>
											<span class="content-text">
												Look, just because I don't be givin' no man a foot massage don't make it 
												right for Marsellus to throw...
											</span>
										</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<img src="img/samples/messages-photo-3.png" alt=""/>
										<span class="content">
											<span class="content-headline">
												Robert Downey Jr.
											</span>
											<span class="content-text">
												Look, just because I don't be givin' no man a foot massage don't make it 
												right for Marsellus to throw...
											</span>
										</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item-footer">
									<a href="#">
										View all messages
									</a>
								</li>
							</ul>
						</li>
						<li class="hidden-xs">
							<a class="btn">
								<i class="fa fa-cog"></i>
							</a>
						</li>
						<li class="dropdown profile-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="img/samples/scarlet-159.png" alt=""/>
								<span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
								<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
								<li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
							</ul>
						</li>
						<li class="hidden-xxs">
							<a class="btn">
								<i class="fa fa-power-off"></i>
							</a>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</header>
		<div id="page-wrapper" class="container">
			<div class="row">
				<div id="nav-col">
					<section id="col-left" class="col-left-nano">
						<div id="col-left-inner" class="col-left-nano-content">
							<div id="user-left-box" class="clearfix hidden-sm hidden-xs">
								<img alt="" src="img/samples/scarlet-159.png" />
								<div class="user-box">
									<span class="name">
										Welcome<br/>
										Scarlett
									</span>
									<span class="status">
										<i class="fa fa-circle"></i> Online
									</span>
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
								<ul class="nav nav-pills nav-stacked">
									<li>
										<a href="index.html">
											<i class="fa fa-dashboard"></i>
											<span>Dashboard</span>
											<span class="label label-info label-circle pull-right">28</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-table"></i>
											<span>Tables</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="tables.html">
													Simple
												</a>
											</li>
											<li>
												<a href="tables-advanced.html">
													Advanced
												</a>
											</li>
											<li>
												<a href="users.html">
													Users
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-envelope"></i>
											<span>Email</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="email-inbox.html">
													Inbox
												</a>
											</li>
											<li>
												<a href="email-detail.html">
													Detail
												</a>
											</li>
											<li>
												<a href="email-compose.html">
													Compose
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-bar-chart-o"></i>
											<span>Graphs</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="graphs-morris.html">
													Morris &amp; Mixed
												</a>
											</li>
											<li>
												<a href="graphs-flot.html">
													Flot
												</a>
											</li>
											<li>
												<a href="graphs-dygraphs.html">
													Dygraphs
												</a>
											</li>
											<li>
												<a href="graphs-xcharts.html">
													xCharts
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="widgets.html">
											<i class="fa fa-th-large"></i>
											<span>Widgets</span>
											<span class="label label-success pull-right">New</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-desktop"></i>
											<span>Pages</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="calendar.html">
													Calendar
												</a>
											</li>
											<li>
												<a href="gallery.html">
													Gallery
												</a>
											</li>
											<li>
												<a href="gallery-v2.html">
													Gallery v2
												</a>
											</li>
											<li>
												<a href="pricing.html">
													Pricing
												</a>
											</li>
											<li>
												<a href="projects.html">
													Projects
												</a>
											</li>
											<li>
												<a href="team-members.html">
													Team Members
												</a>
											</li>
											<li>
												<a href="timeline.html">
													Timeline
												</a>
											</li>
											<li>
												<a href="timeline-grid.html">
													Timeline Grid
												</a>
											</li>
											<li>
												<a href="user-profile.html">
													User Profile
												</a>
											</li>
											<li>
												<a href="search.html">
													Search Results
												</a>
											</li>
											<li>
												<a href="invoice.html">
													Invoice
												</a>
											</li>
											<li>
												<a href="intro.html">
													Tour Layout
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-edit"></i>
											<span>Forms</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="form-elements.html">
													Elements
												</a>
											</li>
											<li>
												<a href="x-editable.html">
													X-Editable
												</a>
											</li>
											<li>
												<a href="form-wizard.html">
													Wizard
												</a>
											</li>
											<li>
												<a href="form-wizard-popup.html">
													Wizard popup
												</a>
											</li>
											<li>
												<a href="form-wysiwyg.html">
													WYSIWYG
												</a>
											</li>
											<li>
												<a href="form-summernote.html">
													WYSIWYG Summernote
												</a>
											</li>
											<li>
												<a href="form-ckeditor.html">
													WYSIWYG CKEditor
												</a>
											</li>
											<li>
												<a href="form-dropzone.html">
													Multiple File Upload
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-desktop"></i>
											<span>UI Kit</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="ui-elements.html">
													Elements
												</a>
											</li>
											<li>
												<a href="notifications.html">
													Notifications &amp; Alerts
												</a>
											</li>
											<li>
												<a href="modals.html">
													Modals
												</a>
											</li>
											<li>
												<a href="video.html">
													Video
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-toggle">
													Icons
													<i class="fa fa-chevron-circle-right drop-icon"></i>
												</a>
												<ul class="submenu">
													<li>
														<a href="icons-awesome.html">
															Awesome Icons
														</a>
													</li>
													<li>
														<a href="icons-halflings.html">
															Halflings Icons
														</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="ui-nestable.html">
													Nestable List
												</a>
											</li>
											<li>
												<a href="typography.html">
													Typography
												</a>
											</li>
											<li>
												<a href="#" class="dropdown-toggle">
													3 Level Menu
													<i class="fa fa-chevron-circle-right drop-icon"></i>
												</a>
												<ul class="submenu">
													<li>
														<a href="#">
															3rd Level
														</a>
													</li>
													<li>
														<a href="#">
															3rd Level
														</a>
													</li>
													<li>
														<a href="#">
															3rd Level
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="active">
										<a href="maps.html">
											<i class="fa fa-map-marker"></i>
											<span>Google Maps</span>
											<span class="label label-danger pull-right">Updated</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-file-text-o"></i>
											<span>Extra pages</span>
											<i class="fa fa-chevron-circle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="faq.html">
													FAQ
												</a>
											</li>
											<li>
												<a href="emails.html">
													Email Templates
												</a>
											</li>
											<li>
												<a href="login.html">
													Login
												</a>
											</li>
											<li>
												<a href="login-full.html">
													Login Full
												</a>
											</li>
											<li>
												<a href="registration.html">
													Registration
												</a>
											</li>
											<li>
												<a href="registration-full.html">
													Registration Full
												</a>
											</li>
											<li>
												<a href="forgot-password.html">
													Forgot Password
												</a>
											</li>
											<li>
												<a href="forgot-password-full.html">
													Forgot Password Full
												</a>
											</li>
											<li>
												<a href="lock-screen.html">
													Lock Screen
												</a>
											</li>
											<li>
												<a href="lock-screen-full.html">
													Lock Screen Full
												</a>
											</li>
											<li>
												<a href="error-404.html">
													Error 404
												</a>
											</li>
											<li>
												<a href="error-404-v2.html">
													Error 404 Nested
												</a>
											</li>
											<li>
												<a href="error-500.html">
													Error 500
												</a>
											</li>
											<li>
												<a href="extra-grid.html">
													Grid
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</section>
				</div>
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active"><span>Dashboard</span></li>
									</ol>
									
									<h1>Dashboard</h1>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>Map with pointers</h2>
										</header>
										
										<div class="main-box-body clearfix">
											<div id="map" class="map-content"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>Grayscale Map</h2>
										</header>
										
										<div class="main-box-body clearfix">
											<div id="map-grayscale" class="map-content"></div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>Geolocation</h2>
										</header>
										
										<div class="main-box-body clearfix">
											<div id="map-geo" class="map-content"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>Blue Water</h2>
										</header>
										
										<div class="main-box-body clearfix">
											<div id="map-blue" class="map-content"></div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2>Apple style</h2>
										</header>
										
										<div class="main-box-body clearfix">
											<div id="map-apple" class="map-content"></div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<footer id="footer-bar" class="row">
						<p id="footer-copyright" class="col-xs-12">
							&copy; 2014 <a href="http://www.adbee.sk/" target="_blank">Adbee digital</a>. Powered by Centaurus Theme.
						</p>
					</footer>
				</div>
			</div>
		</div>
	</div>
	
	<div id="config-tool" class="closed">
		<a id="config-tool-cog">
			<i class="fa fa-cog"></i>
		</a>
		
		<div id="config-tool-options">
			<h4>Layout Options</h4>
			<ul>
				<li>
					<div class="checkbox-nice">
						<input type="checkbox" id="config-fixed-header" />
						<label for="config-fixed-header">
							Fixed Header
						</label>
					</div>
				</li>
				<li>
					<div class="checkbox-nice">
						<input type="checkbox" id="config-fixed-sidebar" />
						<label for="config-fixed-sidebar">
							Fixed Left Menu
						</label>
					</div>
				</li>
				<li>
					<div class="checkbox-nice">
						<input type="checkbox" id="config-fixed-footer" />
						<label for="config-fixed-footer">
							Fixed Footer
						</label>
					</div>
				</li>
				<li>
					<div class="checkbox-nice">
						<input type="checkbox" id="config-boxed-layout" />
						<label for="config-boxed-layout">
							Boxed Layout
						</label>
					</div>
				</li>
				<li>
					<div class="checkbox-nice">
						<input type="checkbox" id="config-rtl-layout" />
						<label for="config-rtl-layout">
							Right-to-Left
						</label>
					</div>
				</li>
			</ul>
			<br/>
			<h4>Skin Color</h4>
			<ul id="skin-colors" class="clearfix">
				<li>
					<a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
					</a>
				</li>
				<li>
					<a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
					</a>
				</li>
				<li>
					<a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
					</a>
				</li>
				<li>
					<a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
					</a>
				</li>
				<li>
					<a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
					</a>
				</li>
				<li>
					<a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
					</a>
				</li>
				<li>
					<a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
					</a>
				</li>
				<li>
					<a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
					</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- global scripts -->
	<script src="js/demo-skin-changer.js"></script> <!-- only for demo -->
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.nanoscroller.min.js"></script>
	
	<script src="js/demo.js"></script> <!-- only for demo -->
	
	<!-- this page specific scripts -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
	
	<!-- theme scripts -->
	<script src="js/scripts.js"></script>
	<script src="js/pace.min.js"></script>
	
	<!-- this page specific inline scripts -->
	<script type="text/javascript">
	    // When the window has finished loading create our google map below
	    google.maps.event.addDomListener(window, 'load', init);
	    
	    function init() {
	    	var latlng = new google.maps.LatLng(40.763986, -73.958674);
	    	var latlngIndia = new google.maps.LatLng(22.394181, 78.384689);
	    	
	        // Basic options for a simple Google Map
	        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	        var mapOptions = {
	            // How zoomed in you want the map to start at (always required)
	            zoom: 11,
	            scrollwheel: false,
	            
	            // The latitude and longitude to center the map (always required)
	            center: latlng,
	        };
	
	        // Get the HTML DOM element that will contain your map 
	        // We are using a div with id="map" seen below in the <body>
	        var mapElement = document.getElementById('map');
	
	        // Create the Google Map using out element and options defined above
	        var map = new google.maps.Map(mapElement, mapOptions);
	        
	        var marker = new google.maps.Marker({
	    		position: latlng,
	    		map: map
	    	});
	    	
	        //GRAYSCALE MAP
	        var mapOptionsGray = {
	            zoom: 4,
	            scrollwheel: false,
	            center: latlngIndia,
	
	            // How you would like to style the map. 
	            // This is where you would paste any style found on Snazzy Maps.
	            styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
	        };
	
	        var mapElementGray = document.getElementById('map-grayscale');
	
	        // Create the Google Map using out element and options defined above
	        var mapGray = new google.maps.Map(mapElementGray, mapOptionsGray);
	        
	        var markerGray = new google.maps.Marker({
	    		position: latlngIndia,
	    		map: mapGray
	    	});
	    	
	        //BLUE WATER MAP
	        var mapOptionsBlue = {
	            zoom: 12,
	            scrollwheel: false,
	            center: latlng,
	
	            // How you would like to style the map. 
	            // This is where you would paste any style found on Snazzy Maps.
	            styles: [	{		featureType:'water',		stylers:[{color:'#46bcec'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#f2f2f2'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#444444'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
	        };
	
	        var mapElementBlue = document.getElementById('map-blue');
	
	        // Create the Google Map using out element and options defined above
	        var mapBlue = new google.maps.Map(mapElementBlue, mapOptionsBlue);
	        
	        var markerBlue = new google.maps.Marker({
	    		position: latlng,
	    		map: mapBlue
	    	});
	    	
	        //APPLE MAP
	        var mapOptionsApple = {
	            zoom: 12,
	            scrollwheel: false,
	            center: latlng,
	
	            // How you would like to style the map. 
	            // This is where you would paste any style found on Snazzy Maps.
	            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]}]
	        };
	
	        var mapElementApple = document.getElementById('map-apple');
	
	        // Create the Google Map using out element and options defined above
	        var mapApple = new google.maps.Map(mapElementApple, mapOptionsApple);
	        
	        var markerApple = new google.maps.Marker({
	    		position: latlng,
	    		map: mapApple
	    	});
	    }
	    
	    //GEOLOCATION
	    var mapGeo;

	    function initialize() {
	      var mapOptions = {
	        zoom: 6
	      };
	      mapGeo = new google.maps.Map(document.getElementById('map-geo'),
	          mapOptions);

	      // Try HTML5 geolocation
	      if(navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(function(position) {
	          var pos = new google.maps.LatLng(position.coords.latitude,
	                                           position.coords.longitude);

	          var infowindow = new google.maps.InfoWindow({
	            map: mapGeo,
	            position: pos,
	            content: 'Location found using HTML5.'
	          });

	          mapGeo.setCenter(pos);
	        }, function() {
	          handleNoGeolocation(true);
	        });
	      } else {
	        // Browser doesn't support Geolocation
	        handleNoGeolocation(false);
	      }
	    }

	    function handleNoGeolocation(errorFlag) {
	      if (errorFlag) {
	        var content = 'Error: The Geolocation service failed.';
	      } else {
	        var content = 'Error: Your browser doesn\'t support geolocation.';
	      }

	      var options = {
	        map: mapGeo,
	        position: new google.maps.LatLng(60, 105),
	        content: content
	      };

	      var infowindow = new google.maps.InfoWindow(options);
	      mapGeo.setCenter(options.position);
	    }

	    google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
</body>
</html>