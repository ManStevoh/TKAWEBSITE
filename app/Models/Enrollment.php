<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'gender',
        'residential_area',
        'parent_name',
        'parent_id',
        'parent_phone',
        'program',
        'program_level',
        'payment_method',
    ];
}
