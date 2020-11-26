@extends('user.layouts.app',['title'=>'Inscription'])
@section('main-content')
	<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('user/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Creer Votre Compte Client</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Compte Client <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Inscription</span>
	            <h2 class="mb-4">Une Consultation Fiable</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	          </div>
	          <form action="{{ route('inscription.store') }}" method="POST" class="appointment-form ftco-animate">
                    @csrf
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prenom">
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Nom">
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		    				</div>
						</div>
						
	    				<div class="d-md-flex">
	    					<div class="form-group">
								<div class="icon"><span class="ion-md-mail"></span></div>
		    					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		    				</div>
	    					<div class="form-group ml-md-4">
								<div class="icon"><span class="ion-md-phone"></span></div>
		    					<input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Telephone">
                                @error('phone')
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
									<input type="password" class="form-control appointment_password @error('password') is-invalid @enderror" name="password" placeholder="Mot de Passe">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            				<div class="icon"><span class="ion-ios-password"></span></div>
		            				<input type="password" class="form-control appointment_password " name="password_confirmation" placeholder="Conffirmer le Mot de Passe">
                              
	            				</div>
		    				</div>
						</div>
						
	    				<div class="d-md-flex">
		    				<div class="form-group">
								<div class="input-wrap">
										<div class="icon"><span class="ion-md-calendar"></span></div> 
									<input type="text" class="form-control appointment_date @error('date') is-invalid @enderror" name="date" placeholder="Date De Naissance">
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            				<select  class="form-control @error('departement') is-invalid @enderror" name="departement" placeholder="Adresse">
										@foreach(all_departement() as $dep_all)
										<option value="{{ $dep_all->id }}">{{ $dep_all->name }}</option>
										@endforeach
									</select>
                                    @error('departement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
	            				</div>
		    				</div>
							<input type="hidden" value="image" name="image">
						</div>
						
	    						<div class="d-md-flex">
									<div class="form-group">
		            				<input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" placeholder="Adresse">
                                    @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
	            				</div>
							<div class="form-group ml-md-4">
							<input type="submit" value="Creer Le Compte" class="btn btn-secondary py-3 px-4">
							</div>
	    				</div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">About Dr.Care Facts</h3>
    				<div class="row pt-4 mt-1">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Happy Patients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="84">0</strong>
		                <span>Number of Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <!-- <span>Number of Staffs</span> -->
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>
        
@endsection