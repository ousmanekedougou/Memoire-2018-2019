@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Tous vos clients en Attente
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box-body">  
        <div class="row">
               <!-- /.col -->
        <div class="col-md-12">
                <!-- The timeline -->
                <div class="row">
                  @foreach($client_rv_en_cour as $tomorrow)
                  <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($tomorrow->user->image != '')
                              <img class="attachment-img" src="{{ Storage::url($tomorrow->user->image) }}" alt="Attachment Image">
                              @else
                              <img src="{{ asset('user/images/default.gif')}}" class="attachment-img" alt="Attachman Image">
                              @endif
                              <div class="attachment-pushed">
                                <span class="username text-bold">{{ $tomorrow->user->prenom .' '. $tomorrow->user->nom }}
                                </span>
                                <div class="attachment-text" style="margin-top:">
                                  <span class="text-italic">
                                    Rendez-Vous Prechain : 
                                  </span>
                                  <p class="username text-bold text-warning" style="margin-bottom:-1px;"> Date :
                                  <span class="text-blod"><i class="fa  fa-calendar-times-o"></i> 
                                  {{ ($tomorrow->dateMedecin())->toFormattedDateString() }} </span> 
                                </p>

                                <p class="username text-bold text-warning" style="margin-bottom:-1px;"> Heure :
                                  <span class="text-blod"><i class="fa fa-times-circle-o"></i> 
                                  {{ $tomorrow->heure_medecin }} </span> 
                                </p>
                                </div>
                                <!-- /.attachment-text -->
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <!-- /.attachment-block -->

                            <!-- Social sharing buttons -->
                           
                            <!-- <span class="pull-right text-muted">45 likes - 2 comments</span> -->
                          </div>
                    
                        </div>
                        <!-- /.box -->
                
                    </div>
                      @endforeach
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
        </div>
      </div>
   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection