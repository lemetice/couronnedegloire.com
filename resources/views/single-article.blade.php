@extends('app')
@section('content')

 <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="home">Articles</a></li>
            <li class="active">{{ $article[0]->title }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">{{ $article[0]->title }}</h2>
            </header>
            <article class="post-content cause-item">
                <span class="post-meta meta-data">
                  <span><i class="fa fa-calendar"></i>{{$article[0]->published_at}} </span>
                  <span><i class="fa fa-archive"></i> <a href="#">Education</a>, <a href="#">Africa</a></span>
                  <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                </span>
                <div class="spacer-20"></div>
                
                <div class="row">
                	<div class="col-md-7">
              			<img src="{{ asset($article[0]->media_url) }}" class="img-responsive">
                    </div>
                	<div class="col-md-5">
                      <a href="#" class="btn btn-primary btn-md btn-block donate-paypal" data-toggle="modal" data-target="#EditArticle">Edit Article</a>
                        
                        
                    </div>
                </div>
                <div class="spacer-30"></div>
                <p>{!! $article[0]->body !!}  </p>
            </article>
            <!-- Payment Modal Window -->
            <div class="modal fade" id="EditArticle" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="PaymentModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit: <span class="accent-color payment-to-cause"></span></h4>
                  </div>
                  <!-- Call the body, form & footer of the modal --> 
                          @include('forms.edit')
                  <!-- End modal content -->
                </div>
              </div>
            </div>
          </div>
          <!-- Start Sidebar 
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget search-form-widget">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search Posts...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search fa-lg"></i></button>
                </span> </div>
            </div>           
            
          </div>-->
        </div>
      </div>
    </div>
  </div>

@endsection
