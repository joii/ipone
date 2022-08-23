<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'category_id',
        'subcategory_id',
        'product_id',
        'media_title_th',
        'media_title_en',
        'media_title_ch',
        'media_url',
        'status',
    ];

  
   
}
