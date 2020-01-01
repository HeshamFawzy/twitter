@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				<h4><a href="{{ route('twittes.create')}}" class="float-right"><i class="fas fa-plus"></i> Create New</a></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-12">
		@if(count($twittes) > 0)
			@foreach($twittes as $twitte)
				<div class="col-8 m-auto card">
				  <div class="card-body">
				    <blockquote class="blockquote">
				    	<p class="float-left">{{$twitte->body}}</p>
				      	<a href="{{ route('twittes.show', $twitte->id)}}" class="float-right">{{$twitte->due}}</a>
				    </blockquote>
				    <p class="float-right">Created_at : <span>{{$twitte->created_at}}</span></p>
				  </div>
				  <div>
					  <a href="{{ route('twittes.show', $twitte->id)}}" class="alert-warning">Show</a>
					  <a href="{{ route('twittes.destroy', $twitte->id)}}" class="alert-danger">Delete</a>
				  </div>
				</div>
				<br>
			@endforeach
		@endif
		</div>
	</div>
@endsection
