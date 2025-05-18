@extends('layout.app')

@section('content')
<div class="item-detail-container">
    <div class="item-image">
        <img src="{{ asset('storage/' . $item->image) }}" alt="商品画像">
    </div>
    <div class="item-info">
        <h2>{{ $item->name }}</h2>
        <p>¥{{ number_format($item->price) }} (税込)</p>
        <button class="purchase-btn">購入手続きへ</button>

        <h3>商品説明</h3>
        <p>{{ $item->description }}</p>

        
    </div>
</div>