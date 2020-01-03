<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;
use DB;


class FollowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = \Auth::user()->id;
        $users = User::where('id', '!=', auth()->id())->get();
        return view('followers.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $users = DB::table('users')->orderBy('email', 'asc')->where([['email', 'like', '%' . $search . '%'], ['id', '!=', auth()->id()]])->paginate(5);
        return view('followers.index')->with('users', $users);
    }

    public function follow(Request $request)
    {
        //
        $user_id = \Auth::user()->id;
        $follower = new Follower;
        $follower->person_id = $user_id;
        $follower->follower_id = $request->message;

        $follower->save();
        $response = array(
          'status' => 'success',
          'msg' => $request->message,
        );
        return response()->json($response);
    }
}

