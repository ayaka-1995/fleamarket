<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function myList()
    {
        $items = Item::where('user_id', Auth::id())->get();
        return view('mylist', compact('items'));
    }
}