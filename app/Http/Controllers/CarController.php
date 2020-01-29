<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminCar;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $recordes =AdminCar::get();
        return view('cars.index',compact('recordes'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');

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
           
         
        ];
        $messages = [
            'name.required' => 'من فضلك ادخل الاسم ',
            
        ];
        $this->validate($request,$rules,$messages);
        $recordes= AdminCar::create($request->all());
        $recordes->save();

        flash()->success("Success");
        return redirect('cars');
            
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
        
        $model = AdminCar::findOrFail($id);
        return view('cars.edit' , compact('model'));
       


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
        //
        $record = AdminCar::findOrFail($id);
        $record->update($request->all());
        flash()->success('Ediet ');
        return redirect('cars');

      

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $record = AdminCar::findOrFail($id);
        $record->delete();
        flash()->success('cars');
        return back();
    }
    
}
