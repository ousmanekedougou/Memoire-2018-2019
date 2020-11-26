@extends('user.layouts.app',['title'=>'Comment Ca Marche'])
@section('headsection')
@endsection

@section('main-content')
 
	<section class="hero-wrap hero-wrap-2" style="background-image: url('user/images/bg2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Tout sur comment utiliser RV-Medical</h1>
         <p class="breadcrumbs"><span class="mr-2"><a hre!!f="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Comment Ca Marche<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Utilisez RV-Medical</span>
            <p>
			-Patient : Pour avoir un rendez-vous un suivi medicale sans ce deplacer.
			<br>-Medecin : Pour gerer vos rendez-vous plus efficacement et fiablement.   
			</p>
          </div>
        </div>
    		<div class="ftco-departments">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Patient</a>

	              <a style="background-color:silver;" class="nav-link ftco-animate link_none" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Medecin</a>

	              <a style="background-color:silver;" class="nav-link ftco-animate link_none" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"></a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Medecin Chef</a>



	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">

	              <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
						  <div class="img align-self-stretch" style="background-image: url(user/images/m.jpg);"></div>
	              		</div>
	              		<div class="col-lg-8">
	              			<h2>Information cosernant les patients</h2>
	              			<p>Comme tout système sécurisé notre système s'assurera  après l’inscription de cette utilisation son l’identité. Authentification se fait par un login et un mot de passe.</p>
							  				<div class="row mt-5 pt-2">
												<div class="col-lg-12">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
														<div class="text">
															<h3>Creer Un Compte</h3>
															<p>
															Avant toute chose le patient doit créer un compte. Il va remplir un formulaire dans lequel il précisera son prénom et nom, son email, son numéro de téléphone, un mot de passe, sa date de naissance, son département et son adresse exact.  
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row mt-5 pt-2">
												<div class="col-lg-12">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-tags"></span></div>
														<div class="text">
															<h3>Demander Un Rendez-Vous</h3>
															<p>Une fois que le patient identifié, il verra tous les médecins qui sont inscrit dans l’application. De là il  pourra demander un rendez-vous avec n’importe lequel en cliquant sur demander un rendez-vous et en remplissant un formulaire..</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row mt-5 pt-2">
												<div class="col-lg-12">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-trash"></span></div>
														<div class="text">
															<h3>Annuler Un Rendez-Vous</h3>
															<p>Le médecin et le patient ont le droit d’annuler un rendez-vous 48 heures avant sa date prévue.si le médecin annule de rendez-vous le patient sera notifié vice versa. Le médecin pourra alors l’attribué à un autre patient. </p>
														</div>
													</div>
												</div>
											</div>
											<div class="row mt-5 pt-2">
												<div class="col-lg-12">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-money"></span></div>
														<div class="text">
															<h3>Mode de paiement</h3>
															<p>
															Après la validation du rendez-vous par le médecin, le patient peut payer son ticket via orange money. S'il le désire il pourra attendre jusqu'au jour du rendez-vous pour payer.
															</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
						  <div class="img align-self-stretch" style="background-image: url(user/images/doc1.jpeg);"></div>
	              		</div>
	              		<div class="col-lg-8">
	              			<h2>Information cosernant les Medecin</h2>
	              			<p>Comme tout système sécurisé notre système s'assurera  après l’inscription de cette utilisation son l’identité. Authentification se fait par un login et un mot de passe.</p>
											
											<div class="row mt-5 pt-2">
												<div class="col-lg-12">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-edit"></span></div>
														<div class="text">
															<h3>Fixer Un Rendez-Vous</h3>
															<p>
															Après la demande du rendez-vous du patient, le médecin peut alors fixer un rendez-vous selon sa disponibilité. Il verra toutes les informations nécessaires du patient comme son nom, son date de naissance et l’hôpital et le service dont il a demandé le rendez-vous. Il va dès lors  choisir la date et l’heure dont il souhaite fixer le rendez-vous.
															</p>
														</div>
													</div>
												</div>
												</div>
												<div class="row mt-5 pt-2">
													<div class="col-lg-12">
														<div class="services-2 d-flex">
															<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-times-rectangle"></span></div>
															<div class="text">
																<h3>Repporter Un Rendez-Vous</h3>
																<p>
																Seul le médecin est capable de reporter un rendez-vous s’il a un contre temps. Le patient fera notifié automatique dans l’application dès que le médecin reporte la  date du rendez-vous. 
																 </p>
															</div>
														</div>
													</div>
												</div>
												<div class="row mt-5 pt-2">
													<div class="col-lg-12">
														<div class="services-2 d-flex">
															<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
															<div class="text">
																<h3>Comment S'inscrire</h3>
																<p>
																Pour rejoindre la plateforme le medecin doit etre ajouter par le medecin chef qui se trouve dans la meme region que lui ou par les administrateur de RV-Medical
																 </p>
															</div>
														</div>
													</div>
												</div>
	              		</div>
	              	</div>
	              </div>
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
						  <div class="img align-self-stretch" style="background-image: url(user/images/d.jpg);"></div>
	              		</div>
	              		<div class="col-lg-8">
	              			<h2>Information cosernant les Medecin Chef</h2>
	              			<p>Comme tout système sécurisé notre système s'assurera  après l’inscription de cette utilisation son l’identité. Authentification se fait par un login et un mot de passe.</p>
							  <div class="row mt-5 pt-2">
													<div class="col-lg-12">
														<div class="services-2 d-flex">
															<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
															<div class="text">
																<h3>Comment S'inscrire</h3>
																<p>
																Pour rejoindre la plateforme le medecin chef doit etre ajouter par les administrateur de RV-Medical
																 </p>
															</div>
														</div>
													</div>
												</div>
											<div class="row mt-5 pt-2">
												<div class="col-lg-12">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-edit"></span></div>
														<div class="text">
															<h3>Fixer Un Rendez-Vous</h3>
															<p>Après la demande du rendez-vous du patient, le médecin peut alors fixer un rendez-vous selon sa disponibilité. Il verra toutes les informations nécessaires du patient comme son nom, son date de naissance et l’hôpital et le service dont il a demandé le rendez-vous. Il va dès lors  choisir la date et l’heure dont il souhaite fixer le rendez-vous.</p>
														</div>
													</div>
												</div>
												</div>
												<div class="row mt-5 pt-2">
													<div class="col-lg-12">
														<div class="services-2 d-flex">
															<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-times-rectangle-o"></span></div>
															<div class="text">
																<h3>Repporter Un Rendez-Vous</h3>
																<p>	Seul le médecin est capable de reporter un rendez-vous s’il a un contre temps. Le patient fera notifié automatique dans l’application dès que le médecin reporte la  date du rendez-vous.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row mt-5 pt-2">
													<div class="col-lg-12">
														<div class="services-2 d-flex">
															<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
															<div class="text">
																<h3>Ajouter un medecin </h3>
																<p>Seul le médecin chef et l’administrateur sont capable d’ajouter un médecin. Le médecin chef n’ajoute que des médecins qui sont dans la même région que lui alors que l’administrateur peut ajouter n’importe quel médecin quel que soit  sa position géographique. Il peut aussi  lui attribué le rôle de médecin chef ou médecin.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row mt-5 pt-2">
													<div class="col-lg-12">
														<div class="services-2 d-flex">
															<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-user"></span></div>
															<div class="text">
																<h3>Ajouter un hopital </h3>
																<p>Seul le médecin chef et l’administrateur sont capable d’ajouter un hopital. Le médecin chef n’ajoute que des hopitaux qui sont dans la même région que lui alors que l’administrateur peut ajouter n’importe quel hopital quel que soit  sa position géographique.</p>
															</div>
														</div>
													</div>
												</div>
	              		</div>
	              	</div>
	              </div>

	              <!-- <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-4.jpg);"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2>Ophthalmology Deparments</h2>
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
	              </div> -->

	              <!-- <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url(images/dept-5.jpg);"></div>
	              		</div>
	              		<div class="col-md-8">
	              			<h2>Cardiology Deparments</h2>
	              			<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
											<div class="row mt-5 pt-2">
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
														<div class="text">
															<h3>Primary Care</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
														<div class="text">
															<h3>Lab Test</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
														<div class="text">
															<h3>Symptom Check</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="services-2 d-flex">
														<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-idea"></span></div>
														<div class="text">
															<h3>Heart Rate</h3>
															<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
														</div>
													</div>
												</div>
											</div>
	              		</div>
	              	</div>
	              </div> -->
	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>
        <br>
@endsection