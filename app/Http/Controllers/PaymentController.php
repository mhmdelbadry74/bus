<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\Credit;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $recordes =Payment::get();
        return view('payments.index',compact('recordes'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $recorde = Payment::select('id','client_profile_id','driver_profile_id','kid_id','request_img')->get()->toArray();
        Subscription::add_subs($recorde[0]);
        Credit::add_credit($recorde[0]);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   


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
        $recorde = Payment::findOrFail($id);
        if($recorde->statue == 'active'){
            $recorde->statue = 'desactive';
            $recorde->save();
        }
        return back();
    }
    public function disactive($id){
        $recorde = Payment::findOrFail($id);
        if($recorde->statue == 'desactive'){
            $recorde->statue ='active';
            $recorde->save();
        }
        return back();
    }
    public function add_sub(Request $request){
        $recorde = Payment::select('client_profile_id','driver_profile_id','kid_id')->get();
    }
    
}
