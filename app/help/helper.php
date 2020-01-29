<?php 

function responsejson($statue,$msg,$data=null){
    $response=[
    'status'=> $statue ,
    'msg'=>$msg,
    'data'=>$data,
    ];
    return response()->json($response);
}


function setting() {
    $setting = \App\Models\Setting::find(1);
    if ($setting) {
        return $setting ;
    }else {
       return new \App\Models\Setting ;
    }
}

?>