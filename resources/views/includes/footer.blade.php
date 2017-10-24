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
          <img src="{{ asset('/images/logo.png') }}" alt="Logo">
          <div class="spacer-20"></div>
          <p>Mission Evangelique la Couronne de Gloire</p>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Blogroll</h4>
          <ul>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li><a href="{{url('about')}}">A propos</a></li>
            <li><a href="{{url('activities')}}">Activités</a></li>
            <li><a href="{{url('ressources')}}">Ressources</a></li>
            <li><a href="{{url('contact')}}">contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">MEICG sur les reseaux sociaux</h4>
          <div class="social-icons"> 
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> 
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a> 
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