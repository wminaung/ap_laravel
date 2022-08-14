<?php

namespace App\Models;

use App\Models\Category;
use App\Mail\PostCreated;
use App\Mail\PostStored;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected static function booted()
    {
        static::created(function ($post) {

            Mail::to("minwin243@gmail.com")->send(new PostStored($post));
        });
    }
}
