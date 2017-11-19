@extends('app')
@section('content')

<!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li class="active">Nous connaitre</li>
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
          <h1>Mission</h1>
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
            <p class="drop-caps secondary">
              La mission évangélique international couronne de gloire est une assemblée de croyants et de personnes qui explorent leur rapport à Jésus Christ. Il est animé par la Prophetesse Sarah Sylvie Jango. Il a pour objet de promouvoir et diffuser le témoignage que la Prophètesse délivre à partir des visions qu'elle reçoit du Seigneur Jésus-Christ . 
              </p><br>
              <p>
              Chaque jour ou presque des transmissions sont proposées aux membres qui sont inscrits sur le groupe Whatsapp et aux visiteurs de notre site Internet ; ce sont des commentaires des Écritures par la Prophetesse. Ces messages sont appelés suivant leur nature &quot;pain&quot; ou &quot;pépite&quot;. <br/>
              Après leur diffusion chaque membre du groupe est invité à les commenter et à exprimer ce qu'ils lui ont inspiré. Il est également proposé à chaque membre des prières de groupe par Téléphone ou Internet sur l'application Free conférence.com de lundi à vendredi 22 heure de Paris. Le culte tous les samedis à 14 heure et le live sur Facebook dimanche à 19 heure. Nous avons également une équipe très dynamique <strong>les Magdala</strong> qui assurent l'évangélisation sur les places publiques.
              </p> 
              <br>                       
        </div>
      </div>
    </div>
  </div>

@endsection