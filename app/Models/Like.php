<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    
     protected $fillable = [
        'user_id',
        'post_id',
        ];

    public function post()
    {
        return $this->belongsTo('App/Models/Post');
    }
    
    public function user()
    {
        return $this->belongsTo('App/Models/User');
    }
}