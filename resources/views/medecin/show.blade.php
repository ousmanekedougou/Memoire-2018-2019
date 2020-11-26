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
                @if($client_show->user->image != Null)
                  <img class="img-circle" src="{{ Storage::url($client_show->user->image) }}" alt="User Image">
                @else
                  <img  src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                @endif
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
                  @if($client_show->user->image != Null)
                    <img style="width:100%;heigth:auto;" class="" src="{{ Storage::url($client_show->user->image) }}" alt="Attachment Image">
                  @else
                    <img style="width:100%;heigth:auto;" src="{{ asset('user/images/default.gif')}}" class="" alt="User Image">
                  @endif
                  <h5 class="" >
                        <span><i class="fa fa-envelope"></i> {{ $client_show->user->email }}</span>
                      </h5>

                      <h5 class="" >
                        <span><i class="fa fa-phone"></i> Telephone :{{ $client_show->user->phone }}</span>
                      </h5>
                  </div>
                  
                  <div class="col-md-9">
                     <p> {!! htmlspecialchars_decode($client_show->objet) !!}</p>
                  </div>
                </div>
              </div>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
                    <a class="btn btn-warning btn-xs " href="{{ route('medecin.asked') }}" style="margin-right:20px;">Retoure <i class="fa fa-share"></i></a>
                    <a class="btn btn-info btn-xs " href="{{ route('medecin-show.edit',$client_show->id) }}" style="margin-right:20px;">Fixer le rendez-vous <i class="fa fa-send"></i></a>
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>



@endsection

