<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model 
{

    protected $table = 'client_profiles';
    public $timestamps = true;
    protected $fillable = array('driclient_id', 'city_id', 'image', 'bloode_type_id', 'age', 'home_gps');

    public function kids()
    {
        return $this->hasMany('App\Models\ClientProfile');
    }

    public function blood_typs()
    {
        return $this->belongsToMany('App\Models\BloodType');
    }

    public function cities()
    {
        return $this->belongsToMany('App\Models\City');
    }

    public function drclients()
    {
        return $this->belongsToMany('App\Models\Destination');
    }

}