<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use App\Admin;

class AdminLoginController extends Controller
{
      public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        //validate data
         $this->validate($request,[
            'username'=>'required',
            'password'=>'required'    
        ]);


        if(Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('username','remember'));
    }
     public function logout()
    {
        $this->guard('admin')->logout();
        redirect('/admin/login');
    }
}
