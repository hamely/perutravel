<div class="table-responsive">
    <table class="table" id="userControllers-table">
        <thead>
            <tr>
                <th>Privilege</th>
        <th>Name</th>
        <th>Description</th>
        <th>Language Id</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userControllers as $userController)
            <tr>
                <td>{!! $userController->privilege !!}</td>
            <td>{!! $userController->name !!}</td>
            <td>{!! $userController->description !!}</td>
            <td>{!! $userController->language_id !!}</td>
            <td>{!! $userController->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['userControllers.destroy', $userController->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('userControllers.show', [$userController->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('userControllers.edit', [$userController->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
