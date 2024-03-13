<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use AuthenticatesUsers;

    #Option
    public function login(){
        return view ('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    #Sistem Login
    public function doLogin(Request $request){
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials, $request->get('remember'))) {
        return redirect()->route('home');
    }

    return redirect()->route('login')->with("error", 'Email dan Password anda tidak ditemukan');

        $user = Auth::getProvider()->retriveByCredentials($credential);

        Auth::login($user, $request->get('remember'));
        
        return $this->authenticated($request, $user);
    }

    // public function doLogout(Request $request){
    //     Auth::logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()->route('login');
    // }
    
    public function logout()
    {
        Auth::logout();
    
        // Redirect to the login page or any other page after logout
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
    

// #Sistem Register
    public function store(Request $request){
        $validate = $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/login');

    }
}