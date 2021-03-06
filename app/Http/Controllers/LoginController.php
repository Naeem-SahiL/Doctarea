<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        // $credentials = $request->getCredentials();

        // if(!Auth::validate($credentials)):
        //     return redirect()->to('login')
        //         ->withErrors(trans('auth.failed'));
        // endif;

        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return back()->with("failed", "Invalid login attempt!");
        }

        // $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // Auth::login($user);

        return redirect('/');


    }
     /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}
