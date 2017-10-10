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
	<link href="../../public/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../../public/plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
	<link href="../../public/css/style.css" rel="stylesheet" type="text/css">
	<link href="../../public/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
	<!-- Color Style -->
	<link class="alt" href="../../public/colors/color1.css" rel="stylesheet" type="text/css">
	<link href="../../public/style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
	<!-- SCRIPTS
	  ================================================== 
	<script src="../../public/js/modernizr.js"></script>--><!-- Modernizr -->
</head>
<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	<div class="body"> 

		
		<div class="spacer-20"></div>
		<div class="spacer-20"></div>
		<div class="spacer-20"></div>
		<div class="">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>Espace Membre</strong>
							<a href="{{url('/')}}" class="btn btn-danger btn-sm" style="float: right;">Acceuil</a>
						</div>
						<div class="panel-body">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> Nous ne retrouvons pas vous identifiants.<br><br>
									<ul>	
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">E-Mail Address</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Remember Me
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-danger">Login</button>

										<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
   
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 

	<script src="../../public/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
	<script src="../../public/plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
	<script src="../../public/js/helper-plugins.js"></script> <!-- Plugins --> 
	<script src="../../public/js/bootstrap.js"></script> <!-- UI --> 
	<script src="../../public/js/waypoints.js"></script> <!-- Waypoints --> 
	<script src="../../public/plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
	<script src="../../public/js/init.js"></script> <!-- All Scripts --> 
	<script src="../../public/plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
	<script src="../../public/plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
	<script src="../../public/style-switcher/js/jquery_cookie.js"></script> 
	<script src="../../public/style-switcher/js/script.js"></script> 
	<!-- Solves csrf token mismatched issue 
	<script type="text/javascript">
		    $.ajaxSetup({
		        headers: {
		            //'X-CSRF-TOKEN': $('[name="csmetarf-token"]').attr('content')
		            'X-CSRF-TOKEN': {{ csrf_token() }}
		        }
		    });
	</script>-->
</body>
</html>