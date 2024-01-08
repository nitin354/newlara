<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function example(Request $request)
    {
        return response()->json(['message' => 'Hello, this is your API!']);
    }

    public function getUsers()
    {
        $users = User::all();
        
        //dd($users);
        return response()->json(['users' => $users]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        //dd($user);

        return response()->json(['user' => $user], 201);
    }

    // Add more methods as needed
}

