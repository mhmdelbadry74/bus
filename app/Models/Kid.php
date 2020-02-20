<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model 
{

    protected $table = 'kids';
    public $timestamps = true;
    protected $fillable = array('name', 'age', 'bloode_type_id', 'gender', 'destination_id', 'image', 'driclient_id', 'city_id');

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
        return $this->hasMany('App\Models\Subscription','Kid_id');
    }
    public function cities()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function destination()
    {
        return $this->belongsTo('App\Models\Destination');
    }

    public function clients()
    {
        return $this->belongsTo('App\Models\DriClient');
    }

}