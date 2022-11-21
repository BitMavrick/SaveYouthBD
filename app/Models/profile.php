<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'gender',
        'phone',
        'email',
        'experties',
        'address',
        'website',
        'working_organization',
        'date_of_birth',
        'educational_qualification',
        'description',
    ];
}