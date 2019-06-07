@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categoria Blog
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'categoriaBlogs.store']) !!}

                        @include('categoria_blogs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
