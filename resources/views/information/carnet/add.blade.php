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
          <p class="login-box-msg">Carnet De Sante de {{ $add_carnet->user->prenom.' '. $add_carnet->user->nom }}</p>
          <div class="row col-lg-offset-2 col-lg-8">
          <form action="{{ route('carnet.update',$add_carnet->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="box-body pad">
                <textarea id="editor1" name="carnet"
                style="width: 100%; height:700px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('carnet') }}" class="@error('carnet') is-invalid @enderror"></textarea>
                @error('carnet')
                  <span class="invalid-feedback" role="alert">
                      <strong class="message_error">{{ $message }}</strong>
                  </span>
                @enderror
              </div>
          <a href="{{ route('medecin.home') }}"  class="btn btn-warning "> <i class="fa fa-back"></i> Retoure</a>
          <button type="submit" class="btn btn-primary  ">Remplire</button>
    </form>
    </div>
  <!-- /.form-box -->
<!-- /.register-box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection