@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Historique de tout vos Rende-vous
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
                  @foreach($asked as $ask)
                  <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              @if($ask->medecin->image != '')
                              <img class="attachment-img" src="{{ Storage::url($ask->medecin->image) }}" alt="Attachment Image">
                              @else
                              <img src="{{ asset('user/images/default.gif')}}" class="img-circle attachment-img" alt="User Image">
                              @endif
                              <div class="attachment-pushed">
                                <div class="attachment-text" style="margin-top:">
                                  <span class="username text-bold">{{ $ask->medecin->prenom .' '. $ask->medecin->nom }} </span> 
                                  <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <!-- <span class="text-blod"><i class="fa  fa-envelope"> {{ $ask->medecin->email }}</i>  -->
                                  </span> 
                                </p>

                                <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <span class="text-blod"><i class="fa fa-envelope"> {{ $ask->medecin->email }} </i> </span> 
                                  <span class="text-blod"><i class="fa fa-mobile"> {{ $ask->medecin->phone }} </i> 
                                 </span> 
                                </p>

                                <p><span class="text-blod"><i class="fa fa-date">Demander le  {{ $ask->created_at->toFormattedDateString() }} </i> </p>

                                

                                <p class="text-bold text-primary">
                                  Proffession : {{ $ask->medecin->proffession }}
                                </p>
                                </div>
                                <!-- /.attachment-text -->
                              
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <div class="text-center">
                            <form id="delete-form-{{$ask->id}}" action="{{ route('client.destroy',$ask->id) }}" method="post" style="display:none;">
                              @csrf
                              {{ method_field('DELETE') }}
                            </form>
                                  <a class="btn btn-warning btn-xs " href="{{ route('client.view_asked',$ask->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-eye"> Voire</i></a>
                                  <a class="btn btn-danger btn-xs "   onClick=" if(confirm('Etes vous sure de Supprimer ce rendez-vous')){ event.preventDefault();document.getElementById('delete-form-{{$ask->id}}').submit();}else{event.preventDefault();}" href="{{ route('client.update',$ask->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-trash"> Supprimer </i></a>
                                </div>
                          </div>
                    
                        </div>
                        <!-- /.box -->
                
                    </div>
                      @endforeach
              </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper --> 
@endsection