<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Medecin_disponibilite extends Model
{
    protected $fillable = [
        'medecin_id','disponibilite_id'
    ];
}
