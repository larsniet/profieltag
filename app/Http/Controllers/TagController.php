<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Redirect;
use Alert;

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
            Alert::error('Woops', 'Tag '.$tag.' hebben we niet gevonden!');
            return redirect()->back()->with('Woops', 'Tag '.$tag.' hebben we niet gevonden!');
        }
    }

    public function redirectToLink($code)
    {
        $tag = Tag::where('code', $code)->first();
        if ($tag && $tag->link) {
            return redirect($tag->link);
        }
        Alert::error('Woops', 'Die tag hebben we niet in ons systeem staan!');
        return redirect('/');
    }
}
