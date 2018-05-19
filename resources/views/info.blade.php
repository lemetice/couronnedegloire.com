@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide1.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li class="active">Info's</li>
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
          <h1>Information</h1>
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
          
        </div>
        
        <div>
          <p  class="" style="font-size: 18px;">
          Nous avons lancé notre chaine de télévision TVgloire.<br><br>
          Notre première émission a eu lieu le 15/05/2018 au chateau de Versaille, n'hesitez pas
          de partager avec votre entourage, car c'est aussi un moyen d'évangelisation
          </p>
          
        </div>
      </div>
    </div>
  </div>
@endsection