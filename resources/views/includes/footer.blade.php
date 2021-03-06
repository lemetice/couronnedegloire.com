<!--
 * Created by PhpStorm.
 * User: Arnold Chuenffo
 * Date: 24/09/2017
 * Time: 10:03
-->

<!-- Start Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">MEICG</h4>
          <img src="{{ asset('/images/newlogo.jpeg') }}" alt="Logo">
          <div class="spacer-20"></div>
          <p><strong>Mission Evangelique Internationale la Couronne de Gloire</strong></p>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Notre site</h4>
          <ul>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li><a href="{{url('about')}}">A propos de nous</a></li>
            <li><a href="{{url('actualites')}}">Actualités</a></li>
            <li><a href="{{url('blog')}}">Blog</a></li>
            <li><a href="{{url('contact')}}">contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">MEICG sur les reseaux sociaux</h4>
          <div class="social-icons"> 
            <a href="https://www.facebook.com/sarah.jango.1?ref=br_rs" target="_blank"><i class="fa fa-facebook"style="font-size:36px"></i></a> 
            <a href="https://twitter.com/MEICGloire?s=08" target="_blank"><i class="fa fa-twitter" style="font-size:36px"></i></a>
            <a href="https://www.youtube.com/channel/UCiWK7T6r9zwzoQY9w2PE9iQ" target="_blank"><i class="fa fa-youtube" style="font-size:36px"></i></a> 
            <a href="https://soundcloud.com/user-45745847" target="_blank"><i class="fa fa-soundcloud" style="font-size:36px"></i></a>  
            <a href="https://plus.google.com/u/0/115055774386439764363" target="_blank"><i class="fa fa-google-plus" style="font-size:36px"></i></a>
           </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2017 MEICG. Tous droits réservés</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          Direction de l’information légale et administrative <i class="fa fa-arrow"></i>
          <a href="{{ url('mentions-legales') }}">Mentions légales</i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 