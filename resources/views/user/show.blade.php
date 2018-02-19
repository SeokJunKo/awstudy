@extends('layouts.app')

@section('content')
<div style="width: 80%; display: block; margin-left: auto; margin-right: auto;">
	<table class="table table-hover table-bordered">
		<tr>
			<td>Name</td>
			<td>Email</td>
		</tr>
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
		</tr>

	</table>

	<div style="float: right;">
		<a class="btn btn-default" href="/user/{{$user->id}}/edit">Modify</a>
		<a class="btn btn-danger" href="/user/{{$user->id}}/destroy">Delete</a>
	</div>
</div>
@endsection