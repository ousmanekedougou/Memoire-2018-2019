@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Tous vos clients
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">  
      <div class="post">
                <div class="row">
                  <div class="col-md-4 ">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                          <div class="box-body">

                            <!-- Attachment -->
                            <div class="attachment-block clearfix">
                              <img class="attachment-img" src="" alt="Attachment Image">

                              <div class="attachment-pushed">
                              @if($loop->index +1 == 1)
                              {{ $loop->index +1 }}er
                              @else
                              {{ $loop->index +1 }}em
                              @endif
                              
                               Rendez-Vous 
                                <div class="attachment-text" style="margin-top:">
                                  <span class="username text-bold"> </span> 
                                  <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <!-- <span class="text-blod"><i class="fa  fa-envelope"> {{ $today->user->email }}</i>  -->
                                  </span> 
                                </p>

                                <p class="username text-bold text-warning" style="margin-bottom:-1px;">
                                  <span class="text-blod"><i class="fa fa-mobile"> </i> 
                                 </span> 
                                </p>
                                <p class="username text-bold text-warning" style="">
                                  <span class="text-blod"><i class="fa fa-times-circle-o"></i> Heure : 
                                   </span> 
                                </p>
                                
                                <p class="text-bold text-primary">Bonne Reception !!!</p>
                                </div>
                                <!-- /.attachment-text -->
                               
                              </div>
                              <!-- /.attachment-pushed -->
                            </div>
                            <div class="text-center">
                                  <a class="btn btn-primary btn-xs " href="" style="margin-right:10px;" alt="Valider"><i class=" fa fa-th"> Carnet </i></a>

                                  <a class="btn btn-info btn-xs " href="" style="margin-right:10px;" alt="Transferer"><i class=" fa  fa-stethoscope"> Rapport</i></a>

                                  <a class="btn btn-warning btn-xs " href="" style="margin-right:10px;" alt="Voire"><i class=" fa fa-medkit"> Ordona..</i></a>
                                  <a class="btn btn-success btn-xs " href="" style="margin-right:10px;" alt="Voire"><i class=" fa fa-thumbs-up"></i></a>
                                </div>
                          </div>
                    
                        </div>
                        <!-- /.box -->
                
                    </div>
                    </div>
                </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection