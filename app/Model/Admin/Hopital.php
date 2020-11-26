<?php

namespace App\Model\Admin;

use App\Model\Admin\Region;
use App\Model\Admin\Medecin;
use App\Model\Admin\Departement;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    public function medecins(){
        return $this->hasMany(Medecin::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    protected $fillable = [
        'region_id'
    ];
}
