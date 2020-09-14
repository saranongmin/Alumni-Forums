<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alumni extends Model
{
    use SoftDeletes;
    protected $fillable =['name','department','batch_id','graduation_year','email','phone','address'];
}
