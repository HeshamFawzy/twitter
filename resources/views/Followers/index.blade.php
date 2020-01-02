@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-4">
			<form action="/search" method="get">
				<div class="form-group">
					<label for="search">Search By Email :</label>
					<input type="search" name="search" class="form-control">
					<br>
					<span class="form-group-btn">
						<button type="submit" class="btn btn-primary">Search</button>
					</span>
				</div>
			</form>
		</div>
		<div class="col-12">
		@if(count($users) > 0)
			@foreach($users as $user)
				<div class="col-8 m-auto card">
				  <div class="card-body">
				    <blockquote class="blockquote">
				    	<p class="text-center">{{$user->email}}</p>
				    </blockquote>
				  </div>
				</div>
				<br>
			@endforeach
		@endif
		</div>
	</div>
@endsection
