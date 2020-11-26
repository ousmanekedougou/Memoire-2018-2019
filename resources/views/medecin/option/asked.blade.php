@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Tous vos clients en demande
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box-body">  
        <div class="row">
               <!-- /.col -->
        <div class="col-md-12">
              <div class="row">
                  @foreach($client_rv_demande as $client_demander)
                  <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($client_demander->user->image != '')
                              <img class="attachment-img" src="{{ Storage::url($client_demander->user->image) }}" alt="Attachment Image">
                              @else
                              <img src="{{ asset('user/images/default.gif')}}" class="attachment-img" alt="Attachment Image">
                              @endif
                              <div class="attachment-pushed">
                                <span class="username text-bold">{{ $client_demander->user->prenom .' '. $client_demander->user->nom }}
                                </span>
                                <p class="username  " style="margin-bottom:-1px;"> Habite a 
                                  <span class=""><i class="fa  fa-location"></i> {{$client_demander->user->departement->name }}</span> 
                                </p>
                                <p class="username text-bold text-warning" style="margin-bottom:-1px;"> <i class="fa  fa-calendar-times-o"></i> Depuis le :
                                  <span class="text-blod"> {{$client_demander->user->created_at->toFormattedDateString() }} </span> 
                                </p>

                                <div class="attachment-text">
                                  <span class="text-italic">
                                    {!! $client_demander->objet !!} 
                                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing .... -->
                                  </span>
                                </div>
                                <!-- /.attachment-text -->
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <!-- /.attachment-block -->

                            <!-- Social sharing buttons -->
                           <div class="text-center">

                           <!-- <a class="btn btn-info btn-xs " href="{{ route('medecin-show.edit',$client_demander->id) }}" style="margin-right:20px;" alt="Valider"><i class=" fa  fa-calendar-times-o"></i></a> -->

                            <a class="btn btn-info btn-xs " href="{{ route('medecin-show.edit',$client_demander->id) }}" style="margin-right:20px;" alt="Transferer"><i class=" fa fa-send"></i></a>

                            <a class="btn btn-warning btn-xs " href="{{ route('medecin-show.show',$client_demander->id) }}" style="margin-right:20px;" alt="Voire"><i class=" fa fa-eye"></i></a>

                            <!-- <a class="btn btn-danger btn-xs " href="{{ route('medecin.show',$client_demander->id) }}" style="margin-right:20px;" alt="Supprimer"><i class=" fa fa-trash"></i></a>
                           </div> -->
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

