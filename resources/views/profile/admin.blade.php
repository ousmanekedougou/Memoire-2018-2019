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
      <section class="content">
            <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                @if($profile->image != Null)
                  <img class="profile-user-img img-responsive img-circle" src="{{ Storage::url($profile->image)}}" alt="User profile picture">
                @else 
                  <img src="{{ asset('user/images/default.gif')}}" class="profile-user-img img-responsive img-circle" alt="User profile picture">
                @endif
                  <h3 class="profile-username text-center">{{ $profile->prenom .' '. $profile->nom }}</h3>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Apropos de Moi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <strong><i class="fa fa-book margin-r-5"></i> Education</strong> -->

              <p class="text-muted">
                <span class="text-primary text-bold"><i class="fa fa-envelope"></i> Email :</span> {{ $profile->email }}
              </p>
<hr>
              <p class="text-muted">
                <span class="text-primary text-bold"><i class="fa fa-mobile"></i> Telephone :</span>  {{ $profile->phone }}
              </p>
              <hr>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Modifier Votre Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <form action="{{ route('update_admin',$profile->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nom & Prenom</label>

                    <div class="col-sm-10">
                      <input name="nom" value="{{ $profile->nom }}" type="text" class="form-control @error('nom') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('nom')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input name="email" value="{{ $profile->email }}" type="email" class="form-control @error('email') is-invalid @enderror"  id="inputEmail" placeholder="">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input name="phone" value="{{ $profile->phone }}" type="text" class="form-control @error('phone') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="inputSkills" class="col-sm-4 control-label">Password</label>

                    <div class="col-sm-8">
                      <input name="password" type="password" value="" class="form-control @error('password') is-invalid @enderror"  id="inputSkills" placeholder="">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="inputSkills" class="col-sm-5 control-label">Confirm Password</label>

                    <div class="col-sm-7">
                      <input name="password_confirmation" value="" type="password" class="form-control @error('confirm_password') is-invalid @enderror"  id="inputSkills" placeholder="">
                    </div>
                  </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                      <input name="image" value="{{ $profile->image }}" type="file" class="@error('image') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </section>
    </div>
  <!-- /.content-wrapper -->



@endsection