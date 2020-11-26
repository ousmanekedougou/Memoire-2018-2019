<?php

namespace App;
namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    public function departements()
    {
        return $this->belongsToMany('App\Model\Admin\Departement','specialite_departements');
    }

    public function medecins()
    {
        return $this->belongsToMany('App\Model\Admin\Medecin','specialite_medecins');
    }


}
