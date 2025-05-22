<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //会員登録フォームの表示
    public function showRegistrationForm()
    {
        return view('register');//register.blade.phpを表示
    }

    //バリデーションの定義
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

    //ユーザーの作成処理
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //ログインさせたい場合
        //Auth::attempt($request->only('email', 'password'));

        return redirect('/login')->with('success','会員登録が完了しました');
    }
}
