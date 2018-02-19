@extends('layouts.app')

@section('content')
	<form action="/user/{{$user->id}}" method="post">
		{{ method_field('patch') }}
		{{ csrf_field() }}
		<table class="table table-hover table-bordered">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{ $user->name }}"></td>
				
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{ $user->email }}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{ $user->password }}"></td>
			</tr>

		</table>

		<button class="btn btn-default" style="display: block; margin-left: auto; margin-right: auto; width: 100px;">Modify User</button>
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