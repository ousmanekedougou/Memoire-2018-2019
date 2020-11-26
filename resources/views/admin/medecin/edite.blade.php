@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Info
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ route ('info.index') }}"><span class="btn btn-success">Retoure </span></a></li>
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
            <form role="form" action="{{ route('info.update',$info_view->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">email</label>
                  <input type="email" name="email" value="{{ $info_view->email }}" class="form-control form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="">
                  @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" name="phone" value="{{ $info_view->phone }}" class="form-control form-control @error('phone') is-invalid @enderror" id="exampleInputPassword1" placeholder="">
                  @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>  

                <div class="form-group">
                  <label for="exampleInputPassword1">Adresse</label>
                  <input type="text" name="adresse" value="{{ $info_view->adresse }}" class="form-control form-control @error('adresse') is-invalid @enderror" id="exampleInputPassword1" placeholder="">
                  @error('adresse')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>  


                <div class="form-group">
                  <label for="exampleInputPassword1">Boite Postal</label>
                  <input type="text" name="bp" value="{{ $info_view->bp }}" class="form-control form-control @error('bp') is-invalid @enderror" id="exampleInputPassword1" placeholder="">
                  @error('bp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>  

                <div class="form-group">
                  <label for="exampleInputPassword1">Fax</label>
                  <input type="text" name="fax" value="{{ $info_view->fax }}" class="form-control form-control @error('fax') is-invalid @enderror" id="exampleInputPassword1" placeholder="">
                  @error('fax')
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