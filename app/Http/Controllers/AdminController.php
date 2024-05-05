<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 1) {
                return redirect()->intended('/admin/dashboard');
            }
        }

        return redirect()->back()
            ->withInput($request->only('username'))
            ->withErrors([
                'login_error' => 'Tài khoản hoặc mật khẩu không chính xác',
            ]);
    }

    public function Index()
    {
        return view('admin.dashboard');
    }

    public function Logout()
    {
        Auth::Logout();
        return redirect('/admin/login');
    }

}