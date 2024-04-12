<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('client/home/index');
    }

    public function Login(){
        return view('client/user/login');
    }
    public function Register(){
        return view('client/user/register');
    }
}
