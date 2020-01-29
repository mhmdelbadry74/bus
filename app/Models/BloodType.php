<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model 
{

    protected $table = 'bloode_types';
    public $timestamps = true;
    protected $fillable = array('name');

    public function clients()
    {
        return $this->hasMany('App\Models\ClientProfile');
    }

    public function drivers()
    {
        return $this->hasMany('App\Models\DriveProfile');
    }

    public function kids()
    {
        return $this->hasMany('App\Models\Kid');
    }

}