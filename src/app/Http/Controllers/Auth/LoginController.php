<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //ログインフォームの表示
    public function ShowLoginForm()
    {
        return view('login');
    }

    //ログインの処理
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            //ログイン成功後、マイリストへリダイレクト
            return redirect()->intended('/mylist');
        }

        //ログイン失敗時の処理
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません'
        ]);
    }

    //ログアウト処理
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
