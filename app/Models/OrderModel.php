<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'name',
        'product_id',
        'vocative',
        'phone',
        'email',
        'address',
        'note',
        'status'
    ];
}
