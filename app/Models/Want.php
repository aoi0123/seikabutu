<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Want extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'body',
        'user_id',
        ];

    public function getPaginateByLimit(int $limit_count = 10)
    {
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