@extends('layouts.app')
<style>
  .ticker-success{
    background-color:rgba(0, 128, 0, 0.425) !important;
  }
  .ticker-success .username , .description{
    color:white !important;
  }
  .desc .description{
    color:black !important;
  }
 
</style>
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
   <!-- /.col -->
      <div class="row">
      @foreach($ticker as $ticker_client)
     
        <div class="col-sm-4">
    
          <!-- Box Comment -->
          @if($ticker_client->prix == $ticker_client->medecin->prix)
          <div class="box box-widget ticker-success">
        @else 
          <div class="box box-widget desc">
          @endif
            <div class="box-header with-border">
              <div class="user-block">
                @if($ticker_client->medecin->image != Null)
                <img class="img-circle" src="{{ Storage::url($ticker_client->medecin->image) }}" alt="User Image">
                @else  
                    <img src="{{ asset('user/images/default.gif')}}" class="img-circle" alt="User Image">
                    @endif
                <span class="username">{{ $ticker_client->medecin->prenom }} {{ $ticker_client->medecin->nom }}</span>
                <span class="description">{{ $ticker_client->medecin->proffession.' | '.$ticker_client->medecin->specialite}}</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="attachment-block clearfix">
                <div class="row">
                  <div class="col-md-12">
                    <p> <span class="text-bold">Mr/Mme : </span> <span class="text-center"> {{ $ticker_client->user->prenom .'  '.$ticker_client->user->nom }}</span>
                    </p>
                    <!-- <p> <span>Telephone : </span> <span>{{ $ticker_client->user->phone }}</span></p> -->
                    <p><span class="text-bold">Rendez-vous :</span> <span> le {{ $ticker_client->dateMedecin()->toFormattedDateString() }}</span> a <span> {{ $ticker_client->heure_medecin }}</span>
                    <p> <span class="text-bold">Hopital : </span> <span> {{ $ticker_client->medecin->hopital->name }} </span>,de {{ $ticker_client->medecin->hopital->departement->name }} ({{ $ticker_client->medecin->departement->region->name }})</p><span>
                    @if($ticker_client->prix  == $ticker_client->medecin->prix)
                      <p><span class="text-bold">Consultaion : </span> <span> Ticker Payer {{ $ticker_client->prix }} f</span> le <span> {{ $ticker_client->updated_at->toFormattedDateString() }} </span>
                      @else 
                      <span class="pull-left">Ticker Non Payer </span> 
                      @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
       
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    @endforeach
      </div>

    </section>
    <!-- /.content -->
  </div>



@endsection

