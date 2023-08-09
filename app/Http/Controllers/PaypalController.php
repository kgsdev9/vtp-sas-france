<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
class PaypalController extends Controller
{

    public function processTransaction(Request $request) {

        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",

            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => $total_cart,
                    ]
                    ],

            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('stripeforms')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('stripeforms')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }



    public function successTransaction(Request $request)
    {
        return view('orders.success');
    }



    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('stripeforms')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }


    public function sandboxpaypal() {
        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };



        return view('orders.checkout.index', compact('total_cart', 'sesion'));
    }



}
