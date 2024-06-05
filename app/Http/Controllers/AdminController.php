<?php

namespace App\Http\Controllers;

use App\Models\UserInfor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('/admin/login');
    }

    public function login(Request $request)
    {
        $user_name = $request->username;
        $check_role = UserInfor::where('UserName', $user_name)->where('role_id', '!=', 0)->first();
        $credentials = $request->only('username', 'password');
        if ($check_role && Auth::attempt($credentials))
            return redirect()->intended('/admin/dashboard');
        return redirect()->back()
            ->withInput($request->only('username'))
            ->withErrors([
                'login_error' => 'Tài khoản hoặc mật khẩu không chính xác',
            ]);
    }


    public function Logout()
    {
        Auth::Logout();
        return redirect('/admin');
    }

}