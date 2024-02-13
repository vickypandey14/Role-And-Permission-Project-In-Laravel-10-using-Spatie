@extends('layouts.app')


@section('content')
<div class="col-sm-11 mx-auto">
    <div class="row">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-outline-success" href="{{ route('roles.create') }}"><i class="bi bi-plus"></i> Add New Role</a>
            @endcan
        </div>
    </div>

    <hr>
    <div class="mt-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>

    <div class="table-responsive">
        <table class="table table-striped shadow table-bordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">View</a>
                        @can('role-edit')
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        @endcan
                        @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Are you sure you want to delete this role?")']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}                    
                        @endcan
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
          
          
          {!! $roles->render() !!}
    </div>
</div>


@endsection