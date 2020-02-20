<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $recordes =Destination::get();
        return view('des.index',compact('recordes'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('des.create');

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
            'gps' => 'required',
           
         
        ];
        $messages = [
            'name.required' => 'من فضلك ادخل الاسم ',
            'gps.required' => 'من فضلك ادخل خريطة جوجل	  ',
            
        ];
        $this->validate($request,$rules,$messages);
        $recordes= Destination::create($request->all());
        $recordes->save();

        flash()->success("Success");
        return redirect('des');
            
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
        
        $model = Destination::findOrFail($id);
        return view('des.edit' , compact('model'));
       


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
        $record = Destination::findOrFail($id);
        $record->update($request->all());
        flash()->success('Ediet ');
        return redirect('des');

      

        
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
        $record = Destination::findOrFail($id);
        $record->delete();
        flash()->success('des');
        return back();
    }
    
}
