<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class RegisterControllerAdmin extends Controller
{
    public function index() {
        
        return view('admin.register');
    }

    public function store(Request $request) {

        $request->validate([
            'admin_name' => 'required|max:255',
            'username' => 'required|min:5|email|unique:admins',
            'password' => 'required|min:5|max:255',
        ]);

        $data= array(
            'admin_name'=> $request->admin_name,
            'username'=> $request->username, 
            'password'=> Hash::make($request->password),
            
        );
        
        Admin::create($data);
        return redirect('/adminlogin')
        ->with('success','Registration has been successful');
        
    }
}
