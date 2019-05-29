<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Ubigeo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ubigeo', 'Id Ubigeo:') !!}
    {!! Form::text('id_ubigeo', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_categoria', 'Categoria:') !!}
    {!! Form::select('id_categoria', $Categoria, ['class' => 'form-control']) !!}
</div>

<!-- Id Tipo Alojamiento Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id_tipo_alojamiento', 'Id Tipo Alojamiento:') !!}
    {!! Form::text('id_tipo_alojamiento', $tipo_alojamiento, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alojamientos.index') !!}" class="btn btn-default">Cancel</a>
</div>
