@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
                
        
        
        <!-- les inputs -->

             <!-- general form elements -->
             <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Permissions</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('permission.store')}}" method="post">
            {{csrf_field()}}
              <div class="box-body">

              <div class="col-lg-6  col-lg-offset-3">
                
                  <div class="form-group">
                      <label for="nom">Nom de la Permission</label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="for">Permission For</label>
                      <select name="for" id="for" class="form-control" >
                          <option selected disable > Permission Appartenance </option>
                          <option value="article">Article</option>
                          <option value="medecin">Medecin</option>
                          <option value="autre">Autre</option>
                      </select>
                    </div>

                    <!-- /.box-body -->
      
                    <div class=" form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a  href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>

              


            </form>
          </div>
          <!-- /.box -->


        <!-- fin des inputs -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection