<?php

namespace App\Model\Admin;

use App\Model\Admin\Hopital;
use App\Model\Admin\Departement;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function departements(){
        return $this->hasMany(Departement::class);
    }

    public function hopitals(){
        return $this->hasMany(Hopital::class);
    }

  
}
