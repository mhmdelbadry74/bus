<?php

namespace App\Models;
use DB ;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $table = 'cridtes';
    public $timestamps = false;
    protected $fillable = array('client_profile_id','img_payments');
    public function payments()
    {
        return $this->belongsTo('App\Models\ClientProfile','client_profile_id');
    }
    public static function add_credit($data){
        // insert clintid , img in cridet
        DB::insert('insert into cridtes (client_profile_id, img_payments) values (?, ?)', [$data['client_profile_id'],$data['request_img']]);
    }
    //
}
