<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Userinfor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use Exception;
class LoginController extends Controller
{
    // public function Login(){
    //     return view('client/user/login');
    // }

    // public function LoginPost(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ],[
    //         'username.required' => 'Vui lòng nhập tên đăng nhập',
    //         'password.required' => 'Vui lòng nhập mật khẩu',]
    // );
    //     $credentials = $request->only('Username', 'Password');
    //     if(Auth::attempt($credentials))
    //     {
    //         return redirect('/');
    //     }
    //     else
    //     {
    //         return redirect()->back()->withErrors(['username' => 'Tên đăng nhập hoặc mật khẩu không chính xác']);
    //     }

    // }
    
    // public function Logout(Request $request){
    //     session::forget('username');
    //     return redirect('/');
    // }
}
