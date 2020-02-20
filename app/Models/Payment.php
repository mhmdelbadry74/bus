<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB ;
class Payment extends Model
{
    //
    protected $table = 'payments';
    public $timestamps = true;
    protected $fillable = array('client_profile_id','driver_profile_id','driclient_id','kid_id','statue','request_time','request_img');


    public function clients()
    {
        return $this->belongsTo('App\Models\ClientProfile','client_profile_id');
    }
    public function driclients()
    {
       
        return $this->belongsTo('App\Models\DriClient','driclient_id');
    }
    public function credites()
    {
       
        return $this->hasMany('App\Models\Credit');
    }
   
  
    public function drivers()
    {
        return $this->belongsTo('App\Models\DriveProfile','driver_profile_id');
    }
    public function kids()
    {
        return $this->belongsTo('App\Models\Kid','kid_id');
    }

}
