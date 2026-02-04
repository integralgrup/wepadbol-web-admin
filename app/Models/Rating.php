<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Rating extends Model
{
    protected $fillable = [
        'blog_id',
        'rating',
        'ip_address',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'blog_id');
    }

}

