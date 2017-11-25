@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url({{ asset('/images/slide1.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li class="active">Evangelisation</li>
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
          <h1>Evangelisation</h1>
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
            <ul class="grid-holder col-3 events-grid isotope" style="position: relative; overflow: hidden; height: 632.688px;">
              <li class="grid-item post format-image isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                <div class="grid-item-inner"> <a href="{{ asset('/images/gallery-img1.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/gallery-img1.jpg') }}" alt=""> <span class="zoom" style="width: 224px; height: 224px; line-height: 224px;"><i class="fa fa-search"></i></span></a> </div>
              </li>
              <li class="grid-item post format-image isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(247px, 0px);">
                <div class="grid-item-inner"> <a href="{{ asset('/images/gallery-img2.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/gallery-img2.jpg') }}" alt=""> <span class="zoom" style="width: 224px; height: 126px; line-height: 126px;"><i class="fa fa-search"></i></span></a> </div>
              </li>
              <li class="grid-item post format-gallery isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(493px, 0px);">
                <div class="grid-item-inner">
                  <div class="media-box">
                    <div class="flexslider" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="slide" data-pause="yes">
                      
                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(-314px, 0px, 0px);"><li class="item clone" style="width: 314px; float: left; display: block;"><a href="{{ asset('/images/gallery-img3.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('/images/gallery-img3.jpg') }}" alt=""></a></li>
                        <li class="item flex-active-slide" style="width: 314px; float: left; display: block;"><a href="{{ asset('/images/gallery-img2.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('/images/gallery-img2.jpg') }}" alt=""></a></li>
                        <li class="item" style="width: 314px; float: left; display: block;"><a href="{{ asset('/images/gallery-img100.jpg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('/images/gallery-img100.jpg') }}" alt=""></a></li>
                      <li class="item clone" style="width: 314px; float: left; display: block;"><a href="{{ asset('/images/gallery-img101.jpeg') }}" data-rel="prettyPhoto[postname]"><img src="{{ asset('/images/gallery-img101.jpeg') }}" alt=""></a></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul></div>
                  </div>
                </div>
              </li>
              <li class="grid-item post format-video isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(493px, 232px);">
                <div class="grid-item-inner"> <a href="https://www.youtube.com/watch?v=33kIPudX6ms" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/newhere.jpg') }}" alt=""> <span class="zoom" style="width: 224px; height: 149px; line-height: 149px;"><i class="fa fa-play"></i></span></a> </div>
              </li>
              <li class="grid-item post format-video isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(493px, 403px);">
                <div class="grid-item-inner"> <a href="https://www.youtube.com/watch?v=DDHWTIEK_R0" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/newhere.jpg') }}" alt=""> <span class="zoom" style="width: 224px; height: 149px; line-height: 149px;"><i class="fa fa-play"></i></span></a> </div>
              </li>
              <li class="grid-item post format-video isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 461px);">
                <div class="grid-item-inner"> <a href="https://www.youtube.com/watch?v=gpbTc10gmFo" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('/images/newhere.jpg') }}" alt=""> <span class="zoom" style="width: 224px; height: 149px; line-height: 149px;"><i class="fa fa-play"></i></span></a> </div>
              </li>
            </ul>
            
            <!-- Pagination 
            <ul class="pager pull-right">
              <li><a href="#">← Older</a></li>
              <li><a href="#">Newer →</a></li>
            </ul>-->
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection