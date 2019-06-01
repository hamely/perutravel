@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Tours</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('tours.create') !!}">Crear</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('tours.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

@section('script')
<script>
$(document).ready(function() {
  $('#inicio').DataTable({
    "language": {
      "url": "/admin/idioma/Spanish.json"
    }
  });
});
</script>
 <script>
       Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
    </script>

@endsection
