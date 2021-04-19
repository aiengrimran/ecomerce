<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    public function index() {
        $beds = Bed::get();

        return view('Beds', ['beds'=>$beds]);
        
    }
    public function removealldata(){
        Bed::truncate();
    }

    public function addtocart(Request $request) {
        $bed = Bed::find($request->id);
        $productOnCart=\Cart::add($bed->id, $bed->name, $bed->quantity, $bed->price, ['image'=>$bed->image]);
        return view('Cart', ['items'=> $productOnCart]);
    }

    public function get(){
        $pr=\Cart::content();

       $i =0;
        return view('Cart', ['items'=>$pr, 'i'=>$i]);
    }

    public function destroy() {
        Cart::destroy();

    }
}
