<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Twitte;

class TwittesController extends Controller
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
        $twittes = Twitte::orderBy('created_at', 'desc')->get()->where('user_id' , $id);
        return view('twittes.index')->with('twittes', $twittes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('twittes.create');
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
        $id = \Auth::user()->id;

        $twitte = new Twitte;
        $twitte->body = $request->input('body');
        $twitte->user_id = $id;

        $twitte->save();

        return redirect('/utwittes');
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
        $twitte = Twitte::find($id);
        return view('twittes.show')->with('twitte', $twitte);
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
        $twitte = Twitte::find($id);
        $twitte->delete();

        return redirect('/utwittes');
    }
}
