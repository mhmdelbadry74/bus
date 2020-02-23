
@inject('modal','App\Models\AdminCar')
<?php
 $modals= $modal->pluck('name','id')->toArray();
?>


<div class="row">
  <div class="col-md-12">
    <div class="card">

      <div class="card-content moa ">
        <div class="px-3">
          <form class="form form-horizontal">
            <div class="form-body">
              <h4 class="form-section"><i class="ft-user"></i> البيانات المطلوبه</h4>
        <div class="form-group">
          
           
          <div class="form-group row">
          <label class="col-md-3 label-control" for="name"> الاسم       </label>
          <div class="col-md-9">
      {!! Form::text('name',null,[
            'class'=>'form-control'
            ]) !!}
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="name"> car       </label>
                        <div class="col-md-9">
                          {!! Form::select('admin_car_id',$modals,null,['class'=>'form-control']) !!}

                                      </div>
                                    </div>

        

       
    
    
        <div class="form-group">
        <button class="btn btn-primary" type="submit">حفظ</button>
        </div>
     {!! Form::close() !!}

  
     