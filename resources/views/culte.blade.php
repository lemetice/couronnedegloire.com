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
                Le culte rendu au seigneur Jésus-Christ a lieu tous les samedis 14:00 rues de la briche.               
                <br>
              </p>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Samedi</span> <strong>Prochain</strong> </div>
              <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                <h5><a href="#">Culte & Adoration</a></h5>
                <span class="meta-data">14:00</span> </div>
              <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="October 20, 2018"><!--
                <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
                <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
                <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
                <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div> -->
              </div>
            </div>
            </div>
      </div>
    </div>
  </div>
  Nous nous retrouvons tous les samedis à 14h00 au 73 rue de la Briche 93200 Saint-Denis RER D arrêt gare St Denis 
T8 arrêt gare Paul Eluard, aller 35 au 2ème étage
- de 14h00 à 14h30 : Intercession
- de 14h30 à 15h30 : Adorations et Louanges
- de 15h30 à 16h30 : Prédication
- de16h30 à 17h15 : Cours de baptême
- de 17h15 à 17h30 : les offrandes
- de 17h30 à 18h00 : Entretien avec la Prophétesse des Nations, JANGO Sylvie-Sara
18h00 : Fin du culte
(Vente des livres sur place)
Que la grâce du Seigneur soit avec vous !!


@endsection