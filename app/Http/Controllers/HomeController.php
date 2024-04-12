<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('index');
    }

    public function Login(){
        return view('user/login');
    }
    public function Register(){
        return view('user/register');
    }
}
