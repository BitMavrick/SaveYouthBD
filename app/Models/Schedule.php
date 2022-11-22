<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $fillable = [
        'subject',
        'Doctor_id',
        'patient_id',
        'patient_name',
        'patient_age',
        'patient_gender',
        'meet_link',
        'schedule_time',
        'approve',
    ];
}