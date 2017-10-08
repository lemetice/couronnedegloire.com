<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Couronne De Gloire</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas
	  ================================================== -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<!-- Favicon ======================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- CSS
	  ================================================== -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
	<!-- Color Style -->
	<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">
	<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
	<!-- SCRIPTS
	  ================================================== -->
	<script src="js/modernizr.js"></script><!-- Modernizr -->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 

	@include('includes.header')

	@yield('content')

	@include('includes.footer')
</div>
   
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script> 
<!-- Style Switcher Start -->
</body>
</html>