@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
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
          <!-- Start Articles -->
          <div class="col-md-6 col-sm-6">
            <!-- Latest News -->
            <div class="listing post-listing">
              <header class="listing-header">
                <h3>Actualités recent</h3>
              </header>
              <section class="listing-cont">
                   @if(count($articles) == 0)
                         <div class="no_results bluecolor"> <h1>Aucun article trouvé</h1></div>                       
                    @endif
                <ul>
                  @foreach($articles as $article)
                    <li class="item post">
                      <div class="row">
                        <div class="col-md-4"> 
                        <a href="{{url('/evangelisation/'.$article->slug)}}">
                            @if( $article->media_url === null  )                       
                                    <img class="img-responsive" src="{{ URL::asset('assets/images/album-cover.png') }}" alt="Avatar" />
                            @else
                              <img class="img-responsive" src="{{ URL::asset($article->media_url) }}" alt="Avatar" />
                            @endif</div>
                        <div class="col-md-8">
                          <div class="post-title">
                            <h2><a href="{{url('/evangelisation/'.$article->slug)}}">{{ $article->title  }}</a></h2>
                            <span class="meta-data"><i class="fa fa-calendar"></i> on {{$article->created_at}}</span></div>
                          <p style="height:60px;
                          line-height:20px; /* Height / no. of lines to display */
                          overflow:hidden;" >{{ $article->body  }}</p>
                        </div>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </section>
            </div>
          </div>
          <!-- Start Events -->
          <div class="col-md-6 col-sm-6"> 
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <h3>More Coming Events</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">06</span> <span class="month">Aug</span> </div>
                    <div class="event-detail">
                      <h4><a href="{{ url('/about') }}">Monday Prayer</a></h4>
                      <span class="event-dayntime meta-data">Monday | 07:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="{{ url('/about') }}" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">28</span> <span class="month">Aug</span> </div>
                    <div class="event-detail">
                      <h4><a href="{{ url('/about') }}">Staff members meet</a></h4>
                      <span class="event-dayntime meta-data">Monday | 01:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="{{ url('/about') }}" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">25</span> <span class="month">Sep</span> </div>
                    <div class="event-detail">
                      <h4><a href="single-event.html">Evening Prayer</a></h4>
                      <span class="event-dayntime meta-data">Friday | 06:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                </ul>
              </section>
            </div>            
          </div>          
        </div>        
      </div>
    </div>
  </div>

@endsection