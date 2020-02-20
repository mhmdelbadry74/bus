<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model 
{

    protected $table = 'cars';
    public $timestamps = true;
    protected $fillable = array('driclient_id','img1', 'img2', 'img3', 'type', 'modal', 'passenger', 'car_number', 'lc', 'price', 'statue');

    public function driver_car()
    {
        return $this->belongsTo('App\Models\DriClient','driclient_id');
    }
    public function cars()
    {
        return $this->hasMany('App\Models\CarModal');
    }

}