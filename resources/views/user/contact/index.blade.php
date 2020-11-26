@extends('user.layouts.app',['title'=>'Contact'])

@section('main-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('user/images/contact.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
						<form action="{{ route('contact.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Votre Nom">
                  @error('nom')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre Email">
                @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('objet') is-invalid @enderror" name="objet" placeholder="Votre objet">
                @error('objet')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7"  class="form-control @error('message') is-invalid @enderror textarea" placeholder="Votre Message"></textarea>
                @error('message')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch " style="background-image: url('{{asset('user/images/empro.png')}}'); background-repeat: no-repeat;background-position:cover;
          width:100%;heigth:100%;">
						<!-- <div id="map"></div> -->
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Address:</span>  {{ all_info()->adresse ?? '198 West 21th Street, Suite 721 New York NY 10016'}}</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Phone:</span> <a href="">{{all_info()->phone ?? '+ 1235 2355 98'}}</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Email:</span> <a href="">{{all_info()->email ?? 'youremail@email.com'}}</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Website</span> <a href="#">SenMedecin-sn.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
        <br>
@endsection