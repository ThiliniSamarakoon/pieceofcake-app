<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function adminLogin(Request $request)
    {
        // Validate the login data
        $validator = Validator::make($request->all(), [
            'AdminName' => 'required',
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Retrieve the admin from the database
        $admin = Admin::where('AdminName', $request->input('AdminName'))
                      ->where('Email', $request->input('Email'))
                      ->first();

        if (!$admin || !Hash::check($request->input('Password'), $admin->Password)) {
            // Invalid credentials
            Session::flash('error', 'Invalid credentials');
            return redirect()->back();
        }

        // Valid login, store the admin data in the session
        $request->session()->put('admin', $admin);

        // Redirect to the home page
        return view('html.admin-home');
    }
}

