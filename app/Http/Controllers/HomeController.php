<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->payment) {
            $payment = $request->payment;

            if ($payment === "success") {
                Alert::success('Betaling bevestigd', 'Je hebt succesvol betaald, verdere informatie volgt via de mail');
            } else {
                Alert::error('Woops', 'Sorry, er is iets fout gegaan bij het betalen');
            }
        }
        return view('home');
    }
}
