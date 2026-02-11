<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'service' => 'required|string|max:255',
            'date' => 'required|date', // Ensure the input is a valid date
            'time' => 'required|date_format:H:i',
            'duration' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        // Convert the date format from MM-DD-YYYY to YYYY-MM-DD
        $validatedData['date'] = \Carbon\Carbon::createFromFormat('m-d-Y', $validatedData['date'])->format('Y-m-d');

        // Save the data to the database
        Booking::create($validatedData);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Your booking has been submitted successfully!');
    }
}
