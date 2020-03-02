<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriClient extends Model 
{

    protected $table = 'driclients';
    public $timestamps = true;
    protected $fillable = array('name', 'nid', 'api_token','phone', 'gender', 'email','statue', 'type','city_id');
  //  protected $hidden = array('api_token');
  
    public function drivers()
    {
        return $this->hasMany('App\Models\DriveProfile','driclient_id');
    }
    public function cities()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\ClientProfile');
    }
    public function cars()
    {
        return $this->hasMany('App\Models\Car','driclient_id');
    }
    public function pays()
    {
        return $this->hasMany('App\Models\Payment','driclient_id');
    }

}