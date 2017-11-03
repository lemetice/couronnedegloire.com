@extends('app')

@section('content')
<div class="nav-backed-header parallax" style="background-image:url(images/slide2.jpg);">
  
<div class="spacer-20"></div>
<div class="spacer-20"></div>
<div class="spacer-20"></div>
<div class="container">
	<div class="row">
  	@include('sessions.sessionlist')
		<div class="col-md-10 col-md-offset-1">
			<div class="spacer-20"></div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Bienvenue {{ Auth::user()->name }}!</strong>
			    	<a href="auth/logout" class="btn btn-primary btn-sm" style="float: right;">Déconnexion</a>
			    </div>
				<div class="panel-body">
					
					<div class="row">
          				<div class="col-md-12">
						<div class="tabs">
							<ul class="nav nav-tabs">
								<li class="active"> <a data-toggle="tab" href="#sampletab1">Articles</a> </li>
								<li> <a data-toggle="tab" href="#sampletab2"> Evangelisation </a> </li>
								<li> <a data-toggle="tab" href="#sampletab3"> Actualités </a> </li>
							</ul>
			              <div class="tab-content">
			                <div id="sampletab1" class="tab-pane active">
			                  	<a  href="{{ url('/blog/create') }}" class="btn btn-primary btn-sm"> Ajouter un article </a> <div class="spacer-20"></div>
			                  <br>

			                  <!-- Liste d'articles-->
								<div class="row">
						          	<div class="col-md-12 posts-archive causes-archive">
						          	   <!-- content for a particular article to loop through -->
						          	   @if(count($articles) == 0)
								         <div class="no_results bluecolor"> <h1>Aucun article trouvé</h1></div>								        
								        @endif

        								@foreach($articles as $article)
							            <article class="post cause-item">
							              <div class="row">
							                <div class="col-md-4 col-sm-4">
							                	<a href="{{url('/home/'.$article->slug)}}">
										 	@if( $article->media_url === null  )                       
						                        <img class="img-responsive" src="{{ URL::asset('assets/images/album-cover.png') }}" alt="Avatar" />
						                    @else
						                        <img class="img-responsive" src="{{ URL::asset($article->media_url) }}" alt="Avatar" />
						                    @endif
							                </div>
							                <div class="col-md-8 col-sm-8">
							                  <h3><a href="{{url('/home/'.$article->slug)}}">{{ $article->title  }}</a></h3>
							                  <span class="post-meta meta-data">
							                  	<span><i class="fa fa-calendar"></i> {{ $article->published_at  }}</span>
							                    <span><i class="fa fa-edit"></i> <a href="{{url('/home/'.$article->slug.'/edit')}}" class="btn-warning btn-sm">Modifier</a>
							                  </span>
							                  <div class="progress-label">			   
							                  </div>
							                  <div class="progress">
							                    <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div>
							                  </div>
							                  <p>
							                  {{ substr(strip_tags($article->body),0,300) }}
							                  {{ strlen($article->body) > 300 ? "...": "" }}
							                  </p>
							                </div>
							              </div>
							            </article>
							            @endforeach
						            </div>
						        </div>    

			                </div>
			                <div id="sampletab2" class="tab-pane">
								<div class="spacer-20"></div>
								<div class="spacer-20"></div>
								<div class="spacer-20"></div>
			                  	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add article</button><br>

			                  <div class="col-md-4">
								<!--create form modal-->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                    <h4 class="modal-title" id="myModalLabel">Evangelisation</h4>
					                  </div>
					                  <!-- Call the body, form & footer of the modal -->
					                   @include('forms.create') 
					                  <!-- End modal content -->
					                </div>
					              </div>
					            </div>
			                  </div>
			                </div>
			                <div id="sampletab3" class="tab-pane">
			                  <a href="{{ url('/blog/create') }}" class="btn btn-primary btn-sm"> Ajouter une actualité </a> 
			                </div>
			              </div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
