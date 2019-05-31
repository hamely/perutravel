<div class="table-responsive">
    <table class="table" id="tipoCategoriaTours-table">
        <thead>
            <tr>
                <th>Lenguaje Id</th>
        <th>Nombre</th>
        <th>Alias</th>
        <th>Slug</th>
        <th>Estado</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoCategoriaTours as $tipoCategoriaTour)
            <tr>
            <td>{!! $tipoCategoriaTour->nombreleng !!}</td>
            <td>{!! $tipoCategoriaTour->nombre !!}</td>
            <td>{!! $tipoCategoriaTour->alias !!}</td>
            <td>{!! $tipoCategoriaTour->slug !!}</td>
            <td>{!! $tipoCategoriaTour->estado !!}</td>
            <td>{!! $tipoCategoriaTour->descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['tipoCategoriaTours.destroy', $tipoCategoriaTour->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tipoCategoriaTours.show', [$tipoCategoriaTour->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tipoCategoriaTours.edit', [$tipoCategoriaTour->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
