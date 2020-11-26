<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User','repport_users');
    }
}
