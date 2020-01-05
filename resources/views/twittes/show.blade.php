@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col">
				<h4><a href="{{ route('twittes.index')}}" class="float-right"><i class="fa fa-angle-left"></i> Back To List</a></h4>
			</div>
		</div>
</div>
<br>
<div class="col-8 p-2 m-auto card">
	<div class="card-header">
		<p class="float-left">{{$twitte->body}}</p>
	</div>
	<div class="card-body">
		@foreach($comments as $comment)
			<div>
			    <div class="card-body alert-success">
			        <blockquote class="blockquote">
			            <p class="float-left">{{$comment->body}}</p>
			        </blockquote>
			        <p class="float-right">{{$comment->name}}</p>
			    </div>
			    <br>
			</div>
		@endforeach
	</div>
</div>
@endsection