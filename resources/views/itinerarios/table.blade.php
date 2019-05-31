<div class="table-responsive">
    <table class="table" id="itinerarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
        <th>Id Tour</th>
        <th>Id Alojamiento</th>
        <th>Dia</th>
        <th>Departamento</th>
        <th>Id Usuario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($itinerarios as $itinerarios)
            <tr>
                <td>{!! $itinerarios->nombre !!}</td>
            <td>{!! $itinerarios->descripcion !!}</td>
            <td>{!! $itinerarios->id_tour !!}</td>
            <td>{!! $itinerarios->id_alojamiento !!}</td>
            <td>{!! $itinerarios->dia !!}</td>
            <td>{!! $itinerarios->departamento !!}</td>
            <td>{!! $itinerarios->id_usuario !!}</td>
                <td>
                    {!! Form::open(['route' => ['itinerarios.destroy', $itinerarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('itinerarios.show', [$itinerarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('itinerarios.edit', [$itinerarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
