<?php

namespace App\Http\Controllers;

use App\Models\Subcription;
use Illuminate\Http\Request;

class SubcriptionController extends Controller
{
    public function add(Request $request){
        Subcription::create([
            'email'=> $request->email
        ]);
        session()->flash('emailadded', true);
    }
}
