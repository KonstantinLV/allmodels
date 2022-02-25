<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'model_id',
        'price',
    ];
}
