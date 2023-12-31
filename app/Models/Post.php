<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
     protected $fillable = [
        'name',
        'body',
        'resource',
        'step',
        'user_id',
        ];

    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class,'post_id');
    }
    
    public function is_liked_by_auth_user()
    {
        $id=\Auth::id();
        
        $likers=array();
        foreach($this->likes as $like) {
            array_push($likers,$like->user_id);
        }
        
        if(in_array($id,$likers)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function wants()
        {
            return $this->hasMany(want::class);
        }
}