<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log as ModelsLog;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Login extends Controller
{

    public function login()
    {
        return view('pages/login');
    }

    /**
     * method responsible for authenticating the user
     * @param Request $request
     */
    public function authUser(Request $request)
    {
        // VALIDATES FORMS 
        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required']
        ]);

         // GET DATA FROM THE FORM
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        // AUTH USER
        if (Auth::attempt($credentials, ($request->get('remember') == 'on') ? true : false)) {
            return redirect()->intended(route('dashboard'));
        }
        
        return redirect()->back()->with('message', 'bad credentials');
    }

    /**
     * method responsible for logging out user
     * @return view
     */
    public function logout()
    {
        ModelsLog::create([
            'afect'   => 'logout',
            'context' => '['.Auth::user()->name.'] - logged out',
            'type'    => 'logout',
            'fk_user' => Auth::user()->id
        ]);
        Auth::logout();
        return redirect(route('login'));
    }
}
