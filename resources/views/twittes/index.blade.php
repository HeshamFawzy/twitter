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
		<div class="col-2">
			@include('layouts.messages')
		</div>
		<div class="col-12">
		@if(count($twittes) > 0)
			@foreach($twittes as $twitte)
				<div class="col-8 p-2 m-auto card">
				  <div class="card-header">
				  	<p class="float-right">Created_at : <span>{{$twitte->created_at}}</span></p>
				  </div>
				  <div class="card-body">
				    <blockquote class="blockquote mb-0">
				    	<p class="float-left">{{$twitte->title}}</p>
				      	<a href="{{ route('twittes.show', $twitte->id)}}" class="float-right">{{$twitte->due}}</a>
				    </blockquote>
				  </div>
				</div>
				<br>
			@endforeach
		@endif
		</div>
	</div>
@endsection
