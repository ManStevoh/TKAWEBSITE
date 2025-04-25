<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

      protected $fillable = [
        'title',
        'description',
        'program',
        'beginner_price',
        'beginner_sessions',
        'intermediate_price',
        'intermediate_sessions',
        'advanced_price',
        'advanced_sessions',
        'expert_price',
        'expert_sessions',
        'image',
    ];
}
