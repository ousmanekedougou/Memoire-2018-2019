
	   <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="/"><img src="{{ asset('user/images/logo.png') }}" alt="" srcset=""></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 ml-4 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">{{ all_info()->adresse }}, Point E</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2  d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">{{ all_info()->email }}</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2  ml-1 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">{{ all_info()->phone }}</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
	</nav>
	
	<nav class="navbar navbar-color navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		  @guest
			<!-- <p class="button-custom order-lg-last mb-0"><a href="{{ route('login') }}" class="btn btn-primary mr-2 py-2 px-3">Se Connecter</a></p> -->
			@if (Route::has('register'))
			<p class="button-custom connecter order-lg-last mb-0 mt-2"><a href="{{route('login')}}" class="btn btn-primary btn-xs py-1 px-3 mr-3 img-login"> <span class="icon-sign-in"></span> Se Connecter</a></p>
			<p class="button-custom creer order-lg-last mb-0 mt-2"><a href="{{route('register')}}" class="btn btn-success btn-xs py-1 px-3"> <span class="icon-user"></span>  Creer Votre Compte</a></p>
			@endif
		  @else
	      <p class="button-custom order-lg-last mb-0">
		  <a href="{{route('register')}}" class="btn btn-danger py-2 px-3"  onclick="event.preventDefault();
        	 document.getElementById('logout-form').submit();" >Se Deconnecter
		  </a></p>
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        	</form>
		  @endguest
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">

	        	<li class="nav-item li-link {{ set_route_active('index') }}"><a href="/" class="nav-link text-capitalize"> <span class="icon-home"></span>  Acceuil</a></li>
	        	<li class="nav-item li-link {{ set_route_active('document.index') }}"> <a href="{{route('document.index')}}" class="nav-link text-capitalize"> <span class="icon-settings"></span>   Comment ca marche ?</a></li>
	        	<!-- <li class="nav-item li-link {{ set_route_active('forum.index') }}"><a href="#" class="nav-link text-capitalize"> <span class="icon-comments"></span>  Forum</a></li> -->
	          <!-- <li class="nav-item li-link"><a href="#" class="nav-link text-capitalize">Solutions</a></li> -->
	          <li class="nav-item li-link {{ set_route_active('contact.index') }}"><a href="{{route('contact.index')}}" class="nav-link text-capitalize"><span class="icon-paper-plane"></span> Contact</a></li>
	        	<!-- <li class="nav-item"><a href="{{ route('login') }}" class="nav-link icon-paper-plane"> Se Connecter</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>

	<!-- <nav class="navbar navbar-expand-lg navbar-dark  ftco-navbar-light py-2" id="ftco-navbar"  style="background-color:#07070709  !important;">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		  @guest
			<p class="button-custom order-lg-last mb-0"><a href="{{ route('login') }}" class="btn btn-primary mr-2 py-2 px-3">Se Connecter</a></p>
			@if (Route::has('register'))
			<p class="button-custom connecter order-lg-last mb-0 mt-2"><a href="{{route('login')}}" class="btn btn-primary btn-xs py-1 px-3 mr-3"> <i class="flaticon-ambulance"></i> Se Connecter</a></p>
			<p class="button-custom creer order-lg-last mb-0 mt-2"><a href="{{route('register')}}" class="btn btn-success btn-xs py-1 px-3"> <i class="flaticon-ambulance"></i> Creer Votre Compte</a></p>
			@endif
		  @else
	      <p class="button-custom order-lg-last mb-0">
		  <a href="{{route('register')}}" class="btn btn-danger py-2 px-3"  onclick="event.preventDefault();
        	 document.getElementById('logout-form').submit();" >Se Deconnecter
		  </a></p>
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
        	</form>
		  @endguest
		  
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active li-logo "><a class="" href="/"><img src="{{ asset('user/images/logo.png') }}" alt="" srcset=""></span></a></li>
	        	<li class="nav-item li-link {{ set_route_active('/') }}"><a href="/" class="nav-link text-capitalize">Home</a></li>
	        	<li class="nav-item li-link {{ set_route_active('document.index') }}"> <a href="{{route('document.index')}}" class="nav-link text-capitalize">Comment ca marche ?</a></li>
	        	<li class="nav-item li-link {{ set_route_active('document.index') }}"><a href="#" class="nav-link text-capitalize">Forum</a></li>
	          <li class="nav-item li-link"><a href="#" class="nav-link text-capitalize">Solutions</a></li>
	          <li class="nav-item li-link {{ set_route_active('contact.index') }}"><a href="{{route('contact.index')}}" class="nav-link text-capitalize">Contact</a></li>
	        	<li class="nav-item"><a href="{{ route('login') }}" class="nav-link icon-paper-plane"> Se Connecter</a></li>
	        </ul>
	      </div>
	    </div>
	</nav> -->

	  @include('flashy::message')
