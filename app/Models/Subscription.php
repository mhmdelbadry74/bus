<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB ;
use App\Models\Payment;
class Subscription extends Model
{
    //
    protected $table = 'subscription';
    public $timestamps = false;
    protected $fillable = array('client_profile_id','driver_profile_id','kid_id','start_time','end_time','date');
    public static function add_subs($data){
       DB::insert('insert into subscription (driver_profile_id, client_profile_id, kid_id) values (?, ?, ?)', [$data['driver_profile_id'],$data['client_profile_id'],$data['kid_id']]);
       $record = Payment::findOrFail($data['id']);
       $record->delete();
       
    }
    
    // public function count(Request $request){
    //     $statues = Subscription::select('driver_profile_id')->where('driver_profile_id',$request->driver_profile_id)->get();
    // }
    
    public function clients()
    {
        return $this->belongsTo('App\Models\ClientProfile','client_profile_id');
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
