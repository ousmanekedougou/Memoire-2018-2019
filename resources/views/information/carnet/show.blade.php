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
                <img class="img-circle" src="{{ Storage::url($client_show->user->image) }}" alt="User Image">
                <span class="username">{{ $client_show->user->prenom }} {{ $client_show->user->nom }}</span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
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
                  <img style="width:100%" class="" src="{{ Storage::url($client_show->user->image) }}" alt="Attachment Image">

                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $client_show->user->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-phone"></i> Telephone : <strong>{{ $client_show->user->phone }}</strong></span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                     <p> {!! htmlspecialchars_decode($client_show->objet) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
            
                    <a class="btn btn-warning btn-xs " href="{{ route('medecin.home') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>



@endsection

