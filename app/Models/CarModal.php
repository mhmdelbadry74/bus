<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModal extends Model 
{

    protected $table = 'car_modals';
    public $timestamps = true;
    protected $fillable = array('name','admin_car_id');

    public function admin_cars()
    {
        return $this->belongsTo('App\Models\AdminCar','admin_car_id');
    }
    
   
   
}