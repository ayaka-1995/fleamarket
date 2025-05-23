<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Item $item)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $item->comments()->create([
            'user_id' => Auth::id(),
            'content' =>$request->content,
        ]);

        return back()->with('success','コメントを投稿しました。');
    }
}
