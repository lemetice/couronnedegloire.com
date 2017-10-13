<!--
 * Created by PhpStorm.
 * User: Arnold Chuenffo
 * Date: 24/09/2017
 * Time: 10:03
 -->

<!-- Start Site Header -->
  <header class="site-header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }}" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
            <ul class="top-navigation hidden-sm hidden-xs"><!--
              <li><a href="plan-visit.html">Plan your visit</a></li>-->
              <li><a href="events-calendar.html">calendrier</a></li>
              <li><a href="donate.html">Faire un don</a></li>
            </ul>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="{{ url('/') }}">Accueil</a>
                  <!--
                  <ul class="dropdown">
                    <li><a href="index.html">Sliders</a>
                    		<ul class="dropdown">
                    			<li><a href="index.html">Flex Slider</a></li>
                    			<li><a href="index-nivoslider.html">Nivo Slider</a></li>
                    			<li><a href="index-rev-slider.html">Revolution Slider <span class="label label-danger">New</span></a></li>
                         </ul>
                    </li>
                    <li><a href="index.html">Headers</a>
                    		<ul class="dropdown">
                    			<li><a href="index.html">Style 1</a></li>
                    			<li><a href="header-style2.html">Style 2</a></li>
                    			<li><a href="header-style3.html">Style 3</a></li>
                    			<li><a href="header-style4.html">Style 4 <span class="label label-danger">New</span></a></li>
                         </ul>
                    </li>
                    <li><a href="index.html">Home version 1</a></li>
                    <li><a href="index1.html">Home version 2</a></li>
                    <li><a href="index2.html">Home version 3</a></li>
                    <li><a href="index3.html">Home version 4</a></li>
                    <li><a href="index4.html">Home version 5</a></li>
                    <li><a href="index5.html">Home version 6 <span class="label label-danger">New</span></a></li>
                  </ul>
                  -->
                </li>
                <li><a href=" {{ url('/about') }}">A propos</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/about') }}">Vue d'ensemble</a></li>
                    <li><a href="{{ url('/auth/login') }}">Membre</a></li>
                    <li><a href="{{ url('/our-staff') }}">Notre Staff</a></li>
                	<li><a href="{{ url('/contact') }}">Contact</a></li>
                  </ul>
                </li>
                <li class="megamenu"><a href="shortcodes.html">Menu</a>
                  <ul class="dropdown">
                    <li>
                      <div class="megamenu-container container">
                        <div class="row">
                          <div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class="fa fa-bell"></i> Today's Prayer</span>
                            <iframe width="200" height="150" src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-pagelines"></i>La prophétesse</span>
                            <ul class="sub-menu"> 
                              <li><a href="{{ url('/evangelisation') }}">Evangelisation</a></li>
                              <li><a href="{{ url('/livre') }}">Livres</a></li>
                              <li><a href="{{ url('/guerrisons-et-délivrances') }}">Guerrisons et délivrances</a></li>
                              <li><a href="{{ url('/requête-de-prière') }}">Requête de prière</a></li>
                              <li><a href="{{ url('/intercéssion') }}">Intercéssion</a></li>
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-clock-o"></i>Événements à venir</span>
                            <ul class="sub-menu">
                              <li><a href="single-event.html">Monday Prayer</a> <span class="meta-data">Monday | 06:00 PM</span> </li>
                              <li><a href="{{ url('/single-event') }}">Staff members meet</a> <span class="meta-data">Tuesday | 08:00 AM</span> </li>
                              <li><a href="{{ url('/single-event') }}">Evening Prayer</a> <span class="meta-data">Friday | 07:00 PM</span> </li>
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-cog"></i> Autres</span>
                            <ul class="sub-menu">
                              <li><a href="{{ url('/bilan') }}">Bilan de notre défi</a></li>
                              <li><a href="{{ url('/chartre') }}">Chartre de la MEICG</a></li>
                    			<li><a href="{{ url('/les-chretiens-persecutes') }}">Les chrétiens persécutés<span class="label label-info">!</span></a></li>
                    			<li><a href="{{ url('/reponse-prieres') }}">Réponse à nos prières<span class="label label-danger">New</span></a></li>
                    			<li><a href="{{ url('/soyons-unis') }}">Soyons Unis <span class="label label-danger">New</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li><a href="events.html">Aléa</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}">Conférence</a></li>
                    <li><a href="{{ url('/') }}">Prière de délivrance</a></li>
                    <li><a href="{{ url('/') }}">Consécration</a></li>
                    <li><a href="{{ url('/') }}">Live sur Facebook</a></li>
                    <li><a href="{{ url('/') }}">Retrait spirituelle</a></li>
                    <li><a href="{{ url('/') }}">Annonces</a></li>
                  </ul>
                </li>
                <li><a href="sermons.html">Sermons</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}">Cultes</a></li>
                    <li><a href="{{ url('/') }}">Baptême</a></li>
                    <li><a href="{{ url('/') }}">Mariage</a></li>
                    <li><a href="{{ url('/') }}">Archive</a></li>
                  </ul>
                </li>
                <li><a href="gallery-2cols-pagination.html">Gallery</a>
                  <ul class="dropdown">
                    <li><a href="gallery-masonry.html">Masonry Grid</a></li>
                  </ul>
                </li>
                <li><a href="blog-masonry.html">Blog</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}">Voyages</a></li>
                    <li><a href="{{ url('/') }}">Sorties</a></li>
                    <li><a href="{{ url('/') }}">Cuisine</a></li><!--
                    <li><a href="blog-medium-thumbnails.html">Medium Thumbnails</a></li>
                    <li><a href="blog-post.html">Single Blog Post</a></li>-->
                  </ul>
                </li>
                <li><a href="{{ url('/') }}">Pain du ciel</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}">Pain du jour</a></li>
                    <li><a href="{{ url('/') }}">Pepites du jour</a></li>
                    <li><a href="{{ url('/') }}">repas des lundis</a></li>
                    <li><a href="{{ url('/') }}">radio</a></li>
                  </ul>
              	</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header --> 