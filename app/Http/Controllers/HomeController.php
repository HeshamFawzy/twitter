<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follower;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $followers_ids = DB::table('followers')
        ->select('follower_id')
        ->where('person_id' , '=', $id)
        ->get()
        ->pluck('follower_id')
        ->toArray();
        
        $twittes = DB::table('twittes')
        ->whereIn('user_id' , $followers_ids)
        ->join('users', 'users.id', '=', 'twittes.user_id')
        ->select('name', 'email', 'body' , 'twittes.created_at')
        ->get();

        return view('home')->with('twittes', $twittes);
    }
}
