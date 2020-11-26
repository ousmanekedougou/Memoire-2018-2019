<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\Admin\Post','category_posts');
    }
}
