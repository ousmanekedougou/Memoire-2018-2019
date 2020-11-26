@extends('layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
    <!-- /.col -->
              @foreach($medecin_region as $namedep => $departement)
                <h2 class="btn btn-primary btn-xs"> Departement de : {{ $namedep }}</h2>
                  <div class="row">
                      <br>
                    @foreach($departement as $medecin)
                        <div class="col-lg-4 ">
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
                                              {{ $medecin->proffession }} ,  {{$medecin->specialite}}
                                            </span> 
                                            </p>
                                            <!-- <p class=" username text-blod"><span class="text-blod"><i class="fa fa-phone"></i> {{$medecin->phone }} </span> </p> -->

                                            <div class="attachment-text" style="margin-top:-2px;">
                                            <span class="text-italic">
                                                <span class="text-bold">Disponible</span>
                                                @foreach($medecin->disponibilites as $dispo)
                                                    {{ $dispo->jour }},
                                                @endforeach
                                                
                                            </span>
                                            </div>

                                            <div class="attachment-text" style="margin-top:-2px;">
                                            <span class="text-italic">
                                                <span class="text-bold">Hopital : {{ $medecin->hopital->name }}</span>
                                                
                                            </span>
                                            </div>
                                        <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-text -->
                                    </div>
                                    <!-- /.attachment-pushed -->
                                    <!-- Social sharing buttons -->
                                    <div class="pull-right">
                                        <a class="btn btn-warning btn-xs " href="{{ route('medecin.medecin_region_view',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <hr>
                  <!-- /.tab-pane -->
                  </div>
                  @endforeach
        </section>
        <!-- /.content -->
    </div>



@endsection

