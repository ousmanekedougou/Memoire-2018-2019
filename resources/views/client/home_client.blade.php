@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tous Vos medecins
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
          <!-- Le nouveau row -->
         <div class="row">
                 <!-- /.col -->
        <div class="">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Dakar</a></li>
              <li class="" ><a href="#kaolack" data-toggle="tab">Kaolack</a></li>
              <li class=""><a href="#kedougou" data-toggle="tab">Kedougou</a></li>
              <li><a href="#tamba" data-toggle="tab">Tambacounda</a></li>
              <li><a href="#diourbel" data-toggle="tab">Diourbel</a></li>
              <li><a href="#louga" data-toggle="tab">Louga</a></li>
              <li><a href="#Saint-louis" data-toggle="tab">Saint-Louis</a></li>
              <li><a href="#matame" data-toggle="tab">Matam</a></li>
              <li><a href="#sediou" data-toggle="tab">Sédhiou</a></li>
              <li><a href="#kolda" data-toggle="tab">Kolda</a></li>
              <li><a href="#ziguinchore" data-toggle="tab">Ziguinchor</a></li>
              <li><a href="#fatick" data-toggle="tab">Fatick</a></li>
              <li><a href="#thies" data-toggle="tab">Thiès</a></li>
              <li><a href="#kaffrine" data-toggle="tab">Kafrine</a></li>
            </ul>

            <div class="tab-content">
               <!-- LES MEDECINS DE LA REGION DE DAKAR 3-->
               <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                @foreach($dakar as $namedep => $departement)
                <h2 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h2>
                  <div class="row">
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
                              <div class="pull-right">
                                <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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


            <!-- LES MEDECINS DE LA REGION DE KAOLACK 1-->
              <div class="tab-pane" id="kaolack">
                <!-- Post -->
                <div class="post">
                @foreach($kaolack as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE KAOLACK 1-->



              <!-- LES MEDECINS DE LA REGION DE KEDOUGO 2-->
              <div class="tab-pane" id="kedougou">
                <!-- Post -->
                <div class="post">
                @foreach($kedougou as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE KEDOUGOU 2-->






              <!-- LES MEDECINS DE LA REGION DE TAMBA 4-->
              <div class="tab-pane" id="tamba">
                <!-- Post -->
                <div class="post">
                @foreach($tamba as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE TAMBA 4-->


               <!-- LES MEDECINS DE LA REGION DE LOUGA 5-->
               <div class="tab-pane" id="louga">
                <!-- Post -->
                <div class="post">
                @foreach($louga as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE LOUGA 5-->



               <!-- LES MEDECINS DE LA REGION DE DIOURBEL 6-->
               <div class="tab-pane" id="diourbel">
                <!-- Post -->
                <div class="post">
                @foreach($diourbel as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE DIOURBEL 6-->




               <!-- LES MEDECINS DE LA REGION DE MATAME 7-->
               <div class="tab-pane" id="matame">
                <!-- Post -->
                <div class="post">
                @foreach($matame as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE MATAME 7-->




               <!-- LES MEDECINS DE LA REGION DE ZIGUINCHORE 8-->
               <div class="tab-pane" id="ziguinchore">
                <!-- Post -->
                <div class="post">
                @foreach($ziguinchore as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE ZIGUINCHORE 8-->



               <!-- LES MEDECINS DE LA REGION DE FATICK 9-->
               <div class="tab-pane" id="fatick">
                <!-- Post -->
                <div class="post">
                @foreach($fatick as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE FATICK 9-->




               <!-- LES MEDECINS DE LA REGION DE KAFFRINE 10-->
               <div class="tab-pane" id="kaffrine">
                <!-- Post -->
                <div class="post">
                @foreach($kaffrine as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE KAFFRINE 10-->



               <!-- LES MEDECINS DE LA REGION DE KOLDA 11-->
               <div class="tab-pane" id="kolda">
                <!-- Post -->
                <div class="post">
                @foreach($kolda as $namedep => $departement)
                <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE KOLDA 11-->



               <!-- LES MEDECINS DE LA REGION DE SEDIUO 12-->
               <div class="tab-pane" id="sediou">
                <!-- Post -->
                <div class="post">
                  @foreach($sediou as $namedep => $departement)
                  <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE SEDIOU 12-->



               <!-- LES MEDECINS DE LA REGION DE ST LOIUS 13-->
              <div class="tab-pane" id="stlouis">
                <!-- Post -->
                <div class="post">
                  @foreach($saintlouis as $namedep => $departement)
                  <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE ST LOUIS 13-->




               <!-- LES MEDECINS DE LA REGION DE THIES 14-->
               <div class="tab-pane" id="thies">
                <!-- Post -->
                <div class="post">
                  @foreach($thies as $namedep => $departement)
                  <h3 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h3>
                  <div class="row">
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
                              <div class="pull-right">
                              <!-- <a class="btn btn-info btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-mobile"> Tel</i></a> -->
                                <!-- <a class="btn btn-success btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-tv"> TV</i></a> -->
                                <a class="btn btn-primary btn-xs" href="{{ route('client.edit',$medecin->id) }}" style="margin-right:20px;"><i class="fa fa-send"></i> Demander</a>
                                <a class="btn btn-warning btn-xs " href="{{ route('client.show',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
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
              <!-- FIN DE LA RECUPERATIPON DES MEDECIN DE LA REGION DE THIES 14-->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
         </div>
          <!-- fin du noveau row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection