<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index() {
        return view('auth/login');
    }

    public function store(Request $request){
        //validate input
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid credentials');
        }

        //redirect user to dashboard
        return redirect('/dashboard');
    }
}
