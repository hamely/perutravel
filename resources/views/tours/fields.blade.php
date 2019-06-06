<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  
 
</head>
<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<!-- Multimedia Id Field -->
<div class="form-group col-sm-6">
    <!-- {!! Form::label('multimedia_id', 'Multimedia Id:') !!}
    {!! Form::text('multimedia_id', null, ['class' => 'form-control']) !!} -->
    {!! Form::label('multimedia_id', 'Multimedia:') !!}
        <select id="multimedia_id" name="multimedia_id" class='form-control'>
            @foreach($multimedia as $item )
              @if($opcion==0)
                <option value="{{$item->id}}">{{$item->nombre}}</option>
              @else
                 <option value="{{$item->id}}" {{ ($item->id == $tours->multimedia_id) ? 'selected': ''}} >{{$item->nombre}}</option>
              @endif
               
            @endforeach
        </select>
</div>
   
<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('organizacion', 'Organizacion:') !!}
    {!! Form::textarea('organizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" style="text-align: center;">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tours.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
        $('#organizacion').summernote();
    });
  </script>
  @endsection