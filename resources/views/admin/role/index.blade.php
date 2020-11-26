@extends('layouts.app')

@section('headsection')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection


@section('main-content')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Roles</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{ route('role.create') }}">Ajoute Un Role</a>

        
        </div>
        <div class="box-body">
            <!-- debut de la table -->
          <div class="">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Nom du Role</th>
                  <th>Permission du role</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($roles as $role)
                  <tr>
                  <th>{{ $loop->index +1 }}</th>
                  <th>{{ $role->nom }}</th>
                  <th>
                      @foreach($role->permissions as $role_per)
                          {{ $role_per->nom }},
                      @endforeach
                    </th>
                  <th>
                  <a href="{{ route('role.edit',$role->id) }}"><i class="glyphicon glyphicon-edit"></i></a>
                    <form id="delete-form-{{$role->id}}" method="post" action="{{ route('role.destroy',$role->id) }}" style="display:none">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    </form>
                  <a href="" onclick="
                    if(confirm('Are you sure , You want to delete this ?')){

                    event.preventDefault();document.getElementById('delete-form-{{$role->id}}').submit();

                    }else{

                      event.preventDefault();

                    }
                    
                    "><i class="glyphicon glyphicon-trash text-danger"></i></a>
                    </th>
                 
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Nom du Role</th>
                  <th>Permission du role</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            <!-- fin de la table -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footersection')
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>

@endsection