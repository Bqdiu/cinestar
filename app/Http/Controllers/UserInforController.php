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
           'Email' => 'unique:Userinfor',
           'Phone' => 'unique:Userinfor'

        ]);
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
