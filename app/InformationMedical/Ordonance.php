<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Ordonance extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User','ordonance_users');
    }
}
