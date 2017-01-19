<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Video;

class CommentsController extends Controller
{
    public function comments()
    {
        $post = Post::find(1);
        foreach ($post->comments as $comment) {
            // echo ($comment)->toJson();
            // return $comment;
        }


        $comment = Comment::find(2);
        // echo ($comment->commentable)->toJson();
        return $comment->commentable;
    }
}
