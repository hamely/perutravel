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
                    {!! Form::open(['route' => 'tipoCategoriaTours.store']) !!}

                        @include('tipo_categoria_tours.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
