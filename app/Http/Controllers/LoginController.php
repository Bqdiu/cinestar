<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     //Login-Register
     public function Login(){
        return view('client/user/login');
    }
    
}
