@extends('app')
@section('content')
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/slide1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Blog</li>
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
          <h1>Tag: {{ tag }}</h1>
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
          <div class="col-md-9 posts-archive">
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
                                <a href="{{url('/blog/'.$article->slug)}}">
                      @if( $article->media_url === null  )                       
                                    <img class="img-responsive" src="{{ URL::asset('assets/images/album-cover.png') }}" alt="Avatar" />
                                @else
                                    <img class="img-responsive" src="{{ URL::asset($article->media_url) }}" alt="Avatar" />
                                @endif
                              </div>
                              <div class="col-md-8 col-sm-8">
                                <h3><a href="{{url('/blog/'.$article->slug)}}">{{ $article->title  }}</a></h3>
                                <span class="post-meta meta-data">
                                  <span><i class="fa fa-calendar"></i> {{ $article->published_at  }}</span>
                                  <span><i class="fa fa-archive"></i> <a href="#">Education</a>, <a href="#">Africa</a></span>
                                  <span><a href="#"><i class="fa fa-comment"></i> 12</a></span>
                                </span>
                                <div class="progress-label">         
                                </div>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" data-appear-progress-animation="80%" data-appear-animation-delay="200"></div>
                                </div>
                              </div>
                            </div>
                          </article>
                          @endforeach
                        </div>
                    </div> 
            
            <center>
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </center>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Les Tags</h3>
              </div>
              <div class="tag-cloud"> 
               @unless(count($tags) == 0)
                  @foreach($tags as $tag) 
                    <a href="{{ url('blog/'. preg_replace('/\s+/', '-', $tag )) }}"> {{ $tag }}</a> 
                  @endforeach
              @endunless    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection