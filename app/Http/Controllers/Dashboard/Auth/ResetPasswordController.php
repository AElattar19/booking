<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    //
    public function index()
    {
        //
        return view('dashboard.Auth.forgot');
    }
}
