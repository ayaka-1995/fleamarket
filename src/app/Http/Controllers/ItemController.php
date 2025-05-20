<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        //URLパラメータ　 'page=mylist'を確認
        if($request->query('page') =='mylist'){
        //ユーザーがログインしてない場合、ログインページへログインページへリダイレクト
        if(!Auth::check()){
                return redirect()->route('login');
        }

        //現在ログインしているログインしているユーザのIDでで商品を取得
            $items = Item::where('user_id', Auth::id())->get();

            //mylist.blade.phpを表示
            return view('mylist', compact('items'));
        }
        //通常のトップページを表示
        return view('contact');
    }

    public function show($item_id)
    {
        //該当の商品情報を取得
        $item = Item::findOrFail($item_id);

        //詳細画面へデータを渡して表示
        return view('item.show', compact('item'));
    }

    public function create()
    {
        return view('items.create'); //items/create.blade.phpを表示
    }
}