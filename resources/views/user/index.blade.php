@extends('layouts.app')

@section('content')
<!-- Nav tabs -->

<div class="tab-content">
  	<div role="tabpanel" class="tab-pane active" id="home">
		<div class="container">
			<br>
			<table class="table table-hover table-bordered">
				<thead class="thead-dark">
          <tr>
            <td scope="col">#</td>
  					<th scope="col">Name</td>
  					<th scope="col">Email</td>
  				</tr>
        </thead>
        <tbody>
				@foreach($users as $user)
					<tr>
            <td>{{ $user->id }}</td>
						<td><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
						<td>{{ $user->email }}</td>
					</tr>
				@endforeach
        </tbody>
			</table>
			<a class="btn btn-default" style="float: right;" href="/user/create">Add User</a>
      <br>
      <div align="center">{{ $users->links() }}</div>
		</div>
	</div>
</div>

@endsection
