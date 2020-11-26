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
              @if($medecin_show->image != Null)
                <img class="img-circle" src="{{ Storage::url($medecin_show->image) }}" alt="User Image">
                @else  
                    <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                    @endif
                <span class="username">{{ $medecin_show->prenom }} {{ $medecin_show->nom }}</span>
                <span class="description"> <span class="text-bold text-warning">Vous :</span> Membre Depuis {{ $medecin_show->created_at->toFormattedDateString() }}</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
            <p></p>

              <!-- Attachment -->
              <div class="attachment-block clearfix">

                <div class="row">
                  <div class="col-md-3" style="border 1px solid red;">
                  @if($medecin_show->image != Null)
                  <img style="width:100%" class="" src="{{ Storage::url($medecin_show->image) }}" alt="Attachment Image">
                    @else  
                    <img style="width:100%" src="{{ asset('user/images/default.gif')}}" class="" alt="Attachment Image">
                    @endif
                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $medecin_show->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-phone"></i>Telephone :{{ $medecin_show->phone }}</span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                  <p>
                      <span class="text-bold text-upercase">Departement</span> :
                      <span class="text-italic text-capitalize">
                      {{ $medecin_show->departement->name }} ({{$medecin_show->departement->region->name}})
                      </span>
                    </p>

                    <p>
                      <span class="text-bold text-upercase">Proffession</span> :
                      <span class="text-italic text-capitalize">
                      {{ $medecin_show->proffession }}
                      </span>
                    </p>

                    <p>
                      <span class="text-bold text-upercase">Specialite</span> :
                      <span class="text-italic text-capitalize">
                      {{ $medecin_show->specialite }}
                      </span>
                    </p>

                   <p>
                      <span class="text-bold text-upercase">Hopital</span> :{{ $medecin_show->hopital->name }}
                    </p>
                    <p>
                      <span class="text-bold text-upercase">Disponible le </span> :
                      <span class="text-italic text-capitalize">
                        @foreach($medecin_show->disponibilites as $dispo)
                            {{ $dispo->jour }},
                        @endforeach
                      </span>
                    </p>
                    <h4 class="text-bold"> Mon Parcour :</h4>

                     <p> {!! htmlspecialchars_decode($medecin_show->bibliographie) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
              <form id="delete-form-{{$medecin_show->id}}" action="{{ route('medecin.destroy',$medecin_show->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
              </form>
                    <a class="btn btn-danger btn-xs  " onClick=" if(confirm('Etes vous sure de Supprimer ce medecin')){ event.preventDefault();document.getElementById('delete-form-{{$medecin_show->id}}').submit();}else{event.preventDefault();}" href="{{ route('medecin.update',$medecin_show->id) }}" style="margin-right:20px;"><i class="fa fa-trash"></i> Supprimer</a>
                    <a class="btn btn-warning btn-xs " href="{{ route('admin.index') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                    <div class="checkbox">

                 <form action="{{route('medecin.update',$medecin_show->id)}}" method="post">
                 @csrf 
                 {{method_field('PUT')}}
                 <label>
                    <input type="checkbox" value="1" name="status"> Status
                  </label>
                  <input class="btn btn-primary btn-xs" type="submit" value="Valider">
                 </form>
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

