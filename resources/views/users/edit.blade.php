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
	            <h2>Edit User</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary " href="{{ route('users.index') }}"><i class="fa fa-btn fa-arrow-left" aria-hidden="true"></i>Back</a>
	        </div>
	    </div>
	</div>
	{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
	<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
            <strong>Current Password:</strong>
            {!! Form::password('current_password', array('placeholder' => 'Current Password','class' => 'form-control')) !!}
            @if ($errors->has('current_password'))
                <span class="help-block">
                    <strong>{{ $errors->first('current_password') }}</strong>
                </span>
            @endif
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <strong>User Name:</strong>
                    {!! Form::text('username', null, array('placeholder' => 'User Name','class' => 'form-control', 'disabled' => 'disabled')) !!}
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
          </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <strong>Email:</strong>
                {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <strong>Confirm Password:</strong>
                {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                <strong>Role:</strong>
                <br/>
                @foreach($role as $value)
                	<label>{{ Form::checkbox('role[]', $value->id, in_array($value->id, $userRoles) ? true : false, array('class' => 'name')) }}
                	{{ $value->display_name }}</label>
                	<br/>
                @endforeach
                @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary "><i class="fa fa-btn fa-floppy-o" aria-hidden="true"></i>Save</button>
        </div>
	</div>
	{!! Form::close() !!}
@endsection
