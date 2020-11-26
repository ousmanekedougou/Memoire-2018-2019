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
   
        <div class="row col-lg-offset-1 col-lg-10">
          <p class="login-box-msg text-bold">Ecrire l'objet de votre rendez-vous</p>
   
          <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body pad">
              <textarea id="editor1" name="objet"
              style="width: 50%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('bibliographie') }}" class="@error('bibliographie') is-invalid @enderror"></textarea>
              @error('objet')
              <span class="invalid-feedback" role="alert">
                <strong class="message_error">{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="row">
              <div class="col-md-7">
                <input type="hidden" value="{{ $medecin_demander->id }}" name="medecin">
              </div>
              <!-- /.col -->
              <div class="col-md-5">
                <a href="{{ route('client.home') }}" class="btn btn-warning btn-flat">Route</a>
                <button type="submit" class="btn btn-primary btn-flat">Demander</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
  <!-- /.form-box -->
<!-- /.register-box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection