<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Redirect;

class TagController extends Controller
{
    public function index()
    {
        return view('inputtag');
    }


    public function tagCheck(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|max:255',
        ]);

        $tag = Tag::where('code', $request->code)->first();

        if ($tag) {
            return "yessir";
        } else {
            return Redirect::back()->withErrors(['msg' => 'Die code hebben we niet gevonden']);
        }
    }
}
