@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tours
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tours, ['route' => ['tours.update', $tours->id], 'method' => 'patch']) !!}

                        @include('tours.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection