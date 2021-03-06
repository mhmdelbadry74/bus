<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriveProfile extends Model 
{

    protected $table = 'driver_profiles';
    public $timestamps = true;
    protected $fillable = array('driclient_id','car_id' ,'city_id', 'image', 'gender', 'rate', 'bloode_type_id', 'nidimg', 'dl', 'age','statue');

    public function blood_typs()
    {
        return $this->belongsTo('App\Models\BloodType');
    }
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    } 
    public function subs()
    {
        return $this->hasMany('App\Models\Subscription');
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