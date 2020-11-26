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
            <!-- <div class="box-header with-border">
              <div class="user-block">
              @if($view_weiting->medecin->image != Null)
                <img class="img-circle" src="{{ Storage::url($view_weiting->medecin->image) }}" alt="User Image">
                @else
              <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="Attachman Image">
              @endif
                <span class="username">{{ $view_weiting->medecin->prenom }} {{ $view_weiting->medecin->nom }}</span>
                <span class="description">Membre Depuis {{ $view_weiting->created_at->toFormattedDateString() }}</span>
              </div>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
            <p></p>

              <!-- Attachment -->
              <div class="attachment-block clearfix">

                <div class="row">
                  <div class="col-md-3  ">
                  <img style="width:100%" class="" src="{{ Storage::url($view_weiting->medecin->image) }}" alt="Attachment Image">

                  <p class="" >
                        <span><i class="fa fa-envelope"></i> {{ $view_weiting->medecin->email }}</span>
                      </p>

                      <p class="" >
                        <span><i class="fa fa-mobile"></i> Phone : <strong>{{ $view_weiting->medecin->phone }}</strong></span>
                      </p>

                      <p class="" >
                        <span>{{ $view_weiting->medecin->proffession }}</span>
                      </p>


                      <p class="" >
                        <span>{{ $view_weiting->medecin->specialite }}</span>
                      </p>

                      <p class="" >
                        <span>{{ $view_weiting->medecin->departement->name }} (Region de {{ $view_weiting->medecin->departement->region->name }} )</span>
                      </p>

                      <p class="" >
                        <span>
                        @foreach($view_weiting->medecin->hopitals as $medecin_hopital)
                        {{$medecin_hopital->name }} , 
                        @endforeach
                        </span>
                      </p>
                      
                  </div>
                  
                  <div class="col-md-9">
                    <!-- <p>
                      <span class="text-bold text-upercase">Departemant</span> :
                      <span class="text-italic text-capitalize">
                      </span>
                    </p>


                    <p>
                      <span class="text-bold text-upercase">Specialite</span> :
                      <span class="text-italic text-capitalize">
                      </span>
                    </p> -->

                     <p>
                          <div class="row">
                              <div class="col-lg-6">
                              <p> Bonjour <span class="text-bold text-primary text-capitalize" style="font-size:20px;">{{ Auth::user()->prenom .' '.  Auth::user()->nom}} </span></p>
                              Votre demande de rendez-vous pour l'objet que voici de la date du <span class="text-bold">{{ $view_weiting->created_at->toFormattedDateString() }}</span> a ete accepter pour la date du <span class="text-bold">{{ $view_weiting->dateMedecin()->toFormattedDateString() . '  a ' . $view_weiting->heure_medecin }}</span>
                              
                              </div>
                              <div class="col-lg-6">
                              <span class="text-primary" style="font-size:16px;text-decoration:underline">OBJET</span>
                                  {!! $view_weiting->objet !!}
                              </div>
                          </div>
                     </p>
                  <div class="row">
                        <div class="col-lg-12">
                          <p class="text-bold text-info" style="font-size:20px;">IFORMATION : </p>
                          <p class="">Le cout de la consultaion est fixer a <span class="text-bold">{{ $view_weiting->medecin->prix }}f</span> vous avez la possibilite de payer votre ticke en ligne en cliquant sur <a href="" class=""> Passer a la caisse <i class="fa fa-money"></i> </a> ou de payer en liquide le jour du rendez-vous </p>
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
                  <a class="btn btn-warning btn-xs " href="{{ route('client.weiting') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                    <a href="" class="btn btn-primary btn-xs"> <i class="fa fa-money"> Passer a la caisse</i> </a>
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

