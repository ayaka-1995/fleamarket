@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

<div class="toppage-list">
    <button class="tab-button__recommend" onclick="window.location.href='/'">おすすめ</button>
    <button class="tab-button__mylist active">マイリスト</button>
</div>

<div class="product-row">
    @foreach($item as $item)
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
        </div>
        <div class="product-name">{{ $item->name }}</div>
    </div>
    @endforeach
</div>

@endsection