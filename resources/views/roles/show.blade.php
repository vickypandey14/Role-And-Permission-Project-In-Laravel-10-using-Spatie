@extends('layouts.app')


@section('content')
<div class="col-sm-6 mt-5 mx-auto">
    <div class="row">
        <div class="pull-left">
            <h2> Show Role and its details</h2>
        </div>
    </div>
    <hr>


    <div class="row">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h5 class="d-flex justify-content-between align-items-center">
                    Role Details
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"><i class="bi bi-arrow-left"></i> Go Back</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role Name:</strong>
                        {{ $role->name }}
                    </div>
                </div>
                <hr>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role Permissions:</strong>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label label-success">{{ $v->name }},</label>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection