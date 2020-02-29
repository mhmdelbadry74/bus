
@inject('modal','App\Models\City')
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
          <label class="col-md-3 label-control" for="name"> اسم المدرسة       </label>
          <div class="col-md-9">
      {!! Form::text('name',null,[
            'class'=>'form-control'
            ]) !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="city_id"> المدينة        </label>
                        <div class="col-md-9">
                          {!! Form::select('city_id',$modals,null,['class'=>'form-control']) !!}

                                      </div>
                                    </div>
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="gps"> خريطة جوجل	       </label>
                        <div class="col-md-9">
                    {!! Form::text('gps',null,[
                          'class'=>'form-control'
                          ]) !!}
                                      </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </div>



       

        
       
       
    
    
                                  <div class="form-actions text-left">
                                    <a type="button" href="{{url(route('driver.index'))}}"class="btn btn-raised btn-warning mr-1">
                                      <i class="ft-x"></i> الغاء
                                    </a>
                                    
                                      <button class="btn btn-raised btn-primary" type="submit">اضافه
                                      <i class="fa fa-check-square-o"></i>                </button>
                                  </div>
     {!! Form::close() !!}

  
     