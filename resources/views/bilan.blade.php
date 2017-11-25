@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li class="active">Livres</li>
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
          <h1>Bilan de notre défi</h1>
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
          <ul class="isotope-grid" data-sort-id="gallery">
            <li class="col-md-6 col-sm-6 grid-item post format-image">
              <div class="grid-item-inner"> <a href="{{ asset('/images/bilan.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/bilan.jpg') }}" alt=""> </a> </div>
            </li>
            
          </ul>
        </div>
        
        <div class="text-align-center">
          <p>
          	Le ministère Couronne de Gloire a lancé un défi à savoir nous soutenir pour récolter la somme de <strong>10 000 euros</strong> afin de mettre en maison d'édition les 4 livres de la Prophétesse Sylvie JANGO.
          </p>
          <p>
			Par transparence et comme nous vous l'avions annoncé, la maison d'édition Vérone avec qui nous avons signé un contrat récemment pour une période de 2 ans, nous demande la somme de 2090 euros par livre.
		  </p>
		  <p>
			Notre cagnotte a pris fin le 30/04/2017 et sur cette cagnotte figurant sur notre site, nous voulons remercier les 3 participants qui nous ont permis de récolter la somme de 140 euros :<strong> NAMILOS  Adeline</strong>, <strong>GOCKABA Thierry</strong> (merci pour ton aide du 11 avril 2017), <strong>EBWEA Bile Marie Josée</strong> (merci pour ton message du 16 avril 2017), et aussi ceux qui ont apporté leur aide hors de la cagnotte à savoir : <strong>Rodrigue Ma No</strong> (Afrique),  <strong>Angele (Paris), Caroline</strong> (Paris), <strong>Rosy</strong> (Australie).

			 Merci à vous tous.
		  </p>
		  <p>
			La somme récoltée est de <strong>1970,51 euros</strong> ce qui nous a permis de lancer le contrat avec le premier livre : <strong>Visite de l'Enfer et du Paradis</strong>.

			Que Dieu se souvienne de vous tous et de l'avancement de son oeuvre afin de propager ce témoignage dans toutes les nations.

			Un grand merci à tous et à tout ceux qui ont prié, sachez qu'il nous reste les 3 autres livres aussi édifiants à mettre en maison d'édition et que la somme de 6389.49 euros nous permettrait de signer ces 3 nouveaux contrats mais ne négligeons pas les petits commencements car cela amène les grandes bénédictions. <strong>Que Dieu vous bénisse et merci encore</strong>.
		  </p>
		  <p> 

           Notre 1er livre sera édité d'ici la fin de l'année car le contrat est en cours, il y a les corrections à apporter, la mise en place de la distribution dans les librairies et cela demande un peu de temps. Nous vous demandons de garder cela en prière et d'intercéder pour <strong>Mme TOURNIER Aurélie</strong> directrice de la maison d'édition Vérone ainsi que toute son équipe afin qu'ils mettent tout en oeuvre pour que ce livre soit accepté dans toutes les librairies et ainsi se retrouver entre les mains de tout ceux qui ne sont pas dans la vérité et c'est ainsi que notre Seigneur Jésus sera Glorifié.
          </p>
           <p style="color: black"> <strong>Que Dieu vous bénisse !!</strong> </p>
          <!--<ul class="pagination">
            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
@endsection