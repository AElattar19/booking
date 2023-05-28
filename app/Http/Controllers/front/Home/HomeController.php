<?php

namespace App\Http\Controllers\front\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        return view('site.layout.master');
    }
}
