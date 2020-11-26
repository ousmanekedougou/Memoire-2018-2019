@extends('layouts.app')
<style>
.invalid-feedback{
  color:red;
}
</style>
@section('main-content')

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ajouter un produit
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route ('service.index') }}"> <span class="btn btn-success" >Retoure</span></a></li>
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
          </div>
        </div>
        <div class="box-body">
          
      <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
        <div class=" box-primary">
            <!-- /.box-header -->
            <!-- form start -->
          <div class="box-body">
            <form role="form" action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
            @csrf

                  <div class="form-group">
                      <label for="exampleInputEmail1">Nom du service</label>
                      <input type="text" name="nom" value="{{ old('nom') }}" class="form-control form-control @error('nom') is-invalid @enderror" id="exampleInputEmail1" placeholder="">
                        @error('nom')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

              

                  <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <input type="file" name="image" value="{{ old('image') }}" class=" @error('image') is-invalid @enderror" id="exampleInputFile" placeholder="">
                  @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
            
              </div>
            <div class="box-body pad">
              
                <textarea name="detail" id="editor1" class="" value="{{ old('detail') }}" class="form-control textarea @error('detail') is-invalid @enderror" placeholder="La description de votre service"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @error('detail')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="reset" class="btn btn-info">Annuler</button>
              </div>


            </form>
               </div>
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