<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehab extends Model
{
    use HasFactory;
    protected $table = 'rehabs';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'min_age',
        'description',
    ];
}