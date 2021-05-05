<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocailController extends Controller
{
    public function redirect(){
       return Socialite::driver('facebook')->redirect();
    }
    public function Callback(){
        $userSocial =   Socialite::driver('facebook')->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();if($users){
            Auth::login($users);
            return redirect('/');
        }else{$user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
              
                'password'   => 'dsds',
            ]);       
              return redirect()->route('home');
        }
    }
}
