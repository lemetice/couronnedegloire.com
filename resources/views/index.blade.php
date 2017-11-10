@extends('app')
@section('content')

  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/slideme.jpg);"></li>
      <li class="parallax" style="background-image:url(images/slide2.jpeg);"></li>
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
                <h3><strong>La table de noces est prête </strong></h3>
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
                               Et Jésus dit: Laissez les petits enfants, et ne les empêchez pas de venir à moi; car le royaume des cieux est pour ceux qui leur ressemblent.
                          </p> 
                          <cite style="color: #C71B1B">Matthieu 19.14</cite>
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
                              Avant que je t`eusse formé dans le ventre de ta mère, je te connaissais, et avant que tu fusses sorti de son sein, je t`avais consacré, je t`avais établi prophète des nations.
                          </p> 
                          <cite style="color: #C71B1B"> Jérémie 1.5</cite>
                        </blockquote>
                      </div>
                    </div>
                  </li>
                  <li class="item event-item">
                    <div>
                    <div class="swmsc_services_icons swmsc_responsive_services swmsc_services_item_left" data-responsive="767" data-margin="30">
                        <div class="swmsc_services_item_holder swmsc_services_icon_large" style="margin-right: 30px; margin-bottom: 0px;">
                          <blockquote>
                          <p>Je vous le dis en vérité, quiconque ne recevra pas le royaume de Dieu comme un petit enfant n`y entrera point.
                          </p> 
                          <cite style="color: #C71B1B">Marc 10.15</cite>
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
            <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/equipe') }}" class="img-thumbnail"> <img src="images/staff.jpg" alt="staff"> <strong>Notre Équipe</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/actualites') }}" class="img-thumbnail"> <img src="images/newhere.jpg" alt="staff"> <strong>Actualités</strong> <span class="more">read more</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="{{ url('/blog') }}" class="img-thumbnail"> <img src="images/sermons.jpg" alt="staff"> <strong>Blog</strong> <span class="more">read more</span> </a> </div>
          </div>
          <!-- End Featured Blocks --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Start Featured Gallery -->
  <div class="featured-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <h4>Visitez nos ressources</h4>
          <a href="{{ url('/evangelisation') }}" class="btn btn-default btn-lg">Plus</a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img1.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img1.jpg" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-video"> <a href="https://www.youtube.com/watch?v=gpbTc10gmFo" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img2.jpg" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img3.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img3.jpg" alt=""> </a> </div>
      </div>
    </div>
  </div>
  <!-- End Featured Gallery --> 
  <!-- Start Footer -->

@endsection