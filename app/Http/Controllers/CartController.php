<?php

namespace App\Http\Controllers;
use Cart;

use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart($id) {
        $bed = Good::find($id);
        $productOnCart=Cart::add($bed->id, $bed->title, $bed->qty, $bed->price, ['image'=>$bed->image]);
        session()->flash('itemAdded', true);
        return back()->with('cartItem',1);
    }
    public function getCartItems(){
        $allProducts=Cart::content();
        $productsTotalNumber=count($allProducts);
       if($productsTotalNumber){          
            $subtotal= str_replace(',', '', Cart::subtotal());
            $tax = str_replace(',', '', Cart::tax());
            $total= str_replace(',', '',Cart::total());
            session(['totalamount'=>$total,'productsTotalNumber'=>$productsTotalNumber]);
            return view('Cart', ['items'=>$allProducts, 'total'=>$total, 'tax'=> $tax, 'subtotal'=>$subtotal, 'productsTotalNumber'=>$productsTotalNumber]);
       }
      session()->flash('NototalItmes', 'No items Inside Cart');
      return view('Cart');
    
    }

    public function destroy() {
        Cart::destroy();

    }
    public function deleteCartItem($rowId){       
        Cart::remove($rowId);
        return redirect()->route('get.Cart.Items');  
    }

    public function updateCartItem(Request $request){
        Cart::update($request->rowId, $request->quantity);
        return back()->with('cartItemUpdated','cart item updated');
        
    }
    public function addToCartPost(Request $request){
        $qty = $request->quantity;
        $bed = Good::find($request->id);
        $productOnCart=Cart::add($bed->id, $bed->title, $qty, $bed->price, ['image'=>$bed->image]);
        session()->flash('itemAddedToCart', true);
        return redirect('getCartItems');

    }
   
}
