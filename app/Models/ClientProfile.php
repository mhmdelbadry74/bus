<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model 
{
    

    protected $table = 'client_profiles';
    public $timestamps = true;
    protected $fillable = array('driclient_id', 'image', 'bloode_type_id', 'age', 'home_gps');

    public function kids()
    {
        return $this->hasMany('App\Models\ClientProfile');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment','client_profile_id');
    } 
    public function subs()
    {
        return $this->hasMany('App\Models\Subscription');
    }

    public function blood_typs()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function drclients()
    {
        return $this->belongsTo('App\Models\DriClient','driclient_id');
    }

}