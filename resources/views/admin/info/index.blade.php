@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Info
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route ('info.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
            <div class="box-body">
              <table id="example2" class="table text-center table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Adresse</th>
                  <th>Boite Postal</th>
                  <th>Fax</th>
                  <th class="text-success">Option</th>
                </tr>
                </thead>
                <tbody>
              @foreach($infos as $info)
                <tr>
                  <td>{{ $info->email }}</td>
                  <td>{{ $info->phone }}</td>
                  <td>{{ $info->adresse }}</td>
                  <td>{{ $info->bp }}</td>
                  <td>{{ $info->fax }}</td>
                  <td class="">   
                  <form id="delete-form-{{$info->id}}" action="{{ route('info.destroy',$info->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="{{ route('info.edit',$info->id) }}"><span> <i class=" glyphicon glyphicon-edit"></i> </span></a>
                    <a href="" onClick=" if(confirm('Etes vous sure de Supprimer cet categorie')){ event.preventDefault();document.getElementById('delete-form-{{$info->id}}').submit();}else{event.preventDefault();}" href="{{ route('info.update',$info->id) }}" style="margin-right:20px;"><i class=" glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                <tr>
                <th>Email</th>
                  <th>Phone</th>
                  <th>Adresse</th>
                  <th>Boite Postal</th>
                  <th>Fax</th>
                  <th class="text-success">Option</th>
                </tr>
                </tfoot>
              </table>
            </div>




           <div class="box-body">
            <section class="content-header">
              <h1>
                Reseaux Sociaux
              </h1>
              <ol class="breadcrumb">
                <li><a href="{{ route('social.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
              </ol>
            </section><br>
              <table id="example2" class="table text-center  table-bordered table-hover">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Nom</th>
                  <th>Lien</th>
                  <th class="text-success">Option</th>
                </tr>
                </thead>
                <tbody>
              @foreach($social_reseau as $social)
                <tr>
                  <td>
                  @if( $social->nom == 'facebook' )
                  <span > <i style="font-size:30px;color:blue;"class=" fa fa-facebook"></i> </span>
                  @elseif($social->nom == 'whatsapp')
                  <span> <i style="font-size:30px;color:green;" class=" fa fa-whatsapp"></i> </span>
                  @elseif($social->nom == 'youtube')
                  <span> <i style="font-size:30px;color:red;" class=" fa fa-youtube-play"></i> </span>
                  @elseif($social->nom == 'twitter')
                  <span> <i style="font-size:30px;color:blue;" class=" fa fa-twitter"></i> </span>
                  @elseif($social->nom == 'instagram')
                  <span> <i style="font-size:30px;color:red ;" class=" fa fa-instagram"></i> </span>
                  @endif
                  </td> 
                  <td>{{ $social->nom }}</td>
                  <td><a href="{{ $social->lien }}">{{ $social->lien }}</a></td>
                  <td class="">   
                  <form id="delete-form-{{$social->id}}" action="{{ route('social.destroy',$social->id) }}" method="post" style="display:none;">
                      @csrf
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="{{ route('social.edit',$social->id) }}"><span> <i class=" glyphicon glyphicon-edit"></i> </span></a>
                    <a href="" onClick=" if(confirm('Etes vous sure de Supprimer cet categorie')){ event.preventDefault();document.getElementById('delete-form-{{$social->id}}').submit();}else{event.preventDefault();}" href="{{ route('info.update',$social->id) }}" style="margin-right:20px;"><i class=" glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                <tr>
                <th>Image</th>
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