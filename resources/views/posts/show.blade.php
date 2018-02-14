@extends('layouts.master')
@section('content')
<div class="col-md-8 blog-main">
	<hr>
	<h1>{{$post->title}}</h1>
	<p>{{$post->body}}</p>
<hr>
	<div class="comments">
		<ul class="list-group">
			@foreach($post->comment as $comment)
			<li class="list-group-item"> 
				<strong>{{$comment->created_at->diffForHumans()}}: </strong>
				{{$comment->body}}
			 </li>
			@endforeach
		</ul>
	</div>
	<hr>
	<form class="form-group" method="POST" action="/posts/{{$post->id}}/comments">
		{{ csrf_field() }}
		<div class="card">
		<div class="card-block">
				<textarea class="form-control" name="body" placeholder="Add you comment" required></textarea>	
		</div>
		</div>	
		<div class="form-group">
    		<button type="submit" class="btn btn-primary">Add comment</button>
  		</div>
  	</form>
  	@include('layouts.errors') 	  

</div>	
@endsection