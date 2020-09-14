<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprofile extends Model
{
    protected $fillable = ['image','name','department','batch_id','graduation_year','email','phone','address'];
}
