<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'product_id',
        'banner_title_th',
        'banner_title_en',
        'banner_title_ch',
        'banner_image',
        'banner_mobile_image',
        'banner_url',
        'status',
    ];
}
