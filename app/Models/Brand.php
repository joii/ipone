<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name_th',
        'brand_name_en',
        'brand_name_ch',
        'brand_description_th',
        'brand_description_en',
        'brand_description_ch',
        'brand_detail_th',
        'brand_detail_en',
        'brand_detail_ch',
        'brand_slug_th',
        'brand_slug_en',
        'brand_slug_ch',
        'brand_logo',
        'brand_background_image',
        'status',
    ];



    public function media()
    {
        return $this->hasMany(Media::class);
    }

    
    
}
