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
                  @foreach($lasted as $lastede)
                  <div class="col-lg-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">
                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($lastede->user->image != '')
                              <img class="attachment-img" src="{{ Storage::url($lastede->user->image) }}" alt="Attachment Image">
                              @else
                              <img class="attachment-img img-circle" src="{{ asset('user/images/default.gif')}}"  alt="User Image">
                              @endif
                              <div class="attachment-pushed">
                                <div class="attachment-text" style="margin-top:">
                                  <span class="username text-bold">{{ $lastede->user->prenom .' '. $lastede->user->nom }} </span> 
                                <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                <span class="text-blod"><i class="fa  fa-envelope"> {{ $lastede->user->email }}</i> 
                                  </span> 
                                  <span class="text-blod"><i class="fa fa-mobile"> {{ $lastede->user->phone }} </i> 
                                 </span> 
                                </p>
                                <p><span class="text-blod"><i class="fa fa-"> Region de  {{ $lastede->user->departement->region->name }} </i> </p>
                                <p class="text-bold text-primary">Rendez Vous traiter !!!</p>
                                </div>
                                <!-- /.attachment-text -->
                               
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <div class="text-center">
                                  <a class="btn btn-primary btn-xs " href="{{ route('medecin.client_info',$lastede->user->id) }}" style="margin-right:10px;" alt="View"><i class=" fa fa-view"> Voire le dossier </i></a>
                                  <a class="btn btn-danger btn-xs " href="{{ route('medecin.medecin_option',$lastede->id) }}" style="margin-right:10px;" alt="Supprimer"><i class=" fa fa-trash"> Supprimer </i></a>
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