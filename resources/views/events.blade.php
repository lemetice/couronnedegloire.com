@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Évenements</li>
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
          <h1>Évenements</h1>
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

          <div class="col-md-12">
            <ul class="grid-holder col-3 events-grid isotope" style="position: relative; overflow: hidden; height: 1040.34px;">
                <li class="grid-item format-standard isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                  <div class="grid-item-inner"> <a href="#" class="media-box"> <img src="images/gallery-img3.jpg" alt=""> <span class="zoom" style="width: 224px; height: 224px; line-height: 224px;"><i class="fa fa-plus"></i></span></a>
                    <div class="grid-content">
                      <h3><a href="#">L'école du Saint esprit</a></h3>
                      <p>Nous commençons l'école du Saint esprit à partir du 1er janvier 2018. Les inscriptions sont ouvertes
                      </p>
                    </div>
                    <ul class="info-table">
                      <li><i class="fa fa-calendar"></i>1er janvier 2018 </li>
                      <li><i class="fa fa-map-marker"></i> 93200 Saint-Denis RER D, FR</li>
                    </ul>
                  </div>
                </li>
                <li class="grid-item format-standard isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                  <div class="grid-item-inner"> <a href="#" class="media-box"> <img src="images/gallery-img34.jpg" alt=""> <span class="zoom" style="width: 224px; height: 224px; line-height: 224px;"><i class="fa fa-plus"></i></span></a>
                    <div class="grid-content">
                      <h3><a href="#">Conférences annuelle</a></h3>
                      <p>Conférences annuelle  de M.E.I.C.G en fin mai 2018
                      </p>
                    </div>
                    <ul class="info-table">
                      <li><i class="fa fa-calendar"></i>Mai 2018 </li>
                      <li><i class="fa fa-map-marker"></i> 93200 Saint-Denis RER D, FR</li>
                    </ul>
                  </div>
                </li>
                <li class="grid-item format-standard isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                  <div class="grid-item-inner"> <a href="#" class="media-box"> <img src="images/gallery-img3.jpg" alt=""> <span class="zoom" style="width: 224px; height: 224px; line-height: 224px;"><i class="fa fa-plus"></i></span></a>
                    <div class="grid-content">
                      <h3><a href="#">Journée Internationale de la Femme</a></h3>
                      <p>Journée Internationale de la Femme le 08 mars 2018 au programme comédie théâtrale
                      </p>
                    </div>
                    <ul class="info-table">
                      <li><i class="fa fa-calendar"></i>08 mars 2018 </li>
                      <li><i class="fa fa-map-marker"></i> 93200 Saint-Denis RER D, FR</li>
                    </ul>
                  </div>
                </li>
            </ul>
          </div>         
        </div>        
      </div>
    </div>
  </div>

@endsection