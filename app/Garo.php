<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Garo extends Model
{
     use SoftDeletes;
    protected $fillable =['image','name','university','department'];
}
