<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use Illuminate\Http\Request;

class ChairController extends Controller
{
    public function index(){
        $chairs = Chair::get();
        session(['chairsget'=>true]);
        
        return view ('showProducts.Chairs', ['chairs' => $chairs]);
    }
    //
    public function removealldata(){
        Chair::truncate();
    }
}
