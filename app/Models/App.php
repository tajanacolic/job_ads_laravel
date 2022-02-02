<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_name',
        'app_surname',
        'app_email',
        'job_tel',
        'ads_id',
        'app_cv'
    ];
}
