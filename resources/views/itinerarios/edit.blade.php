@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Itinerarios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($itinerarios, ['route' => ['itinerarios.update', $itinerarios->id], 'method' => 'patch']) !!}

                        @include('itinerarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection