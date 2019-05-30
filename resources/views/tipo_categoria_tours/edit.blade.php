@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Categoria Tour
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoCategoriaTour, ['route' => ['tipoCategoriaTours.update', $tipoCategoriaTour->id], 'method' => 'patch']) !!}

                        @include('tipo_categoria_tours.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection