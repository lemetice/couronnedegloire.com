@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide1.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li class="active">Livres</li>
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
          <h1>Livres</h1>
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
          <ul class="isotope-grid" data-sort-id="gallery">
            <li class="col-md-3 col-sm-3 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{ asset('/images/sylvie-jango-4.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/sylvie-jango-4.jpg') }}" alt=""> </a> </div>
            </li>
            <li class="col-md-3 col-sm-3 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{ asset('/images/sylvie-jango-3.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/sylvie-jango-3.jpg') }}" alt=""> </a> </div>
            </li>
            <li class="col-md-3 col-sm-3 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{ asset('/images/sylvie-jango-2.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/sylvie-jango-2.jpg') }}" alt=""> </a> </div>
            </li>
            <li class="col-md-3 col-sm-3 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{ asset('/images/sylvie-jango-1.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/sylvie-jango-1.jpg') }}" alt=""> </a> </div>
            </li>
          </ul>
        </div>
        
        <div class="text-align-center">
          <p class="drop-caps">
          Aujourd'hui, <strong>Sylvie Jango</strong> consacre sa vie à témoigner de Jésus Christ. Elle s'occupe aussi de l'association qu'elle a créée pour lutter contre la violence routière en Afrique.
          </p>
          <br>
          <p>
          <strong> A.D.R.A</strong> (<strong>Association Drames de la Route en Afrique </strong>), association recommandée par le Seigneur,<br><br>

          Cette association a pour vocation de contribuer à prévenir les accidents de la route en france et en afrique et concourir à soulager les familles des victimes en commémorant les endroits où la vie d'êtres chers s'est arrêtée et en leur apportant une aide psychologique et morale.<br><br>

          Si un accident s'est produit à un endroit donné c'est que celui-ci n'offrait pas des conditions de sécurité suffisante.

          C'est pourquoi la commémoration de ces lieux offriraient le double avantage de rendre hommage aux victimes mais aussi de prévenir d'autres accidents, Car ( La Prévention Routière est la mère de La Sécurité Routière).

          Rendez-vous sur la page internet <a href="http://www.secoursetsolidarite.com">www.secoursetsolidarite.com</a> pour plus d'informations. <br><br>
          </p>
           <p style="color: black"> <strong>Que Dieu vous bénisse !!</strong> </p>
          <!--<ul class="pagination">
            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
@endsection