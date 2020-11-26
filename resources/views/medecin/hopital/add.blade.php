@extends('layouts.app')

@section('main-content')
@section('headsection')
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
<style>
  .message_error{
    color:red;
  }
</style>
@endsection
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
   
<div class="box-body">
  <div class="register-box-body col-lg-6 col-lg-offset-3">
    <p class="login-box-msg">Enregistre Un Nouveau Hopital</p>
   
      <form action="{{ route('medecin.add_hopital') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        
        <div class="col-lg-12">

      <div class="form-group has-feedback">
      <label for="nom">Nom de l'hopital</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nom de l'hopital">
        <span class="fa fa-hospital-o form-control-feedback"></span>
        @error('name')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>


      <div class="form-group has-feedback">
      <label for="departement">Le departement de l'hopittal</label>
        <select name="departement" value="{{ old('departement') }}" class="form-control @error('departement') is-invalid @enderror" placeholder="">
            <!-- <option >Votre Departement</option> -->
          @foreach(departementFor(Auth::guard('medecin')->user()) as $departement)
            <option value="{{ $departement->id }}">{{ $departement->name }}</option>
          @endforeach
        </select>
        <span class="glyphicon glyphicon form-control-feedback"></span>
        @error('departement')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
    
     
  </div>

  </div>

      <div class="row">
        <div class="col-xs-8">
        
        </div>
        <!-- /.col -->
        <div class="col-xs-4 text-left">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Enregistre</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  <!-- /.form-box -->

<!-- /.register-box -->
     
      
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('footersection')
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
$(document).ready(function(){
  $('.select2').select2();
});
</script>
@endsection