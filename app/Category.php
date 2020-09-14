<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;


    protected $fillable = ['title', 'image','description'];



    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
     
}
