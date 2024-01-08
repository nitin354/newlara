<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showLoginForm()
    {
        return view('admin.adminlogin'); // Create a view for admin login
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/admin/dashboard'); // Replace with your admin dashboard route
        }

        // Authentication failed
        return redirect()->route('admin.login')->with('error', 'Invalid login credentials');
    }
    //
}
