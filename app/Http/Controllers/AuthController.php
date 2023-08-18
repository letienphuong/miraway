<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReaderRequest;
use App\Http\Requests\UserRequest;
use App\Models\Reader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'Vui lòng nhập tên.',
            'name.string' => 'Tên phải là một chuỗi.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã được sử dụng.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là một chuỗi.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $data = $request->only('name', 'email', 'password', 'phone', 'avatar');
        $data['password'] = Hash::make($request->password);
        $data['token'] = strtoupper(Str::random(10));

        if ($user = User::create($data)) {
            Mail::send('layouts.emails.active_account', compact('user'), function ($email) use ($user) {
                $email->subject('Miraway - Xác nhận tài khoản');
                $email->to($user->email, $user->name);
            });

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }


    public function login(){

        return view('login');
    }


public function checkLogin(Request $request)
{
    $credentials = $request->only('email', 'password');
    $user = User::where('email', $credentials['email'])->first();

    $errors = [];

    if (!$user) {
        $errors['email'] = ['Tài khoản không tồn tại'];
    } else {
        if (!Hash::check($credentials['password'], $user->password)) {
            $errors['password'] = ['Mật khẩu không đúng'];
        } elseif ($user->status == 0) {
            Auth::guard('users')->logout();
            $errors['email'] = ['Tài khoản chưa kích hoạt'];
        }
    }

    if (!empty($errors)) {
        return response()->json(['success' => false, 'errors' => $errors]);
    }

    // Đăng nhập thành công
    Auth::guard('users')->attempt($credentials);

    return response()->json(['success' => true, 'redirect_url' => route('home')]);
}


    public function actived(User $user, $token){
        if($user->token == $token){
            $user->update(['status' => 1,'token' => null]);
            return redirect()->route('login')->with('success','Xác nhận tài khoản thành công');
        }else{
            return redirect()->route('login')->with('error','Mã xác nhận bạn gửi không hợp lệ');
        }
    }

    public function subscribers(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:readers,email'
    ],
    [
        'email.required' => 'Vui lòng nhập địa chỉ email.',
        'email.email' => 'Địa chỉ email không hợp lệ.',
        'email.unique' => 'Địa chỉ email đã được sử dụng.',
    ]);

    if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json(['success' => false, 'errors' => $validator->errors()]);
    }

    $reader = new Reader();
    $reader->email = $request->email;
    $reader->save();

    return response()->json(['success' => true, 'message' => 'Đăng ký thành công'], 200);
}
    public function logout(){
        Auth::guard('users')->logout();
        return redirect()->route('home');
    }

}
