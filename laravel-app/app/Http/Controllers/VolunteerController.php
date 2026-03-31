<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function showForm()
    {
        return view('volunteers.become');
    }

    public function process(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'phone' => 'nullable|string|max:20',
            'profession' => 'required|string',
            'country' => 'required|string',
            'availability_message' => 'nullable|string',
        ]);

        Volunteer::create($request->all());

        return back()->with('success', 'Your volunteer application has been submitted successfully! We will contact you soon.');
    }
}
