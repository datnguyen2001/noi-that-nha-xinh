<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationModel extends Model
{
    use HasFactory;
    protected $table = 'receive_information';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'content'
    ];
}
