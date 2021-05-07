<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use App\Models\Chair;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allproducts()
    {
        $chairs = Chair::Orderby('updated_at', 'desc')->get();
        $beds = Bed::Orderby('updated_at', 'desc')->get();
        return view('adminSection.editProducts', ['chairs' => $chairs, 'beds'=> $beds]);
        // return view('adminSection.editProducts');

        
    }
    public function createproduct(){
        return view('adminSection.createProduct');
    }
    public function admin(){
        return view('adminSection.admin');
    }
    public function searchProduct(Request $request){
        $serchfield = '%'. $request->searchProduct. '%';
        $searchChairs = Chair::where('title', 'LIKE', $serchfield)
                            ->orWhere('price', 'LIKE', $serchfield)
                            ->orWhere('quantity', 'LIKE', $serchfield)
                            ->OrderBy('id', 'DESC')->get();
       
        if (count($searchChairs)) {
            session()->flash('serachItem', $searchChairs);
            return redirect()->route('allProducts');
        }
        return redirect()->route('allProducts');
        

    }
    public  function getProductDetails($id)
    {
        $productSelected = Bed::find($id);
        return view('showProducts.productDetails', ['productSelected'=>$productSelected]);
    }
    
}
