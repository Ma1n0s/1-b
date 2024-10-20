<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::with('user')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $comment = Comment::create([
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        return response()->json($comment->load('user'), 201);
    }
}