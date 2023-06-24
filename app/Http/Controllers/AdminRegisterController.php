<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Models\Admin;

class AdminRegisterController extends Controller
{
    public function admin_register(Request $request)
    {
        // Validate the registration data
        $validator = Validator::make($request->all(), [
            'AdminName' => 'required',
            'Email' => 'required|email',
            'Password' => 'required|min:5',
            'ContactNo' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store the admin user in the database
        $admin = new Admin();
        $admin->AdminName = $request->input('AdminName');
        $admin->AdminRole = $request->input('AdminRole');
        $admin->Email = $request->input('Email');
        $admin->Password = bcrypt($request->input('Password')); 
        $admin->ContactNo = $request->input('ContactNo');
        $admin->save();

        // Store the success message in a session variable
        $request->session()->flash('success', 'Registration successful');

        // Redirect back to the registration page
        return redirect()->back();

    }
}
