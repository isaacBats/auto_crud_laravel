<table class="table table-hover users-table"  id="users-table">
    <thead>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>City</th>
        <th>Postal Code</th>
        <th>Country</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr class="table-row">
                <td>{!! $user->name !!}</td>
                <td>{!! $user->username !!}</td>
                <td>{!! $user->email !!}</td>
                <td>{!! $user->city !!}</td>
                <td>{!! $user->postal_code !!}</td>
                <td>{!! $user->country !!}</td>
                <td>
                    <a href="{!! route('users.show', [$user->id]) !!}" class="btn btn-primary"><i class="ion ion-eye"></i></a>
                </td>
                <td>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class="btn btn-warning"><i class="ion ion-edit"></i></a>
                </td>

                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="ion ion-ios-trash-outline"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
  </tbody>
</table>
