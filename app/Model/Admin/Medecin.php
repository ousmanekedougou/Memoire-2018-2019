<?php

namespace App\Model\Admin;

use App\User;
use App\Model\Admin\Hopital;
use App\Model\Admin\Disponibilite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Medecin extends Authenticatable
{
    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function hopital(){
        return $this->belongsTo(Hopital::class);
    }

    public function disponibilites(){
        return $this->belongsToMany(Disponibilite::class,'medecin_disponibilites');
    }

    protected $fillable = [
        'hopital_id'
    ];
}
