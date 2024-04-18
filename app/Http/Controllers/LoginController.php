<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Admin;
use Exception;

class LoginController extends Controller
{
    public function Login(){
        return view('client/user/login');
    }

    public function LoginPost(Request $request)
    {
        dd($request->all());
    }
}
