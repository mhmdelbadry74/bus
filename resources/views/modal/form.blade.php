
@inject('modal',App\Models\AdminCar)
<?php
 $modals= $modal->pluck('name','id')->toArray();
?>


        <div class="form-group">
          <label for="name"> الاسم   </label>
      {!! Form::text('name',null,[
            'class'=>'form-control'
            ]) !!}
        </div>

        

        <div class="form-group">
          <label for="admin_car_id">  car   </label>
          {!! Form::select('admin_car_id',$modals,null,['class'=>'form-control']) !!}
        </div>
    
    
        <div class="form-group">
        <button class="btn btn-primary" type="submit">حفظ</button>
        </div>
     {!! Form::close() !!}

  
     