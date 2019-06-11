@extends('layouts.app')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css" />
            <style type="text/css">
                .dropzone {
                    border:2px dashed #999999;
                    border-radius: 10px;
                }
                .dropzone .dz-default.dz-message {
                    height: 171px;
                    background-size: 132px 132px;
                    margin-top: -101.5px;
                    background-position-x:center;

                }
                .dropzone .dz-default.dz-message span {
                    display: block;
                    margin-top: 145px;
                    font-size: 20px;
                    text-align: center;
                }
            </style>
              
        </div>
@section('content')
    <section class="content-header">
        <h1>
            Blog
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">

                <div class="panel panel-info">
                    <div class="panel-heading">SUBIR PORTADA</div>
                    <div class="panel-body">
                        
                       
                             {!! Form::open(['route' => 'blog.save','id'=>'dropzone','class'=>'dropzone']) !!}
                                  
                               {!! Form::close() !!}

                    </div>
               
                </div>
               {{--  <div class="row">
                    {!! Form::open(['route' => 'blogs.store']) !!}

                        @include('blogs.fields')

                    {!! Form::close() !!}
                </div> --}}
            </div>


        </div>
    </div>
@endsection
@section('scripts')
 <script>
       Dropzone.options.dropzone =
         {
                 paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                success: function (file, response) {
                    console.log(response);
                 }
        };


</script>

@endsection