@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Tous vos Rendez-Vous en Attente
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
            @foreach($weiting as $tomorrow)
                @if($tomorrow->count() > 0)
                <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($tomorrow->medecin->image != '')
                              <img class="attachment-img" src="{{ Storage::url($tomorrow->medecin->image) }}" alt="Attachment Image">
                              @else
                              <img src="{{ asset('user/images/default.gif')}}" class="attachment-img" alt="Attachman Image">
                              @endif
                              <div class="attachment-pushed">
                                <span class="username text-bold">{{ $tomorrow->medecin->prenom .' '. $tomorrow->medecin->nom }}
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
                            <form id="delete-form-{{$tomorrow->id}}" action="{{ route('client.destroy',$tomorrow->id) }}" method="post" style="display:none;">
                              @csrf
                              {{ method_field('DELETE') }}
                            </form>
                            <p class="text-center"><a class="btn btn-danger btn-xs " onClick=" if(confirm('Etes vous sure de d\'annuller ce rende-vous')){ event.preventDefault();document.getElementById('delete-form-{{$tomorrow->id}}').submit();}else{event.preventDefault();}" href="{{ route('client.update',$tomorrow->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-trash"> Annuller </i></a>
                            <a class="btn btn-warning btn-xs " href="{{ route('client.view_weiting')}}" style="margin-right:10px;" alt=""><i class=" fa fa-eye"> Voire </i></a>
                            </p>
                          </div>
                    
                        </div>
                        <!-- /.box -->
                @else 
                  <h1>Vous N'avez Pas de Rendez-Vous En Attente</h1>
                @endif
                
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