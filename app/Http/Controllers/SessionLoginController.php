<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionLoginController extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function loginSubmit(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Sanitize and retrieve input
        $Email = trim($request->input('email'));
        $pass = trim($request->input('password'));

        // Debug to check input and conditions (remove in production)
        // dd([
        //     'input_email' => $Email,
        //     'input_password' => $pass,
        //     'hardcoded_email' => "shadyfyrix@gmail.com",
        //     'hardcoded_password' => "13022005@",
        //     'email_match' => $Email === "shadyfyrix@gmail.com",
        //     'password_match' => $pass === "13022005@"
        // ]);

        //login check
        if ($Email === "shadyfyrix@gmail.com" && $pass === "13022005@") {
            $request->session()->put('K23CNT3-LucVanSon', $Email);
            return redirect('/'); // Redirect to homepage
        }

        // Login failed
        return redirect()->back()->with('error', 'Thông tin đăng nhập không đúng.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('K23CNT3-LucVanSon');
        return redirect('/login');
    }
}
