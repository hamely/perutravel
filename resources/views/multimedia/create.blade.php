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
                                   
                        <!-- {!! Form::open(['route' => 'multimedia.store','id'=>'dropzone','class'=>'dropzone']) !!}
                            

                            
                        {!! Form::close() !!} -->

                        {!! Form::open(['route' => 'multimedia.store','id'=>'dropzone','class'=>'dropzone']) !!}
                        @include('multimedia.fields')
                                <div class="dz-message" style="height:200px;">
                                   Subir multimedia
                                </div>
                      
                            <div class="dropzone-previews"></div>
                            
                    {!! Form::close() !!}

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
        Dropzone.options.myDropzone = {
            autoProcessQueue: true,
            uploadMultiple: true,
            maxFilezise: 30,
            maxFiles: 10,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };

</script>

@endsection