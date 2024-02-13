@extends('layouts.app')

@section('content')
<div class="col-sm-11 mx-auto">
    <div class="row">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-left">
            <a class="btn btn-outline-success" href="{{ route('users.create') }}"><i class="bi bi-plus"></i> Add New User</a>
        </div>
    </div>
    
    <div class="mt-3">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    
    <hr>
    <div class="table-responsive mt-3">
        <table id="users_table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-dark">
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                        <label>{{ $v }}</label>
                        @endforeach
                    @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure you want to delete this user?")']) !!}
                {!! Form::close() !!}
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    
    {!! $data->render() !!}
</div>

@endsection