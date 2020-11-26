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
   
      <form action="{{ route('medecin.medecin_chef_update',$medecin_chef_edit->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}

      <div class="form-group has-feedback">
        <label for="departement">Departement</label>
        <select name="departement" value="{{ old('departement') }}" class="form-control @error('departement') is-invalid @enderror" placeholder="Votre Hopital">
            <!-- <option >Votre Departement</option> -->
          @foreach($regions as $region)
          <span class="text-success">{{$region->name}}</span>
            @foreach($region->departements as $region_departement)
            <option value="{{ $region_departement->id }}">{{ $region_departement->name }}</option>
            @endforeach
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
        <label for="hopital">Hopital</label>
        <select name="hopital" value="{{ old('hopital') }}" class="form-control @error('hopital') is-invalid @enderror" placeholder="Votre Hopital">
            <!-- <option >Votre Hopitale</option> -->
            @foreach($hopitals as $hopital)
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

      <div class="row">
        <div class="col-xs-7">
          <div class="form-group">
            <label for="checkbox">
            <input type="checkbox" value="1" name="status" id=""
              @if($medecin_chef_edit->status == 1)
              checked
              @endif
            >
            Status
            </label>
          
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Modifier</button>
        </div>
        <!-- /.col -->
      </div>
    </div>
  </div>

     
    </form>

   
  <!-- /.form-box -->

<!-- /.register-box -->
     
      
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection