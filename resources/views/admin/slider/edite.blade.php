@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Modifier votre slider
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route ('slider.index') }}"><span class="btn btn-success"> Retoure </span></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header ">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
      <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
        <div class=" box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('slider.update',$edit_slide->id) }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                  @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Role</label>
                  <select name="role"  value="{{ old('role') }}" class="form-control @error('role') is-invalid @enderror" id="">
                      <option value="slider">Slider</option>
                      <option value="login">Se Connecter</option>
                      <option value="inscription">S'inscrire</option>
                      <option value="contact">Contact</option>
                    </select>
                      @error('role')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                </div>  
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="reset" class="btn btn-info">Annuler</button>
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