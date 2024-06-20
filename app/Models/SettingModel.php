<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;
    protected $table="setting";
    protected $fillable=[
        'name_header',
        'name_footer',
        'logo',
        'hotline',
        'phone',
        'email',
        'website',
        'zalo',
        'image_address',
        'link_address',
    ];
}
