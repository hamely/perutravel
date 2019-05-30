<div class="table-responsive">
    <table class="table" id="testimonios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Path</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Abbr</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($testimonios as $testimonio)
            <tr>
                <td>{!! $testimonio->nombre !!}</td>
            <td>{!! $testimonio->path !!}</td>
            <td>{!! $testimonio->descripcion !!}</td>
            <td>{!! $testimonio->fecha !!}</td>
            <td>{!! $testimonio->estado !!}</td>
            <td>{!! $testimonio->abbr !!}</td>
                <td>
                    {!! Form::open(['route' => ['testimonios.destroy', $testimonio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('testimonios.show', [$testimonio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('testimonios.edit', [$testimonio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
