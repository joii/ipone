<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'category_id',
        'subcategory_id',
        'product_name_th',
        'product_name_en',
        'product_name_ch',
        'product_subtitle_th',
        'product_subtitle_en',
        'product_subtitle_ch',
        'product_description_th',
        'product_description_en',
        'product_description_ch',
        'product_detail_th',
        'product_detail_en',
        'product_detail_ch',
        'product_size',
        'product_slug_th',
        'product_slug_en',
        'product_slug_ch',
        'product_thumbnail',
        'shopee_url',
        'lazada_url',
        'jd_url',
        'status',
    ];

   
}
