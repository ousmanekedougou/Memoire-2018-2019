@extends('user.layouts.app',['title' => 'Se Connecter'])
@section('main-content')
<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
<!-- <div class="slider-item" style="background-image:url(user/images/login.jpg);background-size:cover;background-position:center;background-repeat:no-repeat;width:100%;" data-stellar-background-ratio="0.5"> -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('user/images/login.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Connecter vous dans  Votre Compte Client</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Compte Client <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5" style="background-color:rgba(0, 0, 0, 0.007) ;">
    	<div class="container">
    		<div class="row">
				<div class="col-lg-2"></div>
    			<div class="col-lg-8 py-5 pr-md-5 form-login">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Se Connecter</span>
	            <h2 class="mb-4">Une Consultation Fiable</h2>
	            <p></p>
	          </div>
	          <form action="{{ route('login') }}" method="POST" class="appointment-form ftco-animate">
                    @csrf
	    				
						
	    				<div class="d-md-flex">
	    					<div class="form-group">
								<div class="icon"><span class="ion-md-mail"></span></div>
		    					<input type="email" class="form-control @error('email') is-invalid @enderror text-center" name="email" placeholder="Votre Adresse E-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		    				</div>
						
						</div>

						<div class="d-md-flex">
		    				<div class="form-group">
								<div class="input-wrap">
										<div class="icon"><span class="ion-md-password"></span></div>
									<input type="password" class="form-control text-center appointment_password @error('password') is-invalid @enderror" name="password" placeholder=" VotreMot de Passe">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
		    				</div>
		    				
						</div>
						
	    
						
	    				<div class="d-md-flex">
			
							<div class="form-group ml-md-4">
							<button type="submit" class="btn btn-primary py-3 px-4"> <span class="icon-sign-in"></span> Se Connecter</button>
							</div>
	    				</div>
	    			</form>
				</div>
				<div class="col-lg-2"></div>
				
    		
        	</div>
    	</div>
    </section>
        
@endsection