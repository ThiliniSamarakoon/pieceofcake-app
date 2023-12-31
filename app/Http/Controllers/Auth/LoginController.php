<?php 

/*namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        $errorMessage = session('errorMessage');
        return view('html.login', compact('errorMessage'));
    }

    protected function redirectTo()
    {
        return route('cake-shop');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'UserName'=>'required',
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        $user = Customer::where('UserName', $request->input('UserName'))
        ->where('Email', $request->input('Email'))
        ->first();

        if ($user && Hash::check($request->input('Password'), $user->Password)) {
            // Authentication successful
            Auth::login($user);

            // Create a new customized order record
            $customizedOrder = new CustomizedOrder();
            $customizedOrder->user_id = $user->id;
            
            // Save the customized order to the database
            $customizedOrder->save();

            return redirect()->intended(route('customized.orders'));

        }else {
            // Authentication failed
            $errorMessage = 'Invalid login credentials';
            $request->session()->flash('errorMessage', $errorMessage);
            return redirect()->back()->withInput();
    }
}       
}   */

