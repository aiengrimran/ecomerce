<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    public function index() {
        $beds = Bed::get();
        return view('showProducts.Beds', ['beds'=>$beds]);
    }
    public function createBedProduct(Request $request){
        $image = $request->image;
       Bed::create([
           'name'=>$request->name,
           'price'=>$request->price,
           'quantity'=>$request->quantity,
           'image'=>$request->image
       ]);
       return redirect('admin/dashboard');
    }
    public function delete(Request $request)
    {
        $bed = Bed::find($request->deleteBedProduct)->delete();
        return redirect('admin/allproducts');
    }
    public function edit($id) {
        return view('adminSection.editBidProduct', ['bed'=> Bed::find($id)]);

    }
    public function update(Request $request){
        $bed = Bed::find($request->id);
        $bed->update([
            'name' => $request->name,
            'price' => $request->price,
            'image'=> $request->image,
            'quantity'=> $request->quantity
        ]);
        return redirect('admin/dashboard');

    }  
    public function removealldata(){
        Bed::truncate();
    }
    
}
