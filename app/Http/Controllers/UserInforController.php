<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\UserInfor;
use Illuminate\Support\Facades\Validator;
use Exception;


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
        $user = UserInfor::create([
            'Name' => $request->Name,
            'BirthDay' => $request->BirthDay,
            'Username' => $request->Username,
            'Password' => $request->Password,
            'CCCD' => $request->CCCD,
            'Email' => $request->Email,
            'Phone' => $request->Phone
        ]);
        try {
            $user->save();
            return redirect('login');
        } catch (Exception $e) {
            return redirect('register');
        }
    }
    
}
