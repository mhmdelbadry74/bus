<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;


use Twilio\Rest\Client;
use App\Models\DriClient;

class AuthController extends Controller {
    public function register(Request $request){
        $valditor=Validator()->make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:driclients',
            'phone' => 'required|unique:driclients',
            'nid' => 'required',
            'gender' => 'required|in:male,fmale' ,
            'type' => 'required|in:client,driver' ,
           


        ]);
        if ($valditor->fails()) {

            return responsejson(0,"failed",$valditor->errors());
        }
        if ($request->type == 'client') {
            $clients=DriClient::create($request->all());
            $clients->api_token=str_random(60);
            $clients->statue = $clients->statue ?? 'active' ;
            $clients->save();
            return responsejson(1,'تم الاضافة بنجاخ',[
                'api_token' => $clients->api_token,
                'clients' => $clients ,
            ]); 
        }else{
            $clients=DriClient::create($request->all());
            $clients->api_token=str_random(60);
            $clients->statue = $clients->statue ?? 'desactive' ;
            $clients->save();
            return responsejson(1,'تم الاضافة بنجاخ',[
                'api_token' => $clients->api_token,
                'clients' => $clients ,
            ]); 
        }
       
    }

    public function login(Request $request){
        $validator = validator()->make($request->all(), [
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        $client = DriClient::where('phone' , $request->phone)->first();
        if ($client) {
            $client->pin_code_phone=mt_rand(1000, 9999);
            $client->save();
  return responseJson(1, 'مرحبا بك ', [
                
                'client' => $client
            ]);
        }else{
            return response('لا يوجد حساب ',406)->header('content-type','text/plain');
        }
    
    }

    public function code_mobile(Request $request){
        $validator = validator()->make($request->all(), [
            'pin_code_phone' => 'required',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        $client = DriClient::where('pin_code_phone' , $request->pin_code_phone)->first();
        if ($client) {
            return responsejson(1,'تم تسجيل الدخول بنجاح ',[
                'client' => $client ,
            ]);
        }else{
            return response('الرمز غير صالح  ',406)->header('content-type','text/plain');
        }
       
    }


    public function check_token(Request $request){
        $validator = validator()->make($request->all(), [
            'phone' => 'required',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        $client = DriClient::select('api_token','type','id')->where('phone' , $request->phone)->first();
     //   dd($request->api_token);
        if ($client) {
            $client->phone;
            $client->save();
  return responseJson(1, 'مرحبا بك ', [
                
                'client' => $client
            ]);
        }else{
            return response('لا يوجد حساب ',406)->header('content-type','text/plain');
        }
    
    }
}
?>