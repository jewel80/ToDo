@extends('todo.app')
@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<center><h1>To Do lists</h1></center>

		<form class="form-horizontal" action="/todo" method="POST">
		 {{ csrf_field() }}
		  <fieldset>

		    <div class="form-group">
		      <div class="col-lg-10">
		         <input type="text" name="title" placeholder="Title" class="form-control">
		      </div>
		    </div>

		    <div class="form-group">
		      <div class="col-lg-10">
		        <textarea class="form-control" rows="5" name="body" placeholder="Body"></textarea>
		      </div>
		    </div>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <button type="submit" class="btn btn-success">Submit</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
		<div class="alert-danger">
			<center>
				@if (count($errors)>0)
					@foreach ($errors ->all() as $error)
						{{$error}}
			        @endforeach
		    	@endif
	    	</center>
	    </div>
	</div>

@endsection