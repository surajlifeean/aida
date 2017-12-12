<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	 public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showloginform(){

    	return view('auth.adminlogin');
    }
    public function login(Request $request){
    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required|min:6'
    	]);

    	if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
    		return redirect()->intended(route('admin'));

return redirect()->back()->withInput($request->only('email'));

    }
}
