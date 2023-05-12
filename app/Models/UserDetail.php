<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    // use HasFactory;
    protected $fillable = ['firstname', 'surname', 'email', 'phone', 'address', 'city', 'country', 'postalcode', 'picture', 'summary'];
}
