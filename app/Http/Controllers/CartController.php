<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\Models\Bed;
class CartController extends Controller
{
    public function addtocart(Request $request) {
        $bed = Bed::find($request->id);
        $productOnCart=Cart::add($bed->id, $bed->name, $bed->quantity, $bed->price, ['image'=>$bed->image]);
        return back()->with('cartItem','cart item added to cart successfuly');
    }
    public function getCartItems(){
        $allProducts=Cart::content();
        $productsTotalNumber=count($allProducts);
       if($productsTotalNumber){          
            $subtotal= str_replace(',', '', Cart::subtotal());
            $tax = str_replace(',', '', Cart::tax());
            $total= str_replace(',', '',Cart::total());
            session()->flash('totalamount', $total);
            return view('Cart', ['items'=>$allProducts, 'total'=>$total, 'tax'=> $tax, 'subtotal'=>$subtotal]);
       }
      session()->flash('NototalItmes', 'No items Inside Cart');
      return view('Cart',['message'=>'dsds']);
    
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
}
