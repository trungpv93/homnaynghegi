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
	            <h2>User Management</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('user-create')
	            <a class="btn btn-success " href="{{ route('users.create') }}"><i class="fa fa-btn fa-plus" aria-hidden="true"></i>Create New User</a>
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
			<th>User Name</th>
      <th>Email</th>
      <th>Last online at</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($users as $key => $user)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $user->name }}</td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->email }}</td>
		<td>{{ $user->last_online_at }}</td>
		<td>
			<a class="btn btn-info " href="{{ route('users.show',$user->id) }}"><i class="fa fa-btn fa-eye" aria-hidden="true"></i>Show</a>
			@permission('user-edit')
			<a class="btn btn-primary " href="{{ route('users.edit',$user->id) }}"><i class="fa fa-btn fa-pencil" aria-hidden="true"></i>Edit</a>
			@endpermission
			@permission('user-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            <button class="btn btn-danger "><i class="fa fa-btn fa-trash-o" aria-hidden="true"></i>Delete</button>
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $users->render() !!}
@endsection
