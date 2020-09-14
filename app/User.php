<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    const ADMIN = 1;
    const ALUMNI = 2;
    const STUDENT = 10;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userprofile()
    {
        return $this->hasOne(Userprofile::class, 'user_id', 'id');
    }

    
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        return $this->role->id === self::ADMIN;
    }

    public function isAlumni()
    {
        return $this->role->id === self::ALUMNI;
    }

    public function isStudent()
    {
        return $this->role->id === self::STUDENT;
    }
}
