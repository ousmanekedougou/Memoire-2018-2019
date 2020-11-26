@extends('layouts.app')

@section('main-content')
@section('headsection')
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
<style>
  .message_error{
    color:red;
  }
form input[type='text'],input[type='email'],input[type='password'],input[type='number']{
  width:300px;
}
form .select2,.select{
  width:300px;
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
              <p class="text-muted">
                <span class="text-primary text-bold">Proffession : </span>  {{ $profile->proffession }}
              </p>

              <hr>
              <p class="text-muted">
                <span class="text-primary text-bold">Specialite : </span>  {{ $profile->specialite }}
              </p>
              <hr>
              <p class="text-muted">
                <span class="text-primary text-bold">Hopitaux de service : </span> 
              </p>
              <p class="text-muted">
                <span class="text-primary text-bold">Disponibilite : </span> 
                @foreach($profile->disponibilites as $dispo)
                  {{ $dispo->jour }},
                @endforeach
              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9" >
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Modifier Votre Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <form action="{{ route('update_medecin',$profile->id) }}" style="margin:0px 10px;" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputName" class=" control-label">Prenom & Nom</label>
                        <input name="prenom" value="{{ $profile->prenom }}" type="text" class="form-control @error('prenom') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('prenom')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputEmail" class=" control-label">Email</label>
                        <input name="email" value="{{ $profile->email }}" type="email" class="form-control @error('email') is-invalid @enderror"  id="inputEmail" placeholder="">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                  </div>
             

               <div class="row">
                 <div class="col-sm-6">
                 <div class="form-group">
                    <label for="inputName" class=" control-label">Phone</label>

                    <div class="">
                      <input name="phone" value="{{ $profile->phone }}" type="text" class="form-control @error('phone') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                 </div>
                 <div class="col-sm-6">
                 <div class="form-group">
                    <label for="inputSkills"  class=" control-label">Departement</label>

                    <div class="">
                          <select name="departement" value="{{ old('departement') }}" class="form-control select @error('departement') is-invalid @enderror" placeholder="">
                              <!-- <option >Votre Departement</option> -->
                            @foreach(departementFor(Auth::guard('medecin')->user()) as $departement)
                              <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                            @endforeach
                          </select>
                          <span class="glyphicon glyphicon form-control-feedback"></span>
                          @error('departement')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                    </div>
                  </div>
                 </div>
               </div>

                  
                 
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputSkills"  class=" control-label">Password</label>

                        <div class="">
                          <input name="password" value="" type="password" class="form-control @error('password') is-invalid @enderror"  id="inputSkills" placeholder="">
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
                        <label for="inputSkills" class=" control-label">Confirm Password</label>

                        <div class="">
                          <input name="password_confirmation" value="" type="password" class="form-control @error('confirm_password') is-invalid @enderror"  id="inputSkills" placeholder="">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="inputSkills" class=" control-label">Votre Disponibilite</label>
                    <div class="">
                    <select class="form-control select2  @error('disponibilite[]') is-invalid @enderror" value="{{ old('disponibilite[]') }}"  name="disponibilite[]"  multiple="multiple" data-placeholder="Selectioner votre hopital" 
                          >
                            <!-- <option >Votre Hopitale</option> -->
                          @foreach($disponibilites as $disponibilite)
                            <option value="{{ $disponibilite->id }}">{{ $disponibilite->jour }}</option>
                          @endforeach
                        </select>
                        <span class="glyphicon glyphicon form-control-feedback"></span>
                        @error('hopital')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    </div>
                  </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="inputSkills" class=" control-label">Votre Hopital</label>
                    <div class="">
                    <select class="form-control select  @error('hopital') is-invalid @enderror" value="{{ old('hopital') }}"  name="hopital"
                          >
                            <!-- <option >Votre Hopitale</option> -->
                          @foreach(hopitalFor(Auth::guard('medecin')->user()) as $hopital)
                            <option value="{{ $hopital->id }}">{{ $hopital->name }}</option>
                          @endforeach
                        </select>
                        <span class="glyphicon glyphicon form-control-feedback"></span>
                        @error('hopital')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="inputName" class=" control-label">Image</label>
                    <div class="">
                      <input name="image" value="{{ $profile->image }}" type="file" class="@error('image') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputSkills"  class=" control-label">Prix</label>
                        <div class="">
                          <input name="prix" value="{{ $profile->prix ?? old('prix') }}" type="number" class="form-control @error('prix') is-invalid @enderror"  id="inputSkills" placeholder="">
                            @error('prix')
                              <span class="invalid-feedback" role="alert">
                                  <strong class="message_error">{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputName" class=" control-label">Proffession</label>
                        <input name="proffession" value="{{ $profile->proffession }}" type="text" class="form-control @error('proffession') is-invalid @enderror"  id="inputName" placeholder="">
                        @error('proffession')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputEmail" class=" control-label">Specialite</label>
                        <input name="specialite" value="{{ $profile->specialite }}" type="text" class="form-control @error('specialite') is-invalid @enderror"  id="inputEmail" placeholder="">
                        @error('specialite')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <label for="inputSkills" class=" control-label">Votre Parcoure</label>
                    <div class="">
                      <textarea id="editor1" name="bibliographie" placeholder=""
                      style="width: 50%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('bibliographie') }}" class="@error('bibliographie') is-invalid @enderror">{{$profile->bibliographie}}</textarea>
                        @error('bibliographie')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="">
                      <button type="submit" class="btn btn-warning">Modifier</button>
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

@section('footersection')
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
$(document).ready(function(){
  $('.select2').select2();
});
</script>
@endsection