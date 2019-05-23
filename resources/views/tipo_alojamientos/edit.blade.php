@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Alojamiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAlojamiento, ['route' => ['tipoAlojamientos.update', $tipoAlojamiento->id], 'method' => 'patch']) !!}

                        @include('tipo_alojamientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection