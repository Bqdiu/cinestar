<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\UserInfor;
Use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Exception;
use Hash;
use Laravel\Socialite\Facades\Socialite;

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

    public function UserInforIndex()
    {
        $users = UserInfor::select('*')->leftJoin('role','userinfor.role_id','=','role.role_id')->get();
        // dd($users);
        return view('admin.userinfor.index',compact('users'));        
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callBackGoogle()
    {
        try{
            $google_user = Socialite::driver('google')->user();
            $user = UserInfor::where('google_id', $google_user->getId())->first();
            // dd($google_user);
            if(!$user)
            {
                $new_user = UserInfor::create([
                    'Name' => $google_user->getName(),
                    'Email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('/');
            }
            else
            {
                Auth::login($user);
                return redirect()->intended('/');
            }
        }catch(\Throwable $th)
        {
            dd('Something went wrong'.$th->getMessage());
        }
    }

    public function getUserInfor($UserID)
    {
        $user = UserInfor::select('*')->leftJoin('role','role.role_id','=','userinfor.role_id')
                                    ->where('userinfor.UserID','=',$UserID)->first();
        $roles = Role::all();
        return response()->json([$user,$roles]);
    }
    public function editUserInfor(Request $request)
    {
        $userId = $request->editUserID;
        $request->validate([
            'Name' => 'required',
            'BirthDay' => 'required|date',
            'Email' => 'required|email|unique:UserInfor,Phone,' . $userId. ',UserID',// check unique except for current data
            'Phone' => 'required|unique:UserInfor,Phone,' . $userId . ',UserID|size:10',
            'CCCD' => 'required|unique:UserInfor,CCCD,' . $userId . ',UserID|size:12', 
        ], [
            'Name.required' => "Vui lòng nhập tên",
            'BirthDay.required' => "Vui lòng nhập ngày sinh",
            'BirthDay.date' => "Ngày sinh không hợp lệ",
            'Email.required' => "Vui lòng nhập Email",
            'Email.email' => "Email không hợp lệ",
            'Phone.required' => "Vui lòng nhập số điện thoại",
            'Phone.unique' => "Số điện thoại đã tồn tại",
            'Phone.size' => "Số điện thoại không hợp lệ",
            'CCCD.required' => "Vui lòng nhập số CCCD/CMND",
            'CCCD.unique' => "CCCD/CMND đã tồn tại",
            'CCCD.size' => "CCCD/CMND không hợp lệ",
        ]);
        try{
            $user = UserInfor::find($userId);
            $user->Name = $request->Name;
            $user->Email = $request->Email;
            $user->BirthDay = $request->BirthDay;
            $user->Phone = $request->Phone;
            $user->CCCD = $request->CCCD;
            $user->role_id = $request->edit_role_id;
            $user->save();
            return redirect()->back()->with('mess','Sửa thành công ');
        }catch(\Illuminate\Database\QueryException $e)
        {
            return redirect()->back()->withErrors('Sửa không thành công: '.$e->getMessage());
        }
    }

}
