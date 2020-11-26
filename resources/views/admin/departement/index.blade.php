@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Vos Departements
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route ('departement.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>N0</th>
                  <th>Nom Du Departement</th>
                  <th>Region</th>
                  <th class="text-success">Option</th>
                </tr>
                </thead>
                <tbody>
                {{$i = ''}}
              @foreach($departements as $departement)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $departement->name}}</td>
                  <td>{{ $departement->region->name}}</td>
                  <td class="">   
                  <form id="delete-form-{{$departement->id}}" action="{{ route('departement.destroy',$departement->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="{{ route('departement.edit',$departement->id) }}"><span> <i class=" glyphicon glyphicon-edit"></i> </span></a>
                    <a href="" onClick=" if(confirm('Etes vous sure de Supprimer ce departement')){ event.preventDefault();document.getElementById('delete-form-{{$departement->id}}').submit();}else{event.preventDefault();}"
                     href="{{ route('departement.update',$departement->id) }}" style="margin-right:20px;" ><i class=" glyphicon glyphicon-trash text-danger"></i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                <tr>
                <th>N0</th>
                  <th>Nom Du Departement</th>
                  <th>Region</th>
                  <th class="text-success">Option</th>
                </tr>
                </tfoot>
              </table>
              {{$departements->links()}}
            </div>


            <br><br>
            <div class="box-body">
                <section class="content-header">
                  <h1>
                  Vos Hopitaux
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="{{ route ('specialite.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
                  </ol>
                </section>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>N0</th>
                      <th>Hopital</th>
                      <th>Departement</th>
                      <th>Region</th>
                      <th class="text-success">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{$i = ''}}
                          @foreach($hopitals as $hp)
                            <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $hp->name}}</td>
                             
                              <td>{{ $hp->departement->name }}</td>
                              <td>{{ $hp->departement->region->name }}</td>
                              <td class="">   
                              <form id="delete-form-{{$hp->id}}" action="{{ route('specialite.destroy',$hp->id) }}" method="post" style="display:none;">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route('specialite.edit',$hp->id) }}"><span> <i class=" glyphicon glyphicon-edit"></i> </span></a>
                                <a href="" onClick=" if(confirm('Etes vous sure de Supprimer cette hopital')){ event.preventDefault();document.getElementById('delete-form-{{$hp->id}}').submit();}else{event.preventDefault();}" 
                                href="{{ route('specialite.update',$hp->id) }}" style="margin-right:20px;"><i class=" glyphicon glyphicon-trash text-danger"></i></a>
                              </td>
                            </tr>
                          @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                    <tr>
                    <th>N0</th>
                    <th>Hopital</th>
                      <th>Departement</th>
                      <th>Region</th>
                      <th class="text-success">Option</th>
                    </tr>
                    </tfoot>
                  </table>
                  {{$hopitals->links()}}
            </div>
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->



@endsection