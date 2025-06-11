@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage-container">
    <div class="mypage-header">
        <div class="user-icon"></div>
        <div class="user-info">
            <h2 class="user-name">ユーザー名</h2>
        </div>
            <a href="{{ route('profile.edit') }}" class="edit-profile-btn">プロフィールを編集</a>
    </div>

    <div class="tabs">
        <a href="#" class="tab active">出品した商品</a>
        <a href="#" class="tab">購入した商品</a>
    </div>

    <div class="item-grid">
        @for ($i = 0; $i < 8; $i++)
        <div class="item-card">
            <div class="item-image">
                <span class="image-text">商品画像</span>
            </div>
            <span class="item-name">商品名</span>
        </div>
        @endfor
    </div>
</div>
@endsection