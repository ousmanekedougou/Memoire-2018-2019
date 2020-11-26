<?php

namespace App\Model\Admin;

use App\Model\Admin\Medecin;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    public function medecins(){
        return $this->belongsToMany(Medecin::class,'medecin_disponibilites');
    }
}
