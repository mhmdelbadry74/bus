@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
      payments  
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
 

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">LIST payments  </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>



        




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
            مفعل
        </td>
        <td class="text-center">
            <a href="activepayments/{{$recorde->id}}">
                <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-"></i> مفعل </button>
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








