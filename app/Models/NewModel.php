<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    use HasFactory;
    protected $table = 'new';
    protected $fillable = [
        'name',
        'slug',
        'type',
        'src',
        'content',
        'display'
    ];
}
