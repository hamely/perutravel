<div class="table-responsive">
    <table class="table" id="inicio">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="1">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoriaAlojamientos as $categoriaAlojamiento)
            <tr>
                <td>{!! $categoriaAlojamiento->name !!}</td>
            <td>{!! $categoriaAlojamiento->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['categoriaAlojamientos.destroy', $categoriaAlojamiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('categoriaAlojamientos.show', [$categoriaAlojamiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('categoriaAlojamientos.edit', [$categoriaAlojamiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
