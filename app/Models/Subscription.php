<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    protected $table = 'subscription';
    public $timestamps = true;
    protected $fillable = array('client_profile_id','driver_profile_id','kid_id','start_time','end_time','date');


    public function clients()
    {
        return $this->belongsTo('App\Models\ClientProfile');
    }

    public function drivers()
    {
        return $this->belongsTo('App\Models\DriverProfile');
    }
    public function kids()
    {
        return $this->belongsTo('App\Models\Kid');
    }
}
