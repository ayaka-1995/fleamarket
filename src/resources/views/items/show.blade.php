@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item-detail.css') }}">
@endsection

@section('content')
<div class="item-detail-container">
    <div class="item-detail-header">
        <div class="item-image">
            <img src="{{ asset('storage/' . $item->image) }}" alt="商品画像">
        </div>
        <div class="item-info">
            <h2>{{ $item->name }}</h2>
                <p>¥{{ number_format($item->price) }} (税込)</p>
                <button class="purchase-btn">購入手続きへ</button>
        </div>
    </div>

        <div class="item-description">
            <h3>商品説明</h3>
            <p>{{ $item->description }}</p>
        </div>

        <div class="item-details">
            <h3>商品情報</h3>
            <ul>
                <li>カテゴリー: {{ $item->category }} </li>
                <li>商品の状態: {{ $item->condition }}</li>
            </ul>
        </div>

        <div class="item-comments">
            <h3>コメント</h3>
            <div class="comments">
                //コメント一覧表示
            </div>
            <h3>商品へのコメント</h3>
            <textarea placeholder="ここにコメントを入力"></textarea>
            <button class="comment-submit-btn">コメントを送信する</button>
        </div>
</div>
@endsection