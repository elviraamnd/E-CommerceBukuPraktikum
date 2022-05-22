<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use AuthenticatesUsers;

class LoginControllerAdmin extends Controller
{
    public function loginadmin(){
        return view('admin.login');
    }

    public function action(Request $request){
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('kategori.index');
            //return dd(Auth::guard('admin'));
            //return dd(request()->all());
        }else{
            return redirect()->back()->with('error','LOGIN FAILED');
        }
        
    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('loginadmin');
    }
}