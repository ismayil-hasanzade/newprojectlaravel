<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function all()
    {
        return [
            'success' => true,
//            'posts' => Post::query()->where('user_id', auth()->user()->id)->get()
            'posts' => Post::all()
        ];
    }
}
