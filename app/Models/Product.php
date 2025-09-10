<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductImage;
use App\Models\ProductGallery;
use App\Models\ProductFaq;
use App\Models\ProductType;


class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product';

    protected $fillable = [
        'product_id',
        'lang',
        'title',
        'seo_url',
        'description',
        'technical_info',
        'image',
        'features_image',
        'features_description',
        'pdf_file',
        'alt',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with ProductImage model
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id')->orderBy('sort');
    }

    // You can add other relationships or methods as needed
    public function gallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'product_id')->orderBy('sort');
    }

    public function faqs()
    {
        return $this->hasMany(ProductFaq::class, 'product_id', 'product_id')->orderBy('sort');
    }

    public function types()
    {
        return $this->hasMany(ProductType::class, 'product_id', 'product_id')->orderBy('sort');
    }



}
