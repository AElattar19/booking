<?php

namespace App\Http\Controllers\front\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Users;

class AuthController extends Controller
{
    //


    public function login(Request $request)
    {
        //       
    $valudation =Request()->validate([
        'email'=>'required',
        'password'=>'required'
        ]);
    
       // dd($valudation);

    $check=Auth::guard('user')->attempt($valudation);

    
    if ($check){
        Session::put('UserId', Auth()->guard('user')->user()->id);
        return redirect()->route('/');
    }else{
        return redirect('/data');
    }

    }

    public function logout(){        
        Auth::guard('user')->logout();
        return redirect()->route('/'); 
    }
}
