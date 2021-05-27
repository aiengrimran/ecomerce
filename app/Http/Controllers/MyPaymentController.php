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
    public function checkout(){
        return view('showProducts.Checkout',['cartTotal'=> Cart::instance('cart')->total(),'subTotal'=>Cart::instance('cart')->subTotal()]);
    }
    public function savePaymentDetails(Request $request){
        return $request->name;
    }
}
