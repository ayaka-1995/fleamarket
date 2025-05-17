<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //会員登録フォームの表示
    public function showRegistrationForm()
    {
        return view('register');//register.blade.phpを表示
    }
}
