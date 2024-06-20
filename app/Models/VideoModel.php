<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    use HasFactory;
    protected $table = 'video';
    protected $fillable = [
        'name',
        'slug',
        'investor',
        'construction_address',
        'type',
        'design_style',
        'main_material',
        'design_unit',
        'total_construction_area',
        'year_implementation',
        'src',
        'display'
    ];
}
