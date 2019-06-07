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


<div class="form-group col-sm-12">
    <!-- {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!} -->
    <button type="submit" class="btn btn-success" id="submit" >Save</button>
    <a href="{!! route('multimedia.index') !!}" class="btn btn-default">Cancelar</a>
</div>


