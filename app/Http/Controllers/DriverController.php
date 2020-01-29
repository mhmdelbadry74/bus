<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriClient;

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
      //  return view('cities.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            
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
        $record = DriClient::findOrFail($id);
        if($record->statue == 1){
            $record->statue = 0;
            $record->save();
        }
        return back();
    }
    public function disactive($id){
        $record = DriClient::findOrFail($id);
        if($record->statue == 0){
            $record->statue = 1;
            $record->save();
        }
        return back();
    }
    
}
