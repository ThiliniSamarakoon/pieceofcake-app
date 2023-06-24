<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Customer;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the registration data
        $validatedData = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email',
            'contact-number' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'username' => 'required',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);

        // Create a new customer record
        $customer = new Customer();
        $customer->FirstName = $request->input('first-name');
        $customer->LastName = $request->input('last-name');
        $customer->Email = $request->input('email');
        $customer->ContactNo = $request->input('contact-number');
        $customer->Address = $request->input('address');
        $customer->Gender = $request->input('gender');
        $customer->UserName = $request->input('username');
        $customer->Password = bcrypt($request->input('password'));

        // Save the customer record
        $customer->save();

        // Store the success message in a session variable
        $request->session()->flash('success', 'Registration successful');

        // Redirect back to the registration page
        return redirect()->back();

    }
}
