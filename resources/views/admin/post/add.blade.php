@extends('layouts.app')

@section('headsection')
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
<style>
  .message_error{
    color:red;
  }
</style>
@endsection

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
                
        
        
        <!-- les inputs -->

             <!-- general form elements -->
             <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
              <!-- {{ csrf_field() }} -->
              @csrf
              <div class="box-body">

              <div class="col-lg-6">

                  
                  <div class="form-group">
                      <label for="title">Post Title</label>
                      <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="">
                      @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="subtitle">SubTitle</label>
                        <input type="text" value="{{ old('subtitle') }}" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" placeholder="">
                        @error('subtitle')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="slug">Post Slug</label>
                        <input type="text" value="{{ old('slug') }}" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="">
                        @error('slug')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    
                </div>

                <div class="col-lg-6">
                  
                <div class="form-group">
                    <br>
                  <div class="pull-right">
                        <label for="image">File input</label>
                        <input type="file" id="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror" name=image>
                        @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                 
                    <div class="radio pull-left">
                      <div class="form-group">
                      <label>
                            <input type="radio" value="1" class="@error('status') is-invalid @enderror" name="status"> Publish
                        </label>   
                        <label>
                            <input type="radio" value="0" class="@error('status') is-invalid @enderror" name="status"> Prive
                        </label>
                            @error('status')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                  </div>
                  <!-- debut des tag  -->
                  <br><br>
                  <div class="form-group"  >
                    
                <label>Select Tag</label>
                <select class="form-control select2 @error('tags[]') is-invalid @enderror" value="{{ old('tags[]') }}"  name="tags[]" multiple="multiple" data-placeholder="Select a State"
                  style="width: 100%;">
                  @foreach($tags as $tag)
                  <option value="{{ $tag->id }}"> {{ $tag->nom }} </option>
                  @endforeach
                </select>
                      @error('tags[]')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
              </div>
                <!-- fin des tag -->

                        <!-- debut des categories  -->
                        
                <div class="form-group">
                <label>Select Tag</label>
                <select class="form-control select2 @error('category[]') is-invalid @enderror" value="{{ old('category[]') }}" name="category[]" multiple="multiple" data-placeholder="Select a State"
                  style="width: 100%;">
                  @foreach($categorys as $category)
                  <option value="{{ $category->id }}"> {{ $category->nom }} </option>
                  @endforeach
                </select>
                      @error('category[]')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
              </div>
                <!-- fin des categories -->
              </div>
              </div>

                <!-- le textarea -->

                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Writw Post Body here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            
                <textarea id="editor1" name="detail"
                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('detail') }}" class="@error('detail') is-invalid @enderror"></textarea>
                 @error('detail')
                          <span class="invalid-feedback" role="alert">
                              <strong class="message_error">{{ $message }}</strong>
                          </span>
                        @enderror
          
            </div>
          </div>
       

                <!-- fin du textarea -->


              <!-- /.box-body -->

              <div class="box-footer form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->


        <!-- fin des inputs -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('footersection')
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<!-- <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script> -->

<script>
  $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })
</script>


<script>
$(document).ready(function(){
  $('.select2').select2();
});

</script>

@endsection