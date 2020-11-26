<?php

namespace App\Model\Admin;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function admins()
    {
        return $this->belongsToMany('App\Model\Admin\Admin','role_admins');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Model\Admin\Permission','role_permissions');
    }


}
