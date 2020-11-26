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
          <p class="login-box-msg">Rapport de consultation de {{ $add_rapport->user->prenom.' '. $add_rapport->user->nom }}</p>
          <div class="row col-lg-offset-2 col-lg-8">
          <form action="{{ route('rapport.update',$add_rapport->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="box-body pad">
                <textarea id="editor1" name="rapport"
                style="width: 100%; height:700px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('rapport') }}" class="@error('rapport') is-invalid @enderror"></textarea>
                @error('rapport')
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