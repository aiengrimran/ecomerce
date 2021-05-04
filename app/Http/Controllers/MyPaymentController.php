<?php

namespace App\Http\Controllers;
use Cart;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Purchase;
use Illuminate\Http\Request;



class MyPaymentController extends Controller
{
    public function stripePost(Request $request)

    {
        $amount = intval(Cart::subtotal());
         

        Stripe::setApiKey(env('STRIPE_SECRET'));

        Charge::create ([

                "amount" => 100 * $amount,

                "currency" => "usd",
                

                "source" => $request->stripeToken,

                "description" => "thankyou your product has been sold" 

        ]);

        // $productSold = Purchase::create([
        //     'buyerName'=>'',
        //     'itemName'=> 'product 1',
        //     'price'=>400
        // ]);
        // \Session::flash('success', 'Payment successful!');
    return 'payment succssesfull';

    }
    public function int()
    {
        $amount= '102,212,212. 0';

        str_replace(',', '', $amount);
    }
}
