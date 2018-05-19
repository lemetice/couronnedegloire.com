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
            <h1 class="logo"> <a href="{{ url('/') }}"><img src="{{ asset('/images/newlogoh.jpeg') }}" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
            <ul class="top-navigation hidden-sm hidden-xs"><!--
              <li><a href="plan-visit.html">Plan your visit</a></li>
              <li><a href="{{ url('/events') }}">calendrier</a></li>
              <li><a href="{{ url('/donate') }}">Faire un don</a></li>-->
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="PSJDHL4VLMGKE">
                <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
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
                <li><a href="{{ url('livre') }}">Ressources</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('https://www.youtube.com/user/adrafrance78/feed') }}" target="_blank">Youtube</a></li>
                    <li><a href="{{ url('livre') }}">Achat Livre</a></li>
                    <li><a href="{{ url('https://soundcloud.com/user-45745847') }}" target="_blank">SoundCloud</a></li>
                    <li><a href="{{ url('/telechargement') }}">Telechargement</a></li>
                  </ul>
                </li>
                <li><a href=" {{ url('/nous-connaitre') }}">Nous connaitre</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/vision') }}">vision</a></li>
                    <li><a href="{{ url('/about') }}">Profil</a></li>
                    <li><a href="{{ url('/equipe') }}">Équipe</a></li>
                    <li><a href="{{ url('/auth/login') }}">Membre</a></li>
                    <li><a href="{{ url('/charte') }}">Charte</a></li>
                  </ul>
                </li>
                <li><a href="#">Notre Ministère</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/bilan') }}">Bilan</a></li>
                    <li><a href="{{ url('/culte') }}">Culte</a></li>
                    <li><a href="{{ url('/évenement') }}">Évenement</a></li>
                    <li><a href="{{ url('/evangelisation') }}">Évangelisation</a></li>
                    <li><a href="{{ url('/intercéssion') }}">Intercéssion</a></li>
                  </ul>
                </li>
                <li><a href=" {{ url('/évenement') }}">Évenement</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/info') }}">Info</a></li>
                    <li><a href="{{ url('/avenir') }}">Avenir</a></li>
                    <li><a href="{{ url('/actualites') }}">Actualités</a></li>
                  </ul>
                </li>
                <!--
                  <li class="megamenu"><a href="activities">Nos Activités</a>
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
                                <li><a href="{{ url('/culte') }}">Culte</a></li>
                                <li><a href="{{ url('/guerrisons-et-délivrances') }}">Guerrisons et délivrances</a>
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
                -->                
                </li>
                <li><a href="{{ url('blog') }}">Blog</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('blog/tag/pain-du-ciel') }}">Pain du ciel</a></li>
                    <li><a href="{{ url('blog/tag/pepite-du-jour') }}">Pepites du jour</a></li>
                    <li><a href="{{ url('blog/tag/repas-du-lundi') }}">Repas des lundis</a></li>
                    <li><a href="{{ url('blog/tag/temoignage') }}">Témoignages</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a>                  
                </li>
                <!--- unused menu dropdown item
                  <li><a href="{{ url('/') }}">Pain du ciel</a>
                  <ul class="dropdown">
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/') }}">repas des lundis</a></li>
                  </ul>
              	 </li>
                -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- End Site Header --> 