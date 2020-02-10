<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModal;

class ModalCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $recordes =CarModal::get();
        return view('modal.index',compact('recordes'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modal.create');

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
        $recordes= CarModal::create($request->all());
        $recordes->save();

        flash()->success("Success");
        return redirect('modal');
            
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
        
        $model = CarModal::findOrFail($id);
        return view('modal.edit' , compact('model'));
       


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
        $record = CarModal::findOrFail($id);
        $record->update($request->all());
        flash()->success('Ediet ');
        return redirect('modal');

      

        
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
        $record = CarModal::findOrFail($id);
        $record->delete();
        flash()->success('modal');
        return back();
    }
    
}
