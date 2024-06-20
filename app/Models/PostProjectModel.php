<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostProjectModel extends Model
{
    use HasFactory;
    protected $table="post_project";
    protected $fillable=[
        'name',
        'slug',
        'project_id',
        'investor',
        'construction_address',
        'type',
        'design_style',
        'main_material',
        'design_unit',
        'total_construction_area',
        'year_implementation',
        'content',
        'src',
        'display'
    ];
}
