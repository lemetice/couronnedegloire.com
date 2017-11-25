@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide1.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li class="active">blog</li>
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
          <h1 style="color:black;">{{ $article[0]->title }}</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <!-- Liste d'articles-->
          <div class="row">
            <div class="col-md-12 posts-archive causes-archive">
              <article class="post-content cause-item">
                <span class="post-meta meta-data">
                  <span><i class="fa fa-calendar"></i>{{$article[0]->published_at}} </span>
                  <span><i class="fa fa-archive"></i> <a href="#">Education</a>, <a href="#">Africa</a></span>
                  <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                </span>
                <div class="col-md-12">
                        <img src="{{ asset($article[0]->media_url) }}" class="img-responsive">
                </div>                    
                <div class="spacer-30"></div>
                    <p>{!! $article[0]->body !!} </p>
              </article> 
            </div>       
          </div>
        </div>
    </div>
  </div>
@endsection