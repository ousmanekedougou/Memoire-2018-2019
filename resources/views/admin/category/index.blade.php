@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CATEGORY
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route ('category.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>N</th>
                  <th>Nom</th>
                  <th>Slug</th>
                  <th class="text-success">Option</th>
                </tr>
                </thead>
                <tbody>
                {{$i = ''}}
              @foreach($category_show as $category)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $category->nom }}</td>
                  <td>{{ $category->slug }}</td>
                  <td class="">   
                  <form id="delete-form-{{$category->id}}" action="{{ route('category.destroy',$category->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="{{ route('category.edit',$category->id) }}"><span> <i class=" glyphicon glyphicon-edit"></i> </span></a>
                    <a href="" onClick=" if(confirm('Etes vous sure de Supprimer cet categorie')){ event.preventDefault();document.getElementById('delete-form-{{$category->id}}').submit();}else{event.preventDefault();}" href="{{ route('category.update',$category->id) }}" style="margin-right:20px;"><i class=" glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                <tr>
                  <th>N</th>
                  <th>Nom</th>
                  <th>Slug</th>
                  <th class="text-success">Option</th>
                </tr>
                </tfoot>
              </table>
                  <p class="text-success">{{ $category_show->links() }}</p>
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection