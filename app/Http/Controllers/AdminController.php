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
}
