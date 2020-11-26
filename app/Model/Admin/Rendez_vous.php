<?php

namespace App\Model\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function medecin()
    {
        return $this->belongsTo('App\Model\Admin\Medecin');
    }

    public function dateMedecin(){
        return Carbon::parse($this->date_medecin);
    }


    public function Requestdate(){
        return Carbon::parse($this->request->date);
    }
}
