<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Purchase;
use Illuminate\Http\Request;



class MyPaymentController extends Controller
{
    public function stripePost(Request $request)

    {
         

        Stripe::setApiKey(env('STRIPE_SECRET'));

        Charge::create ([

                "amount" => 100 * 100,

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
}
