@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')

<div class="sell-item-container">
    <h2>商品の出品</h2>

    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="image">商品画像</label>
            <div class="image-upload-box">
                <label for="image-upload" class="image-upload-label">画像を選択する</label>
                <input type="file" id="image-upload" name="image" accept="image/*" hidden>
            </div>
        </div>

        <div class="form-group">
            <label>カテゴリー</label>
            <div class="category-buttons">
                @php
                    $categories = [
                    'ファッション', '家電', 'インテリア', 'レディース', 'メンズ', 'コスメ', 
                    '本', 'ゲーム', 'スポーツ', 'キッチン', 'ハンドメイド', 
                    'アクセサリー', 'おもちゃ', 'ベビー・キッズ'
                    ];
                @endphp

                @foreach($categories as $category)
                    <input type="radio" name="category" id="category-{{ $loop->index }}" value="{{ $category }}" hidden>
                    <label for="category-{{ $loop->index }}" class="category-label">{{ $category }}</label>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label>商品名</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>ブランド名</label>
            <input type="text" name="brand">
        </div>

        <div class="form-group">
            <label>商品の説明</label>
            <textarea name="description" required></textarea>
        </div>

        <div class="form-group">
            <label>販売価格</label>
            <input type="number" name="price" required>
        </div>
        
        <button type="submit" class="submit-btn">出品する</button>
    </form>
</div>
@endsection