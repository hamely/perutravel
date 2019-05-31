<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::text('img', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Principal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('principal', 'Principal:') !!}
    {!! Form::text('principal', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
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

<!-- Organizacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('organizacion', 'Organizacion:') !!}
    {!! Form::textarea('organizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tours.index') !!}" class="btn btn-default">Cancel</a>
</div>
