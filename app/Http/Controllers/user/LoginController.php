<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function userlogin(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (\Auth::attempt($request->only("email", "password"))) {
            return redirect("/dashboard");
        } else {
            return redirect("/login")->withErrors([
                "email" => "Invalid credentials",
            ]);
        }
    }
    
    function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect("/");
    }
}
