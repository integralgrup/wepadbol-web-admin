<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Club;

class ClubSlider1 extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'club_slider_1';

    protected $fillable = [
        'slider_id',
        'club_id',
        'lang',
        'title',
        'icon',
        'image',
        'alt',
        'video',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with Club model
    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }

}
