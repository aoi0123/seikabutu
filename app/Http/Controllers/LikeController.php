<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Like;
use App\Models\Post;

class LikeController extends Controller
{
    public function store(Like $like)
    {
    $like->user_id=\Auth::id();
    $like->post_id=-$post->id;
    }
    public function like(Like $like,Post $post)
    {
        $like->user_id=Auth::id();
        $like->post_id=$post->id;
        $like->save();
        
        session()->flash('success','You Liked the Reply.');
        
        return back();
    }
    
    public function unlike(like $like,Post $post)
    {
        $like=Like::where('post_id',$post->id)->where('user_id',Auth::id())->first();
        $like->delete();
        
        session()->flash('success', 'You Unliked the Reply.');

        return back();
    }
    
}
