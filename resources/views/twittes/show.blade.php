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
		<blockquote class="blockquote mb-0">
		</blockquote>
	</div>
</div>
@endsection