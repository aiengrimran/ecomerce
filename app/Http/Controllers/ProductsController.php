<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
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
      

        // session()->flash('serachItem', $searchChairs);
        

    }
    
    
}
