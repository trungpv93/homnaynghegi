@extends('layouts.app')

@section('CUSTOM_CSS')
    <link href="{{ asset("assets/css/app.css") }}" rel="stylesheet">
@endsection

@section('CUSTOM_JS')

@endsection

@section('before_container')

@endsection

@section('content')
<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Show User</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary " href="{{ route('users.index') }}"><i class="fa fa-btn fa-arrow-left" aria-hidden="true"></i>Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Name:</strong>
                {{ $user->username }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last online at:</strong>
                {{ $user->last_online_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roles:</strong>
                @if(!empty($userRoles))
					@foreach($userRoles as $v)
						<label class="label label-success">{{ $v->display_name }}</label>
					@endforeach
				@endif
            </div>
        </div>
	</div>
@endsection
