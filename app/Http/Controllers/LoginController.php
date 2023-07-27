<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginSubmit(Request $request)
    {
    // Store login data in the "login" table
    $loginData = [
        'UserName' => $request->input('UserName'),
        'Email' => $request->input('Email'),
        'Password' => Hash::make($request->input('Password')),
    ];

    // Create a new record in the "login" table
     $login = Login::create($loginData);

    // Check if the user exists in the "customer" table
    $customer = Customer::where('UserName', $request->input('UserName'))
                        ->where('Email', $request->input('Email'))
                        ->first();

    if ($customer) {
        // Customer found, verify the password
        if (Hash::check($request->input('Password'), $customer->Password)) {
            // Passwords match, log the user in
            Auth::login($customer);

            // Redirect to the home page or any other desired page
            return redirect()->route('cake-shop');
        }else {
             // Password does not match, delete the login data and handle the error
             $login->delete();
             return back()->with('errorMessage', 'Invalid credentials. Please try again.');
            }
    }

    // Customer not found or invalid credentials, handle the error
    $login->delete();
    return back()->with('errorMessage', 'Invalid credentials. Please try again.');
    }
}
