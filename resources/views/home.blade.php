@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row people">
                <div class="box col-4 text-center"><img src="{{ asset('images/followers.png')}}" class="rounded-circle" 
                	style="height: 300px" />
                    <h3 class="name text-center"><a href="{{ url('/followers')}}">Follow</a></h3>
                </div>
                <div class="box col-4 text-center">
                    @if($profile ?? '')
                        <img src="{{url('uploads/'.$profile->filename)}}" class="rounded-circle" height="300" width="300">
                    @endif
                    <br>
                   <a href="{{ url('/createprofile')}}">Add Profile Picture</a>
                </div>
                <div class="box col-4 text-center"><img src="{{ asset('images/At_sign.png')}}" class="rounded-circle" style="height: 300px" />
                    <h3 class="name text-center"><a href="{{url('/utwittes')}}">Your Twittes</a></h3>
                </div>
        </div>
    </div>
    <h1 class="text-center">Twittes</h1>
    @if(count($twittes) > 0)
        @foreach($twittes as $twitte)
        <div class="col-8 m-auto card pb-4">
            <div class="card-body">
                <blockquote class="blockquote">
                    <p>
                        @if($twitte ?? '')
                            <img src="{{url('uploads/'.$twitte->filename)}}" class="rounded-circle" height="100">
                        @endif
                        </p>
                    <p class="float-left">{{$twitte->body}}</p>
                </blockquote>
                <p class="float-right">Created_at : <span>{{$twitte->created_at}}</span></p>
                <p class="float-left">{{$twitte->name}}</p>
            </div>
            <hr>
            <div class="text-center">
                <form method="post" action="{{url('/storecomment')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$twitte->user_id}}">
                    <input type="hidden" name="twitte_id" value="{{$twitte->id}}">
                    <input type="text" name="body" class="col-12 form-control d-inline" placeholder="Send a Replay" required="">
                    <hr>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-paper-plane"></i> Send
                    </button>
                </form>
            </div>
            <br>
            </div>
        <br>
        @endforeach
    @endif
@endsection
