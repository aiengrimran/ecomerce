<?php

namespace App\Http\Controllers;

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
}
