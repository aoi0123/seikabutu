<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Want;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class WantController extends Controller
{
    public function index(Post $post,Want $want)
    {
        return view('wants.index')->with(['wants'=>$want->getPaginateByLimit()]);
    }
    
    public function show(Want $want)
    {
        return view('wants.w_show')->with(['want'=>$want]);
    }
    
    public function create(Want $want)
    {
        return view('wants.w_create');
    }
    
     public function store(Request $request, Want $want,User $user)
    {
    $want->user_id=\Auth::id();
    $input = $request['want'];
    $want->fill($input)->save();
    return redirect('/wants/' . $want->id);
    }
}
