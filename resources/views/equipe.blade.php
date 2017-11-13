@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Notre Équipe</li>
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
          <h1>Notre Équipe</h1>
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
        <div class="col-md-12 col-sm-12 widget footer-widget">
        <!--
            <p class="" style="font-size:18px;"> 
                La ointe de l'éternel Sara Sylvie Jango est entouré des hommes et des femmes dynamique siègeant dans un atmosphère de louange. L'évangélisation dans les rues et l'organisation des conférences est la tâche à laquelle est dévoué son équipe sans toute fois oublié les prières nocturnes            
              <br><br>
            </p>-->
        </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/gallery-img105.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3>Sylvie Jango</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com/sarah.jango.1?ref=br_rs" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com/channel/UCiWK7T6r9zwzoQY9w2PE9iQ" target="_blank"><i class="fa fa-youtube"></i></a>  </nav>
                  <p>
                    Sylvie Jango, est née dans une famille polygame de l'ouest camerounais en 1969. Son père, Paris Jango, ayant 13 femmes et 35 enfants.
                    Elle est profondément imprégnée dès son enfance par la foi en Jésus-Christ. Mais c'est au cours d'une campagne d'évangélisation du pasteur Reinhard Bonnke, en tournée au Cameroun à la fin des années 1980, qu'elle a la révélation de Jésus-Christ.<br><br>
                    En 1996, la mort par accident de la route de son fils Trésor, 6 ans, la pousse à s'éloigner de sa terre natale pour s'installer en France. Mais, loin de se tarir, son amour du Christ se renforce et donne une nouvelle dimension à sa foi. Elle entame alors une profonde communion avec le Christ qui culmine en 2010 lorsqu'elle est « ravie en esprit ». Au cours de ce ravissement, le Seigneur lui transmet des visions de l'Enfer et du Paradis.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/staff5.jpg" alt=""> </div>
                <div class="grid-content">
                  <h3> KOBANDA Antoinette</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> </nav>
                  <p>
                    Matthieu, 9:37 - Alors il dit à ses disciples: La moisson est grande, mais il y a peu d`ouvriers. Je suis la Secrétaire Générale  et Chargée de communication de la M. E. I. C. G. La soeur Thérèse et moi secondons la Prophètesse pour l'évangelisation sur les places publiques. Je fais l'ouverture des portes pour le culte du samedi. Le frère Elie, les soeurs Angèle, Marie Chantal et moi constituons l'équipe de chorale.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box"> <img src="images/album-cover.png" alt=""> </div>
                <div class="grid-content">
                  <h3>Garmendia Jean .F</h3>
                  <nav class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> </nav>
                  <p>
                    Redacteur en Chef, évenementiel et menbre du comité executif des deux associations à  savoir:  la M. E. I. C. G  et l'A. D. R. A.. Je suis également Le premier temoin occulaire de Cette vision ici en occident. En revenche J'ai vu les visions de Cette servante de l'Eternel se realiser les unes après les autres. Entre autres les attentats de Paris, 13 Novembre 2015.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection