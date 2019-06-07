<div class="table-responsive">
    <table class="table" id="categoriaBlogs-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoriaBlogs as $categoriaBlog)
            <tr>
                <td>{!! $categoriaBlog->nombre !!}</td>
            <td>{!! $categoriaBlog->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['categoriaBlogs.destroy', $categoriaBlog->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('categoriaBlogs.show', [$categoriaBlog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('categoriaBlogs.edit', [$categoriaBlog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
