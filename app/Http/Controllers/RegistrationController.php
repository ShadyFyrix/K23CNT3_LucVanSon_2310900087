<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('registration');
    }

    public function submitForm(Request $request)
    {
        // Back-end validation rules
        $validatedData = $request->validate([
            'user_id' => 'required|alpha_num|min:5|max:12',
            'password' => 'required|min:7|max:12',
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'country' => 'required',
            'zip_code' => 'required|numeric',
            'email' => 'required|email',
            'sex' => 'required',
            'language' => 'required',
        ]);

        // Pass the submitted data back to the view
        return view('registration', ['data' => $validatedData]);
    }
}
