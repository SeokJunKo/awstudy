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
  					<th scope="col">Title</td>
  					<th scope="col">Body</td>
  				</tr>
        </thead>
        <tbody>
				@foreach($boards as $board)
					<tr>
            <td>{{ $board->id }}</td>
						<td><a href="/board/{{ $board->id }}">{{ $board->title }}</a></td>
						<td>{{ $board->body }}</td>
					</tr>
				@endforeach
        </tbody>
			</table>
			<a class="btn btn-default" style="float: right;" href="/board/create">Add Contents</a>
      <br>
      <div align="center">{{ $boards->links() }}</div>
		</div>
	</div>
</div>

@endsection
