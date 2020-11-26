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
                  <div class="col-md-3 text-center">
                  @if($medecin_show->image != Null)
                  <img style="width:100%" class="" src="{{ Storage::url($medecin_show->image) }}" alt="Attachment Image">
                    @else  
                    <img style="width:100%" src="{{ asset('user/images/default.gif')}}" class="" alt="Attachment Image">
                    @endif
                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $medecin_show->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-phone"></i> Telephone : <strong>{{ $medecin_show->phone }}</strong></span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                    <p>
                      <span class="text-bold text-upercase">Departement</span> : de
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
                      <span class="text-bold text-upercase">Hopital</span> :
                        <span>{{ $medecin_show->hopital->name }}</span>
                    </p>
                    <p>
                      <span class="text-bold text-upercase">Disponible le </span> :
                      <span class="text-italic text-capitalize">
                        @foreach($medecin_show->disponibilites as $dispo)
                            {{ $dispo->jour }},
                        @endforeach
                      </span>
                    </p>
                    <p>
                    <span class="text-bold text-upercase">Prix Rendez-Vous </span> : {{ $medecin_show->prix }} f
                     </p>
                          <h4 class="text-bold"> Mon Parcour :</h4>
                     <p> {!! htmlspecialchars_decode($medecin_show->bibliographie) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
                    <a class="btn btn-warning btn-xs " href="{{ route('client.home') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                    <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin_show->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Call</i></a>
                    <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin_show->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                    <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin_show->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                    <!-- <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin_show->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i></a> -->
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>



@endsection

