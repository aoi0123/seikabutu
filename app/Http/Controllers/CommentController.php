<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Comment $comment,Request $request,Post $post)
    {
        $comment->user_id=\Auth::id();
        $comment->post_id= $post->id;
        $comment->thought=$request->thought;
        $comment->save();
        return redirect("/posts/".$post->id);
    }
    
    public function index(Comment $comment)
    {
        return view('comments.c_index')->with(['comments' => $comment->getPaginateByLimit()]);
    }
    
    public function show(Comment $comment)
    {
        return view('comments.c_show')->with(['comment' => $comment]);
    }
    
}