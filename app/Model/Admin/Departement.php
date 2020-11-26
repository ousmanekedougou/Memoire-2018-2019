<?php

namespace App\Model\Admin;
use App\User;
use App\Model\Admin\Region;
use App\Model\Admin\Hopital;
use App\Model\Admin\Medecin;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function medecins(){
        return $this->hasMany(Medecin::class);
    }

    public function hopitals(){
        return $this->hasMany(Hopital::class);
    }

    protected $fillable = [
        'region_id'
    ];
}
