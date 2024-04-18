<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\UserInfor;

class UserInforController extends Controller
{
    public function Register(){
        $user = UserInfor::all();
        // dd($user);
        return view('client/user/register');
    }
}
