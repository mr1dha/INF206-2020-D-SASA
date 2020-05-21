<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Penjual;

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

	    public function getDaftar()
	    {
	        return view('auth.penjual.daftar');
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
	            return redirect('/penjual/dashboard');
	        } else {
	            // $this->incrementLoginAttempts($request);

	            return redirect()
	                ->back()
	                ->withInput()
	                ->withErrors(["Incorrect user login details!"]);
	        }
	    }

	    public function postDaftar(Request $request)
	    {
	    	$validator = Validator::make($request->all(), [
	            'nama' => 'required|string|max:255',
	            'no_hp' => 'required|string|max:255',
	            'alamat_pasar' => 'required|string|max:255',
	            'email' => 'required|string|email|max:255|unique:penjual',
	            'password' => 'required|string|min:8|confirmed',
	    	]);

	    	if($validator->fails()){
	            return redirect()
	                ->back()
	                ->withInput()
	                ->withErrors($validator);
	    	}

	       Penjual::create([
	            'nama' => $request->nama,
	            'email' => $request->email,
	            'no_hp' => $request->no_hp,
	            'alamat_pasar' => $request->alamat_pasar,
	            'password' => Hash::make($request->password)
        	]);

	       return redirect('penjual/login');
	   }

	    public function postLogout()
	    {
	        auth()->guard('penjual')->logout();
	        session()->flush();

	        return redirect()->route('penjual.login');
	    }
}
