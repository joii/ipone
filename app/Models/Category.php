<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'category_name_th',
        'category_name_en',
        'category_name_ch',
        'category_subtitle_th',
        'category_subtitle_en',
        'category_subtitle_ch',
        'category_description_th',
        'category_description_en',
        'category_description_ch',
        'category_detail_th',
        'category_detail_en',
        'category_detail_ch',
        'category_slug_th',
        'category_slug_en',
        'category_slug_ch',
        'category_image',
        'category_background_image',
        'category_product_image',
        'status',
    ];
}
