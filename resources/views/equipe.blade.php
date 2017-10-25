@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Notre Équipe</li>
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
          <h1>Notre Équipe</h1>
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
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/staff1.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Sylvie Jango</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>
                    Sylvie Jango, est née dans une famille polygame de l'ouest camerounais en 1969. Son père, Paris Jango, ayant 13 femmes et 35 enfants.
                    Elle est profondément imprégnée dès son enfance par la foi en Jésus-Christ. Mais c'est au cours d'une campagne d'évangélisation du pasteur Reinhard Bonnke, en tournée au Cameroun à la fin des années 1980, qu'elle a la révélation de Jésus-Christ.<br><br>
                    En 1996, la mort par accident de la route de son fils Trésor, 6 ans, la pousse à s'éloigner de sa terre natale pour s'installer en France. Mais, loin de se tarir, son amour du Christ se renforce et donne une nouvelle dimension à sa foi. Elle entame alors une profonde communion avec le Christ qui culmine en 2010 lorsqu'elle est « ravie en esprit ». Au cours de ce ravissement, le Seigneur lui transmet des visions de l'Enfer et du Paradis.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/staff5.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Francisc Cazan</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/staff3.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Ethan Kay</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection