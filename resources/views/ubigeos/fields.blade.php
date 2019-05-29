<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provincia', 'Provincia:') !!}
    {!! Form::text('provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Distrito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distrito', 'Distrito:') !!}
    {!! Form::text('distrito', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ubigeos.index') !!}" class="btn btn-default">Cancel</a>
</div>
