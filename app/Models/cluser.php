<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cluser extends Model
{
    // use HasFactory;
    protected $fillable = ['firstName','lastName','profession', 'jobTitle', 'phone','email','city', 'country', 'zipCode', 'opening','body','closing'];
}
