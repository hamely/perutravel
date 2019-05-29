<div class="table-responsive">
    <table class="table" id="tipoHabitacions-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoHabitacions as $tipoHabitacion)
            <tr>
                <td>{!! $tipoHabitacion->name !!}</td>
            <td>{!! $tipoHabitacion->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['tipoHabitacions.destroy', $tipoHabitacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tipoHabitacions.show', [$tipoHabitacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tipoHabitacions.edit', [$tipoHabitacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
