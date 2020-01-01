@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row people">
                <div class="box col-4 text-center"><img src="{{ asset('images/followers.png')}}" class="rounded-circle" 
                	style="height: 300px" />
                    <h3 class="name text-center"><a href="#">Followers</a></h3>
                </div>
                <div class="box col-4 text-center"><img src="{{ asset('images/At_sign.png')}}" class="rounded-circle" style="height: 300px" />
                    <h3 class="name text-center"><a href="{{url('/utwittes')}}">Your Twittes</a></h3>
                </div>
                <div class="box col-4 text-center"><img src="{{ asset('images/followers.png')}}" class="rounded-circle" style="height: 300px" />
                    <h3 class="name text-center"><a href="#">Following</a></h3>
                </div>
        </div>
    </div>
@endsection
