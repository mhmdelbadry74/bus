<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model 
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name');

    public function kids()
    {
        return $this->hasMany('App\Models\Kid');
    }
    public function driclients()
    {
        return $this->hasMany('App\Models\DriClient');
    }

    public function drivers()
    {
        return $this->hasMany('App\Models\DriveProfile');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\ClientProfile');
    }

    public function des()
    {
        return $this->hasMany('App\Models\Destination');
    }

}