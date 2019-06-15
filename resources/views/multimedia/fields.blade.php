<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-12" style="text-align: center;">
    <button type="submit" class="btn btn-success" id="submit" >Subir multimedia</button>
    <button type="button"  style="text-align: center;" class="btn btn-success" id="btnUpload" name="btnUpload">Guardar </button>
    <a href="{!! route('multimedia.index') !!}" class="btn btn-default">Cancelar</a>
</div>


