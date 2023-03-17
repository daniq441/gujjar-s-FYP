<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    // use HasFactory;
    protected $fillable = ['job_title', 'company_name', 'city', 'country', 'description', 'start_date', 'end_date'];
}
