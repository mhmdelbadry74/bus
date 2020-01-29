<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model 
{

    protected $table = 'kids';
    public $timestamps = true;
    protected $fillable = array('name', 'age', 'bloode_type_id', 'gender', 'destination_id', 'image', 'client_profile_id', 'city_id');

    public function blood_typs()
    {
        return $this->belongsToMany('App\Models\BloodType');
    }

    public function cities()
    {
        return $this->belongsToMany('App\Models\City');
    }

    public function destination()
    {
        return $this->belongsToMany('App\Models\Destination');
    }

    public function clients()
    {
        return $this->belongsToMany('App\Models\ClientProfile');
    }

}