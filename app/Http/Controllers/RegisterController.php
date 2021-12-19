<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {

        $this->validate($request, [
            
        ]);
        // dd($request);
        $user = User::create([
            "name" => $request->name,
            "username" => $request->username,
            "userRole" => $request->userRole,
            "email" => $request->email,
            "password" => $request->password,
          
        ]);

        // auth()->login($user);
        return back()->with('success', 'Created');
        // return redirect('/')->with('success', "Account successfully registered.");
    }
}
