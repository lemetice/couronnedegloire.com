@extends('app')
@section('content')
	<!-- Start Nav Backed Header -->
	<div class="nav-backed-header parallax">
		<div class="container">
		  <div class="row">
		    <div class="col-md-12">
		      <ol class="breadcrumb">
		        <li><a href="{{ url('/') }}">Accueil</a></li>
		        <li class="active">Contact</li>
		      </ol>
		    </div>
		  </div>
		</div>
	</div>
	<!-- End Nav Backed Header --> 
	<!-- Start Page Header -->
	<div class="page-header">
		<div class="container">
		  <div class="row">
		    <div class="col-md-12">
		      <h1>Contact</h1>
		    </div>
		  </div>
		</div>
	</div>
	<!-- End Page Header --> 

	<!-- Start Content -->
	<div class="main" role="main">
	<div id="content" class="content full">
	  <div class="container">
	    <div class="row">
	    	<div class="col-md-12 col-sm-12 widget footer-widget">
	            <p class="" style="font-size: 18px;">
		    	Planning de la Prophétesse : Pour les demandes de prières en ligne, appelez tous les lundis et dimanches à partir de 17 h 00 jusqu'à 22 h 00. Si elle n'est pas disponible, laissez un message sur le répondeur ou envoyez un sms. En dehors de ces créneaux horaires, la Prophétesse se trouve en évangélisation, en connection divine avec le Saint-Esprit et doit également effectuer ses démarches personnelles. Elle répond aussi à beaucoup de sollicitations de l'étranger, alors s'il vous plaît veuillez respecter les horaires téléphoniques indiqués ci-dessus.
				Merci à tous !!
              </p><br/>
            </div>

	      <div class="col-md-9">
	        <header class="single-post-header clearfix">
	          <h2 class="post-title">Our Location</h2>
	        </header>
	        <div class="post-content">
	          <div id="gmap">
	            <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=48.801407, 2.130122&amp;spn=0.043846,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>
	          </div>
	          <div class="row">
	            <form method="post" id="contactform" name="contactform" class="contact-form" action="http://html.imithemes.com/nativechurch/mail/contact.php">
	              <div class="col-md-6 margin-15">
	                <div class="form-group">
	                  <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
	                </div>
	                <div class="form-group">
	                  <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
	                </div>
	                <div class="form-group">
	                  <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                  <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
	                </div>
	              </div>
	              <div class="col-md-12">
	                <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
	              </div>
	            </form>
	            <div class="clearfix"></div>
	            <div class="col-md-12">
	              <div id="message"></div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- Start Sidebar -->
	      <div class="col-md-3 sidebar"> 
	        <!-- Recent Posts Widget -->
	        <div class="widget-recent-posts widget">
	          <div class="sidebar-widget-title">
	            <h3>Adresse</h3>
	          </div>
	          	<span>
		          	<strong>10 Rue Charles Gounod 78000 Versailles</strong> <br>
					<strong>E-mail</strong> <br> lacouronnedegloire@gmail.com <br>
					adra.france78@gmail.com<br> 
					<a href="http://www.secoursetsolidarité.com">www.secoursetsolidarité.com</a><br>
					<strong>Tél</b> </strong> (+31) 06.81.78.34.31 <br>
				</span>
			<!--	
	        <ul>
	            <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/blog-image3.jpg" alt="" class="img-thumbnail"> </a>
	              <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
	            </li>
	            <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/blog-image1.jpg" alt="" class="img-thumbnail"> </a>
	              <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
	            </li>
	            <li class="clearfix"> <a href="#" class="media-box post-image"> <img src="images/blog-image2.jpg" alt="" class="img-thumbnail"> </a>
	              <div class="widget-blog-content"><a href="#">Voluptatum deleniti atque corrupti voluptatum deleniti atque corrupti</a> <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </div>
	            </li>
	        </ul> -->
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
@endsection