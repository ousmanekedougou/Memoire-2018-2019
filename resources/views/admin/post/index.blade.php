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
     
        
            <!-- /.box-header -->
            <div class="box-body">
              <!-- les articles en card -->
                <div class="row">
                @foreach($view_post as $post)
                <div class="col-md-4">
                  <!-- Box Comment -->
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="{{asset('admin/dist/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#">{{ $post->title }}</a></span>
                        <span class="description">{{ $post->subtitle }}</span>
                      </div>
                  
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <img class="img-responsive pad" src="{{asset('admin/dist/img/photo2.png')}}" alt="Photo">

                      <p>{{ $post->detail }}</p>
                      <a class="btn btn-warning btn-xs" href="{{ route('post.show',$post->id) }}"><i class="fa fa-eye"></i> View</a>
                      <a class="btn btn-warning btn-xs" href="{{ route('post.edit',$post->id) }}"><i class="fa fa-edit"></i> Editer</a>
                      <!-- <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</button> -->
                      <!-- <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button> -->
                      <form id="delete-form-{{$post->id}}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display:none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            </form>
                          <a class="btn btn-danger btn-xs" href="" onclick="
                            if(confirm('Are you sure , You want to delete this ?')){

                            event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit();

                            }else{

                              event.preventDefault();

                            }
                            
                            "><i class="fa fa-trash"></i> Delete</a>
                      <span class="pull-right text-muted">Status - 
                            @if( $post->status == '1' )
                            Publique
                            @else 
                            Prive
                            @endif
                      </span>
                    </div>
                    <!-- /.box-body -->
              
                
                  </div>
                  <!-- /.box -->
                </div>
                @endforeach
            </div>
              <!-- fin des articles en card -->
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