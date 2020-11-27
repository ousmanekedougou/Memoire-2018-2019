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
    <section class="content" >
      <!-- Default box -->
   
        <div class="row col-lg-offset-1 col-lg-10" style="border:1px solid silver; padding:15px;">
        <div class="row">
          <div class="col-sm-5">
        <br>
          @if($medecin_demander->image != null)
          <img class="attachment-img img-thumbnail"  style="width:150px;height:150px;" src="{{ Storage::url($medecin_demander->image) }}" alt="Attachment Image">
          @else 
          <img src="{{ asset('user/images/default.gif')}}" style="width:150px;height:150px;" class="attachment-img img-thumbnail" alt="Attachment Image">
          @endif
          <p style="font-size:20px;"> <span class="text-bold">Prenom et Nom :</span> <span class="text-bold">{{ $medecin_demander->prenom . ' ' . $medecin_demander->nom}}</span></p>
          <p style="font-size:20px;"><span class="text-bold">Proffession :</span> <span class="text-bold">{{ $medecin_demander->proffession}}</span></p>
          <p style="font-size:20px;"><span class="text-bold">Specialite :</span> <span class="text-bold">{{ $medecin_demander->specialite}}</span></p>
          <p style="font-size:20px;" class="text-bold">Departement: {{ $medecin_demander->departement->name}} , region de ({{ $medecin_demander->departement->region->name }})</p>
          <p style="font-size:20px;" class="text-bold">Hopital : {{ $medecin_demander->hopital->name }} </p>
          <p style="font-size:15px;" class="text-bold">Disponibilite: @foreach($medecin_demander->disponibilites as $med_dispo) 
            {{ $med_dispo->jour }},
            @endforeach
          </p>
          </div>
          <div class="col-sm-7">
            <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body pad">
              <h4 class="text-bold">Objet de votre demande de rendez-vous !</h4>
                <textarea id="editor1" name="objet"
                style="width: 50%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('bibliographie') }}" class="@error('bibliographie') is-invalid @enderror">
                
                </textarea>
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
        </div>
          

        </div>
  <!-- /.form-box -->
<!-- /.register-box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection

