<?php

namespace App;
use App\Model\Admin\Admin;
use App\Model\Admin\Medecin;
use App\Model\Admin\Departement;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom','nom', 'email', 'phone','password','adresse','date','image','status','departement_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function medecins()
    {
        return $this->belongsToMany('App\Model\Admin\Medecin','rendez_vouses');
    }

    public function rapports()
    {
        return $this->belongsToMany('App\Model\InformationMedical\Rapport','rapport_users');
    }


    public function carnets()
    {
        return $this->belongsToMany('App\Model\InformationMedical\Carnet','carnet_users');
    }


    public function ordonances()
    {
        return $this->belongsToMany('App\Model\InformationMedical\Ordonance','ordonance_users');
    }


    public function departement(){
        return $this->belongsTo(Departement::class);
    }

}
