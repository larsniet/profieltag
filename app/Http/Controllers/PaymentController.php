<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session as CheckoutSession;

class PaymentController extends Controller
{
    public function index()
    {
        return view('checkout');
    }
    public function createStripeSession(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_51KMC9tK7QF0mzNvAEWocQgNze2w6nDG4xtl2EqOmR8R3aWJ8xSSTCstvsfd15LSzvM5GI3EusP2MadeFOi25h24300bLLXBxQv');

        return CheckoutSession::create([
            'line_items' => [[
                'price' => 'price_1KMCGWK7QF0mzNvAbDwciJsX',
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'locale' => 'nl',
            'payment_method_types' => ['ideal'],
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
        ]);
    }
}
