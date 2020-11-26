@extends('layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tout vos Services
      </h1>
      <ol class="breadcrumb">
        <li><a  href="{{ route('service.create') }}"> <span class="btn btn-success" >Ajouter un Service</span> </a></li>
       
      </ol>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
        <div class="row" style="padding:1px;">
          @foreach($serviec_all as $service)
          <div class="col-sm-6" >
            <div style="border:1px solid silver;padding:5px;border-radius:3px;">
            <div class="row">
                <div class="col-sm-6">
                    <img style="width:100%;height:auto;" class="" src="{{ Storage::url($service->image) }}" alt="">
                </div>

                <div class="col-sm-6 ">
                    <span class="text-bold">{{ $service->nom }}</span>
                <p> {!! htmlspecialchars_decode($service->detail) !!}</p>
                </div>
                <p class="text-center" >
                  <form id="delete-form-{{$service->id}}" action="{{ route('service.destroy',$service->id) }}" method="post" style="display:none;">
                    @csrf
                    {{ method_field('DELETE') }}
                  </form>
                   <a style="margin-left:18px;" href="{{ route('service.edit',$service->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Modifier</a>
                   <a  onClick=" if(confirm('Etes vous sure de Supprimer cet categorie')){ event.preventDefault();document.getElementById('delete-form-{{$service->id}}').submit();}else{event.preventDefault();}" href="{{ route('service.update',$service->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Supprimer</a>
                   </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>
    <!-- /.content -->
  </div>

  



@endsection