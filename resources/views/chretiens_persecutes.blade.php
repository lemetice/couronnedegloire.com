@extends('app')
@section('content')
<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide2.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Les chrétiens persécutés</li>
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
          <h1>Les chrétiens persécutés</h1>
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
          	<h2>Persécution des chrétiens</h2>
          	<div class="col-md-12">
            <p class="drop-caps">
            	Le MEICG prie, et vous demande de prier pour nos frères et soeurs persécutés et vous annonce qu'une veillée de prière est mis en place tous les fins de mois pour prier pour l'humanité. Soyons unis non pas seulement entre nous mais avec tous les chrétiens du monde entier
            </p>
          </div><br>
            <h2>Qu’est-ce que la persécution ?</h2>
            <cite>(Texte tiré du site Portes ouvertes, dédiés aux chrétiens persécutés)</cite>
            <article class="post-content cause-item">
                
                <div class="spacer-20"></div>
                
                <div class="row">
                	<div class="col-md-7">
              			<img src="images/irakien-770-court.jpg" class="img-responsive">
                    </div>
                	<div class="col-md-5">
                        <ul class="list-group">
                          <li class="list-group-item">
                          	<h4>DÉFINITION</h4>
                            <blockquote>
								<p>
							       La persécution est un traitement injuste envers des chrétiens en raison de leur foi.
							    </p> 
							</blockquote>
                          </li>
                      	  <p class="list-group-item">Pour Portes Ouvertes, la persécution des chrétiens est entendue au sens usuel du terme. Nous définissons la persécution contre les chrétiens comme « toute hostilité à l’égard d’une personne ou d’une communauté motivée par l’identification de celle-ci à la personne de Jésus-Christ ».</p>
                        </ul>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <p>La persécution antichrétienne se produit à l’échelle mondiale. Bien que Portes Ouvertes travaille activement dans plus de 60 pays, l’Index Mondial de Persécution des Chrétiens se focalise sur les 50 pays où les chrétiens sont le plus gravement persécutés.</p>

                <h2> DEUX TYPES DE  PERSÉCUTION</h2>
                Pour bien comprendre la persécution, il est utile de la considérer sous deux aspects :
                <p>1.<strong>La persécution marteau </strong>: elle consiste en une violence physique et matérielle soudaine et brutale. Il s’agit souvent de celle qui est la plus choquante, chiffrable et manifeste pour les médias, et cette visibilité peut d’ailleurs être le but recherché par ceux qui la perpètrent. C’est souvent la forme de persécution qui est rapportée dans les journaux et relevée par les diplomates.
                </p>
                <p>	2.<strong>La persécution étau </strong>: il s’agit de l’oppression discrète, faite de rejets, de discrimination, de déni des droits, d’exclusions, d’emprisonnements… Subie au quotidien, elle touche tous les domaines de la vie du chrétien (vie privée, familiale, sociale, civile et ecclésiale) et finit par ostraciser la communauté qui en est la cible. Cette forme de persécution est moins visible que la première, mais a souvent l’impact le plus néfaste, car plus en profondeur, sur une communauté persécutée.</p>
            </article><br>
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="https://www.portesouvertes.fr/"><img src="images/sphere.jpg" alt="" class="img-thumbnail"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="https://www.portesouvertes.fr/">215 MILLIONS DE CHRÉTIENS GRAVEMENT PERSÉCUTÉS DANS 50 PAYS</a></h3>
                  
                  <p>215 millions, cela représente quasiment 1 chrétien sur 12 dans le monde aujourd’hui. Dans les 50 pays de l’index, la population totale est de 4,83 milliards selon les estimations des Nations Unies et le nombre total de chrétiens est estimé à 650 millions (13%). Sur ces 650 millions de chrétiens, 215 millions (33%) sont considérés comme souffrant d’un niveau de persécution élevé. Ce chiffre ne représente pas tous les chrétiens persécutés dans le monde, car ils sont également nombreux dans les pays en dehors du classement de l’index.</p>
                </div>
              </div>
            </article><br>
            <article class="post cause-item">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                	<a href="#"><img src="images/spherpe.jpg" alt="MEICG" class="img-thumbnail"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="#">LIBERTÉE DE RELIGION BAFFOUÉE</a></h3>
                  
                  <p>Parmi tous les droits humains, le droit de religion est le plus fragile. Sans doute parce qu’il implique d’autres droits : la liberté de pensée, de conscience, de choisir sa croyance, de l’exprimer… Mais c’est un droit essentiel figurant dans l’article 18 de la Déclaration Universelle des Droits de l’Homme. Dans plus de 50 pays, les chrétiens ne bénéficient pas de ce droit.</p>
                </div>
              </div>
            </article>
            
            <article class="post-content cause-item">
                <span><strong><a href="https://www.portesouvertes.fr/">https://www.portesouvertes.fr/</a></strong></span>
                <div class="spacer-20"></div>
                
                <div class="row">
                	<div class="col-md-12">
              			<a href="https://www.portesouvertes.fr/sections-campagnes/3546655/documents/carte-index-mondial-de-persecution-2017.pdf"><img src="images/cinquante-pays.jpg" class="img-responsive"></a>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <h2> Index Mondial de Persécution des Chrétiens 2017</h2>
                
                <p>Aujourd’hui, 215 millions de chrétiens sont gravement persécutés dans les 50 pays de l’Index Mondial de Persécution des Chrétiens. Portes Ouvertes se tient à leurs côtés
                </p>
                <div class="row" id="liste">
					<div class="col-md-3" style="float: left">
					<div class="pays xcol-xs-3 " style="text-align: center;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/coree_du_nord" target="_blank"><span style="font-size:28px;">1- Cor&eacute;e du Nord</span></a></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/somalie" target="_blank">2- Somalie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/afghanistan" target="_blank">3- Afghanistan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/pakistan" target="_blank">4- Pakistan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/soudan_nord" target="_blank">5- Soudan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/syrie" target="_blank">6- Syrie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/irak" target="_blank">7- Irak</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/iran" target="_blank">8- Iran</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/yemen" target="_blank">9- Y&eacute;men</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/erythree" target="_blank">10- &Eacute;rythr&eacute;e</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/libye" target="_blank">11- Libye</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/nigeria" target="_blank">12- Nigeria</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/maldives" target="_blank">13- Maldives</a></span></div>
					</div>

					<div class="col-md-3" style="float: left">
					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/arabie_saoudite" target="_blank">14- Arabie Saoudite</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/inde" target="_blank">15- Inde</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/ouzbekistan" target="_blank">16- Ouzbekistan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/vietnam" target="_blank">17- Vietnam</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/kenya_nord_est" target="_blank">18- Kenya</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/turkmenistan" target="_blank">19- Turkm&eacute;nistan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/qatar" target="_blank">20- Qatar</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/egypte" target="_blank">21- &Eacute;gypte</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/ethiopie" target="_blank">22- &Eacute;thiopie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/territoires_palestiniens" target="_blank">23- Territoires Palestiniens</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/laos" target="_blank">24- Laos</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/brunei" target="_blank">25- Brunei</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/bangladesh" target="_blank">26- Bangladesh</a></span></div>
					</div>

					<div class="col-md-3" style="float: left">
					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/jordanie" target="_blank">27- Jordanie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/birmanie_myanmar" target="_blank">28- Myanmar</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/tunisie" target="_blank">29- Tunisie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/bouthan" target="_blank">30- Bhoutan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/malaisie" target="_blank">31- Malaisie&nbsp;&nbsp; </a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/mali" target="_blank">32- Mali</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/tanzanie" target="_blank">33- Tanzanie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/republique-centrafricaine" target="_blank">34- Centrafrique</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/tadjikistan" target="_blank">35- Tadjikistan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/algerie" target="_blank">36- Alg&eacute;rie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/turquie" target="_blank">37- Turquie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/koweit" target="_blank">38- Kowe&iuml;t</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: center;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/chine" target="_blank">39- Chine</a></span></div>
					</div>

					<div class="col-md-3" style="float: left">
					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/djibouti" target="_blank">40- Djibouti</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/mexique" target="_blank">41- Mexique</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/comores" target="_blank">42- Comores</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/kazakhstan" target="_blank">43- Kazakhstan</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/emirats_arabes_unis" target="_blank">44- &Eacute;mirats Arabes Unis</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/sri_lanka" target="_blank">45- Sri Lanka</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/indonesie" target="_blank">46- Indon&eacute;sie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/mauritanie" target="_blank">47- Mauritanie</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/Bahrein" target="_blank">48- Bahre&iuml;n</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/oman" target="_blank">49- Oman</a></span></div>

					<div class="pays xcol-xs-3 " style="text-align: right;"><span style="font-size:28px;"><a href="https://www.portesouvertes.fr/persecution-des-chretiens/profils-pays/colombie" target="_blank">50- Colombie</a></span></div>
					</div>

					<div class="clearfix" style="text-align: right;">&nbsp;</div>
					</div>
					</div>
            </article><br
          </div>
          
        </div>
      </div>
    </div>
  </div>

@endsection