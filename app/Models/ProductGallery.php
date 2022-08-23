<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'photo_title_th',
        'photo_title_en',
        'photo_title_ch',
        'photo_url',
        'photo_external_link',
        'status',
    ];
}
