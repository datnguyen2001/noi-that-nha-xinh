<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreIntroduceModel extends Model
{
    use HasFactory;
    protected $table="store_introduce";
    protected $fillable=[
        'name',
        'title',
        'src',
        'link_video',
        'content',
        'describe'
    ];
}
