@extends('layouts.app')


@section('content')
<div class="col-sm-6 mt-5 mx-auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit This Role</h2>
            </div>
        </div>
    </div>
    <hr>

    <div class="mt-3">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
    </div>


    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="row">
        <div class="card shadow">
            <div class="card-header">
                <h5 class="d-flex justify-content-between align-items-center">
                    Role Details
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="bi bi-arrow-left"></i> Go Back</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <div class="form-group">
                        <strong>Role Permission:</strong>
                        <br/>
                        <hr>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-grid mt-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}


@endsection