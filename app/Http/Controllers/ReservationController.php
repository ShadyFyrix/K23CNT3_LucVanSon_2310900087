<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation-form');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'arrival_date' => 'required|date',
            'nights' => 'required|integer|max:100',
            'adults' => 'required|numeric|max:20',
            'children' => 'required|numeric|max:20',
            'name' => 'required|regex:/^[\pL\s]+$/u',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{3}-\d{3}-\d{4}$/',
        ], [
            'arrival_date.required' => 'Arrival date is required.',
            'arrival_date.date' => 'Arrival date is invalid.',
            'nights.required' => 'Nights are required.',
            'nights.integer' => 'Nights must be a number.',
            'name.required' => 'Name is required.',
            'name.alpha' => 'Name must contain only alphabets.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email address is invalid.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number is invalid.',
        ]);

        return back()->with('success', 'Reservation request submitted successfully.');
    }
}
