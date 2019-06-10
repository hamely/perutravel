<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userController->id !!}</p>
</div>

<!-- Privilege Field -->
<div class="form-group">
    {!! Form::label('privilege', 'Privilege:') !!}
    <p>{!! $userController->privilege !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $userController->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $userController->description !!}</p>
</div>

<!-- Language Id Field -->
<div class="form-group">
    {!! Form::label('language', 'Language:') !!}

    @foreach($lenguage as $itemp)

                    @if($itemp->id==$userController->language_id )
                         <p>{!! $itemp->nombre !!}</p>
                    @endif

     @endforeach
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $userController->email !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userController->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userController->updated_at !!}</p>
</div>

