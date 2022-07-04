<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.partials.login');
    }
    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('company.index');
            }
            else {
                return redirect()->back()->with('login_failed', '')->withInput();
            }

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.index');
    }
}
