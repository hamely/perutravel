@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Controller
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userController, ['route' => ['userControllers.update', $userController->id], 'method' => 'patch']) !!}

                        @include('user_controllers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection