@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> View User Details</h2>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;" class="card bg-dark text-light">
        <div class="card-header border-bottom">
            <h4 class="text-success">User Details</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><i class="bi bi-record"></i> ID:</strong>
                        {{ $user->id }}
                    </div>
                    <hr>
                </div>
                <div class="col-xs-12 mt-1 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><i class="bi bi-person"></i> Name:</strong>
                        {{ $user->name }}
                    </div>
                    <hr>
                </div>
                <div class="col-xs-12 mt-1 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><i class="bi bi-envelope"></i> Email:</strong>
                        {{ $user->email }}
                    </div>
                    <hr>
                </div>
                <div class="col-xs-12 mt-1 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><i class="bi bi-person-workspace"></i> User Role:</strong>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-grid mt-3">
                <a class="btn btn-primary" href="{{ route('users.index') }}"><i class="bi bi-arrow-left"></i> Go To Previous Page</a>
            </div>
        </div>
    </div>
</div>

@endsection