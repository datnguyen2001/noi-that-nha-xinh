<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCollectionModel extends Model
{
    use HasFactory;
    protected $table="post_collection";
    protected $fillable=[
        'name',
        'slug',
        'collection_id',
        'describe',
        'content',
        'src',
        'display'
    ];
}
