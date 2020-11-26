@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Tous vos clients du jour
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
                  @foreach($client_rv_today as $today)
                  <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($today->user->image != Null)
                              <img class="attachment-img" src="{{ Storage::url($today->user->image) }}" alt="Attachment Image">
                              @else
                              <img src="{{ asset('user/images/default.gif')}}" class="attachment-img" alt="User Image">
                              @endif
                              <div class="attachment-pushed">
                              @if($loop->index +1 == 1)
                              {{ $loop->index +1 }}er
                              @else
                              {{ $loop->index +1 }}em
                              @endif
                              
                               Rendez-Vous 
                                <div class="attachment-text" style="margin-top:">
                                  <span class="username text-bold">{{ $today->user->prenom .' '. $today->user->nom }} </span> 
                                  <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <!-- <span class="text-blod"><i class="fa  fa-envelope"> {{ $today->user->email }}</i>  -->
                                  </span> 
                                </p>

                                <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <span class="text-blod"><i class="fa fa-envelope"> {{ $today->user->email }} </i> 
                                 </span> 
                                </p>
                                <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <span class="text-blod"><i class="fa fa-mobile"> {{ $today->user->phone }} </i> 
                                 </span> 
                                </p>
                                <p class="username text-bold text-warning" style="">
                                  <span class="text-blod"><i class="fa fa-times-circle-o"></i> Heure : 
                                  {{ $today->heure_medecin }} </span> 
                                </p>
                                
                                <p class="text-bold text-primary">Bonne Reception !!!</p>
                                </div>
                                <!-- /.attachment-text -->
                               
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <div class="text-left">
                                @if($today->prix  == $today->medecin->prix)
                                  <a class="btn btn-primary btn-xs " href="{{ route('carnet.edit',$today->id) }}" style="margin-right:10px;" alt="Valider"><i class=" fa fa-file-text"> Carnet</i></a>
                                  <a class="btn btn-success btn-xs " href="{{ route('ordonance.edit',$today->id) }}" style="margin-right:10px;" alt="Valider"><i class=" fa fa-file-text"> Oordon</i></a>
                                  <a class="btn btn-success btn-xs " href="{{ route('rapport.edit',$today->id) }}" style="margin-right:10px;" alt="Valider"><i class=" fa fa-file-text"> Rapport</i></a>
                                  <a class="btn btn-info btn-xs " href="{{ route('medecin.prochain',$today->id) }}" style="margin-right:10px;" alt="Valider"><i class=" fa fa-send"></i></a>

                                @else 
                                <!-- <a class="btn btn-warning btn-xs " href="{{ route('medecin.valider_ticker',$today->id) }}" style="margin-right:10px;" alt="Valider"><i class=" fa fa-money"></i> Payer le Ticker</a> -->
                                <form id="delete-form-{{$today->id}}" action="{{ route('medecin.valider_ticker',$today->id) }}" method="post" style="display:none;">
                                  @csrf
                                  {{ method_field('PUT') }}
                                </form>
                                <a class="btn btn-warning btn-xs "  onClick=" if(confirm('Etes vous sure de valider ce ticker')){ event.preventDefault();document.getElementById('delete-form-{{$today->id}}').submit();}else{event.preventDefault();}" href="{{ route('medecin.update',$today->id) }}" class="btn btn-primary btn-xs"> <i class="fa fa-money"></i> Payer le Ticker</a>
                                @endif
                                @if($today->rapport != Null && $today->ordonance != Null && $today->carnet != Null)
                                  <a class="btn btn-warning btn-xs " href="{{ route('medecin.valider',$today->id) }}" style="margin-right:10px;" alt="Valider"><i class=" fa  fa-check-square-o"></i></a>
                                @endif 
                                </div>
                          </div>
                    
                        </div>
                        <!-- /.box -->
                
                    </div>
                      @endforeach
                    </div>
              </div>
            <!-- /.col -->
          </div>
      </div>
   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection


