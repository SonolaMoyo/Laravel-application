<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        //validate user
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:100',
            'username' => 'required|max:255',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
        ]);

        //technically sign a user in
        auth()->attempt($request->only('email', 'password'));

        //redirect user
        return redirect()->route('dashboard');

        //store user
        //sign in user
        //redirect
    }
}
