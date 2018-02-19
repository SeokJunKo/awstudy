@extends('layouts.app')

@section('content')
	<form id="myform" name="myform" action="/board" method="post">
		{{csrf_field()}}
		<table class="table table-hover table-bordered">
			<tr>
				<td>Title</td>
				<td><input type="text" name="title"  value="{{ old('title') }}" minlength="2" required></td>
			</tr>
			<tr>
				<td>Body</td>
				<td><input type="text" name="body" value="{{ old('body') }}" minlength="10" required></td>
			</tr>
		</table>

		<button class="btn btn-default" style="display: block; margin-left: auto; margin-right: auto; width: 100px;">Add Contents</button>
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