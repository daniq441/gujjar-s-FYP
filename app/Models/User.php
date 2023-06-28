<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
// use app\Models\Education;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne('App\Models\Company');
    }

    //piviot for saved jobs
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function applied()
    {
        return $this->hasMany('App\Models\JobApplication');
    }
    //For CV
    // To build relationship for many educations to user
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
    public function details()
    {
        return $this->hasOne(UserDetail::class);
    }
    //For cover letter
    public function cldetails()
    {
        return $this->hasOne(cluser::class);
    }
    public function clrecipients()
    {
        return $this->hasOne(clreceiver::class);
    }

}
