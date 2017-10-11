@extends('app')

@section('content')
<div class="spacer-20"></div>
<div class="spacer-20"></div>
<div class="spacer-20"></div>
<div class="container">
	<div class="row">
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
								<li> <a data-toggle="tab" href="#sampletab2"> Sample Tab #2 </a> </li>
								<li> <a data-toggle="tab" href="#sampletab3"> Autre contenue </a> </li>
							</ul>
			              <div class="tab-content">
			                <div id="sampletab1" class="tab-pane active">
			                  	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add article</button><br>
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
							                	<a href="{{url('/home/'.$article->id)}}">
										 	@if( $article->media_url === null  )                       
						                        <img class="img-responsive" src="{{ URL::asset('assets/images/album-cover.png') }}" alt="Avatar" />
						                    @else
						                        <img class="img-responsive" src="{{ URL::asset($article->media_url) }}" alt="Avatar" />
						                    @endif
							                </div>
							                <div class="col-md-8 col-sm-8">
							                  <h3><a href="{{url('/home/'.$article->id)}}">{{ $article->title  }}</a></h3>
							                  <span class="post-meta meta-data">
							                  	<span><i class="fa fa-calendar"></i> {{ $article->published_at  }}</span>
							                    <span><i class="fa fa-archive"></i> <a href="#">Education</a>, <a href="#">Africa</a></span>
							                    <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
							                  </span>
							                  <div class="progress-label">			             
							                  	<button class="cause-days-togo label label-default pull-right btn btn-primary btn-lg" data-toggle="modal" data-target="#editArticleModal">Edit Article</button><br>
							                  </div>
							                  <div class="progress">
							                    <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div>
							                  </div>
							                  <p style="height:60px;
											    line-height:20px; /* Height / no. of lines to display */
											    overflow:hidden;" >{{ $article->body  }}</p>
							                </div>
							              </div>
							            </article>
							            @endforeach
						            </div>
						        </div>    

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
					            <!--Edit form modal-->
					            <div class="modal fade" id="editArticleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                    <h4 class="modal-title" id="myModalLabel">Evangelisation</h4>
					                  </div>
					                  <!-- Call the body, form & footer of the modal -->
					                   @include('forms.edit') 
					                  <!-- End modal content -->
					                </div>
					              </div>
					            </div>
			                  </div>
			                </div>
			                <div id="sampletab2" class="tab-pane">
			                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque.</p>
			                </div>
			                <div id="sampletab3" class="tab-pane">
			                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum. </p>
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
