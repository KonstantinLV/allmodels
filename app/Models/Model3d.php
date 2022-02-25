<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model3d extends Model
{
    use HasFactory;
    protected $table = "models";
    protected $fillable = [
        'user_id',
        'name',
        'tags',
        'description',
        'file_path',
        'details',
        'license_id'
    ];
}
