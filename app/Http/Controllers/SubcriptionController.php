<?php

namespace App\Http\Controllers;

use App\Models\Subcription;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SubcriptionController extends Controller
{
    public function add(Request $request){
        Subcription::create([
            'email'=> $request->email
        ]);
        Alert::success('Email Subscribed', 'thankyou for subscription to email news letter');

        return back();
    }
}
