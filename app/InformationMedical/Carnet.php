<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User','carnet_users');
    }
}
