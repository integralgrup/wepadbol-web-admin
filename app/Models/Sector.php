<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sector';

    protected $fillable = [
        'sector_id',
        'lang',
        'title',
        'title_1',
        'seo_url',
        'description',
        'bg_image',
        'image',
        'alt',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];
}
