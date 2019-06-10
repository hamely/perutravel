<div class="table-responsive">
    <table class="table" id="inicio">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
                <th colspan="1">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($multimedia as $multimedia)
            <tr>
                <td>{!! $multimedia->nombre !!}</td>
            <td>{!! $multimedia->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['multimedia.destroy', $multimedia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('multimedia.show', [$multimedia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('multimedia.edit', [$multimedia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
