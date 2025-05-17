<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function myList()
    {
        //現在ログインしているユーザーのIDで商品を習得
        $items = Item::where('user_id', Auth::id())->get();

        //データをビューに戻す
        return view('mylist', compact('items'));
    }

    public function create()
    {
        return view('items.create'); //items/create.blade.phpを表示
    }
}