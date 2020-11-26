<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Model\Admin\Tag','tag_posts');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Model\Admin\Category','category_posts');
    }
}
