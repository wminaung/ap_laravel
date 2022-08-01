<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function posts()
    {
        // 'App\Models\Post'
        return $this->hasMany(Post::class);
    }
}
