

<footer class="ftco-footer ftco-bg-dark ftco-section mt-2">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo " style="margin-top:-15px;"><span><a class="" href="/"><img src="{{ asset('user/images/logo.png') }}" alt="" srcset=""></span></a></span></h2>
              <p>
              Notre application est baptisé RvMédical, elle permet à n’importe quel sénégalais de prendre un rendez-vous avec un médecin de son choix sans se déplacer quelle que soit sa position géographique.
              </p>
            </div>
            <div class="ftco-footer-widget mb-5">
           
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Liens</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="{{ route('admin.login') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>admin</a></li>
                <li><a href="{{ route('medecin.login') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Medecin</a></li>
                <li><a href="{{ route('login') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Client</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Comment ca marche</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Forum</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Solution</a></li>
              </ul>
            </div>
              <!-- <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-md">
            	<div class="block-23 mb-3">
          <h2 class="ftco-heading-2 text-white text-bold" style="font-size:25px;font-weigth:900;text-transform:bolder;">Infos</h2>
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{all_info()->adresse ?? '203 Fake St. Mountain View, San Francisco, California, USA'}}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{all_info()->phone ?? '+2 392 3929 210'}}</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{all_info()->email ?? 'info@yourdomain.com'}}</span></a></li>
	              </ul>
	            </div>

	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                @foreach(all_reseau() as $reseau)
                  @if($reseau->nom == 'facebook')
                  <li class="ftco-animate"><a href="{{ $reseau->lien }}"><span class="icon-facebook text-primary"></span></a></li>
                  @elseif($reseau->nom == 'twitter')
                  <li class="ftco-animate"><a href="{{ $reseau->lien }}"><span class="icon-twitter text-primary"></span></a></li>
                  @elseif($reseau->nom == 'instagram')
                  <li class="ftco-animate"><a href="{{ $reseau->lien }}"><span class="icon-instagram primary"></span></a></li>
                  @elseif($reseau->nom == 'youtube')
                  <li class="ftco-animate"><a href="{{ $reseau->lien }}"><span class="icon-youtube text-danger"></span></a></li>
                  @elseif($reseau->nom == 'whatsapp')
                  <li class="ftco-animate"><a href="{{ $reseau->lien }}"><span class="icon-whatsapp text-success"></span></a></li>
                  @endif
                @endforeach
              </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; 2020-{{ Carbon\carbon::now()->year }}</script> Version Beta 1.0 | Ce Projet a ete Realiser  <i class="icon-heart" aria-hidden="true"></i> Par <a style="color:blue" href="#" target="_blank">EMPRO</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
</footer>

        @if(Session::has('flashy_notification.message'))
          <script id="flashy-template" type="text/template">
              <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
                  <i class="material-icons">speaker_notes</i>
                  <a href="#" class="flashy__body" target="_blank"></a>
              </div>
          </script>

          <script>
              flashy("{{ Session::get('flashy_notification.message') }}", "{{ Session::get('flashy_notification.link') }}");
          </script>
          @endif


