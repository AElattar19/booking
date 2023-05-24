<?php

namespace App\Http\Controllers\Dashboard\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins;
use Validator;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.Auth.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dologin(Request $request)
    {
        //

        
    $valudation =Request()->validate([
        'email'=>'required',
        'password'=>'required'
        ]);

        if (Auth::guard('admin')->attempt($valudation)) {

        return redirect(RouteServiceProvider::DASHBOARD);
    }else{
            return redirect()->route('admin.auth.login');

        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(){        
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login'); 
    }
}
