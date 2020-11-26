@extends('layouts.app')

@section('main-content')
@section('headsection')
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

      
  <div class="register-box-body col-lg-offset-2 col-lg-8">
    <p class="login-box-msg">Enregistre Un Nouveau Admin</p>
   
      <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row col-lg-offset-2 col-lg-9">
      <div class="form-group has-feedback">
        <input type="text" name="nom" value="{{ old('nom') }}" class="form-control @error('nom') is-invalid @enderror" placeholder="Prenom & Nom">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @error('nom')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="number" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        @error('phone')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
   

      <div class="form-group has-feedback">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <label for="specialite">Choisir Une Image</label>
        <input type="file" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror" placeholder="">
        <span class="glyphicon glyphicon-image form-control-feedback"></span>
        @error('image')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
  </div>
      <div class="row">
      <!-- <div class="form-group col-lg-offset-1 col-lg-10">
          <label>Assign Roles</label>
          <div class="row">
          @foreach($roles as $role)
            <div class="checkbox">
            <div class="col-lg-3">
            <label for="role"> <input type="checkbox" name="role[]" value="{{ $role->id }}" id=""> {{ $role->nom }} </label>
            </div>
            </div>
            @endforeach
          </div> -->
        </div>
        <div class="col-xs-8">
       
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
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


