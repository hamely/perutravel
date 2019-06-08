<div class="table-responsive">
    <table class="table" id="inicio">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Abrr</th>
        <th>Status</th>
                <th colspan="1">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($languages as $languages)
            <tr>
                <td>{!! $languages->nombre !!}</td>
            <td>{!! $languages->abrr !!}</td>
            <td>{!! $languages->status !!}</td>
                <td>
                    {!! Form::open(['route' => ['languages.destroy', $languages->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('languages.show', [$languages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('languages.edit', [$languages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
