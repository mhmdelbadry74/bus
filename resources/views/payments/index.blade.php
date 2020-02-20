@extends('layouts.app')


@section('content')
<section class="content-header">
  <div class="row">
    <div class="col-12 pa-2">
      <div class="row">
        
        <div class="col-md-6">
          <div class="content-header"> الدفع </div>
      
            
          
          </div>
         
        </div>
      </div>

    </div>
    <section id="extended">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> قائمة الدفع</h4>
            </div>
            <div class="card-content">
              <div class="card-body table-responsive">

        




        <div class="box-body">
      
      
        @include('flash::message')

       @if(count($recordes))
     
        <div class="table-responsive">
        <table class="table table-bordered">
       <thead>
       <tr>
        <th>#</th>
        
        <th>اسم العميل   </th>
        <th> رقم موبايل العميل  </th>
        <th>اسم الطفل   </th>
        <th>اسم السائق  </th>
        <th>اشتراك السائق  </th>
        <th>الوثيقة  </th>
       
       
        <th class="text-center">statue  </th>
        
        <th class="text-center">active   </th>
        <th class="text-center">تاكيد الطلب    </th>
      
     
        
      
        </tr>
       </thead>
       <tbody>
       @foreach($recordes as $recorde)
        <tr>
        
        <td>{{$loop->iteration}} </td>
       
       
        <td>{{optional($recorde->driclients)->name}} </td>
        <td>{{optional($recorde->driclients)->phone}} </td>
        <td>{{optional($recorde->kids)->name}} </td>
        <td>{{optional($recorde->drivers->drclients)->name}} </td>
        <td>{{optional($recorde->drivers->drclients->cars[0])->price}} </td>
        <td> 
          <img src="{{url($recorde->request_img)}}" width="100px">
        </td>
        @if($recorde->statue =='active')
        <td class="text-center">
          تمت المراجعة 
        </td>
        <td class="text-center">
            <a href="activepayments/{{$recorde->id}}">
                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-"></i> تمت المراجعة  </button>
            </a>
        </td>
    @else
        <td class="text-center">
           غير مفعل
        </td>
        <td class="text-center">
            <a href="disactivepayments/{{$recorde->id}}">
                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-"></i>غير مفعل</button>
            </a>
        </td>
        <td>
          {!! Form::open ([
            'action' => ['PaymentController@show',$recorde->id],
                      'method' => 'get',
  
          ])!!}
          <button type="submit" class="btn btn-danger"> <i class="fa fa-trash-o"> </i> </button>
  
          {!! Form::close() !!}

        </td>
    @endif
        </tr>
        @endforeach
       </tbody>
</table>

        
        </div>
       @else 
       <div class="alert alert-success" role="alert">
                          no Data 
                        </div>
       @endif
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@endsection








