<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Userinfor;
use Illuminate\Support\Facades\Validator;
use Session;
use Exception;

class LoginController extends Controller
{
    public function Login(){
        return view('client/user/login');
    }

    public function LoginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'password.required' => 'Vui lòng nhập mật khẩu',]
    );
        $username = $request->username;
        $password = $request->password;
        $user = Userinfor::where('Username',$username)->where('Password',$password)->first();
        if($user)
        {
            session::put('username',$username);
            return redirect('/');
        }
        return redirect('/login')->withErrors(['username' => 'Tên đăng nhập hoặc mật khẩu không chính xác']);
    }
    
    public function Logout(Request $request){
        session::flush();
        return redirect('/');
    }
}
