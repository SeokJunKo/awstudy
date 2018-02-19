@extends('layouts.app')

@section('content')
	<form id="myform" name="myform" action="/user" method="post">
		{{csrf_field()}}
		<table class="table table-hover table-bordered">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"  value="{{ old('name') }}" minlength="2" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{ old('email') }}" minlength="2" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" minlength="2" required></td>
			</tr>

		</table>

		<button class="btn btn-default" style="display: block; margin-left: auto; margin-right: auto; width: 100px;">Add User</button>
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

@section('script')
	<script type="text/javascript">
		$("#myform").validate();
	</script>
@endsection