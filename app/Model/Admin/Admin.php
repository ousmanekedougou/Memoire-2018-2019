<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public function roles()
    {
        return $this->belongsToMany('App\Model\Admin\Role','role_admins');
    }
}
