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
                <img class="img-circle" src="{{ Storage::url($medecin_show->image) }}" alt="User Image">
                <span class="username">{{ $medecin_show->prenom }} {{ $medecin_show->nom }}</span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
            <p></p>

              <!-- Attachment -->
              <div class="attachment-block clearfix">

                <div class="row">
                  <div class="col-md-3">
                  <img style="width:100%" class="" src="{{ Storage::url($medecin_show->image) }}" alt="Attachment Image">

                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $medecin_show->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-phone"></i> Telephone : <strong>{{ $medecin_show->phone }}</strong></span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                  <h4 class="attachment-heading" style="text-decoration:underline;">Specialiste en 
                    <span class="text-info">
                    @foreach($medecin_show->specialites as $medecin_spec)
                          {{ $medecin_spec->nom }}
                        </span>  
                        du departement
                        <span>
                        @foreach($medecin_spec->departements as $dep_spec)
                          {{ $dep_spec->nom }}
                          @endforeach
                        </span>
                        @endforeach
                      </h4>

                     <p> {!! htmlspecialchars_decode($medecin_show->bibliographie) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
              <form id="delete-form-{{$medecin_show->id}}" action="{{ route('team.destroy',$medecin_show->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a class="btn btn-danger btn-xs  " onClick=" if(confirm('Etes vous sure de Supprimer ce medecin')){ event.preventDefault();document.getElementById('delete-form-{{$medecin_show->id}}').submit();}else{event.preventDefault();}" href="{{ route('team.update',$medecin_show->id) }}" style="margin-right:20px;"><i class="fa fa-trash"></i> Supprimer</a>
                    <a class="btn btn-warning btn-xs " href="{{ route('medecin.index') }}" style="margin-right:20px;">Back <i class="fa fa-share"></i></a>
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>



@endsection

