@extends('layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
   <!-- /.col -->
   <div class="col-lg-offset-1 col-lg-10">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                @if($validate_client->image != Null)
                  <img class="img-circle" src="{{ Storage::url($validate_client->medecin->image) }}" alt="User Image">
                  @else  
                  <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                @endif
                <span class="username">{{ $validate_client->medecin->prenom }} {{ $validate_client->medecin->nom }}</span>
                <span class="description">Membre Depuis {{ $validate_client->created_at->toFormattedDateString() }}</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
            <p></p>

              <!-- Attachment -->
              <div class="attachment-block clearfix">

                <div class="row">
                  <div class="col-md-3 text-center">
                  @if($validate_client->image != Null)
                  <img  style="width:100%;auto" src="{{ Storage::url($validate_client->medecin->image) }}" alt="Attachment Image">
                  @else  
                  <img src="{{ asset('user/images/default.gif')}}" style="width:100%;auto;"  alt="Attachment Image">
                @endif
                

                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $validate_client->medecin->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Telephone : <strong>{{ $validate_client->medecin->phone }}</strong></span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Departement : <strong>                      {{ $validate_client->medecin->departement->name }} ({{$validate_client->medecin->departement->region->name}})</strong></span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Proffession : <strong>{{ $validate_client->medecin->proffession }}</strong></span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Specialite : <strong>{{ $validate_client->medecin->specialite }}</strong></span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                 

                     <p>
                          <div class="row">
                              <div class="col-lg-6">
                              <p> Bonjour <span class="text-bold text-primary text-capitalize" style="font-size:20px;">{{ Auth::user()->prenom .' '.  Auth::user()->nom}} </span></p>
                              Votre demande de rendez-vous pour l'objet que voici de la date du <span class="text-bold">{{ $validate_client->created_at->toFormattedDateString() }}</span> a ete accepter pour la date du <span class="text-bold">{{ $validate_client->dateMedecin()->toFormattedDateString() . '  a ' . $validate_client->heure_medecin }}</span>
                              
                              </div>
                              <div class="col-lg-6">
                              <span class="text-primary" style="font-size:16px;text-decoration:underline">OBJET</span>
                                  {!! $validate_client->objet !!}
                              </div>
                          </div>
                     </p>
                  <div class="row">
                        <div class="col-lg-12">
                          <p class="text-bold text-info" style="font-size:20px;">IFORMATION : </p>
                          <p class="">Le cout de la consultaion est fixer a <span class="text-bold">{{ $validate_client->medecin->prix }}f</span> vous avez la possibilite de payer votre ticke en ligne en cliquant sur <a href="" class=""> Passer a la caisse <i class="fa fa-money"></i> </a> ou de payer en liquide le jour du rendez-vous </p>
                          <p><span class="text-danger">REMARQUE</span> : Les frais sont inclus dans votre transaction</p>
                        </div>
                  </div>
                     <p class="text-success">Merci et bonne consultation </p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
      
                  <div class="text-center">
                  <a class="btn btn-warning btn-xs " href="{{ route('client.home') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                    <a href="{{ route('payment.index') }}" class="btn btn-primary btn-xs"> <i class="fa fa-money"> Passer a la caisse</i> </a>
                  </div>
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>



@endsection

