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
                    <div style="text-align: center;">
                        
                    </div><br>
               
                </div>
                <div class="row">


                    {!! Form::open(['id'=>'form-crearEntrada','class'=>'form-crearEntrada']) !!}

                        @include('blogs.fields')

                    {!! Form::close() !!}
                </div>
            </div>


        </div>
    </div>
@endsection
@section('scripts')

 <script>
     
 $(document).ready(function() {
        $('#contenido').summernote();
        $("#Modificar").hide();
    });

   Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone('#dropzone', {
            paramName: 'file',
            maxFilesize: 5, // MB
            autoProcessQueue: false,
            maxFiles: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            dictRemoveFile: 'Remover foto',
            dictDefaultMessage: "Arrastre las fotos que desea subir aquí.",
            init: function() {
                this.on("success", function(file, response) {
                    var a = document.createElement('span');
                    a.className = "thumb-url btn btn-primary";
                    
                    a.innerHTML = "copy url";
                    file.previewTemplate.appendChild(a);
                });
                 this.on("queuecomplete", function() { 
                   this.options.autoProcessQueue = false; 
                  }); 

                  this.on("processing", function() { 
                   this.options.autoProcessQueue = true; 
                  }); 

            }
        });

          $('#btnUpload').on('click', function(e){

                e.preventDefault();
                myDropzone.processQueue();
                var data = $('#form-crearEntrada').serialize();

                 $.ajax({
                  url:'{{ route('blog.contenido') }}',
                    type: 'POST',
                    data:data,
                     success: function(data) {
                       
                             console.log(data);
                             myDropzone.processQueue();
                             window.setTimeout('location.reload()', 3000);
                    }
                    
                });

        });

</script>

@endsection