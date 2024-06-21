<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImageModel extends Model
{
    use HasFactory;
    protected $table="project_image";
    protected $fillable=[
        'post_project_id',
        'src'
    ];
    public function project()
    {
        return $this->belongsTo(ProjectModel::class, 'post_project_id');
    }
}
