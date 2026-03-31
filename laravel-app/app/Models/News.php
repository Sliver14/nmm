<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'image', 'is_published', 'published_at', 'views', 'likes'];
    protected $casts = ['published_at' => 'datetime', 'is_published' => 'boolean'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
