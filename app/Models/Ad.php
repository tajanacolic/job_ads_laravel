<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_type',
        'job_location',
        'job_requirements',
        'job_description',
        'job_image'
    ];
}
