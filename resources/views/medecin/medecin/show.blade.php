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
                <img class="img-circle" src="{{ Storage::url($medecin_region_view->image) }}" alt="User Image">
                <span class="username">{{ $medecin_region_view->prenom }} {{ $medecin_region_view->nom }}</span>
                <span class="description">Membre Depuis {{ $medecin_region_view->created_at->toFormattedDateString() }}</span>
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
                    @if($medecin_region_view->image != Null)
                      <img style="width:100%" class="" src="{{ Storage::url($medecin_region_view->image) }}" alt="Attachment Image">
                    @else
                    <img style="width:100%" src="{{ asset('user/images/default.gif')}}" class="" alt="Attachment Image">
                    @endif
                      <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $medecin_region_view->email }}</span>
                      </h5>

                      <h6 class="" >
                        <span><i class="fa fa-phone"></i> Telephone : <strong>{{ $medecin_region_view->phone }}</strong></span>
                      </h6>
                  </div>
                  
                  <div class="col-md-9">
                    <p>
                      <span class="text-bold text-upercase">Departemant</span> : de
                      <span class="text-italic text-capitalize">
                         {{ $medecin_region_view->departement->name }}  ({{$medecin_region_view->departement->region->name}})
                      </span>
                    </p>


                    <p>
                      <span class="text-bold text-upercase">Proffession</span> :
                      <span class="text-italic text-capitalize">
                         {{ $medecin_region_view->proffession }}
                      </span>
                    </p>

                    <p>
                      <span class="text-bold text-upercase">Specialite</span> :
                      <span class="text-italic text-capitalize">
                         {{ $medecin_region_view->specialite }}
                      </span>
                    </p>

                    <p>
                      <span class="text-bold text-upercase">Hopital</span> :
                      <span class="text-italic text-capitalize">
                        {{ $medecin_region_view->hopital->name }}
                      </span>
                    </p>

                    <p>
                      <span class="text-bold text-upercase">Disponible le </span> :
                      <span class="text-italic text-capitalize">
                        @foreach($medecin_region_view->disponibilites as $dispo)
                            {{ $dispo->jour }},
                        @endforeach
                      </span>
                    </p>

                     <p> {!! htmlspecialchars_decode($medecin_region_view->bibliographie) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
     
                    <a class="btn btn-warning btn-xs " href="{{ route('medecin.info_medecin') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>



@endsection

