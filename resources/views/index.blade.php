@extends('app')
@section('content')

  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/slide1.jpg);"></li>
      <li class="parallax" style="background-image:url(images/slide2.jpg);"></li>
    </ul>
  </div>
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
  <div class="notice-bar">
    <div class="container">
      <!-- Add upcoming event here ....
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Événements</strong> </div>
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="single-event.html">Cameroon Meet</a></h5>
          <span class="meta-data">20th October, 2017</span> </div>
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="October 20, 2017">
          <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
          <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
          <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
          <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
        </div>
        <div class="col-md-2 col-sm-6 hidden-xs"> <a href="events.html" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
      </div>-->
    </div>
  </div>
  <!-- End Notice Bar --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        
        <!--About la phrophetese -->
        <div class="row">
          <div class="col-md-6 col-sm-6"> 
            <!-- Quotes Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <h3>Living Hope For Real People</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item event-item">
                    <div>
                      <div class="swmsc_services_icons swmsc_responsive_services swmsc_services_item_left" data-responsive="767" data-margin="30">
                        <div class="swmsc_services_item_holder swmsc_services_icon_large" style="margin-right: 30px; margin-bottom: 0px;">
                        
                        </div>        
                    <div class="swmsc_services_icon_content">
                        <blockquote>
                          <p>
                               La persécution est un traitement injuste envers des chrétiens en raison de leur foi.
                          </p> 
                          <cite style="color: #C71B1B">1 CORINTHIENS 14.33</cite>
                        </blockquote>
                    </div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div>
                    <div class="swmsc_services_icons swmsc_responsive_services swmsc_services_item_left" data-responsive="767" data-margin="30">
                        <div class="swmsc_services_item_holder swmsc_services_icon_large" style="margin-right: 30px; margin-bottom: 0px;">
                          <blockquote>
                          <p>
                               La persécution est un traitement injuste envers des chrétiens en raison de leur foi.
                          </p> 
                          <cite style="color: #C71B1B">1 CORINTHIENS 14.33</cite>
                        </blockquote>
                      </div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div>
                    <div class="swmsc_services_icons swmsc_responsive_services swmsc_services_item_left" data-responsive="767" data-margin="30">
                        <div class="swmsc_services_item_holder swmsc_services_icon_large" style="margin-right: 30px; margin-bottom: 0px;">
                          <blockquote>
                          <p>Building Holy and Healthy Lives</h5>
                            Vitae optio distinctio necessitatibus earum facere magni natus eaque consectetur, esse corporis dolore ostrum ullam..
                          </p> 
                          <cite style="color: #C71B1B"></cite>
                        </blockquote>
                      </div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div>
                    <div class="swmsc_services_icons swmsc_responsive_services swmsc_services_item_left" data-responsive="767" data-margin="30">
                        <div class="swmsc_services_item_holder swmsc_services_icon_large" style="margin-right: 30px; margin-bottom: 0px;">
                          <blockquote>
                          <p>
                               Reçois pour cela Mon onction, veille à ce que Ma Parole s'accomplisse Mon enfant. Ne crains rien, car je te mandate. Sache que, il est de toi comme il fût du Prophète Jérémie pour lequel j'ai déclaré :...
                          </p> 
                          <cite style="color:#C71B1B">Jérémie 1 : 5</cite>
                        </blockquote>
                        </div>
                    </div>
                  </li>
                </ul>
              </section>
            </div>
          </div>
          <div class="col-md-6 col-sm-6"> 
            <!-- His/her Image  -->            
            <div class="listing sermons-listing">
              <header class="listing-header">
                <h3><strong>La prophétesse Sylvie Jango</strong></h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item sermon featured-sermon">
                    <div class="featured-sermon-video">
                      <img src="{{ asset('/images/prophetesse.jpeg') }}" alt="staff">
                    </div>
                  </li>                  
                </ul>
              </section>
            </div>
          </div>
        </div>

        <div class="row"> 
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/about#our-staff') }}" class="img-thumbnail"> <img src="images/staff.jpg" alt="staff"> <strong>Our Pastors</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/about') }}" class="img-thumbnail"> <img src="images/newhere.jpg" alt="staff"> <strong>New Here</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/sermons') }}" class="img-thumbnail"> <img src="images/sermons.jpg" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
          </div>
          <!-- End Featured Blocks --> 
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6"> 
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
            <div class="spacer-30"></div>
            <!-- Latest News -->
            <div class="listing post-listing">
              <header class="listing-header">
                <h3>Dernières nouvelles</h3>
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
          <!-- Start Sidebar -->
          <div class="col-md-4 col-sm-6">
            <!-- Latest Sermons -->
            <div class="listing sermons-listing">
              <header class="listing-header">
                <h3>Recent Sermons</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item sermon featured-sermon"> <span class="date">Feb 14, 2014</span>
                    <h4><a href="single-sermon.html">How To Recover The Cutting Edge</a></h4>
                    <div class="featured-sermon-video">
                      <iframe width="200" height="150" src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
                    <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>
                  </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                  <li class="item sermon">
                    <h2 class="sermon-title"><a href="single-sermon.html">Voluptatum deleniti atque corrupti</a></h2>
                    <span class="meta-data"><i class="fa fa-calendar"></i> on 17th Dec, 2013</span> </li>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Featured Gallery -->
  <div class="featured-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <h4>Updates from our gallery</h4>
          <a href="#" class="btn btn-default btn-lg">More Galleries</a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img1.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img1.jpg" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-video"> <a href="http://youtu.be/NEFfnbQlGo8" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img2.jpg" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img3.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img3.jpg" alt=""> </a> </div>
      </div>
    </div>
  </div>
  <!-- End Featured Gallery --> 
  <!-- Start Footer -->

@endsection