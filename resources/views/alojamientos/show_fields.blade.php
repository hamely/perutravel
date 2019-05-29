<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $alojamiento->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $alojamiento->nombre !!}</p>
</div>

<!-- Id Ubigeo Field -->
<div class="form-group">
    {!! Form::label('id_ubigeo', 'Id Ubigeo:') !!}
    <p>{!! $alojamiento->id_ubigeo !!}</p>
</div>

<!-- Id Categoria Field -->
<div class="form-group">
    {!! Form::label('id_categoria', 'Id Categoria:') !!}
    <p>{!! $alojamiento->id_categoria !!}</p>
</div>

<!-- Id Tipo Alojamiento Field -->
<div class="form-group">
    {!! Form::label('id_tipo_alojamiento', 'Id Tipo Alojamiento:') !!}
    <p>{!! $alojamiento->id_tipo_alojamiento !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $alojamiento->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $alojamiento->updated_at !!}</p>
</div>

