@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Multimedia
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            
            <div class="box-body">
                <div class="panel panel-info">
                    <div class="panel-heading">SUBIR MULTIMEDIA</div>
                        <div class="panel-body">
                  
                         <form action="{{ url('/upload') }}" enctype="multipart/form-data" files="true" class="dropzone" id="upload-file-form" name="upload-file-form">
                            {{ csrf_field() }}
                            <input type="text" name="idMultimedia" id="idMultimedia">
                        </form><br>

                   
                        @include('multimedia.fields')
                         

                        </div>
           
                    </div>

                <div class="row">
                  
                  
                </div>
            </div>

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
    </div>
@endsection

@section('scripts')
 <script>
      

         Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone('#upload-file-form', {
            paramName: 'file',
            maxFilesize: 5, // MB
            autoProcessQueue: false,
            maxFiles: 20,
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

           $('#submit').on('click', function(e){
             e.preventDefault();
             alert("hola");
              // var data = $('#form-crearEntrada').serialize();
              //        $.ajax({
              //      
              //           type: 'POST',
              //           data:data,
              //            success: function(data) {
                           
              //                    myDropzone.processQueue();
              //                    window.setTimeout('location.reload()', 3000);
              //           }
                        
              //       });




            });

</script>

@endsection