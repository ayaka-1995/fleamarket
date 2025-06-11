@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile-container">
    <h2 class="profile-title">プロフィール設定</h2>

    {{-- -成功のメッセージの表示 --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- プロフィール画像表示と選択 --}}
    <div class="profile-image-row">
        @if ($user->image_path)
            <img src="{{ asset('storage/profile_images/' . $user->image_path) }}" class="profile-image" alt="プロフィール画像">
        @else
            <div class="profile-placeholder"></div>
        @endif

        <label for="profile_image" class="select-image-button">画像を選択する</label>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="file" name="profile_image" id="profile_image" class="d-none">

        {{-- -ユーザー名 --}}
        <div class="mb-3">
            <label for="name" class="form-label">ユーザー名</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
        </div>

        {{-- -郵便番号 --}}
        <div class="mb-3">
            <label for="postal_code" class="form-label">郵便番号</label>
            <input type="text" name="postal_code" class="form-control" value="{{ old('postal_code', $user->postal_code) }}">
        </div>

        {{-- -住所 --}}
        <div class="mb-3">
            <label for="address" class="form-label">住所</label>
            <input type="text" name="address" class="form-control" value="{{ old('address',$user->address) }}">
        </div>

        {{-- -建物名 --}}
        <div class="mb-3">
            <label for="building" class="form-label">建物名</label>
            <input type="text" name="building" class="form-control" value="{{ old('building',$user->building) }}">
        </div>

        <button type="submit" class="btn btn-primary">更新する</button>

    </form>
</div>
@endsection