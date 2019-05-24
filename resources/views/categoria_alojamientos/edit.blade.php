@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categoria Alojamiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoriaAlojamiento, ['route' => ['categoriaAlojamientos.update', $categoriaAlojamiento->id], 'method' => 'patch']) !!}

                        @include('categoria_alojamientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection