@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide1.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Actualités</li>
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
          <h1>Actualités</h1>
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
             @if(count($articles) == 0)
                         <div class="no_results bluecolor"> <h1>Aucun article trouvé</h1></div>                       
             @endif
            <ul class="grid-holder col-3 events-grid isotope" style="position: relative; overflow: hidden; height: 1040.34px;">

              @foreach($articles as $article)
                <li class="grid-item format-standard isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                  <div class="grid-item-inner"> <a href="{{url('/blog/'.$article->slug)}}" class="media-box"> <img src="{{ asset($article->media_url) }}" alt=""> <span class="zoom" style="width: 224px; height: 224px; line-height: 224px;"><i class="fa fa-plus"></i></span></a>
                    <div class="grid-content">
                      <h3><a href="single-event.html">{{ $article->title  }}</a></h3>
                      <p>
                                  {{ substr(strip_tags($article->body),0,300) }}
                                  {{ strlen($article->body) > 300 ? "...": "" }}
                      </p>
                    </div>
                    <ul class="info-table">
                      <li><i class="fa fa-calendar"></i> {{ $article->created_at }}</li>
                      <li><i class="fa fa-map-marker"></i> 93200 Saint-Denis RER D, FR</li>
                    </ul>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>         
        </div>        
      </div>
    </div>
  </div>

@endsection