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
                        <th class="th-sm">Payment
                        </th>
                        <!-- <th class="th-sm">Option -->
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($rv_rv_today as $today)
                    @if($today->status == 2)
                      <tr style="background-color: rgb(129, 233, 129);">
                      @elseif($today->status < 2) 
                      <tr>
                      @endif
                        <td>
                        @if($today->medecin->image != null)
                          <img class="attachment-img" style="width:50px;heith:auto;" src="{{ Storage::url($today->medecin->image) }}" alt="Attachment Image">
                          @else 
                          <img src="{{ asset('user/images/default.gif')}}" style="width:50px;heith:auto;" class="attachment-img" alt="Attachment Image">
                          @endif
                        </td>
                        <td>{{ $today->medecin->prenom.' ' .$today->medecin->nom }}</td>
                        <td>{{ $today->medecin->phone }}</td>

                        <td class="text-center text-success">Avec</td>
                        
                        <td>
                          @if($today->user->image != null)
                          <img class="attachment-img" style="width:50px;heith:auto;" src="{{ Storage::url($today->user->image) }}" alt="Attachment Image">
                          @else 
                          <img src="{{ asset('user/images/default.gif')}}" style="width:50px;heith:auto;" class="attachment-img" alt="Attachment Image">
                          @endif
                        </td>
                        <td>{{ $today->user->prenom.' ' .$today->user->nom }}</td>
                        <td>{{ $today->user->phone }}</td>
                        <td>
                          @if($today->prix == Null)
                          Non Payer
                          @else 
                          {{ $today->prix }} f
                          @endif
                        </td>
                        <!-- <td class="text-center">
                          <a  href="{{ route('admin.medecin_info',$today->id) }}">
                            @if($today->option_medecin == 1)
                              <span class="text-success">Activer</span>
                              @else 
                              <span class="text-danger">En Vue</span>
                            @endif
                          </a> |
                          <a  href="{{ route('admin.client_info',$today->id) }}">
                            @if($today->option_client == 1)
                              <span class="text-success">Activer</span>
                              @else 
                              <span class="text-danger">En vue</span>
                            @endif
                          </a> | -->
                          <!-- <a class="btn btn-primary btn-xs " href="{{ route('admin.admin_all',$today->id) }}" style="margin-right:10px;" alt=""><i class=" fa fa-eye"></i></a> -->
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
                        <th class="th-sm">Payment
                        </th>
                        <!-- <th class="th-sm">Option -->
                        </th>
                      </tr>
                    </tfoot>
                  </table>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper --> 
@endsection