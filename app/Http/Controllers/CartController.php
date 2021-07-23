<?php

namespace App\Http\Controllers;
use Cart;

use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function addToCart($id) {
        $product = Good::find($id);
        $productOnCart=Cart::instance('cart')->add($product->id, $product->title, 1, $product->price, ['image'=>$product->image]);
        \toast('Item Added To Cart');
        session()->flash('itemAdded', true);
        return back()->with('cartItem',1);
    }
    public function getCartItems(){
        $allProducts=Cart::instance('cart')->content();
        $productsTotalNumber=count($allProducts);
       if($productsTotalNumber){          
            $subtotal= str_replace(',', '', Cart::subtotal());
            $tax = str_replace(',', '', Cart::tax());
            $total= str_replace(',', '',Cart::total());
            session(['totalamount'=>$total,'productsTotalNumber'=>$productsTotalNumber]);
            return view('Cart', ['items'=>$allProducts, 'total'=>$total, 'tax'=> $tax, 'subtotal'=>$subtotal, 'productsTotalNumber'=>$productsTotalNumber]);
       }
       toast('No items Inside Cart!','error');
      session()->flash('NototalItmes', 'No items Inside Cart');
      return view('Cart');
    
    }

    public function destroy() {
        Cart::instance('cart')->destroy();

    }
    public function deleteCartItem($rowId){       
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('get.Cart.Items');  
    }

    public function updateCartItem(Request $request){
        Cart::instance('cart')->update($request->rowId, $request->quantity);
        return back()->with('cartItemUpdated','cart item updated');
        
    }
    public function addToCartPost(Request $request){
        $qty = $request->quantity;
        $product = Good::find($request->id);
        $productOnCart=Cart::instance('cart')->add($product->id, $product->title, $qty, $product->price, ['image'=>$product->image]);
        session()->flash('itemAddedToCart', true);
        return redirect('getCartItems');

    }
    // favorite Items Crud
    public function addToCartFavorite($id) {
        $product = Good::find($id);
        Cart::instance('favorite')->add($product->id, $product->title, 1, $product->price, ['image'=>$product->image]);
        \toast('Item Added To Cart');
        session()->flash('itemAdded', true);
        return back()->with('cartItem',1);
        
    }
    
    public function getFavItems() {
        $allProducts=Cart::instance('favorite')->content();
        $productsTotalNumber=count($allProducts);
       if($productsTotalNumber){          
            $subtotal= str_replace(',', '', Cart::subtotal());
            $tax = str_replace(',', '', Cart::tax());
            $total= str_replace(',', '',Cart::total());
            session(['totalamount'=>$total,'productsTotalNumber'=>$productsTotalNumber]);
            return view('favorite.favorite', ['items'=>$allProducts, 'total'=>$total, 'tax'=> $tax, 'subtotal'=>$subtotal, 'productsTotalNumber'=>$productsTotalNumber]);
       }
       toast('No items Inside Cart!','error');
      session()->flash('NototalItmes', 'No items Inside Cart');
      return view('favorite.favorite');
    }
    public function moveToCart( $rowId, $id) {
        Cart::instance('favorite')->remove($rowId);
        $product=Good::find($id);
        Cart::instance('cart')->add($product->id, $product->title, 1, $product->price, ['image'=>$product->image]);
        \toast('Item Added To Cart');
        return redirect('/getFavItems'); 
    }
   
}
