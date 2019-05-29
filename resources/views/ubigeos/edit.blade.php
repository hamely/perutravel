@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ubigeo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ubigeo, ['route' => ['ubigeos.update', $ubigeo->id], 'method' => 'patch']) !!}

                        @include('ubigeos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection