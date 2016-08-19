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
	            <h2>Role Management</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('role-create')
	            <a class="btn btn-success" href="{{ route('roles.create') }}"><i class="fa fa-btn fa-plus" aria-hidden="true"></i>Create New Role</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Description</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($roles as $key => $role)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $role->display_name }}</td>
		<td>{{ $role->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-btn fa-eye" aria-hidden="true"></i>Show</a>
			@permission('role-edit')
			<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-btn fa-pencil" aria-hidden="true"></i>Edit</a>
			@endpermission
			@permission('role-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            <button class="btn btn-danger"><i class="fa fa-btn fa-trash-o" aria-hidden="true"></i>Delete</button>
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $roles->render() !!}
@endsection
