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
			                  <p class="drop-caps secondary">Les articles tel que envangelisation, repas du lundi, pain du jour,pain du ciel.ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p><br>
			                  <div class="col-md-4">
			                  	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add article</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					                    <h4 class="modal-title" id="myModalLabel">Evangelisation</h4>
					                  </div>
					                  <!-- Call the body, form & footer of the modal -->
					                   @include('forms.partial') 
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
