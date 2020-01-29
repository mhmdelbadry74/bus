<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model 
{

    protected $table = 'destinations';
    public $timestamps = true;
    protected $fillable = array('name','gps');

    public function kids()
    {
        return $this->hasMany('App\Models\Kid');
    }

}