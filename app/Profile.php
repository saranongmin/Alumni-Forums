<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Profile extends Model
{
     use SoftDeletes;
    protected $fillable =['image','name','department','batch_id','graduation_year','email','phone','address'];
    public function jobs(){

        return $this->hasOne(Job::class,'profile_id','id');
    }
}

