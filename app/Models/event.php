<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
      protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
}

