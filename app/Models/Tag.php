<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Video; 
// public function posts() : pour un posts spécifique quel sont ces tags
class Tag extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
 
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
