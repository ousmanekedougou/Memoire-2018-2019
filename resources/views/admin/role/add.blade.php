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
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('role.store')}}" method="post">
            {{csrf_field()}}
              <div class="box-body">

              <div class="col-lg-6  col-lg-offset-3">
                
                  <div class="form-group">
                      <label for="nom">Nom Du Role</label>
                      <input type="text" class="form-control" id="name" name="nom" placeholder="">
                    </div>
                  
                    <div class="row">

                    <div class="col-lg-4">
                      <label for="nom">Article Permission</label>
                      @foreach($permissions as $permission)
                        @if($permission->for == 'Article')
                          <div class="checkbox">
                            <label for=""> <input type="checkbox" value="{{ $permission->id }}" name="permission[]" id="">{{ $permission->nom }} </label>
                          </div>
                        @endif
                      @endforeach
                    </div>
                    <div class="col-lg-4">
                      <label for="nom">Medecin Permission</label>
                      @foreach($permissions as $permission)
                        @if($permission->for == 'Medecin')
                          <div class="checkbox">
                            <label for=""> <input type="checkbox" value="{{ $permission->id }}"  name="permission[]"  id="">{{ $permission->nom }} </label>
                          </div>
                        @endif
                      @endforeach
                    </div>

                    <div class="col-lg-4">
                      <label for="nom">Autre Permission</label>
                      @foreach($permissions as $permission)
                        @if($permission->for == 'Autre')
                          <div class="checkbox">
                            <label for=""> <input type="checkbox" value="{{ $permission->id }}" name="permission[]"  id="">{{ $permission->nom }} </label>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>

                    <!-- /.box-body -->
      
                    <div class=" form-group">
                      <button type="submit" class="btn btn-primary">Valider</button>
                      <a  href="{{ route('role.index') }}" class="btn btn-warning">Retorner</a>
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