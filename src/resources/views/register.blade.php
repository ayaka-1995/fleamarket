@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-container">
    <h2 class="register-title">会員登録</h2>
    <div class="form">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">ユーザー名</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">メールアドレス</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">パスワード</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">確認用パスワード</label>
                <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn-register" type="submit">登録する</button>
            <a class="login-link" href="{{ route('login') }}">ログインはこちら</a>
        </form>
    </div>
</div>
@endsection