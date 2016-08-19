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
	            <h2>Permission Management</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('permission-create')
	            <a class="btn btn-success" href="{{ route('permissions.create') }}"><i class="fa fa-btn fa-plus" aria-hidden="true"></i>Create New Permission</a>
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
	@foreach ($permissions as $key => $permission)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $permission->display_name }}</td>
		<td>{{ $permission->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}"><i class="fa fa-btn fa-eye" aria-hidden="true"></i>Show</a>
			@permission('permission-edit')
			<a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-btn fa-pencil" aria-hidden="true"></i>Edit</a>
			@endpermission
			@permission('permission-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
            <button class="btn btn-danger"><i class="fa fa-btn fa-trash-o" aria-hidden="true"></i>Delete</button>
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $permissions->render() !!}
@endsection
