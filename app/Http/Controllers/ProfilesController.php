<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

use Illuminate\Support\Facades\Storage;

use File;

class ProfilesController extends Controller
{
    //
    public function create()
    {
    	return view('profiles.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

        $picture = new Profile();
        $picture->user_id = auth()->user()->id;
        $picture->mime = $image->getClientMimeType();
        $picture->original_filename = $image->getClientOriginalName();
        $picture->filename = $image->getFilename().'.'.$extension;
        $picture->save();

        return redirect()->route('twittes.index');
    }

}
