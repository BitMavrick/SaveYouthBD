<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctime extends Model
{
    use HasFactory;

    protected $table = 'doctimes';

    protected $fillable = [
        'doctor_id',
        'day',
        'time_from',
        'time_to',
    ];
}