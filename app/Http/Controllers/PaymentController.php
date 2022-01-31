<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session as CheckoutSession;

class PaymentController extends Controller
{
    public function createStripeSession(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_51KMC9tK7QF0mzNvAEWocQgNze2w6nDG4xtl2EqOmR8R3aWJ8xSSTCstvsfd15LSzvM5GI3EusP2MadeFOi25h24300bLLXBxQv');

        $session = CheckoutSession::create([
            'success_url' => 'https://profieltag.nl?payment=success',
            'cancel_url' => 'https://profieltag.nl?payment=failed',
            'line_items' => [[
                'price' => 'price_1KMCGWK7QF0mzNvAbDwciJsX',
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'locale' => 'nl',
            'shipping_address_collection' => [
                'allowed_countries' => ['NL'],
            ],
            'payment_method_types' => ['ideal', 'card']
        ]);

        return redirect($session->url);
    }
}
