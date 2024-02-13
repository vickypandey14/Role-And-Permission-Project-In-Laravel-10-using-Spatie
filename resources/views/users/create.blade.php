@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-light">
                    <h5 class="card-header d-flex justify-content-between align-items-center">
                        Create New User
                        <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="bi bi-arrow-left"></i> Go Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger mt-3">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <div class="form-group mt-3">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Enter User Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group mt-3">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Enter User Email','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group mt-3">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Enter User Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group mt-3">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Enter Confirm Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group mt-3">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
