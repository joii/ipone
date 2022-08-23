<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'bl_section_id',
        'bl_country_id',
        'bl_type_id',
        'bl_name_th',
        'bl_name_en',
        'bl_name_ch',
        'bl_address1_th',
        'bl_address1_en',
        'bl_address2_ch',
        'bl_address2_th',
        'bl_address2_en',
        'bl_address2_ch',
        'bl_address3_th',
        'bl_address3_en',
        'bl_address3_ch',
        'bl_phone',
        'bl_email',
        'bl_transportation_th',
        'bl_transportation_en',
        'bl_transportation_ch',
        'bl_bts_th',
        'bl_bts_en',
        'bl_bts_ch',
        'bl_social_name',
        'bl_social_url',
        'bl_marker',
        'bl_image',
        'bl_flag',
        'bl_latitude',
        'bl_longitude',
        'status',
    ];
}
