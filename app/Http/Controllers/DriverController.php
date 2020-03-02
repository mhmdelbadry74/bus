<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriClient;
use App\Models\DriveProfile;
use DB;
class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $recordes =DriClient::get();
        return view('driver.index',compact('recordes'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('driver.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            
            'name' => 'required',
            'nid' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city_id' => 'required',
            
           
         
        ];
        $messages = [
            'name.required' => 'من فضلك ادخل الاسم ',
            'nid.required' => 'من فضلك ادخل رقم الهوية ',
            'phone.required' => 'من فضلك ادخل رقم الجوال ',
            'email.required' => 'من فضلك ادخل البريد الالكترونى ',
            'city_id.required' => 'من فضلك ادخل الحى المراد التوصيل الية',
            
        ];
        $this->validate($request,$rules,$messages);
        $recordes= DriClient::create($request->all());
        $recordes->api_token=str_random(60);
        $recordes->type = $recordes->type ?? 'driver' ;
        $recordes->statue = $recordes->statue ?? 'desactive' ;
        $recordes->gender = $recordes->gender;
        $recordes->save();
        flash()->success("Success");
        return redirect('driver');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $drive = DriClient::findOrFail($id);
        //dd($records);
        return view('driver.show', compact('drive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $model=Governorate::findOrFail($id);
        
        // return view('governorates.edit',compact('model'));
        
       


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
      

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function active($id){
        $recordes = DriClient::findOrFail($id);
        if($recordes->statue == 1){
            $recordes->statue = 0;
            $recordes->save();
        }
        return back();
    }
    public function disactive($id){
        $recordes = DriClient::findOrFail($id);
        
        if($recordes->statue == 0){
            $recordes->statue = 1;
            DB::update('update driver_profiles set statue = "لم يتم بداء الرحلة بعد" where driclient_id = ?',[$recordes['id']]);
            $recordes->save();
        }
        return back();
    }
    
}
