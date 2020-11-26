@extends('layouts.app')
@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if(Auth::guard('medecin')->user() != Null) 
    <section class="content-header">
      <h1>
           Dossier Medical
        <small></small>
      </h1>
     
    </section>
    @elseif(Auth::guard('web')->user() != Null) 
    <section class="content-header">
      <h1>
         Votre Dossier Medical
        <small></small>
      </h1>
     
    </section>
    @endif

    <!-- Main content -->
    <section class="content">

        @foreach($all_info as $info_client)
          @if(Auth::guard('medecin')->user() != Null) 
          <div class="row">
          <div class=" col-lg-12">
            <!-- Box Comment -->
            <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block">
                @if($info_client->user->image != Null)
                <img class="img-circle" src="{{ Storage::url($info_client->user->image) }}" alt="User Image">
                @else
                <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                @endif
               
                  <span class="username">{{ $info_client->user->prenom }} {{ $info_client->user->nom }}</span>
                  <span class="description">
                      <span><i class="fa fa-envelope"></i> {{ $info_client->user->email }}</span> |
                      <span><i class="fa fa-phone"></i> Phone : <strong>{{ $info_client->user->phone }}</strong></span>

                  </span>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <!-- Attachment -->
                <div class="attachment-block clearfix">

                  <div class="row">
                    <h3 class="text-center text-primary">Dossier de la date du : {{$info_client->dateMedecin()->toFormattedDateString()}}</h3>
                    <div class="col-md-6">
                      <span class="text-bold" style="font-size:18px;">Le motif de la demande de rendez-vous</span> : <span style="border 1px solid #056bb3;">{!! htmlspecialchars_decode($info_client->objet) !!}</span>
                      <p class="text-bold" style="font-size:18px;">Information du Carnet</p>
                      <p> {!! htmlspecialchars_decode($info_client->carnet) !!}</p>
                    </div>
                    
                    <div class="col-md-6">
                    <p class="text-bold" style="font-size:18px;">Rapport de la consultaion</p>
                      <p> {!! htmlspecialchars_decode($info_client->rapport) !!}</p>

                        <p class="text-bold" style="font-size:18px;">Ordonance de la consultation</p>
                      <p> {!! htmlspecialchars_decode($info_client->ordonance) !!}</p>
                    </div>
                  </div>
                </div>
                <!-- /.attachment-block -->
                <!-- Social sharing buttons -->
        
                  <a class="btn btn-warning btn-xs " href="{{ route('medecin.lasted') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                      <!-- <a class="btn btn-danger btn-xs " href="{{ route('medecin.home') }}" style="margin-right:20px;">Supprimer <i class="fa fa-trash"></i></a> -->
              </div>
        
            </div>
            <!-- /.box -->
          </div>
        <!-- /.col --> 
          </div>

          @elseif(Auth::guard('web')->user() != Null)

          <div class="row">
               <!-- /.col -->
        <div class=" col-lg-12">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
              @if($info_client->medecin->image != Null)
                <img class="img-circle" src="{{ Storage::url($info_client->medecin->image) }}" alt="User Image">
                @else 
                <img class="img-circle" src="{{ asset('user/images/default.gif')}}"  alt="User Image">
                @endif
                <span class="username">{{ $info_client->medecin->prenom }} {{ $info_client->medecin->nom }}</span>
                <span class="description">
                    <span><i class="fa fa-envelope"></i> {{ $info_client->medecin->email }}</span> |
                    <span><i class="fa fa-phone"></i> Phone : <strong>{{ $info_client->medecin->phone }}</strong></span>

                </span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <h3 class="text-center text-primary">Dossier de la date du : {{$info_client->dateMedecin()->toFormattedDateString()}}</h3>
                <div class="row">
                  <div class="col-md-6">
                      <div>
                        <p> <span class="text-bold">Proffession : </span> <span>{{ $info_client->medecin->proffession }}</span>,
                        <span class="text-bold" style="margin-left:20px;">Specialite : </span> <span>{{ $info_client->medecin->specialite }} </span>
                      </p>
                       
                        <p> <span class="text-bold">Hopital de service :</span> <span>{{ $info_client->medecin->hopital->name }}</span> 
                      
                        </p>
                      </div>
                      <p class="text-bold" style="font-size:18px;">Le motif de la demande de rendez-vous</p>
                  <p> {!! htmlspecialchars_decode($info_client->objet) !!}</p>

                  <p class="text-bold" style="font-size:18px;">Carnet de la consultaion</p>
                  <p> {!! htmlspecialchars_decode($info_client->carnet) !!}</p>
                  </div>
                  
                  <div class="col-md-6">
                  <p class="text-bold" style="font-size:18px;">Rapport de la consultation</p>
                     <p> {!! htmlspecialchars_decode($info_client->rapport) !!}</p>

                  <p class="text-bold" style="font-size:18px;">Ordonance de la consultation</p>
                     <p> {!! htmlspecialchars_decode($info_client->ordonance) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
      
                    <a class="btn btn-warning btn-xs " href="{{ route('client.home') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                    <!-- <a class="btn btn-danger btn-xs " href="{{ route('client.home') }}" style="margin-right:20px;">Supprimer <i class="fa fa-trash"></i></a> -->
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col --> 
          </div>
        
          @endif
        @endforeach
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection