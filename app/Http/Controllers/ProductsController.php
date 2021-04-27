<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function createproduct(){
        return view('adminSection.createProduct');
    }
    public function admin(){
        return view('adminSection.admin');
    }
    
    
}
