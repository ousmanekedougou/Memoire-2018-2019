@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Vos Reseaux
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route ('reseau.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Logo</th>
                  <th>Nom</th>
                  <th>Lien</th>
                  <th class="text-success">Option</th>
                </tr>
                </thead>
                <tbody>
                {{$i = ''}}
              @foreach($reseaus as $reseau)
                <tr>
                  <td>
                  @if( $reseau->nom == 'facebook' )
                  <span > <i style="font-size:30px;color:blue;"class=" fa fa-facebook"></i> </span>
                  @elseif($reseau->nom == 'whatsapp')
                  <span> <i style="font-size:30px;color:green;" class=" fa fa-whatsapp"></i> </span>
                  @elseif($reseau->nom == 'youtube')
                  <span> <i style="font-size:30px;color:red;" class=" fa fa-youtube-play"></i> </span>
                  @elseif($reseau->nom == 'twitter')
                  <span> <i style="font-size:30px;color:blue;" class=" fa fa-twitter"></i> </span>
                  @elseif($reseau->nom == 'instagram')
                  <span> <i style="font-size:30px;color:red ;" class=" fa fa-instagram"></i> </span>
                  @endif
                  </td>
                  <td>{{ $reseau->nom }}</td>
                  <td>{{ $reseau->lien }}</td>
                  <td class="">   
                  <form id="delete-form-{{$reseau->id}}" action="{{ route('reseau.destroy',$reseau->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="{{ route('reseau.edit',$reseau->id) }}"><span> <i class=" glyphicon glyphicon-edit"></i> </span></a>
                    <a href="" onClick=" if(confirm('Etes vous sure de Supprimer cet categorie')){ event.preventDefault();document.getElementById('delete-form-{{$reseau->id}}').submit();}else{event.preventDefault();}" href="{{ route('reseau.update',$reseau->id) }}" style="margin-right:20px;"><i class=" glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                <tr>
                  <th>Logo</th>
                  <th>Nom</th>
                  <th>Lien</th>
                  <th class="text-success">Option</th>
                </tr>
                </tfoot>
              </table>
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection