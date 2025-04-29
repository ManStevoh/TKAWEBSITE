<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    // These fields are fillable for mass assignment
    protected $fillable = [
        'background_image',
        'title',
        'subtitle',
    ];
}
