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
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-8">
          <h1>Articles</h1>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4"> <a href="home" class="pull-right btn btn-primary">All Articles</a> </div>
      </div>
    </div>
  </div>
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
              			<img src="{{ URL::asset($article[0]->media_url) }}" class="img-responsive">
                    </div>
                	<div class="col-md-5">
                      <a href="#" class="btn btn-primary btn-md btn-block donate-paypal" data-toggle="modal" data-target="#EditArticle">Edit Article</a>
                        <ul class="list-group">
                          <li class="list-group-item">
                          	<h4>Cause Progress</h4>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div><!-- Upto 30% use class progress-bar-danger , upto 70% use class progress-bar-warning , afterwards use class progress-bar-success -->
                            </div>
                          </li>
                      	  <li class="list-group-item"> <span class="badge">$200000</span> Amount Needed </li>
                      	  <li class="list-group-item"> <span class="badge">$160000</span> Collected yet </li>
                      	  <li class="list-group-item"> <span class="badge accent-bg">80%</span> Percentile </li>
                      	  <li class="list-group-item"> <span class="badge">15</span> Days left to achieve target</li>
                        </ul>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <p>{{ $article[0]->body }} </p>
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
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <div class="widget sidebar-widget search-form-widget">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search Posts...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search fa-lg"></i></button>
                </span> </div>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Post Categories</h3>
              </div>
              <ul>
                <li><a href="#">Faith</a> (10)</li>
                <li><a href="#">Missions</a> (12)</li>
                <li><a href="#">Salvation</a> (34)</li>
                <li><a href="#">Worship</a> (14)</li>
              </ul>
            </div>
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Post Tags</h3>
              </div>
              <div class="tag-cloud"> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> <a href="#">Faith</a> <a href="#">Heart</a> <a href="#">Love</a> <a href="#">Praise</a> <a href="#">Sin</a> <a href="#">Soul</a> <a href="#">Missions</a> <a href="#">Worship</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
