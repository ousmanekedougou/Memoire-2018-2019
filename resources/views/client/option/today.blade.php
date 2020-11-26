@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Historique de tout vos Rende-vous
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
                  @foreach($today as $day)
                  <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($day->user->image != '')
                              <img class="attachment-img" src="{{ Storage::url($day->user->image) }}" alt="Attachment Image">
                              @else
                              <img src="{{ asset('user/images/default.gif')}}" class="img-circle attachment-img" alt="User Image">
                              @endif
                              <div class="attachment-pushed">
                                <div class="attachment-text" style="margin-top:">
                                  <span class="username text-bold">{{ $day->medecin->prenom .' '. $day->medecin->nom }} </span> 
                                  <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <!-- <span class="text-blod"><i class="fa  fa-envelope"> {{ $day->medecin->email }}</i>  -->
                                  </span> 
                                </p>

                                <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <span class="text-blod"><i class="fa fa-envelope"> {{ $day->medecin->email }} </i> </span> 
                                  <span class="text-blod"><i class="fa fa-mobile"> {{ $day->medecin->phone }} </i> 
                                 </span> 
                                </p>
                                <p><span class="text-blod"><i class="fa fa-"> Region de  {{ $day->medecin->departement->region->name }} </i> </p>
                                <p class="text-bold text-primary">Rendez Vous traiter !!!</p>
                                </div>
                                <!-- /.attachment-text -->
                               
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <div class="text-center">
                                  <a class="btn btn-primary btn-xs " href="{{ route('client.medecin_info',$day->user->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-eye"> Voire ce Carnet </i></a>
                                  <a class="btn btn-danger btn-xs " href="{{ route('client.option_client',$day->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-trash"> Supprimer </i></a>
                                </div>
                          </div>
                    
                        </div>
                        <!-- /.box -->
                
                    </div>
                      @endforeach
              </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper --> 
@endsection