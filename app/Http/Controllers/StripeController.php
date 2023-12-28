<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('products.checkout');
    }

    public function Session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";
 
        $Session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
 
        return redirect()->away($Session->products.Session);
    }
 
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
    
}

