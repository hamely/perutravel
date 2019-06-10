<!-- Privilege Field -->
<div class="form-group col-sm-2">
    {!! Form::label('privilege', 'Privilege:') !!}
        
    @if($opcion==0)
        {!! Form::select('privilege',['admin' => 'admin','comprador'=>'comprador','editor'=>'editor'],'admin',['class'=>'form-control']) !!}
    @else
        {!! Form::select('privilege',['admin' => 'admin','comprador'=>'comprador','editor'=>'editor'],$userController->nombre,['class'=>'form-control']) !!}
    @endif
    
  {{--    {!! Form::text('privilege', null, ['class' => 'form-control']) !!}
 --}}
</div>

<!-- Name Field -->
<div class="form-group col-sm-2">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-2">
    {!! Form::label('Apellido completo', 'Apellido completo:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::label('Documento', 'Documento') !!}
   {{--  {!! Form::text('document', null, ['class' => 'form-control']) !!} --}}
   {!! Form::select('document',['DNI' => 'DNI','PASAPORTE'=>'PASAPORTE'],'document',['class'=>'form-control']) !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::label('Numero', 'Numero') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::label('country', 'country') !!}
   
    {!! Form::select('country',['ESPAÑOL' => 'ESPAÑOL','INGLES'=>'INGLES'],'country',['class'=>'form-control']) !!}
</div>


<!-- Language Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('language', 'Language :') !!}
    
     @if($opcion==0)
        <select class="form-control" name="lenguage" id="lenguage"> 
             @foreach($lenguage as $itemp)
                <option value="{{$itemp->id}}" > {!! $itemp->nombre !!}</option>
             @endforeach

        </select>
    @else
         <select class="form-control" name="lenguage" id="lenguage"> 
             @foreach($lenguage as $itemp)
                <option value="{{$itemp->id}}"  {{ ( $itemp->id == $userController->language_id) ? 'selected' : '' }}> {!! $itemp->nombre !!}</option>
             @endforeach

        </select>
    @endif

            
</div>


<!-- Email Field -->
<div class="form-group col-sm-3">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control','']) !!}
</div>
<div class="form-group col-sm-4">
    {!! Form::label('password', 'password') !!}
    {!! Form::text('Contrasenia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" style="text-align: center;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userControllers.index') !!}" class="btn btn-default">Cancel</a>
</div>
