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
            <h1 class="logo"> <a href="{{ url('/') }}"><img src="images/logo.png" alt="Logo"></a> </h1>
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
                <li><a href="about">A propos</a>
                  <ul class="dropdown">
                    <li><a href="about">Vue d'ensemble</a></li>
                    <li><a href="auth/login">Membre</a></li>
                    <li><a href="our-staff">Notre Staff</a></li>
                	<li><a href="contact">Contact</a></li>
                  </ul>
                </li>
                <li class="megamenu"><a href="shortcodes.html">Mega Menu</a>
                  <ul class="dropdown">
                    <li>
                      <div class="megamenu-container container">
                        <div class="row">
                          <div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class="fa fa-bell"></i> Today's Prayer</span>
                            <iframe width="200" height="150" src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-pagelines"></i>La prophétesse</span>
                            <ul class="sub-menu"> 
                              <li><a href="ministry.html">Evangelisation</a></li>
                              <li><a href="livre">Livres</a></li>
                              <li><a href="ministry.html">Guerrisons et délivrances</a></li>
                              <li><a href="contact.html">Requête de prière</a></li>
                              <li><a href="contact.html">Intercéssion</a></li>
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-clock-o"></i>Événements à venir</span>
                            <ul class="sub-menu">
                              <li><a href="single-event.html">Monday Prayer</a> <span class="meta-data">Monday | 06:00 PM</span> </li>
                              <li><a href="single-event.html">Staff members meet</a> <span class="meta-data">Tuesday | 08:00 AM</span> </li>
                              <li><a href="single-event.html">Evening Prayer</a> <span class="meta-data">Friday | 07:00 PM</span> </li>
                            </ul>
                          </div>
                          <div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-cog"></i> Autres</span>
                            <ul class="sub-menu">
                              <li><a href="shortcodes.html">Bilan de notre défi</a></li>
                              <li><a href="typography.html">Chartre de la MEICG</a></li>
                    			<li><a href="shop.html">Les chrétiens persécutés<span class="label label-info">!</span></a></li>
                    			<li><a href="shop-sidebar.html">Réponse à nos prières<span class="label label-danger">New</span></a></li>
                    			<li><a href="shop-product.html">Soyons Unis <span class="label label-danger">New</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li><a href="events.html">Aléa</a>
                  <ul class="dropdown">
                    <li><a href="events-timeline.html">Conférence</a></li>
                    <li><a href="google-calendar.html">Prière de délivrance</a></li>
                    <li><a href="events-calendar.html">Consécration</a></li>
                    <li><a href="events-grid.html">Live sur Facebook</a></li>
                    <li><a href="single-event.html">Retrait spirituelle</a></li>
                    <li><a href="events.html">Tous</a></li>
                  </ul>
                </li>
                <li><a href="sermons.html">Sermons</a>
                  <ul class="dropdown">
                    <li><a href="sermon-albums.html">Cultes</a></li>
                    <li><a href="sermons.html">Baptême</a></li>
                    <li><a href="single-sermon.html">Mariage</a></li>
                    <li><a href="single-sermon.html">Archive</a></li>
                  </ul>
                </li>
                <li><a href="gallery-2cols-pagination.html">Gallery</a>
                  <ul class="dropdown">
                    <li><a href="gallery-2cols-pagination.html">With Pagination</a>
                      <ul class="dropdown">
                        <li><a href="gallery-2cols-pagination.html">2 Columns</a></li>
                        <li><a href="gallery-3cols-pagination.html">3 Columns</a></li>
                        <li><a href="gallery-4cols-pagination.html">4 Columns</a></li>
                      </ul>
                    </li>
                    <li><a href="gallery-2cols-filter.html">With Filter</a>
                      <ul class="dropdown">
                        <li><a href="gallery-2cols-filter.html">2 Columns</a></li>
                        <li><a href="gallery-3cols-filter.html">3 Columns</a></li>
                        <li><a href="gallery-4cols-filter.html">4 Columns</a></li>
                      </ul>
                    </li>
                    <li><a href="gallery-masonry.html">Masonry Grid</a></li>
                  </ul>
                </li>
                <li><a href="blog-masonry.html">Blog</a>
                  <ul class="dropdown">
                    <li><a href="blog-masonry.html">Voyages</a></li>
                    <li><a href="blog-full-width.html">Sorties</a></li>
                    <li><a href="#">Cuisine</a></li><!--
                    <li><a href="blog-medium-thumbnails.html">Medium Thumbnails</a></li>
                    <li><a href="blog-post.html">Single Blog Post</a></li>-->
                  </ul>
                </li>
                <li><a href="causes.html">Pain du ciel</a>
                  <ul class="dropdown">
                    <li><a href="causes.html">Pain du jour</a></li>
                    <li><a href="causes-grid.html">Pepites du jour</a></li>
                    <li><a href="single-cause.html">repas des lundis</a></li>
                    <li><a href="single-cause.html">radio</a></li>
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