@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide1.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li class="active">Avenir</li>
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
          <h1>Avenir</h1>
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
        
        <div >
          <p  class="" style="font-size: 18px;">
          Vous êtes Cordialement inviter à la mission delta force au Cameroun en Novembre 2019, toutefois Sentez vous libre d'emmener l'equipe de la Couronne de Gloire dans votre pays afin de gagner les âmes à Jésus. 
          <br><br>
          Notre recente campagne d'évengelisation, Mission Delta Force du 04/11 /2018 au 29.12.2018. a été un succès fulgurant. <br><br>
          - Miracles opérés pendant le voyage "delta force 2" lors duquel les prisonniers ont donnés leurs vies en masse au Seigneur dans la prison de kodegui à Yaounde <br>
          - Le travail effectué dans les rues, les écoles, les bars, le marché, les carrefours et les villages reculés.
          </p>
          
        </div>
      </div>
    </div>
  </div>
@endsection