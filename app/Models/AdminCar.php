<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminCar extends Model 
{

    protected $table = 'admin_cars';
    public $timestamps = true;
    protected $fillable = array('name');

    public function car_modal()
    {
        return $this->hasMany('App\Models\CarModal');
    }
    
   

    
    

}