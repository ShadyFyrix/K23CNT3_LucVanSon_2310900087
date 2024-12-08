<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }   
    public function loginSubmit(Request $request)
    {
        {
            // Validation form
            $validationData = $request->validate([
            'email' =>'required|email',
            'password'=>'required|min:6|max:12'
            ]);
            // Lấy giá trị trên các điều khiển của form
            $fullName=$request->input('fullName');
            $email=$request->input('email');
            $password=$request->input('password');
           return "Full Name:". $fullName . "Email:" . $email . "Password:".$password;
        }
    }
}