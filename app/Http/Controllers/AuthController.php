<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Log;
class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function loadRegister()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Log user registration
        Log::info('User Registered', [
            'user_id' => $user->id,
            'email' => $user->email,
            'timestamp' => now(),
        ]);

        return back()->with('success', 'Your Registration has been successful.');
    }

    public function loadLogin()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email', 'password');
        if (Auth::attempt($userCredential)) {

            $route = $this->redirectDash();
            return redirect($route);
        } else {
            return back()->with('error', 'Username & Password is incorrect');
        }
    }

    public function loadDashboard()
    {
        return view('user.dashboard');
    }


    public function redirectDash()
    {
        $redirect = '';

        if (Auth::user() && Auth::user()->role == 1) {
            $redirect = '/super-admin/dashboard';
        } else if (Auth::user() && Auth::user()->role == 2) {
            $redirect = '/sub-admin/dashboard';
        } else if (Auth::user() && Auth::user()->role == 3) {
            $redirect = '/admin/dashboard';
        } else {
            $redirect = '/user/dashboard';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();

        return redirect('/');
    }

    public function index()
    {

        if (!Auth::check()) {
            return view('welcome');
        }
        if (Auth::user()->role == 1 || Auth::user()->role == 2) {
            return redirect()->route('dashboard');
        } elseif (Auth::user()->role == 0) {
            return view('welcome');
        }

    }

    public function help(){
        return view('layout.help');
    }
}
