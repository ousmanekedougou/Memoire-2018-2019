@extends('layouts.app')

@section('main-content')




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Vos Slider
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route ('slider.create') }}"> <span class="btn btn-success" >Ajouter</span></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- Default box -->
            <div class="box-body">
              <div class="row">
                @foreach($slider as $slide_slide_1)
                  <div class="col-md-4">
                    <!-- Box Comment -->
                    <div class="box-body">
                      <img class="img-responsive pad" src="{{ Storage::url($slide_slide_1->image) }}" alt="Photo">

                      <p>Slider Simple</p>
                      <a class="btn btn-warning btn-xs" href="{{ route('slider.edit',$slide_slide_1->id) }}"><i class="fa fa-edit"></i> Editer</a>
                      <!-- <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</button> -->
                      <!-- <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button> -->
                      <form id="delete-form-{{$slide_slide_1->id}}" method="post" action="{{ route('slider.destroy',$slide_slide_1->id) }}" style="display:none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            </form>
                          <a class="btn btn-danger btn-xs" href="" onclick="
                            if(confirm('Are you sure , You want to delete this ?')){

                            event.preventDefault();document.getElementById('delete-form-{{$slide_slide_1->id}}').submit();

                            }else{

                              event.preventDefault();

                            }
                            
                            "><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endforeach
              </div>

              <!-- les differentes slider  -->
              <div class="row">
              @foreach($slider_login as $slide_slide_login)
                  <div class="col-md-4">
                    <!-- Box Comment -->
                    <div class="box-body">
                      <img class="img-responsive pad" src="{{ Storage::url($slide_slide_login->image) }}" alt="Photo">

                      <p>Slider Login</p>
                      <a class="btn btn-warning btn-xs" href="{{ route('slider.edit',$slide_slide_login->id) }}"><i class="fa fa-edit"></i> Editer</a>
                      <!-- <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</button> -->
                      <!-- <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button> -->
                      <form id="delete-form-{{$slide_slide_login->id}}" method="post" action="{{ route('slider.destroy',$slide_slide_login->id) }}" style="display:none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            </form>
                          <a class="btn btn-danger btn-xs" href="" onclick="
                            if(confirm('Are you sure , You want to delete this ?')){

                            event.preventDefault();document.getElementById('delete-form-{{$slide_slide_login->id}}').submit();

                            }else{

                              event.preventDefault();

                            }
                            
                            "><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endforeach

                  @foreach($slider_ins as $slide_inscription)
                  <div class="col-md-4">
                    <!-- Box Comment -->
                    <div class="box-body">
                      <img class="img-responsive pad" src="{{ Storage::url($slide_inscription->image) }}" alt="Photo">

                      <p>Slider Inscription</p>
                      <a class="btn btn-warning btn-xs" href="{{ route('slider.edit',$slide_inscription->id) }}"><i class="fa fa-edit"></i> Editer</a>
                      <!-- <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</button> -->
                      <!-- <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button> -->
                      <form id="delete-form-{{$slide_inscription->id}}" method="post" action="{{ route('slider.destroy',$slide_inscription->id) }}" style="display:none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            </form>
                          <a class="btn btn-danger btn-xs" href="" onclick="
                            if(confirm('Are you sure , You want to delete this ?')){

                            event.preventDefault();document.getElementById('delete-form-{{$slide_inscription->id}}').submit();

                            }else{

                              event.preventDefault();

                            }
                            
                            "><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endforeach


                  @foreach($slider_contact as $slide_contact_sld)
                  <div class="col-md-4">
                    <!-- Box Comment -->
                    <div class="box-body">
                      <img class="img-responsive pad" src="{{ Storage::url($slide_contact_sld->image) }}" alt="Photo">

                      <p>Slider Contact</p>
                      <a class="btn btn-warning btn-xs" href="{{ route('slider.edit',$slide_contact_sld->id) }}"><i class="fa fa-edit"></i> Editer</a>
                      <!-- <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editer</button> -->
                      <!-- <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button> -->
                      <form id="delete-form-{{$slide_contact_sld->id}}" method="post" action="{{ route('slider.destroy',$slide_contact_sld->id) }}" style="display:none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            </form>
                          <a class="btn btn-danger btn-xs" href="" onclick="
                            if(confirm('Are you sure , You want to delete this ?')){

                            event.preventDefault();document.getElementById('delete-form-{{$slide_contact_sld->id}}').submit();

                            }else{

                              event.preventDefault();

                            }
                            
                            "><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endforeach
              </div>
              <!-- fin des differentes slider -->
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection