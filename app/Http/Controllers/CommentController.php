<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => [
                'min:10',
                'max:255'
            ]
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back()->with('success', 'Your comment was created.');
    }
}
