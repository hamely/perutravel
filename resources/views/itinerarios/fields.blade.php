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

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tour Field -->

    <!-- {!! Form::label('id_tour', 'Id Tour:') !!} -->
    {!! Form::hidden('id_tour',$id, ['class' => 'form-control']) !!}


<!-- Id Alojamiento Field -->
<div class="form-group col-sm-6">
    <!-- {!! Form::label('id_alojamiento', 'Id Alojamiento:') !!}
    {!! Form::text('id_alojamiento', null, ['class' => 'form-control']) !!} -->
    {!! Form::label('id_alojamiento', 'Alojamiento:') !!}
        <select id="id_alojamiento" name="id_alojamiento" class='form-control'>
            @foreach($alojamientos as $item )
              @if($opcion==0)
                <option value="{{$item->id}}">{{$item->nombre}}</option>
              @else
                 <option value="{{$item->id}}" {{ ($item->id == $tours->id_alojamiento) ? 'selected': ''}} >{{$item->nombre}}</option>
              @endif
               
            @endforeach
        </select>
</div>

<!-- Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia', 'Dia:') !!}
    {!! Form::text('dia', $nuevoNumeroDia, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('itinerarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
        $('#descripcion').summernote();
    });
  </script>
  @endsection