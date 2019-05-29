@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Multimedia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($multimedia, ['route' => ['multimedia.update', $multimedia->id], 'method' => 'patch']) !!}

                        @include('multimedia.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection