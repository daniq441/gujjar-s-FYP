<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cluser extends Model
{
    // use HasFactory;
    protected $fillable = ['firstName','lastName','profession','phone','email','address','opening','body','closing'];
}
