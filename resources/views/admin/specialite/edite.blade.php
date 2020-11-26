@extends('layouts.app')

@section('main-content')

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modifier Votre Hopital
      </h1>
      <ol class="breadcrumb">
      <!-- <li><a href="{{ route ('departement.index') }}"><span class="btn btn-success"> Retore </span></a></li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="">
        <div class="box-body">
          
      <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
        <div class=" box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('specialite.update',$edit_specialite->id) }}" method="post">
            @csrf
          {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Le nom de l'hopital</label>
                  <input type="text" name="nom" value="{{ $edit_specialite->name }}" class="form-control form-control @error('nom') is-invalid @enderror" id="exampleInputEmail1" placeholder="">
                  @error('nom')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Departement</label>
                  <select name="departement" value="{{ old('departement') }}" class="form-control form-control @error('departement') is-invalid @enderror" id="">
                 @foreach($departement as $dep)
                  <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                  @endforeach
                  </select>
                  @error('departement')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>  
                <div class="checkbox">
                  <label>
                    <!-- <input type="checkbox"> Check me out -->
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{ route('departement.index') }}" class="btn btn-warning">Retoure</a>
              </div>
            </form>
          </div>

        </div>
        </div>
      </div>
      
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection