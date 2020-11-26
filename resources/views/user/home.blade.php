@extends('user.layouts.app',['title'=>'Home'])

@section('main-content')
    <!-- <section class="home-slider owl-carousel" data-stellar-background-ratio="0.5">
      
        <div class="slider-item " style="background-image:url(user/images/mdd1.jpg);"     data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4">Prenez, <br> Un Rendez-Vous <span>Sans se deplacer</span></h1>
            <h3 class="subheading">Votre accessibilite notre objectif premier</h3>
            <p><a href="{{ route('register')  }}" class="btn btn-primary px-4 py-3 mt-3"> <span class="icon-user"></span> Creer Votre compte</a></p>
          </div>
        </div>
        </div>
      </div>


      <div class="slider-item" style="background-image:url(user/images/ms-3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4">Gerez,<br> Vos Rendez-Vous <span>&nbsp&nbsp&nbspEfficacement<br>&nbsp&nbsp&nbspet Fiablement </span></h1>
            <h3 class="subheading">Votre santé est notre priorité.</h3>
            <p>  <a href="{{ route('register') }}" class="btn btn-primary px-4 py-3 mt-3"> <span class="icon-user"></span> Creer Votre compte</a></p>
          </div>
        </div>
        </div>
      </div>
            
    </section> -->

    <section class="home-slider owl-carousel ftco-services ftco-no-pb">
      
      <div class="slider-item " style="background-image:url(user/images/mdd1.jpg);"     data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 text ftco-animate">
              <h1 class="mb-4">Prenez, <br> Un Rendez-Vous <span>Sans se deplacer</span></h1>
              <h3 class="subheading">Votre accessibilite notre objectif premier</h3>
              <p><a href="{{ route('register')  }}" class="btn btn-primary px-4 py-3 mt-3"> <span class="icon-user"></span> Creer Votre compte</a></p>
            </div>
          </div>
        </div>
      </div>
      

      <div class="slider-item scrolled" style="background-image:url(user/images/ms-3.jpg);">
      	<div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 text ftco-animate">
              <h1 class="mb-4">Gerez,<br> Vos Rendez-Vous <span>&nbsp&nbsp&nbspEfficacement<br>&nbsp&nbsp&nbspet Fiablement </span></h1>
              <h3 class="subheading">Votre santé est notre priorité.</h3>
              <p>  <a href="{{ route('register') }}" class="btn btn-primary px-4 py-3 mt-3"> <span class="icon-user"></span> Creer Votre compte</a></p>
            </div>
          </div>
        </div>
      </div>

    </section>
   

  


    <section class="ftco-services ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class=" justify-content-center align-items-center">
                <span><img src="{{ asset('user/images/logo.png') }}" alt="" srcset=""></span>
                
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"><u>C'est quoi RvMédical</u></h3>
                <p>RvMédical est une application qui permet à n’importe quel sénégalais de prendre un rendez-vous avec un médecin de son choix sans se déplacer quelle que soit sa position géographique. Elle permet aussi à un médecin de gérer ses rendez-vous de maniére éficace de fiable.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="icon-bookmark"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"><u>Offres</u></h3>
                <p>Cette application offre un dossier medical electronique (Ordonance, Rapport de consultation, Carnet de Santé) a tout les patient aprés la validation d'un premier rendez-vous. <br>
                Ce dossier peut etre verifier par le medecin avant toute consultation.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="icon-money"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"><u>Paiement</u></h3>
                <p>
                  Aprés la validation du rendez-vous par le médecin, le patient peut payer son ticker via orange money.
                  S'il le desire il poura attendre jusqu'au jour du rendez-vous pour payer.
                  
                  Pour le médecin son mode de paiement lui sera communiqué lors de son inscription
                </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-24-hours"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading"><u>Disponibilite</u></h3>
                <p>
                  Pour quelles
                  raisons un patient préfère-t-il prendre un rendez-vous medical a Rv-Medical ?
                <br>  Parce que  nous sommes  disponible 7 jours sur 7, 24 heures sur 24 a votre service. Nos Patient nous le confirment.
                </p>
              </div>
            </div>      
          </div>
        </div>
			</div>
    </section>

     <!-- 
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(user/images/about.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">RV-Medical</span>
		            <h2 class="mb-4" style="font-size: 28px;">
              Spécialité médicale concernée par la prise en charge des patients hospitalisés gravement malades</h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
							<div class="row mt-5 pt-2">
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-first-aid-kit"></span></div>
										<div class="text">
											<h3>Primary Care</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-dropper"></span></div>
										<div class="text">
											<h3>Lab Test</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-experiment-results"></span></div>
										<div class="text">
											<h3>Symptom Check</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-heart-rate"></span></div>
										<div class="text">
											<h3>Heart Rate</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </section> -->
    


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2" style="margin-bottom:-70px;">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"></span>
            <h2 class="mb-4">TÉMOIGNAGES</h2>
            <p>Ces messages que vous voyez si dessous sont des commentaires poster par les patients et medecins qui utilisene notre plateforme</p>
            <p>Veillez poster votre commentaire pour nous faire part de votre avis !</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center" style="margin-top:-70px;"> 
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel">
            @foreach($comments as $com)
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p class="name">{{ $com->nom }}</p>
                    <span class="position">
                      @if($com->proffession == 0)
                      <span class="text-primary" style="font-weight:700">Un Patient</span>
                      @else 
                      <span class="text-primary" style="font-weight:700">Un Medecin</span>
                      @endif
                    </span>
                    <p>{{ $com->message }}</p>
                  </div>
                </div>
              </div>
            @endforeach
              <!-- <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Students</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Striper</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Manager</span>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
				<div class="row d-flex align-items-stretch no-gutters">
        <div class="col-md-1 d-flex align-items-stretch">
						
					</div>
					<div class="col-md-8 p-4 p-md-5 order-md-last bg-light">
          <h2 class="mb-4 ml" style="">Votre Commentaire</h2>
          <br>
						<form action="{{ route('comment.store') }}" method="POST" style="margin-top:-50px;">
            @csrf
              <div class="form-group">
              <label for="">Prenom et Nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="">
                  @error('nom')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
              <label for="">Votre Adresse E-mail</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="">
                @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <!-- <label for="">Votre Proffession</label> -->
              <label for="patient" style="margin-right:20px;"> <span class="text-primary text-bold" style="font-weight:700;">Patient</span>   <input type="radio" name="proffession"  class="@error('proffession') is-invalid @enderror" value="0" id=""> </label>
              <label for="medecin" style="margin-left:20px;"> <span class="text-primary" style="font-weight:700;">Medecin</span> <input type="radio" name="proffession"  class="@error('proffession') is-invalid @enderror" value=1 id=""></label>
                <!-- <input type="text" class="form-control @error('proffession') is-invalid @enderror" name="proffession" placeholder=""> -->
                @error('proffession')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
              <label for="">Votre Commentaire</label>
                <textarea name="message" id="" cols="30" rows="7"  class="form-control @error('message') is-invalid @enderror textarea" placeholder=""></textarea>
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
					<div class="col-md-1 d-flex align-items-stretch">
						<!-- <div id="map"></div> -->
					</div>
				</div>
			</div>
    </section>
		
		
        @endsection