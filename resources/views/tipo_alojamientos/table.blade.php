<div class="table-responsive">
    <table class="table table-bordered table-hover dataTable" id="tipoAlojamientos-table" >
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoAlojamientos as $tipoAlojamiento)
            <tr>
                <td>{!! $tipoAlojamiento->name !!}</td>
            <td>{!! $tipoAlojamiento->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['tipoAlojamientos.destroy', $tipoAlojamiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tipoAlojamientos.show', [$tipoAlojamiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('tipoAlojamientos.edit', [$tipoAlojamiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
  $(function () {
    $('#tipoAlojamientos-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>