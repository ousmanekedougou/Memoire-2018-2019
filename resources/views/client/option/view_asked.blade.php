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
                @if($view_asked->image != Null)
                  <img class="img-circle" src="{{ Storage::url($view_asked->medecin->image) }}" alt="User Image">
                  @else  
                  <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                @endif
                <span class="username">{{ $view_asked->medecin->prenom }} {{ $view_asked->medecin->nom }}</span>
                <span class="description">Membre Depuis {{ $view_asked->created_at->toFormattedDateString() }}</span>
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
                  @if($view_asked->image != Null)
                  <img  style="width:100%;auto" src="{{ Storage::url($view_asked->medecin->image) }}" alt="Attachment Image">
                  @else  
                  <img src="{{ asset('user/images/default.gif')}}" style="width:100%;auto;"  alt="Attachment Image">
                @endif
                

                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $view_asked->medecin->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Telephone : <strong>{{ $view_asked->medecin->phone }}</strong></span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Departement : <strong>                      {{ $view_asked->medecin->departement->name }} ({{$view_asked->medecin->departement->region->name}})</strong></span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Proffession : <strong>{{ $view_asked->medecin->proffession }}</strong></span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-mobil"></i> Specialite : <strong>{{ $view_asked->medecin->specialite }}</strong></span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                 

                     <p>
                          <div class="row">
                              <div class="col-lg-12">
                              <p> Bonjour <span class="text-bold text-primary text-capitalize" style="font-size:15px;">{{ Auth::user()->prenom .' '.  Auth::user()->nom}} </span></p>
                              Votre demande de rendez-vous pour l'objet si dessous de la date du <span class="text-bold">{{ $view_asked->created_at->toFormattedDateString() }}</span> n'a pas ete encord fixer.Merci de patienter
                              <p>
                              <h4>Objet :</h4>
                              {!! $view_asked->objet !!}
                              </p>
                              </div>
                              
                          </div>
                     </p>
                  <div class="row">
                        <div class="col-lg-12">
                          <p class="text-bold text-info" style="font-size:15px;">IFORMATION : </p>
                          <p class="">Le cout de la consultaion est fixer a <span class="text-bold">{{ $view_asked->medecin->prix }}f</span> </p>
                          <p><span class="text-danger">REMARQUE</span> : Les frais sont inclus dans votre transaction</p>
                        </div>
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
      
                  <div class="text-center">
                  <form id="delete-form-{{$view_asked->id}}" action="{{ route('client.destroy',$view_asked->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                  <a class="btn btn-warning btn-xs " href="{{ route('client.asked') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                  <!-- <a class="btn btn-danger btn-xs "  onClick=" if(confirm('Etes vous sure de Supprimer ce rendez-vous')){ event.preventDefault();document.getElementById('delete-form-{{$view_asked->id}}').submit();}else{event.preventDefault();}" href="{{ route('client.update',$view_asked->id) }}" style="margin-right:20px;"><i class="fa fa-trash"></i> Anuller la demande</a> -->
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


