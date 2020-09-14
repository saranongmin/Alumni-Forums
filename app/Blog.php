<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = ['category_id', 'sub_category_id', 'title', 'description', 
    'image','created_by','updated_by'];

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class,
            'taggable'
        );
    }

public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function pictures()
    {
        return $this->morphMany(Image::class, 'imagable');
    }
     public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }



}
