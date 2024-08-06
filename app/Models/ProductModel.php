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
        'quantity',
        'describe',
        'why_choose_us',
        'display',
        'is_sale'
    ];
    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImageModel::class, 'product_id');
    }
}
