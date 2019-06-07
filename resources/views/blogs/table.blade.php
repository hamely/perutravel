<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Usuario Id</th>
        <th>Categoria Blog Id</th>
        <th>Titulo</th>
        <th>Url</th>
        <th>Fechapublicacion</th>
        <th>Estado</th>
        <th>Contenido</th>
        <th>Contador</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{!! $blog->usuario_id !!}</td>
            <td>{!! $blog->categoria_blog_id !!}</td>
            <td>{!! $blog->titulo !!}</td>
            <td>{!! $blog->url !!}</td>
            <td>{!! $blog->fechaPublicacion !!}</td>
            <td>{!! $blog->estado !!}</td>
            <td>{!! $blog->contenido !!}</td>
            <td>{!! $blog->contador !!}</td>
                <td>
                    {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('blogs.show', [$blog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('blogs.edit', [$blog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
