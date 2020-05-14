<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class PenjualAuthController extends Controller
{
	    use AuthenticatesUsers;

	    // protected $maxAttempts = 3;
	    // protected $decayMinutes = 2;

	    public function __construct()
	    {
	        $this->middleware('guest:penjual')->except('postLogout');
	    }

	    public function getLogin()
	    {
	        return view('auth.penjual.login');
	    }

	    public function postLogin(Request $request)
	    {
	        $this->validate($request, [
	            'email' => 'required|email',
	            'password' => 'required|min:5'
	        ]);

	        if (auth()->guard('penjual')->attempt($request->only('email', 'password'))) {
	            $request->session()->regenerate();
	            $this->clearLoginAttempts($request);
	            return redirect()->intended();
	        } else {
	            $this->incrementLoginAttempts($request);

	            return redirect()
	                ->back()
	                ->withInput()
	                ->withErrors(["Incorrect user login details!"]);
	        }
	    }

	    public function postLogout()
	    {
	        auth()->guard('penjual')->logout();
	        session()->flush();

	        return redirect()->route('penjual.login');
	    }
}
