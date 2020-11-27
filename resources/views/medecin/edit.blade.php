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
   
        <div class="box-body" >

          <div class="row col-lg-offset-3 col-lg-6" >
            <div class="col-sm-4">
            @if($edit_client_rv->user->image != null)
                <img class="attachment-img img-thumbnail"  style="width:150px;height:150px;" src="{{ Storage::url($edit_client_rv->user->image) }}" alt="Attachment Image">
                @else 
                <img src="{{ asset('user/images/default.gif')}}" style="width:150px;height:150px;" class="attachment-img img-thumbnail" alt="Attachment Image">
                @endif
                <p> Un Patient</p>
            </div>
            <div class="col-sm-8">
              <p class="text-bold">Prenom et Nom : {{ $edit_client_rv->user->prenom.' '.$edit_client_rv->user->nom}}</p>
              <p class="text-bold">Departement: {{ $edit_client_rv->user->departement->name}} , region de ({{ $edit_client_rv->user->departement->region->name}}) </p>
            <h4 class="text-bold">L'objet du rendez-vous</h4>
            <p>
                {!! $edit_client_rv->objet !!}
            </p>
            </div>
          </div>
        
      
          <form action="{{ route('medecin-show.update',$edit_client_rv->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="row col-lg-offset-3 col-lg-6">
          
            <div class="form-group has-feedback">
            <h3 class="text-bold">Fixer le rendez-vous</h3>
              <input type="date" name="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror">
              <span class="glyphicon glyphicon-date form-control-feedback"></span>
              @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong class="message_error">{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group has-feedback">
              <input type="time" name="time" value="{{ old('time') }}" class="form-control @error('time') is-invalid @enderror">
              <span class=" form-control-feedback"></span>
              @error('time')
                <span class="invalid-feedback" role="alert">
                    <strong class="message_error">{{ $message }}</strong>
                </span>
              @enderror
            </div>
            </div>
            <div class="row col-lg-offset-3 col-lg-6">
              <div class="col-md-5">
              </div>
              <!-- /.col -->
              <div class="col-md-7 text-right">
                <a href="{{ route('medecin.asked') }}"  class="btn btn-warning "> <i class="fa fa-back"></i> Retoure</a>
                <button type="submit" class="btn btn-primary  ">Fixer</button>
              </div>
              <!-- /.col -->
          
          </form>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection

