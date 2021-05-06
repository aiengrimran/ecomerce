<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterCustomerController extends Controller
{
    public function register(Request $request){
        Customer::create([
            'fName'=>$request->fName,
            'lName'=>$request->lName,
            'city'=>$request->city,
            'email'=>$request->email,
            'country'=>$request->country
            
        ]);
        return 'mubrak';

    }
}
