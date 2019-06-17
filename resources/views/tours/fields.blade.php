
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

<div class="form-group col-sm-6">
    <!-- {!! Form::label('multimedia_id', 'Multimedia Id:') !!}
    {!! Form::text('md', null, ['class' => 'form-control']) !!} -->
    {!! Form::label('Categoria', 'Categoria:') !!}
        <select id="categoria_id" name="categoria_id" class='form-control'>
            @foreach($dataCategoria as $item )
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
    <button type="button"  style="text-align: center;" class="btn btn-success" id="btnUpload" name="btnUpload">Guardar </button>
    <a href="{!! route('tours.index') !!}" class="btn btn-default">Cancelar</a>
</div>

