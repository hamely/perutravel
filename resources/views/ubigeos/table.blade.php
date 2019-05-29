<div class="table-responsive">
    <table class="table" id="ubigeos-table">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Departamento</th>
        <th>Provincia</th>
        <th>Distrito</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ubigeos as $ubigeo)
            <tr>
                <td>{!! $ubigeo->codigo !!}</td>
            <td>{!! $ubigeo->departamento !!}</td>
            <td>{!! $ubigeo->provincia !!}</td>
            <td>{!! $ubigeo->distrito !!}</td>
                <td>
                    {!! Form::open(['route' => ['ubigeos.destroy', $ubigeo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ubigeos.show', [$ubigeo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('ubigeos.edit', [$ubigeo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
