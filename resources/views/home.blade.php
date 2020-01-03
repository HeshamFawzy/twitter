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
    <h1 class="text-center">Twittes</h1>
    @if(count($twittes) > 0)
        @foreach($twittes as $twitte)
        <div class="col-8 m-auto card">
                  <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="float-left">{{$twitte->body}}</p>
                    </blockquote>
                    <p class="float-right">Created_at : <span>{{$twitte->created_at}}</span></p>
                    <p class="float-left">{{$twitte->name}}</p>
                  </div>
                </div>
                <br>
        @endforeach
    @endif
@endsection
