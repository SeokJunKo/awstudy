@extends('layouts.app')

@section('content')
<div style="width: 80%; display: block; margin-left: auto; margin-right: auto;">
	<table class="table table-hover table-bordered">
		<tr>
			<td>Title</td>
			<td>Body</td>
		</tr>
		<tr>
			<td>{{$board->title}}</td>
			<td>{{$board->body}}</td>
		</tr>

	</table>

	<div style="float: right;">
		<a class="btn btn-default" href="/board/{{$board->id}}/edit">Modify</a>
		<a class="btn btn-danger" href="/board/{{$board->id}}/destroy">Delete</a>
	</div>
</div>
@endsection