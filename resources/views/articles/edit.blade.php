@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(../images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Editer un article</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container" style="color: black;">
      <div class="row">
        <div class="col-md-12" >
          <h1 style="color:black;">Editer un article pour le blog</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        {!! Form::model($article[0], 
          ['method'    => 'PATCH', 
          'route' => ['home.update', $article[0]->slug], 
          'class'      => 'form', 
          'novalidate' => 'novalidate', 
          'files'      =>  true
          ])!!}
                <div class="row">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6">       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Titre</label> 
                        {!! Form::text('title', null, ['placeholder'=>'title', 'class' => 'form-control',  'required']) !!}

                        <label>Date de publication</label> 
                        <input type="date" name="published_at" class="form-control" >
                    
                    </div>
                    <div class="col-md-12">

                      {!! Form::label('media_url', 'Upload Featured Image:') !!}
                      {!! Form::file('media_url', ['class' => 'form-control margin']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    {!! Form::textarea('body', null, ['placeholder'=>'Description', 'class' => 'form-control', 'name' => 'article']) !!}
                    </div>
                </div>
                <div class="spacer-20"></div>
                {!! Form::submit('Valider', ['class' => 'btn btn-primary ']) !!}
            </div>
     
        

        </div>
    </div>
    </div>
</div>
@endsection