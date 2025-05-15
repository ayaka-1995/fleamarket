@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-container">
    <h2 class="login-title">ログイン</h2>
    <div class="form">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="form-group">
                <label class="email">メールアドレス</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label class="password">パスワード</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <button class="btn-login" type="submit">ログイン</button>
            <a class="register-link" href="{{ route('register') }}">会員登録はこちら</a>
        </form>
    </div>
</div>

@endsection