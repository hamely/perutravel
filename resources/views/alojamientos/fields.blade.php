<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Ubigeo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ubigeo', 'Ubigeo:') !!}

      <select id="id_ubigeo" name="id_ubigeo" class='form-control'>
            @foreach($ubigeo  as $item )
                @if($opcion==0)
                     <option value="{{$item->id}}"> {{$item->departamento}} - {{$item->provincia}} - {{$item->distrito}} </option>
                @else
                     <option value="{{$item->id}}"{{ ($item->id == $alojamiento->id_ubigeo ) ? 'selected': ''}} > {{$item->departamento}} - {{$item->provincia}} - {{$item->distrito}} </option>
                @endif
               
            @endforeach
        </select>

      
</div>
    
<!-- Id Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_categoria', 'Categoria:') !!}
        <select id="id_categoria" name="id_categoria" class='form-control'>
            @foreach($categoria as $item )
              @if($opcion==0)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @else
                 <option value="{{$item->id}}" {{ ($item->id == $alojamiento->id_categoria ) ? 'selected': ''}} >{{$item->name}}</option>
              @endif
               
            @endforeach
        </select>
               

</div>

<!-- Id Tipo Alojamiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_alojamiento', 'Tipo Alojamiento:') !!}
     <select id="id_tipo_alojamiento" name="id_tipo_alojamiento" class='form-control'>
            @foreach($tipo_alojamientos as $item )
               @if($opcion==0)
                  <option value="{{$item->id}}">{{$item->description}}</option>
               @else
                  <option value="{{$item->id}}"  {{ ($item->id == $alojamiento->id_tipo_alojamiento ) ? 'selected': ''}} >{{$item->description}}</option>
               @endif
              
            @endforeach
        </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alojamientos.index') !!}" class="btn btn-default">Cancel</a>
</div>
