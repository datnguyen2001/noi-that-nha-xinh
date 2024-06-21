<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionImageModel extends Model
{
    use HasFactory;
    protected $table="collection_image";
    protected $fillable=[
        'post_collection_id',
        'src'
    ];
    public function collection()
    {
        return $this->belongsTo(PostCollectionModel::class, 'post_collection_id');
    }
}
