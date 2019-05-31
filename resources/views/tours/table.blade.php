<div class="table-responsive">
    <table class="table" id="tours-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Img</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Principal</th>
        <th>Slug</th>
        <th>Multimedia Id</th>
        <th>Organizacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tours as $tours)
            <tr>
                <td>{!! $tours->nombre !!}</td>
            <td>{!! $tours->img !!}</td>
            <td>{!! $tours->descripcion !!}</td>
            <td>{!! $tours->estado !!}</td>
            <td>{!! $tours->principal !!}</td>
            <td>{!! $tours->slug !!}</td>
            <td>{!! $tours->nombremultimedia !!}</td>
            <td>{!! $tours->organizacion !!}</td>
                <td>
                    {!! Form::open(['route' => ['tours.destroy', $tours->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tours.show', [$tours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tours.edit', [$tours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
