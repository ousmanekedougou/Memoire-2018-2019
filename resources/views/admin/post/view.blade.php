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
     
        <div class="box-header with-border">
          <h3 class="box-title">Posts</h3>
          <!-- la validation des droits qui viennent dans le model Policy a la fonction create -->
          <a class="col-lg-offset-5 btn btn-success" href="{{ route('post.create') }}">Add New Post</a>
        </div>
     
        <div class="row">

        <div class="col-md-6">
          <!-- Box Comment -->
          <br>
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <p>{{ $post_view->detail }}</p>
                      <a class="btn btn-warning btn-xs" href="{{ route('post.show',$post_view->id) }}"><i class="fa fa-eye"></i> View</a>
                      <a class="btn btn-warning btn-xs" href="{{ route('post.edit',$post_view->id) }}"><i class="fa fa-edit"></i> Editer</a>
                      <!-- <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</button> -->
                      <!-- <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button> -->
                      <form id="delete-form-{{$post_view->id}}" method="post" action="{{ route('post.destroy',$post_view->id) }}" style="display:none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            </form>
                          <a class="btn btn-danger btn-xs" href="" onclick="
                            if(confirm('Are you sure , You want to delete this ?')){

                            event.preventDefault();document.getElementById('delete-form-{{$post_view->id}}').submit();

                            }else{

                              event.preventDefault();

                            }
                            
                            "><i class="fa fa-trash"></i> Delete</a>
                      <span class="pull-right text-muted">Status - Publish</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
             
            </div>
          
          </div>
          <!-- /.box -->
        </div>

        <!-- col -->
            <div class="col-md-6">
            <div class="box-body">
              <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">
            </div>
            </div>
        <!-- fin du col -->

        </div>
    
        
        <!-- /.box-footer-->
      

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

