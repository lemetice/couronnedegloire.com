@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide2.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Soyons unis</li>
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
          <h1>Tous ensemble</h1>
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
            <p>             
              Jésus nous appelle tous pour son oeuvre, alors soyons unis pour faire avancer son Royaume.              
              <blockquote>
                <p>
                  Jean 17 : 11 - Jean 17 : 21 - Jean 17 : 23<br>

                  Ephésiens 4 : 1 à 16 - Ephésiens 4 : 3 - 1 Corinthiens 1 : 10<br>

                  Psaumes 133 : 1 
                </p> 
                 <cite style="color: black"></cite>
              </blockquote> <br><br>
              Toujours prier pour l'unité du peuple de Dieu dans l'Esprit et que chacun soit sur le même chemin de la croix avec le même langage, les mêmes sentiments, le même amour et les mêmes pensées, car Dieu est un Dieu d'ordre et non de confusion.                
            </p>
            <p style="color: black; text-align: center;"> <strong>Que Dieu vous bénisse !!</strong> </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection