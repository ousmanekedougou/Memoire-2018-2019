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
   
        <div class="box-body">

      
  <div class="register-box-body  col-lg-offset-3 col-lg-6">
    <p class="login-box-msg">Modifier Admin</p>
   
      <form action="{{ route('admin.update',$edit_membre->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
      <div class="row  col-lg-offset-2 col-lg-9">
        
      <div class="form-group has-feedback">
        <input type="text" name="nom" value="{{ $edit_membre->nom }}" class="form-control @error('nom') is-invalid @enderror" placeholder="Prenom">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @error('nom')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" value="{{ $edit_membre->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="number" name="phone" value="{{ $edit_membre->phone }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        @error('phone')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group has-feedback">
      <div class="checkbox">
        <label for="role"> <input type="checkbox" class=" @error('status') is-invalid @enderror" 
        
            @if($edit_membre->status == 1)
            checked
            @endif
              name="status" value="1" id=""> Status </label>
        </div>

        @error('status')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
  
    </div>
            <div class="row">
            <div class="form-group col-lg-12">
                      <!-- <label>Assign Roles</label>
                     <div class="row">
                     @foreach($roles as $role)
                        <div class="checkbox">
                        <div class="col-lg-3">
                        <label for="role"> <input type="checkbox" 
                        
                        @foreach($edit_membre->roles as $user_role)
                            @if($user_role->id == $role->id)
                            checked
                            @endif
                        @endforeach
                        
                         name="role[]" value="{{ $role->id }}" id=""> {{ $role->nom }} </label>
                        </div>
                        </div>
                        @endforeach
                     </div> -->
                    </div>
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Modifier</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

   
  <!-- /.form-box -->

<!-- /.register-box -->
     
      
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection