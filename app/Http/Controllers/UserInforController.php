<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\UserInfor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Exception;
use Hash;


class UserInforController extends Controller
{
    public function Register(){
        return view('client/user/register');
    }

    public function PostRegister(Request $request)
    {
        $request->validate([
           'Name' => 'required',
           'BirthDay' => 'required',
           'Username' => 'required|unique:Userinfor',
           'Password' => 'required',
           'rp_password' => 'required|same:Password',
           'Email' => 'required|unique:Userinfor',
           'Phone' => 'required|unique:Userinfor|size:10',
           'CCCD' => 'required|unique:Userinfor|size:12',

        ],[
            'Name.required' => "Vui lòng nhập tên",
            'BirthDay.required' => "Vui lòng ngày sinh",
            'BirthDay.required' => "Vui lòng ngày sinh",
            'Phone.required' => "Vui lòng nhập số điện thoại",
            'Phone.unique' => "Số điện thoại đã tồn tại",
            'Phone.size' => "Số điện thoại không hợp lệ",
            'Username.required' => "Vui lòng nhập tên đăng nhập",
            'Username.unique' => "Tên đăng nhập đã tồn tại",
            'Password.required' => "Vui lòng nhập mật khẩu",
            'CCCD.required' => "Vui lòng nhập số CCCD/CMND",
            'CCCD.unique' => "CCCD/CMND đã tồn tại",
            'CCCD.size' => "CCCD/CMND không hợp lệ",
            'Email.required' => "Vui lòng nhập Email",
            'Email.unique' => "Email đã tồn tại",
            'rp_password.required' => "Vui lòng nhập mật khẩu xác thực",
            'rp_password.same' => "Mật khẩu không trùng khớp",
            
        ]
        );
       
        try {
            $user = new UserInfor();
            $user->Name = $request->input('Name');
            $user->BirthDay = $request->input('BirthDay');
            $user->Username = $request->input('Username');
            $user->Password =  bcrypt($request->input('Password'));
            $user->Email = $request->input('Email');
            $user->Phone = $request->input('Phone');
            $user->CCCD = $request->input('CCCD');
            $user->save();
            return redirect('login');
        } catch (Exception $e) {
            return redirect('register');
        }
        dd($request->all());
    }
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
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // $user = Auth::getLastAttempted();
            // Auth::login($user);
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['username' => 'Tên đăng nhập hoặc mật khẩu không chính xác']);
        }
    }
    
    public function Logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
