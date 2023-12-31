<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        // return print_r($user);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully!');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function loginPost(Request $req)
    {

        // return $req;

        $credentials = [
            'username' => $req->username,
            'password' => $req->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Login Success');
        }

        return back()->with('error', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
