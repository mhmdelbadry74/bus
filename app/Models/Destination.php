<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model 
{

    protected $table = 'destinations';
    public $timestamps = true;
    protected $fillable = array('name','gps','city_id');

    public function kids()
    {
        return $this->hasMany('App\Models\Kid');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

}