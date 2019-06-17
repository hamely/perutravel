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
                  
                         {!! Form::open(['route' => 'multimedia.storeImagen','id'=>'dropzone','class'=>'dropzone']) !!}
                                  <input type="text" name="id" id="id">
                               {!! Form::close() !!}

                        <br>

                   {!! Form::open(['id'=>'form-crearEntradaMultimedia','class'=>'form-crearEntrada']) !!}

                        @include('multimedia.fields')

                     {!! Form::close() !!}     

                        </div>
           
                    </div>

                <div class="row">
                  
                  
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
 <script>
      

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

           $('#btnUploadMultimedia').on('click', function(e){
             e.preventDefault();
              var data = $('#form-crearEntradaMultimedia').serialize();
                     $.ajax({
                        url:'{{ route('multimedia.contenidoMultimedia') }}',
                        type: 'POST',

                        data:data,
                         success: function(data) {
                                $("#id").val(data.id);
                                 // myDropzone.processQueue();
                                 // window.setTimeout('location.reload()', 3000);
                        }
                        
                    });




            });

        //      $('#btnUpload').on('click', function(e){

        //         e.preventDefault();
        //         var data = $('#form-crearEntrada').serialize();

        //          $.ajax({
        //           url:'{{ route('blog.contenido') }}',
        //             type: 'POST',
        //             data:data,
        //              success: function(data) {
                       
        //                      console.log(data);
        //                      myDropzone.processQueue();
        //                     window.setTimeout('location.reload()', 3000);
        //             }
                    
        //         });

        // });

</script>

@endsection