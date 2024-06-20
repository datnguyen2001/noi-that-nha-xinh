<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table="product";
    protected $fillable=[
        'name',
        'slug',
        'category_id',
        'guarantee',
        'material',
        'size',
        'sectors',
        'producer',
        'other_materials',
        'src',
        'price',
        'price_promotional',
        'pricing',
        'describe',
        'why_choose_us',
        'display'
    ];
}
