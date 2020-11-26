@extends('layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Historique de tout vos Rende-vous
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
        
                    <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                      <tr>
                        <th class="th-sm">Medecins
                        </th>
                        <th class="th-sm">Prenom & Nom
                        </th>
                        <th class="th-sm">Phone
                        </th>
                        <th class="th-sm text-center">Avec
                        </th>
                        <th class="th-sm">Clients
                        </th>
                        <th class="th-sm">Prenom & Nom
                        </th>
                        <th class="th-sm">Phone
                        </th>
                        <th class="th-sm">Date
                        </th>
                        <th class="th-sm">Option
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($rv_rv_latested as $latested)
                      <tr>
                        <td>
                        @if($latested->medecin->image != null)
                          <img class="attachment-img" style="width:50px;heith:auto;" src="{{ Storage::url($latested->medecin->image) }}" alt="Attachment Image">
                          @else 
                          <img src="{{ asset('user/images/default.gif')}}" style="width:50px;heith:auto;" class="attachment-img" alt="Attachment Image">
                          @endif
                        </td>
                        <td>{{ $latested->medecin->prenom.' ' .$latested->medecin->nom }}</td>
                        <td>{{ $latested->medecin->phone }}</td>
                        <td class="text-center text-success">Avec</td>
                        <td>
                        @if($latested->user->image != null)
                          <img class="attachment-img" style="width:50px;heith:auto;" src="{{ Storage::url($latested->user->image) }}" alt="Attachment Image">
                          @else 
                          <img src="{{ asset('user/images/default.gif')}}" style="width:50px;heith:auto;" class="attachment-img" alt="Attachment Image">
                          @endif
                        </td>
                        <td>{{ $latested->user->prenom.' ' .$latested->user->nom }}</td>
                        <td>{{ $latested->user->phone }}</td>
                        <td>{{ $latested->dateMedecin()->toFormattedDatestring() }}</td>
                        <td class="text-center">
                          <a  href="{{ route('admin.medecin_info',$latested->id) }}">
                            @if($latested->option_medecin == 1)
                              <span class="btn btn-success btn-xs">Activer</span>
                              @else 
                              <span class="btn btn-warning btn-xs">En Vue</span>
                            @endif
                          </a> |
                          <a  href="{{ route('admin.client_info',$latested->id) }}">
                            @if($latested->option_client == 1)
                              <span class="btn btn-primary btn-xs">Activer</span>
                              @else 
                              <span class="btn btn-info btn-xs">En vue</span>
                            @endif
                          </a> 
                          <!-- <a class="btn btn-primary btn-xs " href="{{ route('admin.admin_all',$latested->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-eye"></i></a> -->
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                      <th class="th-sm">Medecins
                        </th>
                        <th class="th-sm">Prenom & Nom
                        </th>
                        <th class="th-sm">Phone
                        </th>
                        <th class="th-sm text-center">Avec
                        </th>
                        <th class="th-sm">Clients
                        </th>
                        <th class="th-sm">Prenom & Nom
                        </th>
                        <th class="th-sm">Phone
                        </th>
                        <th class="th-sm">Date
                        </th>
                        <th class="th-sm">Option
                        </th>
                      </tr>
                    </tfoot>
                  </table>
                     
              
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper --> 
@endsection