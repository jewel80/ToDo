@extends('todo.app')
@section('body')
	<br>
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-5 col-lg-offset-4">
		<center><h1>To Do lists</h1></center>
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>Title</th>
			      <th>Discribtion</th>
			      <th>Time</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach ($todos as $todo)
			     <tr class="danger">
			      <td>{{ ucfirst($todo->title) }}</td>
			      <td>{{ ucfirst($todo->body) }}</td>
			      <td>{{$todo->created_at->diffForHumans()}}</td>
			    </tr>
			  @endforeach
			  </tbody>
			</table> 
	</div>

@endsection