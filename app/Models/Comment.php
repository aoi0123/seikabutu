<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'user_id',
        'post_id',
        'thought',
        ];

    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function post()
    {
        return $this->belongsTo('App/Models/Post');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}