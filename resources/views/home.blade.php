@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row people">
                <div class="box col-6 text-center"><img src="{{ asset('images/followers.png')}}" class="rounded-circle" 
                	style="height: 300px" />
                    <h3 class="name text-center"><a href="{{ url('/followers')}}">Follow</a></h3>
                </div>
                <div class="box col-6 text-center"><img src="{{ asset('images/At_sign.png')}}" class="rounded-circle" style="height: 300px" />
                    <h3 class="name text-center"><a href="{{url('/utwittes')}}">Your Twittes</a></h3>
                </div>
        </div>
    </div>
@endsection
