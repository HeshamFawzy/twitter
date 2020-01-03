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
				<div class="col-8 m-auto card" id="{{$user->id}}">
				  <div class="card-body"> 
				    <blockquote class="blockquote">
				    	<p class="text-center">{{$user->email}}</p>
    					<button class="postbutton btn btn-primary float-right" value="{{$user->id}}">Follow</button> 
				    </blockquote>
				  </div>
				</div>
				<br>
			@endforeach
		@endif
		</div>
	</div>
	<script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $("button").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/follow',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, message:$(this).val()},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $("#"+data.msg+"").hide();
                    }
                }); 
            });
       });    
    </script>
@endsection
