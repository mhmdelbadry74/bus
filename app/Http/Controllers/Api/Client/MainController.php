<?php 
namespace App\Http\Controllers\Api\client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


use Validator;

use App\Models\ClientProfile;
use App\Models\DriClient;
use App\Models\DriveProfile;
use App\Models\Kid;
use App\Models\Car;

class MainController extends Controller{





    public function client_profile(Request $request){
        
        {
            $valditor=Validator()->make($request->all(),[
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'city_id' => 'required',
                'bloode_type_id' => 'required',
                'age' => 'required',
                'home_gps' => 'required' ,
                'driclient_id' =>'required',
                'type' =>'required|in:client'
    
    
            ]);
            if ($valditor->fails()) {
    
                return responsejson(0,"failed",$valditor->errors());
            }         
            $check_id = DriClient::select('api_token')->where('id',$request->driclient_id)->get();
            #$token_of_insert_id = (array_key_exists(0,$check_id)) ? $check_id[0]['api_token'] : null;
            $token_of_insert_id = (count($check_id)>0) ? $check_id[0]['api_token'] : null ;
            $current_token = $request->api_token;
            $tokens = [$token_of_insert_id,$current_token];
            if ($tokens[0] !== $tokens[1]) {
                return response('you are not autolizate ',403)->header('content-type','text/plain');
            }else{
                $check_profile_id = ClientProfile::select('driclient_id')->where('driclient_id',$request->driclient_id)->get();
             //   dd($check_profile_id);
                $profile_exist = (count($check_profile_id)>0) ? true : false ;

                if ($profile_exist) {
                    return response('profile aleady exist ',403)->header('content-type','text/plain');
                }else{
                $profile = ClientProfile::create($request->all());
                if ($request->hasFile('image')) {
                    $logo = $request->image;
                    $logo_new_name = time() . $logo->getClientOriginalName();
                    
                    $logo->move('uploads/post', $logo_new_name);
                    $profile->image = 'uploads/post/' . $logo_new_name;
                    $profile->save();
                    return responsejson(1,'تم الاضافة  بنجاح ' ,$profile );
                }
            }
            }            
        }
    }





    /// drive function to edit profile

    public function drive_profile(Request $request){
        
        {
            $valditor=Validator()->make($request->all(),[
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nidimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'dl' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'city_id' => 'required',
                'bloode_type_id' => 'required',
                'age' => 'required',
                'driclient_id' =>'required',
                'type' =>'required|in:driver'
    
    
            ]);
            if ($valditor->fails()) {
    
                return responsejson(0,"failed",$valditor->errors());
            }
           
            $check_id = DriClient::select('api_token')->where('id',$request->driclient_id)->get();
            #$token_of_insert_id = (array_key_exists(0,$check_id)) ? $check_id[0]['api_token'] : null;
            $token_of_insert_id = (count($check_id)>0) ? $check_id[0]['api_token'] : null ;
            $current_token = $request->api_token;
            $tokens = [$token_of_insert_id,$current_token];
            if ($tokens[0] !== $tokens[1]) {
                return response('you are not autolizate ',403)->header('content-type','text/plain');
            }else{
                $check_profile_id = DriveProfile::select('driclient_id')->where('driclient_id',$request->driclient_id)->get();
             //   dd($check_profile_id);
                $profile_exist = (count($check_profile_id)>0) ? true : false ;

                if ($profile_exist) {
                    return response('profile aleady exist ',403)->header('content-type','text/plain');
                }else{












                    
                    $profile = DriveProfile::create($request->all());
                    
               $arr_img=['dl','nidimg','image'] ; 
               
                    foreach ($arr_img as $key) {
                
                    
                        if ($request->hasFile($key)) {
                            $logo = $request->$key;
                            $logo_new_name = time() . $logo->getClientOriginalName();
                            $logo->move('uploads/post', $logo_new_name);
                            $profile->$key = 'uploads/post/' . $logo_new_name;

                        }
                        
                 
              }
              $profile->save();
              return responsejson(1,'تم الاضافة  بنجاح ' ,$profile );
              
            }
            }            
        }
    }


    //// start function kids 
    public function kid_profile(Request $request){
        
        {
            $valditor=Validator()->make($request->all(),[
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'city_id' => 'required',
                'bloode_type_id' => 'required',
                'age' => 'required',
                'name' => 'required|unique:kids',
                'destination_id' => 'required' ,
                'client_profile_id' =>'required',
                'gender' =>'required|in:male,fmale'
            ]);
            if ($valditor->fails()) {
    
                return responsejson(0,"failed",$valditor->errors());
            }         
            $cccc = ClientProfile::where('id',$request->client_profile_id)->get();
            $bbbb=$cccc->toArray();
            $dir_id = (count($bbbb)>0) ? $bbbb[0]['driclient_id'] : 'null' ;
            $check_entry_id = DriClient::select('api_token')->where('id',$dir_id)->get();
            $current_token = $request->api_token;
            $token_of_insert_id = (count($check_entry_id)>0) ? $check_entry_id[0]['api_token'] : null ;
            $tokens = [$token_of_insert_id,$current_token];

            

            if ($tokens[0] !== $tokens[1]) {
                return response('you are not autolizate ',403)->header('content-type','text/plain');
            }
            else {
                $profile = ClientProfile::create($request->all());
                if ($request->hasFile('image')) {
                    $logo = $request->image;
                    $logo_new_name = time() . $logo->getClientOriginalName();
                    $logo->move('uploads/post', $logo_new_name);
                    $profile->image = 'uploads/post/' . $logo_new_name;
                    $profile->save();
                    return responsejson(1,'تم الاضافة  بنجاح ' ,$profile );
                }
            }
        }}



        // end of Fun 

        public function car_profile(Request $request){
        
            {
                $valditor=Validator()->make($request->all(),[
                    'img1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'img3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'lc' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'car_number' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'price' => 'required',
                    'passenger' => 'required',
                    'modal' => 'required',
                    'type' => 'required',
                    'driver_profile_id' =>'required|unique:cars'
                  
                ]);
                if ($valditor->fails()) {
        
                    return responsejson(0,"failed",$valditor->errors());
                }         
                $cccc = DriveProfile::where('id',$request->driver_profile_id)->get();
                $bbbb=$cccc->toArray();
                $dir_id = (count($bbbb)>0) ? $bbbb[0]['driclient_id'] : 'null' ;
                $check_entry_id = DriClient::select('api_token')->where('id',$dir_id)->get();
                $current_token = $request->api_token;
                $token_of_insert_id = (count($check_entry_id)>0) ? $check_entry_id[0]['api_token'] : null ;
                $tokens = [$token_of_insert_id,$current_token];
    
                
    
                if ($tokens[0] !== $tokens[1]) {
                    return response('you are not autolizate ',403)->header('content-type','text/plain');
                }
                else {
                    $profile = Car::create($request->all());
                    
                    $arr_img=['img1','img2','img3','lc','car_number'] ; 
                    
                         foreach ($arr_img as $key) {
                     
                         
                             if ($request->hasFile($key)) {
                                 $logo = $request->$key;
                                 $logo_new_name = time() . $logo->getClientOriginalName();
                                 $logo->move('uploads/post', $logo_new_name);
                                 $profile->$key = 'uploads/post/' . $logo_new_name;
     
                             }
                             
                      
                   }
                   $profile->save();
                   return responsejson(1,'تم الاضافة  بنجاح ' ,$profile );
                   
                 
                }
            }}


    
}

?> 