@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Vison</li>
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
          <h1>Vision</h1>
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
              <p class="" style="font-size: 18px;">
              La vision de notre ministère consiste à emmené le plus grand nombre d'âme à Jésus Christ. Alors Pour atteindre un tel objectif. Le seigneur dans les cieux m'a offert un trousseau de clés multicolore pour La pèche d'âme. Cette vision comporte sept grands  Axes à savoir :              
              <br><br>
            </p>
              <ul>
              <li class="list-font">1- Enseigner le royaume de Dieu (Luc 17:21)</li>
              <li class="list-font">2- Annoncé le Salut (Luc 2:5-6)</li>
              <li class="list-font">3- Preché La repentance(Matthieu 3:8)</li>
              <li class="list-font">4- Prêché la sanctification des vies (Acte3: 19)</li>
            <li class="list-font">5- Les armes spirituelles du chrétien (Éphésiens 6:11-14)</li>
              <li class="list-font">6- Les dons spirituels (1 Chorentiens 12: 5-12)</li>
              <li class="list-font">7- Les fruits de l'esprit (Galates 5: 12)</li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection