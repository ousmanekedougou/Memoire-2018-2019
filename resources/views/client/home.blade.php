@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Les Medecins de votre region
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
     

            <div class="tab-content">
               <!-- LES MEDECINS DE LA REGION DE DAKAR 3-->
               <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                @foreach($dep_medecin as $namedep => $departement)
                <h2 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h2>
                  <div class="row">
                <br>

                    @foreach($departement as $medecin)
                          <div class="col-md-4 ">
                          <!-- Box Comment -->
                          <div class="box box-widget">
                            <div class="box-body">
                              <!-- Attachment -->
                              <div class="attachment-block clearfix">
                              @if($medecin->image != null)
                                <img class="attachment-img" src="{{ Storage::url($medecin->image) }}" alt="Attachment Image">
                                @else 
                                <img src="{{ asset('user/images/default.gif')}}" class="attachment-img" alt="Attachment Image">
                                @endif
                                <div class="attachment-pushed">
                                    <span class="username text-bold">{{ $medecin->prenom}}</span>
                                    <p class="username text-bold" style="margin-bottom:-1px;"> 
                                      <span class="text-blod text-info" style="font-size:13px;">
                                        {{$medecin->proffession}} , {{ $medecin->specialite }}
                                      </span> 
                                    </p>
                                    <!-- <p class=" username text-blod"><span class="text-blod"><i class="fa fa-phone"></i> {{$medecin->phone }} </span> </p> -->

                                    <div class="attachment-text" style="margin-top:-2px;">
                                    <span class="text-bold">Disponible le : </span>
                                    <span class="text-italic">
                                      @foreach($medecin->disponibilites as $dispo)
                                        {{ $dispo->jour }},
                                      @endforeach
                                    </span>
                                  </div>

                                  <div class="attachment-text" style="margin-top:-2px;">
                                    <span class="text-bold">Hopital  </span>
                                    <span class="text-italic">
                                  {{ $medecin->hopital->name }}
                                    </span>
                                  </div>
                                 
                                  <!-- /.attachment-text -->
                                </div>
                                <!-- /.attachment-text -->
                              </div>
                              <!-- /.attachment-pushed -->
                              <!-- Social sharing buttons -->
                              <div class="text-center">
                                <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a>
                                <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style=""><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style=""><i class=" fa fa-eye"></i> Voire</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                    @endforeach
                  <!-- /.tab-pane -->
                  </div>
                    @endforeach
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE DAKAR 3-->


          

            </div>
          <!-- fin du noveau row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection