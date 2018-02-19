@extends('layouts.app')

@section('content')
	<form action="/board/{{$board->id}}" method="post">
		{{ method_field('patch') }}
		{{ csrf_field() }}
		<table class="table table-hover table-bordered">
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="{{ $board->title }}"></td>
				
			</tr>
			<tr>
				<td>Body</td>
				<td><input type="text" name="body" value="{{ $board->body }}"></td>
			</tr>
		</table>

		<button class="btn btn-default" style="display: block; margin-left: auto; margin-right: auto; width: 100px;">Modify Contents</button>
	</form>

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
@endsection