<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'category_id',
        'subcategory_name_th',
        'subcategory_name_en',
        'subcategory_name_ch',
        'subcategory_subtitle_th',
        'subcategory_subtitle_en',
        'subcategory_subtitle_ch',
        'subcategory_description_th',
        'subcategory_description_en',
        'subcategory_description_ch',
        'subcategory_detail_th',
        'subcategory_detail_en',
        'subcategory_youtube',
        'subcategory_detail_ch',
        'subcategory_slug_th',
        'subcategory_slug_en',
        'subcategory_slug_ch',
        'subcategory_image',
        'subcategory_background_image',
        'subcategory_product_image',
        'status',
    ];
}
