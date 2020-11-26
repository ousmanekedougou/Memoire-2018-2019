@extends('layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
    <!-- /.col -->
                 




      <div class="row">
            <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Admins</a></li>
              <li><a href="#timeline" data-toggle="tab">Medecin Regionale</a></li>
              <li><a href="#settings" data-toggle="tab">Clients</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                <!-- Post -->
                <div class="post">
                    <ol class="breadcrumb">
                    <li><a  href="{{ route('admin.create') }}"> <span class="btn btn-success" >Ajouter un admin</span> </a></li>
                    </ol>
                    <div class="row">
                    @foreach($admin_membre as $admin)
                    <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                        <div class="widget-user-image">
                        @if($admin->image != Null)
                            <img class="img-circle" src="{{ Storage::url($admin->image) }}" alt="User Avatar">
                            @else 
                            <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Avatar">
                        @endif
                        </div>
                        <!-- /.widget-user-image -->
                        <h5  class="widget-user-username" sryle="">{{ $admin->prenom }}</h5>
                        <h5 class="widget-user-desc">Administrateur</h5>
                        </div>
                        <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            <li><a href="{{ route('admin.edit',$admin->id) }}">Edite <span class="pull-right badge bg-green"><i class="fa fa-edit"></i></span></a></li>
                            <li><a onClick=" if(confirm('Etes vous sure de Supprimer cete cpersonne')){ event.preventDefault();document.getElementById('delete-form-{{$admin->id}}').submit();}else{event.preventDefault();}" href="{{ route('admin.update',$admin->id) }}">Supprimer <span class="pull-right badge bg-red"><i class="fa fa-trash"></i></span></a></li>
                            <form id="delete-form-{{$admin->id}}" action="{{ route('admin.destroy',$admin->id) }}" method="post" style="display:none;">
                            @csrf
                            {{ method_field('DELETE') }}
                            </form>
                        </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                    </div>
                    @endforeach
                    <!-- /.col -->
                    </div>
                </div>
                <!-- /.post -->

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="timeline">

                <!-- Post -->
                <div class="post">
                    <div class="row">
                    @foreach($medecin_chef as $medecin)
                        <div class="col-lg-4 ">
                          <!-- Box Comment -->
                            <div class="box box-widget">
                                <div class="box-body">
                                    <!-- Attachment -->
                                    <div class="attachment-block clearfix">
                                        @if($medecin->image != null)
                                        <img class="attachment-img" src="{{ Storage::url($medecin->image) }}" alt="Attachment Image">
                                        @else 
                                        <img src="{{ asset('user/images/default.gif')}}" class="attachment-img" alt="Attachment Image">
                                        @endif
                                        <div class="attachment-pushed">
                                            <span class="username text-bold">{{ $medecin->prenom}}</span>
                                            <p class="username text-bold" style="margin-bottom:-1px;"> 
                                            <span class="text-blod text-info" style="font-size:13px;">
                                            {{$medecin->proffession}}
                                            </span> 
                                            <span> {{$medecin->specialite}}</span>
                                            </p>
                                            <!-- <p class=" username text-blod"><span class="text-blod"><i class="fa fa-phone"></i> {{$medecin->phone }} </span> </p> -->

                                            <div class="attachment-text" style="margin-top:-2px;">
                                            <span class="text-italic">
                                                <span class="text-bold">Disponible : </span>
                                            @foreach($medecin->disponibilites as $dispo)
                                                {{$dispo->jour}},
                                            @endforeach
                                            </span>
                                            </div>

                                            <div class="attachment-text" style="margin-top:-2px;">
                                            <span class="text-italic">
                                                <span class="text-bold">Hopital : {{ $medecin->hopital->name }}</span>
                                            </span>
                                            </div>
                                        <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-text -->
                                    </div>
                                    <!-- /.attachment-pushed -->
                                    <!-- Social sharing buttons -->
                                    <div class="pull-right">
                                        <a class="btn btn-primary btn-xs " href="{{ route('medecin.medecin_chef_edit',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-edit"></i> Editer</a>
                                        <a class="btn btn-warning btn-xs " href="{{ route('medecin.medecin_chef_view',$medecin->id) }}" style="margin-right:20px;"><i class=" fa fa-eye"></i> Voire</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                  <!-- /.tab-pane -->
                  </div>
                </div>
                <!-- /.post -->

              </div>
              <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">

                    <!-- Post -->
                    <div class="post">
                        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                            width="100%">
                            <thead>
                            <tr>
                                <th class="th-sm">Image
                                </th>
                                <th class="th-sm">Prenom
                                </th>
                                <th class="th-sm">Nom
                                </th>
                                <th class="th-sm">Email
                                </th>
                                <th class="th-sm">Phone
                                </th>
                                <th class="th-sm">Departement
                                </th>
                                <th class="th-sm">Adresse
                                </th>
                                <th class="th-sm">Status
                                </th>
                                <th class="th-sm">Option
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_membre as $user)
                            <tr>
                                <td>
                                @if($user->image != Null)
                                <img class="img-circle img-thumnail" style="width:50px;heith:auto;" src="{{ Storage::url($user->image) }}" alt="" srcset="">
                                @else 
                                <img src="{{ asset('user/images/default.gif')}}" class="img-circle img-thumnail" style="width:50px;height:auto;">
                                @endif
                                </td>
                                <td>{{ $user->prenom }}</td>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                            
                                <td>
                                    {{ $user->departement->name}} , <span class="text-primary"> ({{$user->departement->region->name}})</span>
                                </td>
                                <td>{{ $user->adresse }}</td>
                                <td>{{ $user->status }}</td>
                                <td class="">   
                                <form id="delete-form-{{$user->id}}" action="{{ route('team.destroy',$user->id) }}" method="post" style="display:none;">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onClick=" if(confirm('Etes vous sure de Supprimer cet categorie')){ event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();}else{event.preventDefault();}" href="{{ route('team.update',$user->id) }}" style="margin-right:20px;"><i class=" glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                            <th class="th-sm">Image
                                </th>
                            <th class="th-sm">Prenom
                                </th>
                                <th class="th-sm">Nom
                                </th>
                                <th class="th-sm">Email
                                </th>
                                <th class="th-sm">Phone
                                </th>
                                <th class="th-sm">Departement
                                </th>
                                <th class="th-sm">Adresse
                                </th>
                                <th class="th-sm">Status
                                </th>
                                <th class="th-sm">Option
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.post -->

                </div>
                <!-- /.tab-pane -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>





        </section>
        <!-- /.content -->
    </div>



@endsection

