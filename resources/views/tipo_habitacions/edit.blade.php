@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Habitacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoHabitacion, ['route' => ['tipoHabitacions.update', $tipoHabitacion->id], 'method' => 'patch']) !!}

                        @include('tipo_habitacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection