<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    public function Login(Request $request)
    {
        $this->validate($request, [
            "email" => "required",
            "password" => "required",
        ]);

        $user = User::where("email", $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect("/login")->with("message", "Invalid login combination");
        }
        $credentials = ["email" => $request->email, "password" => $request->password];
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect("/admin");
        }
    }

    public function redirectUser()
    {
        if (auth()->check()) {
            if (auth()->user()->type == 'client') {
                return "client";
            } else {
                return "admin";
            }
        } else {
            return "login";
        }
    }
}
