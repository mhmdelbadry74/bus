<?php 
namespace App\Http\Controllers\Api\Genral;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Models\AdminCar;
use App\Models\BloodType;
use App\Models\CarModal;
use App\Models\DriClient;
Use App\Models\Destination;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class GenralController extends Controller {
    public function city(){
        $city = City::paginate(20);
        return responsejson(1, 'Success', $city);
    }
    public function icity(Request $request){
        $validator = validator()->make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        $city= City::create($request->all());
        return responsejson(1,'تم الاضافة بنجاح',$city);
    }
    public function iblood_type(Request $request){
        $validator = validator()->make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        $city= BloodType::create($request->all());
        return responsejson(1,'تم الاضافة بنجاح',$city);
    }
    public function blood_type(){
        $city = BloodType::paginate(20);
        return  responsejson(1, 'Success', $city);
    }



    public function admin_car(Request $request){
        $admin_car = AdminCar::paginate(20);
        return  responsejson(1, 'Success', $admin_car);

    }

    public function destinion(Request $request){
        $admin_car = Destination::paginate(20);
        return  responsejson(1, 'Success', $admin_car);

    }
    public function destinion_school(Request $request){
        $schools = Destination::get();
        return  responsejson(1, 'Success', $schools);

    }


    public function car_modal(Request $request){
        $car_modal = CarModal::where(function($query) use($request){
            if ($request->has('admin_car_id')) {
            $query->where('admin_car_id',$request->admin_car_id);
            }
          })->get();
       // $car_modal = CarModal::paginate(20);
        return  responsejson(1, 'Success', $car_modal);

    }
    public function check_data(Request $request){
        $validator = validator()->make($request->all(), [
            'email' => 'required|email|unique:driclients',
            'phone' => 'required|unique:driclients',
        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }
        return responsejson(0,'حاول مرة اخرى');
    }
    
}

?>