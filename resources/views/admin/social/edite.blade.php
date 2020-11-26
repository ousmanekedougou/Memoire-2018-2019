@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Reseaux
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
            <form role="form" action="{{ route('social.update',$reseau_view->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom du reseau</label>
                  <input type="text" value="{{ $reseau_view->nom }}" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Lien du reseau</label>
                  <input type="text" value="{{ $reseau_view->lien }}" name="lien" class="form-control" id="exampleInputPassword1" placeholder="Password">
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