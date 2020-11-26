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
  <div class="register-box-body col-lg-6 col-lg-offset-3">
    <p class="login-box-msg">Enregistre Un Nouveau Medecin</p>
   
      <form action="{{ route('medecin.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        
        <div class="col-lg-6">

      <div class="form-group has-feedback">
        <input type="text" name="prenom" value="{{ old('prenom') }}" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prenom & Nom">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @error('prenom')
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
        <input type="text" name="specialite" value="{{ old('specialite') }}" class="form-control @error('specialite') is-invalid @enderror" placeholder="Votre Specialite">
        <span class="glyphicon glyphicon form-control-feedback"></span>
        @error('specialite')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>


      <div class="form-group has-feedback">
        <input type="number" name="prix" value="{{ old('prix') }}" class="form-control @error('prix') is-invalid @enderror" placeholder="Prix du rendez-vous">
        <span class="glyphicon glyphicon-prix form-control-feedback"></span>
        @error('prix')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
    
     
  </div>
<div class="col-md-6">
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
        <input type="text" name="proffession" value="{{ old('proffession') }}" class="form-control @error('proffession') is-invalid @enderror" placeholder="Votre Proffession">
        <span class="glyphicon glyphicon form-control-feedback"></span>
        @error('proffession')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>



      <div class="form-group has-feedback">
        <select name="departement" value="{{ old('departement') }}" class="form-control @error('departement') is-invalid @enderror" placeholder="Votre Hopital">
            <!-- <option >Votre Departement</option> -->
          @foreach(all_departement() as $departement)
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

      <div class="form-group has-feedback">
        <select name="hopital" value="{{ old('hopital') }}" class="form-control @error('hopital') is-invalid @enderror" placeholder="Votre Hopital">
            <!-- <option >Votre Hopitale</option> -->
            @foreach(all_hopital() as $hopital)
            <option value="{{ $hopital->id }}">{{ $hopital->name }}</option>
          @endforeach
        </select>
        <span class="glyphicon glyphicon form-control-feedback"></span>
        @error('hopital')
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