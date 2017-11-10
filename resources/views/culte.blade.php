@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Culte</li>
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
          <h1>Culte</h1>
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
             
            <div class="col-md-12 col-sm-12 widget footer-widget">
              <p class="" style="font-size: 20px;">                
          Nous nous retrouvons tous les samedis à 14h00 au 73 rue de la Briche 93200 Saint-Denis RER D arrêt gare St Denis T8 arrêt gare Paul Eluard, aller 35 au 2ème étage.               
                <br>
              </p>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
              <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                <h5><a href="#">Culte & Adoration</a></h5>
                <span class="meta-data">14:00</span> </div>
              <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="October 20, 2018">
              </div>
            </div>
            </div>
        </div>
        <ul class="timeline">
            <li>
              <div class="timeline-badge">Chaque<span>Samedi</span></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="#">Intercession</a></h3>                 
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 14h00 à 14h30 </span> </div>
                </div>
                    <div class="timeline-body">
                      <p>Prions pour les malades et la jeunesse. </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="blog-post.html">Adorations et Louanges</a></h3>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 14h30 à 15h30 </span> </div>
                </div>
                <div class="timeline-body">
                  <p>Adorations et Louanges.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="#">Prédication</a></h3>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 15h30 à 16h30 </span> </div>
                </div>
                <div class="timeline-body">
                  <p>Prédication.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="#">Cours de baptême</a></h3>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 16h30 à 17h15 </span> </div>
                </div>
                <div class="timeline-body">
                  <p>Adorations et Louanges.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="#">Les offrandes</a></h3>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 17h15 à 17h30 </span> </div>
                </div>
                <div class="timeline-body">
                  <p>Les offrandes.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="#">Entretien</a></h3>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 17h30 à 18h00  </span> </div>
                </div>
                <div class="timeline-body">
                  <p>Entretien avec la Prophétesse des Nations, JANGO Sylvie-Sara.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title"><a href="#">Fin du culte</a></h3>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
                  <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                    <span class="meta-data">De 18h00  + </span> </div>
                </div>
                <div class="timeline-body">
                  <p>Vente des livres sur place<br/>
                    <strong>Que la grâce du Seigneur soit avec vous !!</strong>
                  </p>
                </div>
              </div>
            </li>
            <li>              
              <div class="timeline-badge">Fin<span>Samedi</span></div>
            </li>
           
        </ul>
    </div>
  </div>



@endsection