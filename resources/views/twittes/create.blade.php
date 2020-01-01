@extends('layouts.app')

@section('content')
<div class="container col-6 card p-4">
	<form method="post" action="{{url('/store')}}" enctype="multipart/form-data">
	    @csrf
	    <h1 class="text-center">Post a Twitte</h1>
	    <div class="form-group">
	        <label for="caption" class="h4">Twitte :</label>
	        <input type="text" class="form-control" name="body" />
	    </div>
	      <div class="form-group">
	        <input type="submit" class="btn btn-primary float-right" name="submit"/>
	    </div>
	</form>
</div>
@endsection
